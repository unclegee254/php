<?php
//user defined function
function myclass(){
    echo "My class is Pharmacology and Clinical Pharmacy.";
    echo "<br>";
    echo "I practice at the Aga Khan University Hospital and as a consultant for various hospitals.";
    echo "<br>";
    echo "I teach Pharmacology and Clinical Pharmacy at Kenyatta University and Mount Kenya University.";
    echo "<br>";
    echo "My interest is the in the area of approaches to enhance the outcomes of medication therapy.";

}
myclass();

echo "<br>";

//functions with arguements
function Units($unitcode,$unitname,$unitlecturer){
    echo "The unit code is $unitcode, the unit name is $unitname and the lecturer is Dr. $unitlecturer. <br>";

}
Units("PPB 300","Pharmacology","Mang'eni");
Units("PPC 500","Pharmaceutical Chemistry","Baraka");
Units("PPF 400", "Clinical Pharmacy","Mang'eni");
