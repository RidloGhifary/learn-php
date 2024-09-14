<?php

$first_name = "Ridlo";
$last_name = "Ghifary";

echo "$first_name $last_name". PHP_EOL;

// variable variables

$name = "Ridlo";
$$name = "Handsome";

echo "name : $name" . PHP_EOL;
echo $Ridlo . PHP_EOL;

// constant variable
// as a default variable in php can be change because its a muttable
// if i wanna define a immutable(cannot be changed) varibale, i can do the following
// best practice to do this is using uppercase

define("AUTHOR", "ridlo achmad ghifary", true);
define("AGE", 19);

echo AUTHOR . " " . AGE . " years old";

// data null

$name = null;

echo $name . PHP_EOL;

// check whather varibale / data is null

$null_variable = "change to null";
$null_variable = NULL;

$is_variable_null = is_null($null_variable);
var_dump($is_variable_null);

// deleting variable

$value = "Ridlo";
unset($value);

// checking existing variable using is_null can be break the code is deleting variable using unset
// so the best practice is to use isset built in function

var_dump(isset($value));

$value = "Ridlo";
var_dump(isset($value));