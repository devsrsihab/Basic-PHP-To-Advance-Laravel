<?php
//============================
// Question 01: 
//============================
// We have an array [12,34,2,6,78]. What kind of array is this? Find all prime numbers from  this array.

// Step 1: First let us find the factors of the given number( factors are the number that completely divides the given number)

// Step 2: Then check the total number of factors of that number

// Step 3: Hence, If the total number of factors is more than two, it is not a prime number but a composite number. Because When a number is divisible by only one and itself, then it is a prime number.


//formula is begin from here
echo "<h2>Assignment 1. </h2>";
//array value
$myArry =[12,34,2,6,78];

//foreach start
foreach($myArry as $key => $value){
    
        //initialize the $value in $num
        $num = $value; 
        $n = 0;

    for($i = 2; $i < $num; $i++) {
        if($num % $i == 0){
            $n++;
            break;
     }
    }
    if ($n == 0 ){
    echo $num." prime number. <br/>";  
    }else{
     continue;
        
    }
    
}
//foreach end
echo "<hr>";

//============================
// Question 02: 
//============================
// 	Let’s think about a use case, Daraz admin’s have some products for uploads on their e-commerce site. So make an array of products which contains 5 products.

// Go to daraz website and pick any 5 products and make your array.

// Must mention Which type of array you have made.

echo "<h2>Assignment 1</h2>";
$mobiles = [

            ['realme 91','8GB','18GB','18,774'],
            ['realme 92','4GB','64GB','10,919'],
            ['realme 93','4GB','64GB','12,000'],
            ['realme 94','6GB','64GB','14,739'],
            ['realme 95','2GB','32GB','9,279']
      
]; //Multidimensional array 

echo" Brand Name: "." ".  $mobiles[0][0]. " RAM: ".$mobiles[0][1]. " ROM: ". $mobiles[0][2]. " Price: ". $mobiles[0][3]. "<br>";
echo" Brand Name: "." ".  $mobiles[1][0]. " RAM: ".$mobiles[1][1]. " ROM: ". $mobiles[1][2]. " Price: ". $mobiles[1][3]. "<br>";
echo" Brand Name: "." ".  $mobiles[2][0]. " RAM: ".$mobiles[2][1]. " ROM: ". $mobiles[2][2]. " Price: ". $mobiles[2][3]. "<br>";
echo" Brand Name: "." ".  $mobiles[3][0]. " RAM: ".$mobiles[3][1]. " ROM: ". $mobiles[3][2]. " Price: ". $mobiles[3][3]. "<br>";
echo" Brand Name: "." ".  $mobiles[4][0]. " RAM: ".$mobiles[4][1]. " ROM: ". $mobiles[4][2]. " Price: ". $mobiles[4][3]. "<br>";

echo "<hr>";


//============================
// Question 03: 
//============================
// This is an array array(0,10,80,67,60,89,91,56,45,30,95,83,99) 

// Find the maximum value from this array.

// Must use a foreach loop.


//I have also try foreach loop here
echo "<h2>Assignment 3</h2>";

$myArrayTwo = [0,10,80,67,60,89,91,56,45,30,95,83,99];
$amount1 = 0;
foreach ($myArrayTwo as $key => $val)
 {
    if ($val > $amount1) {
        $amount1 = $val;
    }
}
echo "HIghest Value is " .$amount1 . "<br>";


// i have also try without any loop
// $myArray = [0,10,80,67,60,89,91,56,45,30,95,83,99];
// foreach ($myArray as $key => $value) {
  
//     echo "HIghest Value is ".  max($myArray). "<br>";
//     break;
 
//  }
 
// I have also try with for loop 
// $arrThree = [0,10,80,67,60,89,91,56,45,30,95,83,99];
// $amount2 = 0;

// for($i=0;$i<count($arrThree);$i++)
//  {
//     if ($arrThree[$i] > $amount2)
// 	{
//         $amount2 = $arrThree[$i];
//     }
  
// }

// echo "HIghest Value is " . $amount2;

echo "<hr>";

//============================
// Question 04: 
//============================
// Let’s traverse this array(0,10,80,67,60,89,91,56,45,30,95,83,99) and print 0 index then skip 1 index again print 2 skip 3….

echo "<h2>Assignment 4 </h2>";

$srTrav = [0,10,80,67,60,89,91,56,45,30,95,83,99];

foreach ($srTrav as $index => $val) {
   

    if ($index%2 !==0) {

        continue;
    }
    echo $val . "<br>";
}
  echo "<hr>";
  echo "<br>";
  echo "<br>";
  echo "<br>";
  echo "<br>";
  echo "<br>";
?>

