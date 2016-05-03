<?php
$alfabeto_test = "abcdefghijklmnopqrstuvwxyz";

print("3 : ".substr($alfabeto_test, 3)."<br />");
print("-3 : ".substr($alfabeto_test, -3)."<br />");
print("3, 5 : ".substr($alfabeto_test, 3, 5)."<br />");
print("3, -5 : ".substr($alfabeto_test, 3, -5)."<br />");
print("-3, -5 : ".substr($alfabeto_test, -3, -5)."<br />");
print("-3, 5 : ".substr($alfabeto_test, -3, 5)."<br />");
?>