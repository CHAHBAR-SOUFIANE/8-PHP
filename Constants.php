<?php
// Syntax : define(variableName,Value,Case-Insensitive);
// By Default False => darori constant ytektb kif mamktob
//Case-insensitive Constants Has Been Removed in PHP 8.0
$firstname = "Ahmad";
echo $firstname;
echo "<br>";
define("FIRST_NAME","Ahmad" );
echo FIRST_NAME;//constant
echo "<br>";

//const
const tax = 5;
echo tax;
echo "<br>";

//Constant Arrays
define("cars", [
    "Alfa Romeo",
    "BMW",
    "Toyota"
  ]);
  echo cars[0];