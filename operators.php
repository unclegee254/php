<?php
//mathematical operator

$num=45;
$num2=43;

echo $num + $num2;  //addition
echo "<br>";
echo $num - $num2;  //subtraction
echo "<br>";
echo $num / $num2;  //division
echo "<br>";
echo $num * $num2;  //multiplication
echo "<br>";
echo $num % $num2;  //modulus
echo "<br>";

//assignment operator
$num3=56;
$num3+=50;
echo $num3;
echo "<br>";

//comparison operator
$num4=56;
$num5=78;

var_dump(value:$num4== $num5);  //equals
echo"<br>";
var_dump(value:$num4=== $num5);  //identical
echo"<br>";
var_dump(value:$num4!==$num5);  //you can also use <>
echo"<br>";
var_dump(value:$num4>$num5);
echo"<br>";
var_dump(value:$num4<$num5);
echo"<br>";

$num6=77;
$num7=77;
var_dump(value:$num6== $num7);
echo"<br>";
var_dump(value:$num6=== $num7);
echo"<br>";
var_dump(value:$num6!==$num7);
echo"<br>";
var_dump(value:$num6>$num7);
echo"<br>";

//logical operator--and/or
var_dump(value:$num<$num2 and $num3>=$num4);   //and is also &&
echo"<br>";
var_dump(value:$num<$num2 or $num3>=$num4);    //or is also ||

