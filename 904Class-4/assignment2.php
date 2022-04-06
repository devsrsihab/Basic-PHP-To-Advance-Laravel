<?php 

//Question 02: 

//If we print 1-100, our output will be 100 times. But this time you have print out only the odd (বিজোড়) number within 1-100.

//You have to rotate from 1 to 100.

//Your output message should like that, “3 is a odd number”

//Not need to print even number



//tast start

echo   "<h2>This is 2nd Assignment </h2>";
for ($n=0; $n <= 100; $n++) { 

   if ($n % 2 !== 0) {

     echo "$n is A ODD Number <br>";

   };

};

//tast end


// i have also made it with while loop
// $n = 0;
// while ($n <= 100) {
//   # code...
// if ($n%2!==0) {
//   echo "$n is A Odd Number <br>";
// }

//   $n++;
// }


// i have also made it with do while loop
// $n = 0;
// do {
//   if ($n%2!==0) {
//       echo "$n is A Odd Number <br>";
//     }
//   $n++;
// } while ($n <= 100);

?>