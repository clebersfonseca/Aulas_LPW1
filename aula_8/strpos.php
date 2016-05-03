<?php
$string = "Essa é uma string para ser usada nos exemplos.";

print("A localização de 'm' é ".strpos($string, 'm'));
echo "<br />";
print("A localização de 'para' é ".strpos($string, 'para'));
echo "<br />";
print("A localização de 'm' no reverso é ".strrpos($string, 'm'));
?>