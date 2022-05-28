<?php
//overview all str function
// Strlen(), Str_word_count(), Strpos(), Substr(), str_split(), Str_replace()
// Strtoupper(), Strtolower(), Str_shuffle(), md5(), money_format(), number_format()
// htmlspecialchars(), strip_tags(), trim()
//=======================
//substr
// $name = "sohan is a good boy";
// echo substr($name, 6, 5);
//=======================
//strlen
// $name = "sohan is a good boy";
// echo strlen($name);
//=======================
//str_word_count()
// $name = "sohan is a good boy";
// echo str_word_count($name);
//=======================
//strpos
// $name = "sohan is a good boy";
// echo strpos($name, 'is');
//=======================
//str_split
// $name = "sohan is a good boy";
// echo "<pre>";
// print_r (str_split($name, 3));
// echo "</pre>";
//=======================
// chunk_split()
// $name = "sohan is a good boy";
// echo "<pre>";
// $new_array= chunk_split($name, 3, ' ,  ' );
// echo $new_array . "<br>";
// echo gettype($new_array);
// echo "</pre>";
//=======================
// str_replace();
// $name = "sohan and asik  is a good boy";
// $find = ['sohan', 'ASIK'];
// $replace = ['aman', 'mohan'];
// echo str_ireplace($find,$replace, $name)
//=======================
// strtoupper(), strtolower, lcfirst(), ucfirst() and ucwords()
// $name = "Sohan and Asik  is A Good Boy";
// $str_upper = strtoupper($name);
// echo $str_upper . "<br>" ;
// $str_lower = strtolower($name);
// echo $str_lower . "<br>" ;
// $lc_first = lcfirst($name);
// echo $lc_first . "<br>" ;
// $uc_first = ucfirst($name);
// echo $uc_first . "<br>" ;
// $uc_words = ucwords($name);
// echo $uc_words . "<br>" ;
//=======================
// strrev() and str_shuffle
//  $name = "sohan is a good and cute boy";
//  echo strrev($name) . "<br>" ;
//  echo str_shuffle($name);
//=======================
// number_format()
//  $name = 112343332;
//  echo number_format($name) . "<br>" ;
//=======================
// number_format()
//  $name = 112343332;
//  echo number_format($name) . "<br>" ;
//=======================
// strip_tag()
//  $name = "Sohan <b>good boy</b> <i>and he is bad</i> also good";
// echo $name . "<br>";
// echo strip_tags($name, "<b>");


//================Assignment==========================
// Create a function that will return children, teenagers, young people, old people from the age

// Create a function that will return the area of a rectangle, square, triangle

// GPA function for result publishing

// Create an age calculator function

// Create a BMI function for health

// Create a currency converter function from taka to USD, CAD, POUND, EURO etc


// if (isset($_POST['submit'])) {
//     echo age_calculator($_post['age_calc']);
// }
// function age_calculator($age){

//  if ($age >= 6 && $age <= 14) {
    
//     return "You are a Children";
    
//  }
//  elseif ($age >= 15 && $age <= 19) {

//     return "You are a Teenager";

//  }
//  elseif ($age >= 20 && $age <= 35) {

//     return "You are a Young Man";

//  }
//  elseif ($age >= 36 && $age <= 80) {

//     return "You are a Old Man";

//  }
 
// }


// ?>

<!-- // <form action="practice.php" method="post">
// <input type="text" name="age_calc">
// <input type="submit" name="submit">
// </form> -->
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
<form method="GET" action="foo.php">
  <select name="house_model" id="house_model">
    <option value="">------</option>
    <option value="<?php echo $model1;?>">Model 1</option>
    <option value="<?php echo $model2;?>">Model 2</option>
    <option value="<?php echo $model3;?>">Model 3</option>
  </select>
</form>
<script>
 $("#house_model").live("change", function () {
   //Write the ajax and post the value to server side
    });

</script>


</body>
</html>
