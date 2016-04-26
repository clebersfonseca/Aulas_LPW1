<?php
$num = 3;

if ($num % 2==0){
	echo "$num é divisivel por 2<br/>";
}
if ($num % 5==0){
	echo "$num é divisivel por 5<br/>";
}
if ($num % 10==0){
	echo "$num é divisivel por 10<br/>";
}
if (($num%2!=0) && ($num%5!=0) && ($num%10!=0)){
	echo "$num não é divisivel por nenhum deles";
}
?>