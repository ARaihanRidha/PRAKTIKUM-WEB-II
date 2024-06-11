<?php 
$nilaiAtas=0;
$nilaiBawah=0;
$j=0;
$i=0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(!empty($_POST["nilaiAtas"])){
        $nilaiAtas = ($_POST["nilaiAtas"]);
    }
    if(!empty($_POST["nilaiBawah"])){
        $nilaiBawah = ($_POST["nilaiBawah"]);
    }

}
function tampilkanInput(){
    global $i,$j,$nilaiAtas,$nilaiBawah;
    $currentNumber=$nilaiBawah;
    do {
        if (($currentNumber + 7) % 5 == 0) {
            echo("<img src='star-images-9441.png'>");
        } else {
            echo($currentNumber);
        }
        echo(" ");
        $currentNumber++;
    } while ($currentNumber <= $nilaiAtas);
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK303</title>
    <style>
        .inputNilai{
            margin-left: 5px;
        }
        img{
            width: 20px;
        }
        
    </style>
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <span>Batas Bawah : </span><input type="number" name="nilaiBawah" class="inputNilai" value="<?php echo $nilaiBawah?>"><br>
        <span>Batas Atas : </span><input type="number" name="nilaiAtas" class="link" value="<?php echo $nilaiAtas?>"><br>
        <input type="submit" name="submit" value="Cetak" id="">
    </form>
    
    
    <br>
    <?php tampilkanInput()?>  
</body>
</html>
