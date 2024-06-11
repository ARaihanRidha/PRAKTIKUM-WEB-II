<?php 
$string="";
$j=1;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(!empty($_POST["nilai"])){
        $string = ($_POST["nilai"]);
    }
    
}
function tampilkanInput(){
    global $string;
    $panjangKata=strlen($string);
    for ($i = 0; $i < $panjangKata; $i++) {
        $char = substr($string, $i, 1); 
        echo strtoupper($char);
        echo str_repeat(strtolower($char), $panjangKata - 1);
    }
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK305</title>
    <style>
        
        img{
            width: 40px;
        }
        
    </style>
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <input type="text" name="nilai" class="inputNilai">
        <input type="submit" name="submit" value="submit" id="">
    </form>
    
    
    <br>
    <h2>Input : </h2>
    <p> <?php echo$string ?> </p>
    <h2>Output :</h2> 
    <?php tampilkanInput()?>  
</body>
</html>
