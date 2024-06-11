<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAKTIKUM105</title>
    <style>
        table,th,td{
            border:1px solid black;
            width: 300px;
            
        }
        .Judul{
            background-color: red;
            height: 59px;
        }
        b{
            font-size: 23px;
        }

    </style>
</head>
<body>
    <?php
     $listHP = ["SG22"=>"Samsung Galaxy S22","SG22+"=>"Samsung Galaxy S22+","SGA03"=>"Samsung Galaxy A03","SGX"=>"Samsung Galaxy Xcover 5"];
    ?>
     <table>
        <tr class="Judul">
            <td>
                <b>Daftar Smartphone Samsung</b>
            </td>
        </tr>
        <tr>
            <td><?php echo($listHP["SG22"]) ?></td>
        </tr>
        <tr>
            <td><?php echo($listHP["SG22+"]) ?></td>
        </tr>
        <tr>
            <td><?php echo($listHP["SGA03"]) ?></td>
        </tr>
        <tr>
            <td><?php echo($listHP["SGX"]) ?></td>
        </tr>
    </table>
    
</body>
</html>