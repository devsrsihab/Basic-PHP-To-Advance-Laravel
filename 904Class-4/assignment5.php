<?php 

// Question 05: 
// You have an array of your purchased product items. 

// ['apple', 'orange', 'banana', 'mango']

// Show all products as a table list.
// Output should like that: “sl- 1 and product - apple”


$frutes = ['apple', 'orange', 'banana', 'mango'];
$key = 1;
foreach ($frutes as $key => $allFruites) {

$key++;
echo " sr = $key And Product - $allFruites <br>";



}

?>