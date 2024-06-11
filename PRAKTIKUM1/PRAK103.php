<?php
$celsius = 37.841;
$Fahrenheit = 9/5 * $celsius +32;
$Reamur = 4/5 * $celsius;
$Kelvin=number_format($celsius+273.15,3);
echo("Fahrenheit (F) = ".$Fahrenheit);
echo("<br>");
echo("Reamur (R) = ".$Reamur);
echo("<br>");
echo("Kelvin (K) = ".$Kelvin);
?>