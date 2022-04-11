<?php
// Question 01: 

// We have an array [12,34,2,6,78]. What kind of array is this? Find all prime numbers from  this array.

// Step 1: First let us find the factors of the given number( factors are the number that completely divides the given number)

// Step 2: Then check the total number of factors of that number

// Step 3: Hence, If the total number of factors is more than two, it is not a prime number but a composite number. Because When a number is divisible by only one and itself, then it is a prime number.


//formula is begin from here
$myArry = [12,34,2,6,78, 4, 7, 13, 17];

foreach($myArry as $key => $value){
    
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

?>

