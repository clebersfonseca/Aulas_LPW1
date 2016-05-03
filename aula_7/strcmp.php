<?php
//$str1 = "abcdef";
$str1 = "xwsdf";
//$str2 = "xywz";
//$str2 = "abcdef";
$str2 = "acdef";

if (strcmp($str1, $str2) == 0){
	echo "$str1 e $str2 são identicas";
} elseif (strcmp($str1, $str2) > 0) {
	echo "$str1 é maior que $str2";
} elseif (strcmp($str1, $str2) < 0) {
	echo "$str1 é menor que $str2";
}
?>