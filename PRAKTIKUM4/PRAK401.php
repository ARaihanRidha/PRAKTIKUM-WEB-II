<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(!empty($_POST["nilaiPanjang"])){
        $nilaiPanjang = ($_POST["nilaiPanjang"]);
    }
    if(!empty($_POST["nilaiLebar"])){
        $nilaiLebar = ($_POST["nilaiLebar"]);
    }
    if(!empty($_POST["nilai"])){
        $inputMatriks =explode(" ",$_POST["nilai"]);
    }
    
}
function tampilkanInput(){
    global $inputMatriks,$nilaiLebar,$nilaiPanjang;
    echo ("<table border='1'>");
    if (count($inputMatriks)!= $nilaiLebar*$nilaiPanjang) {
        echo("Maaf masukan tidak sesuai");
    }else {
        for ($i=0; $i < $nilaiLebar; $i++) { 
        echo("<tr>");
        for ($j=0; $j <$nilaiPanjang ; $j++) { 
            echo("<td>");
                $index=0;
                echo $inputMatriks[$index];
                $index++;
            ("</td>");
        }
        echo("</tr>");

    }
    }
    echo("</table>");
}
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK401</title>
    <style>
        
        img{
            width: 40px;
        }
        th{
            background-color: gainsboro;
            border: 1px solid black;
            outline: none;
            height: 35px;
        }
        td{
            width: 25px;
            height: 25px;
            border: 1px solid black;
            outline: none;
            text-align: center;  

        }
        table{
            border: 1px solid black;
            outline: none;
            border-collapse: collapse;
        }

        
    </style>
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <span>Panjang : </span><input type="number" name="nilaiPanjang" class="inputNilai" value="<?php echo $nilaiPanjang ?>"><br>
        <span>Lebar : </span><input type="number" name="nilaiLebar" class="inputNilai" value="<?php echo $nilaiLebar ?>" ><br>
        <span>Nilai : </span><input type="text" name="nilai" class="inputNilai" value="<?php echo $_POST["nilai"]?>"><br>
        <input type="submit" name="submit" value="cetak" id="">
    </form>
    
    
    <br>
    <?php tampilkanInput() ?>
  
</body>
</html>
