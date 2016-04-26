<?php
 function soma($a, $b){
 	$sum = $a + $b;
 	if($sum > 20){
 		print($sum + 8);
 	} else {
 		print($sum - 5);
 	}
 }

 function divisao($a){
 	if ($a % 2 ==0){
 		echo "$a é divisivel por 2";
 	}
 	if ($a % 5 ==0){
 		echo "$a é divisivel por 5";
 	}
 	if ($a % 10 ==0){
 		echo "$a é divisivel por 10";
 	}
 	if ($a % 2 != 0 && $a % 5 != 0 && $a % 10 != 0){
 		echo "$a não é divisivel por nenhum destes";
 	}
 }

 function genero($nome, $idade, $sexo){
 	if (($sexo == "F") && ($idade < 25)){
 		return "$nome, ACEITA";
 	} else {
 		return "$nome, NÃO ACEITA";
 	}
 }

 function triangulo($l1, $l2, $l3){
 	if ($l1 == $l2 and $l2 == $l3 and $l1 == $l3){
 		echo "equilatero";
 	} elseif ($l1 != $l2 and $l2 != $l3 and $l1 != $l3){
 		echo "escaleno";
 	} else {
 		echo "isoceles";
 		
 	}
 }

 function meses($mes){
 	switch($mes){
 		case 1:
 			return "Janeiro";
 		case 2:
 			return "Fevereiro";
 			

 		default:
 			return "Não existe";
 			
 	}
 }

 function algoritmos($num){
 	$total = 1;
 	for ($i = 1; $i <= $num; $i++){
 		print "$i ";
 		$total *= $i;
 	}

 	print "<br />$total";
 }

function tabuada($num){
	for ($i = 0; $i < 11; $i++){
		$res = $i * $num;
		echo "$num * $i = $res<br />";
	}
}





?>