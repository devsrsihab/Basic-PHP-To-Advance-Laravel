<?php


// Question 03: 

// This is an array array(0,10,80,67,60,89,91,56,45,30,95,83,99) 

// Find the maximum value from this array.

// Must use a foreach loop.


//I have also try foreach loop here

$myArrayTwo = [0,10,80,67,60,89,91,56,45,30,95,83,99];
$amount1 = 0;
foreach ($myArrayTwo as $key => $val)
 {
    if ($val > $amount1) {
        $amount1 = $val;
    }
}
echo "Method One " .$amount1 . "<br>";


// i have also try without any loop

$myArray = [0,10,80,67,60,89,91,56,45,30,95,83,99];
foreach ($myArray as $key => $value) {
  
    echo "Method Two ".  max($myArray). "<br>";
    break;
 
 }
 


// I have also try with for loop 

$arrThree = [0,10,80,67,60,89,91,56,45,30,95,83,99];
$amount2 = 0;

for($i=0;$i<count($arrThree);$i++)
 {
    if ($arrThree[$i] > $amount2)
	{
        $amount2 = $arrThree[$i];
    }
  
}

echo "Method Three " . $amount2;

?>