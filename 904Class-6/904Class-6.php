<?php

// Question 01:

// You have purchased some items from a supershop. Purchase product array is given below-

// 	$purchased_products = array(

//         		array('name' => 'banana',  'qty' => 10, 'total_price' => 550),

//         		array('name' => 'apple',     'qty' => 50,  'total_price' => 1500),

//         		array('name' => 'orange',  'qty' => 7,    'total_price' => 600),

//     	);

// How much product quantity you have purchased (total purchased qty = 67)

// Calculate the total amount of all purchased items (total amount = 2650 tk).

$purchased_products = [
               ['name' => 'banana',  'qty' => 10, 'total_price' => 550],
               ['name' => 'apple',     'qty' => 50,  'total_price' => 1500],
               ['name' => 'orange',  'qty' => 7,    'total_price' => 600],


                      ];


 echo "<h2>Assignment 1 </h2>"; 
 $qty = array_sum(array_column($purchased_products, 'qty'));
 echo "The Total Quantity is " . $qty;
 echo "<br>";
 $total_prc = array_sum(array_column($purchased_products, 'total_price'));
 echo "The Total Amount is " .  $total_prc;
 echo "<hr>";

// Question 02: 

// You have two array of emails, these are given below-

// $first_email_array = ["abc@gmail.com", "xyz@gmail.com", "demo@gmail.com"]; 

// $second_email_array = ["efg@gmail.com", "xyz@gmail.com", "dummy@gmail.com"];

// You have to make a single array from this two arrays

// And don’t keep any value in multiple time

echo "<h2>Assignment 2 </h2>"; 

$first_email_array = ["abc@gmail.com", "xyz@gmail.com", "demo@gmail.com"]; 

$second_email_array = ["efg@gmail.com", "xyz@gmail.com", "dummy@gmail.com"];

$total_email = array_unique(array_merge($first_email_array, $second_email_array));
echo "<b>The Emails:</b> ";
foreach ($total_email as $key => $value) {
   echo $value . " , ";
}

echo "<hr>"; 


// Question 03:

//$citylist = array( "Black Canyon City", "Chandler", "Flagstaff", "Gilbert", "Glendale", "Globe", "Mesa", "Miami", "Phoenix", "Peoria", "Prescott", "Scottsdale", "Sun City", "Surprise", "Tempe", "Tucson", "Wickenburg" );

// Split this given array into chunks 4
echo "<h2>Assignment 3 </h2>"; 

$citylist = [ "Black Canyon City", "Chandler", "Flagstaff", "Gilbert",
              "Glendale", "Globe", "Mesa", "Miami", "Phoenix", "Peoria", 
              "Prescott", "Scottsdale", "Sun City", "Surprise", "Tempe",
              "Tucson", "Wickenburg" ];
echo "<b>The Chunks 4 of This Array </b>";  
echo "<hr>";           
echo "<pre>";
print_r(array_chunk( $citylist, 4)). "<br>";
echo "<br>";
echo "</pre>";

echo "<hr>"; 
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

?>