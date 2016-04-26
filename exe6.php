<?php
$num = 2;
$resul = 1;

for ($i=1; $i<=$num;$i++){
	echo "$i<br />";
	$resul *= $i;
}
echo "A multiplicação dos números é $resul";
?>