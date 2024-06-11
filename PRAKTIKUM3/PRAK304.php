<?php 
$jumlahBintang=0;
$j=0;
$i=0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(!empty($_POST["jumlahBintang"])){
        $jumlahBintang = ($_POST["jumlahBintang"]);
    }
    if(!empty($_POST["tambah"])){
        $jumlahBintang++;
    }
    if(!empty($_POST["kurang"])){
        $jumlahBintang--;
        if ($jumlahBintang<0) {
            $jumlahBintang=0;
        }
    }
}


function tampilkanInput(){
    global $i,$j,$jumlahBintang;
    echo("Jumlah Bintang ".$jumlahBintang."<br><br>");
    while ($i<$jumlahBintang) {
        echo("<img src='star-images-9441.png'>");
        $i++;
    }
    echo('<form method="post" action="'.htmlspecialchars($_SERVER["PHP_SELF"]).'">');
    echo('<input type="hidden" name="jumlahBintang" value="'.$jumlahBintang.'">');
    echo('<input type="submit" name="tambah" value="Tambah">');
    echo('<input type="submit" name="kurang" value="Kurang">');
    echo('</form>');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK304</title>
    <style>
        .inputNilai{
            margin-left: 5px;
        }
        img{
            width: 40px;
        }
        
    </style>
</head>
<body>
    <?php 
    if ($jumlahBintang==0):
    ?>



    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <span>Jumlah bintang : </span><input type="number" name="jumlahBintang" class="inputNilai"><br>
        <input type="submit" name="submit" value="submit" id="">
    </form>

    <?php endif;
    if($jumlahBintang!=0){
        tampilkanInput();
    }
    ?>

</body>
</html>
