<?php

$firefox=array("John","Mary","Sloan","Geana");
echo $firefox[1];
echo "<br>";
$firefox[2]="Maryann";
echo $firefox[2];
echo "<br>";
$arr=array("Jenna","Esther",55,false,null);
var_dump($arr);

echo "<br>";
//indexed arrays, associative array and multidem arrays
//associative arrays
$age=array("Lucy"=>55,"Michael">=60);
echo "Lucy is ".$age["Lucy"]. " years old";

echo "<br>";
    
//indexed arrays
$fruits=array("watermelon","mango","banana","grapes","kiwi");
var_dump($fruits);
echo "<br>";
echo "$fruits[2]";
echo "<br>";


echo "<br>";
//multidimensional array
//2D multidimensional array
$books=array(
    array("History",22,28),
    array("Mathematics",38,40),
    array("Geography",24,32),
    array("Kiswahili",35,10),
    array("English",55,5),
);
echo $books[0][0].": In stock: ".$books[0][1].", sold: ".$books[0][2].".<br>";
echo $books[1][0].": In stock:".$books[1][1].", sold: ".$books[1][2]."<br>";
echo $books[2][0].": In stock: ".$books[2][1].", sold: ".$books[2][2].".<br>";
echo $books[3][0].": In stock: ".$books[3][1].", sold: ".$books[3][2].".<br>";
echo $books[4][0].": In stock: ".$books[4][1].", sold: ".$books[4][2].".<br>";

echo "<br>";
//3D multidimensional array
$drugs=array(
    array("Panadol extra",10,200,100),
    array("Cataflam",10,100,50),
    array("Panadol advance",15,200,50),
    array("Calpol syrup",150,100,50),
    array("Maramoja",10,300,90),
);
echo $drugs[0][0].": Drug price: ".$drugs[0][1].", Quantity sold:".$drugs[0][2].", Stock remaining:".$drugs[0][3]. "<br>";
echo $drugs[1][0].": Drug price: ".$drugs[1][1].", Quantity sold:".$drugs[1][2].", Stock remaining:".$drugs[1][3]. "<br>";
echo $drugs[2][0].": Drug price: ".$drugs[2][1].", Quantity sold:".$drugs[2][2].", Stock remaining:".$drugs[2][3]. "<br>";
echo $drugs[3][0].": Drug price: ".$drugs[3][1].", Quantity sold:".$drugs[3][2].", Stock remaining:".$drugs[3][3]. "<br>";
echo $drugs[4][0].": Drug price: ".$drugs[4][1].", Quantity sold:".$drugs[4][2].", Stock remaining:".$drugs[4][3]. "<br>";

echo "<br>";

//sorting arrays
//ascending order
$drinks=array("fanta","cocacola","blackcurrant","pepsi","novida");
sort($drinks);
$clength = count($drinks);
for($x = 0; $x < $clength; $x++) {
    echo $drinks[$x];$clength = count($drinks);
        echo $drinks[$x];
        echo "<br>";
    }