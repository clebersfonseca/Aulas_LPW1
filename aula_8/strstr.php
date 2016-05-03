<?php
$str_to_search = "Busca por uma string que contenha alguns dados";
$str_to_find = "str";

print("O resultado da busca por $str_to_find: ".strstr($str_to_search, $str_to_find));
echo "<br />";
$str_to_find = "seus";
print("O resultado da busca por $str_to_find: ".strstr($str_to_search, $str_to_find));
?>