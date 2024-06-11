<?php 
$nama=$nim=$jenisKelamin="";
$namaErr=$nimErr=$jenisKelaminErr="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Isi Nama Terlebih Dahulu";
      } else {
        $nama = ($_POST["name"]);
    }
    if (empty($_POST["nim"])) {
        $nimErr = "NIM tidak boleh kosong";
      } else {
        $nim = ($_POST["nim"]);
    }
    if (empty($_POST["gender"])) {
        $jenisKelaminErr = "jenis kelamin tidak boleh kosong";
      } else {
        $jenisKelamin = ($_POST["gender"]);
    }
}
function tampilkanInput(){
    global $nama,$nim,$jenisKelamin,$namaErr,$nimErr,$jenisKelaminErr;
    if (empty($namaErr) && empty($nimErr) && empty($jenisKelaminErr)) {
        echo($nama."<br>");
        echo($nim."<br>");
        echo($jenisKelamin."<br>");
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK202</title>
    <style>
        .inputNama{
            margin-left: 5px;
        }
        .error{
            color: red;
        }
    </style>
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
        <span>Nama: </span><input type="text" name="name" value="<?php echo $nama; ?>" class="inputNama"><span class="error">*<?php echo($namaErr)?></span><br>
        <span>Nim: </span><input type="text" name="nim" value="<?php echo $nim; ?>" class="inputNama"><span class="error">*<?php echo($nimErr)?></span><br>
        <span>Jenis Kelamin :</span><span class="error">*<?php echo($jenisKelaminErr)?></span> <br>
        <input type="radio" name="gender" value="laki-laki" <?php if ($jenisKelamin == "laki-laki") echo "checked"; ?> >Laki-Laki
        <br>    
        <input type="radio" name="gender" value="Perempuan" <?php if ($jenisKelamin == "Perempuan") echo "checked"; ?> >Perempuan 
        <br>
        <input type="submit" name="submit" value="Submit" id="">
    </form>
    
    
    <br>
    <p><?php tampilkanInput() ?></p>
</body>
</html>
