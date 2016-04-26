<?php
$lad1 = 3;
$lad2 = 3;
$lad3 = 3;

if (($lad1 == $lad2) && ($lad1 == $lad3) && ($lad2 == $lad3)){
	echo "Triangulo equilatero";
}
if ((($lad1 == $lad2) && ($lad3 != $lad1))
	|| (($lad1 == $lad3) && ($lad2 != $lad1))
	|| (($lad2 == $lad3) && ($lad1 != $lad2))) {
	echo "Triangulo isóceles";
}
if (($lad1 != $lad2) && ($lad1 != $lad3) && ($lad2 != $lad3)){
	echo "Triangulo escaleno";
}
?>