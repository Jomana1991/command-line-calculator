
<?php
Echo "Our exciting calculator\n";

echo "please enter + * - or / \n";
$result = stream_get_line(STDIN, 100, "\n");

echo "please enter the first number in the equation \n";
$result1 = stream_get_line(STDIN, 100, "\n");

echo "please enter the second number in the equation \n";
$result2 = stream_get_line(STDIN, 100, "\n");

/* if ($result == "+") {
   $value = $result1 + $result2;
}
echo $value */ 

if ($result == "/" && $result2 == "0"){
die ("CALCULATION NOT POSSIBLE - NOTHING DIVISIBLE BY ZERO");}

//if ($result !== "/"|| "+" || "*" || "-");{
//die("CALCULATION NOT POSSIBLE - INCORRECT SIGNAGE");}

switch ($result) {
case '+':
$calculation = $result1 + $result2;
    break;

 case '-':
     $calculation = $result1 - $result2;
break;
 case '*':
     $calculation = $result1 * $result2;
break;
 case '/':
     $calculation = $result1 / $result2;
break;

default: 
    $calculation = "ERROR NO CALCULATION POSSIBLE";
}

//if ($result == "/" && $result2 == "0"){
//die ("CALCULATION NOT POSSIBLE");}


echo $calculation;





?>
