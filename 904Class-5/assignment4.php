<?php

// Question 04: 

// Let’s traverse this array(0,10,80,67,60,89,91,56,45,30,95,83,99) and print 0 index then skip 1 index again print 2 skip 3….

$srTrav = [0,10,80,67,60,89,91,56,45,30,95,83,99];

foreach ($srTrav as $index => $val) {
   

    if ($index%2 !==0) {

        continue;
    }
    echo $val . "<br>";
}

?>