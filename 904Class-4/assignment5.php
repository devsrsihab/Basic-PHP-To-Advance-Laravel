<?php 

// Question 05: 
// You have an array of your purchased product items. 

// ['apple', 'orange', 'banana', 'mango']

// Show all products as a table list.
// Output should like that: “sl- 1 and product - apple”

//tast start
echo "<h2>This is 5th Assignment </h2>";

$frutes = ['apple', 'orange', 'banana', 'mango'];   //frutes names

foreach ($frutes as $indexNumber => $allFruites) {

$indexNumber++;
echo " sl = $indexNumber And Product - $allFruites <br>";

}

?>