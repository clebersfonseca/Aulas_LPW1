<?php
$str_maiu = "TEXTO TODO EM MAIUSCULAS";
$str_minu = "texto todo em minusculas";
$str_mist = "teXTo TOdo misTurAdo";

print(strtolower($str_maiu));
echo "<br />";
print(strtoupper($str_minu));
echo "<br />";
print(ucfirst($str_mist));
echo "<br />";
print(ucwords($str_mist));
?>