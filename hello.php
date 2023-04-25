<?php

$text = "HELLO WORLD<br>";

echo $text;

function addition($num1, $num2) {
    $sum = $num1 + $num2;
    return $sum;
}


$num1 = 5;
$num2 = 10;
$result = addition($num1, $num2);
echo "The sum of $num1 and $num2 is: $result";

?>