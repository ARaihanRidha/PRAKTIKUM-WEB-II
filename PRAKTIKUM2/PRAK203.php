<?php 
$nilai=0;
$hasil=0;
$simbolSatuan="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(!empty($_POST["nilai"])){
        $nilai = ($_POST["nilai"]);
        $valueAwal=($_POST["valueAwal"]);
        $valueTujuan=($_POST["valueTujuan"]);
    }
    switch ($valueAwal) {
        case "Celsius":
            switch ($valueTujuan) {
                case "Fahrenheit2":
                    $hasil = ($nilai * 9/5) + 32;
                    $simbolSatuan="F";
                    break;
                case "Rheamur2":
                    $hasil = $nilai * 4/5;
                    $simbolSatuan="R";
                    break;
                case "Kelvin2":
                    $hasil = $nilai + 273.15;
                    $simbolSatuan="K";
                    break;
                default:
                    $hasil = $nilai;
                    break;
            }
            break;
        case "Fahrenheit":
            switch ($valueTujuan) {
                case 'Celsius2':
                    $hasil = ($nilai * 5/9) - 32;
                    $simbolSatuan="C";
                    break;
                case 'Rheamur2':
                    $hasil = ($nilai -32) * 4/9;
                    $simbolSatuan="R";
                    break;
                
                case 'Kelvin2':
                    $hasil=5/9*($nilai-32)+273.15;
                    $simbolSatuan="K";
                    break;
            }
            break;
        case "Rheamur":
            switch ($valueTujuan) {
                case 'Celsius2':
                    $hasil=5/4*($nilai);
                    $simbolSatuan="R";
                break;
                case 'Fahrenheit2':
                    $hasil=(9/4*$nilai)+32;
                    $simbolSatuan="F";
                break;
                case 'Kelvin2':
                    $hasil=(5/4*$nilai)+273.15;
                    $simbolSatuan="K";
                break;
            break;
            }
            
        case "Kelvin":
            switch ($valueTujuan) {
                case 'Celsius2':
                    $hasil=$nilai-273.15;
                    $simbolSatuan="C";
                    break;
                case 'Fahrenheit2':
                    $hasil=9/5*($nilai-273.15)+32;
                    $simbolSatuan="F";
                    break;
                case 'Rheamur2':
                    $hasil=4/5*($nilai-273.15);
                    $simbolSatuan="R";
                    break;
            }
            break;
    }
}

function tampilkanInput(){
    global $hasil, $simbolSatuan;
    echo($hasil." &deg;".$simbolSatuan);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK203</title>
    <style>
        .inputNilai{
            margin-left: 5px;
        }
        .error{
            color: red;
        }
    </style>
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <span>Output yang diinginkan :</span> <br>
        <span>Nilai : </span><input type="number" name="nilai" class="inputNilai"><br>
        <span>Dari : <br>
        <input type="radio" name="valueAwal" value="Celsius">Celsius
        <br>    
        <input type="radio" name="valueAwal" value="Fahrenheit">Fahrenheit 
        <br>
        <input type="radio" name="valueAwal" value="Rheamur">Rheamur
        <br>
        <input type="radio" name="valueAwal" value="Kelvin">Kelvin
        <br>
        <span>Ke :</span>
        <br>
        <input type="radio" name="valueTujuan" value="Celsius2">Celsius 
        <br>
        <input type="radio" name="valueTujuan" value="Fahrenheit2">Fahrenheit
        <br>
        <input type="radio" name="valueTujuan" value="Rheamur2">Rheamur 
        <br>
        <input type="radio" name="valueTujuan" value="Kelvin2">Kelvin
        <br>
        <input type="submit" name="submit" value="Konversi" id="">
    </form>
    
    
    <br>
    <h2>Hasil Konversi :  <?php tampilkanInput() ?></h2>
</body>
</html>
