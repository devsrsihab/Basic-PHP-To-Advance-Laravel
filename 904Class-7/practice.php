<?php

// More Array functions

// array_rand(from_which_array, how_many_element) - pick random keys

// shuffle(which_array) - randomize order of array elements

// array_chunk(which_array, how_many_element, keys_sequence) - Split an array into chunks

// asort(which_array, sort_rule) - sort ascending order, arsort(which_array, sort_rule) - sort descending order,

// ksort(which_array, sort_rule) - sort keys by ascending order, krsort() - sort keys by descending order

// implode(separator_symble, which_array) - Join array elements with a string (array to string)

// explode(separator_symble, which_string, element_limit) - String to array

// Write php code on html

// Project based on array

// Mini Project - Product List (table/E-commerce)

//======================================
// array_rand(from_which_array, how_many_element) - pick random keys
//  $my_batch = ["labib", "nurul", "sohan", "sakil", "mahmudul"];

//  $my_result = array_rand($my_batch,4 );
// //  echo "<pre>";
// //  print_r($my_result);
// //  echo "</pre>";
 
//  echo $my_batch[$my_result[0]] . "<br>";
//  echo $my_batch[$my_result[1]] . "<br>";
//  echo $my_batch[$my_result[2]] . "<br>";
//  echo $my_batch[$my_result[3]] . "<br>";
//  echo $my_batch[$my_result[4]] . "<br>";



//======================================
// shuffle(which_array) - randomize order of array elements

// $my_batch = ["labib", "nurul", "sohan", "sakil", "mahmudul"];

// shuffle($my_batch);
// echo "<pre>";
// print_r($my_batch) ;
// echo "</pre>";

//Note: array shuffle don't  make a new array. it's make change existing array


//======================================
// array_chunk(which_array, how_many_element, keys_sequence) - Split an array into chunks

// $my_batch = ["labib", "nurul", "sohan", "sakil", "mahmudul", "nahar"];


// $result= array_chunk($my_batch, 2, false);
// echo "<pre>";
// print_r($result) ;
// echo "</pre>";

//Note: array chunk make a new array



//======================================
// asort(which_array, sort_rule) - sort ascending order, arsort(which_array, sort_rule) - sort descending order,
// sort (use for indexing array)
// rsort (use for reverse)
// arsort (use for associative array reverse)
// asort (use for associative array)
// krsort ( index or key reverse sorting)
// ksort (index or key sorting)
// natcasesort (img1, Img 2, this type value sorting)
// natsort (img1, img2 this type value sorting)
// array_mutisort (sorting multi array if value index number same)
// array_reverse ( reverse the array and make new array)



// $my_batch = ["Img1.png", "Img12.png", "img22.png", "img44.png", "img10.png", "img11.png"];
// $fruies =  ["banana", "mango", "sola", "shak", "litchi", "jamboo"];
// $fruies2 = ["boombai", "piyaj", "roshun", "dhan", "gash", "jolab", "sohan"];
// $my_num = [12, 53, 54, 55, 56, 57, 58, 59, 60, 66, 98];
// $my_aa = ["a" => "sohan", "b" => "rakib", "c" => "mushi", "d" => "noushi"];

// $result = array_reverse($fruies);

// echo "<pre>";
// print_r($result) ;
// echo "</pre>";



// Note: just array_reverse() make deferent array , otherwise no one don't make separate array in sorting



// mplode(separator_symble, which_array) - Join array elements with a string (array to string)

// explode(separator_symble, which_string, element_limit) - String to array




// $srt =[ "my", "name", "is.",  "sohanur", "rohman"];
// $sr_arr = implode(' - ', $srt);

// $srt = "my name is sohan";
// $sr_arr = explode(' ', $srt);
// echo "<pre>";
// print_r($sr_arr) ;
// echo "</pre>";

// Note: implode convert array to string and  explod() convert sting  to array 

// $srt = "tonmoy is a very bad body";
// $array = ["tonmoy", "is", "Good", "Boy"];
// $converter = explode(" ", $srt, 3);
// $converter2 = implode(" ", $array);

// echo "<pre>";
// print_r($converter2) ;
// echo "</pre>";




//=========================================













?>