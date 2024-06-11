<?php 
$dataMahasiswa=array(
    array(
        "nama"=>"Andi",
        "nim"=>"2101001",
        "nilaiUTS"=>87,
        "nilaiUAS"=>65,
        
    ),
    array(
        "nama"=>"Budi",
        "nim"=>"2101002",
        "nilaiUTS"=>76,
        "nilaiUAS"=>79
    ),
    array(
        "nama"=>"Tono",
        "nim"=>"2101003",
        "nilaiUTS"=>50,
        "nilaiUAS"=>41
    ),
    array(
        "nama"=>"Jessica",
        "nim"=>"2101004",
        "nilaiUTS"=>60,
        "nilaiUAS"=>75
    )
);
function nilaiAkhir($mahasiswa){
    global $dataMahasiswa;
    $nilaiUAS=(40/100*$mahasiswa["nilaiUTS"]) + (60/100*$mahasiswa["nilaiUAS"]);
    return $nilaiUAS;
    
}
function huruf($nilai){
    if ($nilai >= 80) {
        return "A";
    } elseif ($nilai >= 70 && $nilai<=79) {
        return "B";
    } elseif ($nilai >= 60 && $nilai<=69) {
        return "C";
    } elseif ($nilai >= 50 && $nilai<=59) {
        return "D";
    } elseif ($nilai<50) {
        return "E";
    } 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK402</title>
    <style>
        th{
            background-color: gainsboro;
            border: 1px solid black;
            outline: none;
            height: 35px;
        }
        td{
            width: 100px;
            border: 1px solid black;
            outline: none;
            padding-left: 6px;

        }
        table{
            border: 1px solid black;
            outline: none;
            border-collapse: collapse;
        }
        
    </style>
</head>
<body>
    <table>
        <th>
                Nama
        </th>
        <th>
                Nim
        </th>
        <th>
            Nilai UTS
        </th>
        <th>
            Nilai UAS
        </th>
        <th>
            Nilai Akhir
        </th>
        <th>
            Huruf
        </th>
        <?php foreach ($dataMahasiswa as $mhs): ?>
            <tr>
            <td>
               <p> <?php echo $mhs['nama'] ?> </p>
            </td>
            <td>
                <?php echo $mhs['nim'] ?>
            </td>
            <td>
                <?php echo $mhs['nilaiUTS'] ?>
            </td>
            <td>
                <?php echo $mhs['nilaiUAS'] ?>
            </td>
            <td>
                <?php echo nilaiAkhir($mhs)?>
            </td>
            <td>
                <?php echo huruf(nilaiAkhir($mhs))?>
            </td>

        </tr>
      <?php endforeach; ?>

    </table>
    
    
    <br>

</body>
</html>
