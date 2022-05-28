<?php 

// Question 01:

//Your client said that he needs a dropdown, which contains all days of the running month. Sometimes we fill up a registration form that, which date of birth. So find out in google (get number of days in specific month php) and do this assignment using a for loop.

//Day quantity is not equal for every month. Like as - february - 28,    March - 31, april - 30
// So days of running month should dynamic (by php build in function)



//task start
echo "<h2> This is First Assignment </h2>";
$runningDate = date('Y-m-d'). "<br>" ;       //running date
echo "Current Date is " . $runningDate;
$firstDay = date("d");                     //first day of this running month
$lastDay =  date("t");                    //last day of this running month
$monthName = date("M ");                 //month name

for ($i=$firstDay; $i <= $lastDay ; $i++) { 

    echo $monthName. $i . "<br>";
}
//tast end




// i have also try this one
 
// $start = new DateTime( "2022-04-06" );     //start date
// $end   = new DateTime( "2022-05-06" );    // end  date

// for($i = $start; $i <= $end; $i->modify('+1 day')){
//     echo "This Month Date is " . $i->format("d") . "<br>";
// };


?>