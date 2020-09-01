<?php
$number1 = 0;
$number2 = 0;

if (isset($_GET['a'])) {
    $number1 = $_GET['a'];
}
if (isset($_GET['b'])) {
    $number2 = $_GET['b'];
}

echo 'The sum is '.($number1+$number2);
