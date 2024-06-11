<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST["name1"])) {
        $nama1=($_POST["name1"]);
    }
    if (!empty($_POST["name2"])) {
        $nama2=($_POST["name2"]);
    }
    if (!empty($_POST["name3"])) {
        $nama3=($_POST["name3"]);
    }
}
function urutkanNama(){
    global $nama1,$nama2,$nama3;
    if ($nama1 < $nama2 && $nama1 < $nama3) {
        if ($nama2 < $nama3) {
            echo "$nama1 <br> $nama2 <br> $nama3";
        }else {
            echo "$nama1 <br> $nama3 <br> $nama2";
            
        }
    }elseif ($nama2 < $nama1 && $nama2 < $nama3) {
        if ($nama1 < $nama3) {
            echo "$nama2 <br> $nama1 <br> $nama3";
        }else {
            echo "$nama2 <br> $nama3 <br> $nama1";
            
        }
    }else {
        if ($nama1 < $nama2) {
            echo "$nama3 <br> $nama1 <br> $nama2";
        }else {
            echo "$nama3 <br> $nama2 <br> $nama1";
            
        }   
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK201</title>
    <style> 
        .inputNama{
            margin-left: 5px;
        }
    </style>
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
        <span>Nama : 1</span><input type="text" name="name1"  class="inputNama"><br>
        <span>Nama : 2</span><input type="text" name="name2"  class="inputNama"><br>
        <span>Nama : 3</span><input type="text" name="name3"  class="inputNama"><br>
        <input type="submit" name="submit" value="urutkan" id="">
    </form>
    <br>
    <p><?php urutkanNama()?></p>
</body>
</html>
