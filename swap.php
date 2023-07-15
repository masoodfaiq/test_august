<?php
// Program to swap two numbers without using 3rd variable
$a = 10;
$b = 20;

// Swap Logic
$a = $a + $b;
$b = $a - $b;
$a = $a - $b;

echo 'a= ' . $a;
echo 'b= ' . $b;

?>