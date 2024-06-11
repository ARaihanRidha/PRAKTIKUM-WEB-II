<?php
// NIM Akhiran 01 = Tabung
$JariJari = 4.2;
$Tinggi = 5.4;
$panjang= 8.9;
$lebar = 14.7;
$Sisi = 7.9;
$Tabung =round( pi() * sqrt($JariJari) * $Tinggi,3) ;
echo($Tabung."m3");
?>