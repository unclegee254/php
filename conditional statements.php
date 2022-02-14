<?php
//If statement
$marks=69;
if($marks<70){
    echo "Below average";
}
echo "<br>";

//if..else statements
$marks2=56;
if ($marks2<=55){
    echo "You have failed";
}else{
    echo "You passed";
}
echo "<br>";

//if else if else statements
$grade=77;

if($grade<=39 and $grade>=0){
    echo "Fail";
}elseif ($grade>=40 and $grade<=50){
    echo "Pass";
}elseif ($grade>=51 and $grade<=69){
    echo "Credit";
}elseif ($grade>=70 and $grade<=100){
    echo "Distinction";
}else{
    echo "Please input valid mark";
}
echo "<br>";
echo "<br>";

$player1="paper";
$player2="rock";
if($player1="rock" and $player2="paper"){
    echo "You lose; paper covers rock";
}
elseif ($player1="scissors" and $player2="paper"){
    echo "You win; scissors cut paper";
}
elseif ($player1="paper" and $player2="rock"){
    echo "You win; paper covers rock";
}
elseif ($player1="scissors" and $player2="rock"){
    echo "You lose; rock crushes scissors";
}
elseif ($player1=$player2){
    echo "Please repeat round";
}else{
    echo "Please input valid entry";
}