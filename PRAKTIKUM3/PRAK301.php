<?php 
$nilai=0;
$i=0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(!empty($_POST["nilai"])){
        $nilai = ($_POST["nilai"]);
    }
    
}

function tampilkanInput(){
    global $i, $nilai;
    while ($i<$nilai) {
        $urutan= $i + 1;
        $kelas = $i % 2 == 0 ? "merah" : "hijau";
        echo "<h2 class='$kelas'>Peserta ke-$urutan</h2>";
        $i++;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK301</title>
    <style>
        .inputNilai{
            margin-left: 5px;
        }
        .error{
            color: red;
        }
        .merah{
            color: red;
        }
        .hijau{
            color: green;
        }
    </style>
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <span>Jumlah Peserta : </span><input type="number" name="nilai" class="inputNilai" value="<?php echo $nilai?>"><br>
        <input type="submit" name="submit" value="Cetak" id="">
    </form>
    
    
    <br>
    <?php tampilkanInput()?>  
</body>
</html>
