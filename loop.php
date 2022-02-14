<?php
$num1=6;  //starter or initialize counter

while ($num1<=15){
    echo "Nambari ni : $num1 <br>";
    $num1++;     //increases value counter by 1 or $num1+=2
}

echo "<br>";

//do while loop
$num2=15;
do{
    echo "Nambari ni: $num2 <br>";
    $num2++;
}while($num2<=14);

echo "<br>";

//for loop
//initialize counter, test counter, increment or decrement counter
for ($num3=25; $num3<=50; $num3+=5){
    echo "Nambari ni $num3 <br>";
}

echo "<br>";

//decrements
$num4=5;
while ($num4>=10){
    echo "Number is :$num4 <br>";
    $num4-=5;
}


echo "<br>";

echo "Decrements";

echo "<br>";


$num5=20;
do{
    echo "Number is : $num5 <br>";
    $num5-=2;
}while($num5>=10 and $num5<20);

echo "<br>";
for ($num6=70; $num6>=30; $num6-=5){
    echo "Number is $num6 <br>";
}