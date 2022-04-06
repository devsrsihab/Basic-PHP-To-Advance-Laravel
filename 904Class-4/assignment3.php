<?php 


// Question 03: 

// Factorial - I think everyone knows the word. Factorial of 4 is given below:
// 4! = 4*3*2*1 = 24
// 6! = 6*5*4*3*2*1 = 720
// So let’s calculate the factorial of 7.


//tast starts 
echo "<h2>This is 3rd Assignment</h2>" ;
$fac_number = 7;   //factorial number
$fac_end = 1;      //Factorial end point

for ($fac=$fac_number; $fac>=1; $fac--){  
 
$fac_end  *=  $fac;  

echo "Factorial of $fac_number! =  6*5*4*3*2*1 = $fac_end <br> ";}  
//tast end 



?>