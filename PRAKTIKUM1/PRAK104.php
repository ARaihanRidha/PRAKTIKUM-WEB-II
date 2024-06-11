<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAKTIKUM04</title>
    <style>
        table,th,td{
            border:1px solid black;
        }
    </style>
</head>
<body>
    <?php 
    $listHP = ["Samsung Galaxy S22","Samsung Galaxy S22+","Samsung Galaxy A03","Samsung Galaxy Xcover 5"];
    ?>
    <table>
        <tr>
            <td>
                <b>Daftar Smartphone Samsung</b>
            </td>
        </tr>
        <tr>
            <td><?php echo($listHP[0]) ?></td>
        </tr>
        <tr>
            <td><?php echo($listHP[1]) ?></td>
        </tr>
        <tr>
            <td><?php echo($listHP[2]) ?></td>
        </tr>
        <tr>
            <td><?php echo($listHP[3]) ?></td>
        </tr>
    </table>
</body>
</html>
