<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>
    <?= "DIRECT PHP" ?>
  </h1>
  <?php
    $my_name = "INSIDE HTML";
    echo("<p>" . $my_name . "</p>");
  ?>
</body>
</html>

<?php
//Above HTML + PHP (shorthand)

// Echo and print
echo("Hello" . "<br>");
print("Print". "<br>");

//Variables
//assignemnt by value
$firstname = "Varun";
echo("NAME" . " " . $firstname . "<br>");

//assignment by reference
$x = 3;
$y = &$x;
$x = 5;
echo("Y is: {$y}" . "<br>");

//Constants
define("MY_CONST", 5); //pre defined before execution
echo("Constant: " . MY_CONST . "<br>");
const ANOTHER_CONST = 16; // run time
echo("Another Constant: " . ANOTHER_CONST . "<br>");
echo("Magic Constant: " . __LINE__ . "<br>"); //magic constants

//Variable Variable
$foo = "bar";
$$foo = "baz"; // vv
// $foo = bar; $bar = baz;
echo("Variable Variable: " . $$foo . "<br>");

//Type and Type Casting
# 4 Scalar types
$completed = true;
$score = 75;
$price = 6.8;
$name = "Varun";
var_dump($name);
var_dump($score);

# compund types
$companies_array = [1, 2, 3];
var_export($companies_array);
echo("<br>");

//type hinting
// declare(strict_types = 1); - for strict typing

function sum($x, $y){
  echo("<br>");
  return $x + $y;
}
echo(sum(4,5));
echo(sum(4,'5')); //type coersion or juggling - context based conversion
