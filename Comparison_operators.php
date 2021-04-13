<?php
// [==] Equals
// [!=] Not Equals
// [<>] Not Equals
// [===] Identical => have the same value and data type
// [!==] Not Identical

$num1 = 23;
$num2 = "23";
$num3 = 23;
echo gettype($num1);echo "<br>";
echo gettype($num2);echo "<br>";
if ($num1 == $num2) {
    echo "num1 and num2 have the same Value";echo "<br>";
}
if ($num1 !== $num2) {
    echo "num1 and num2 haven't the same Value and the same Data type";echo "<br>";
}










