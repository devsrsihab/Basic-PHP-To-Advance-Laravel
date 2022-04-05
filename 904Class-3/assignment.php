<?php

/*Assignment 01:

Let’s make a result grade calculator…
Rishita’s subject marks: SubjectA = 75, SubjectB = 80, SubjectC = 65, SubjectD = 90.
Result Calculation formula: Sum all subjects marks and divided by total subject quantity. 
From this given formula, you will get a mark. Show the Grade message by the mark.

A+ = 80 - 100 
A   = 70 - 79
A-  = 60 - 69
B   = 50 - 59
C   = 40 - 49
F   = 01 - 39 

Firstly you have to calculate the average mark of Rishita.
Secondly you have to show the grade message (Like as: “You got A+”) by following this grading range. */


$subjectA = 75; //subjec A
$subjectB = 80; //subject B
$subjectC = 65; //subject C
$subjectD = 90; //subject D
$totalSubMark =  $subjectA + $subjectB +  $subjectC + $subjectD ; //Total Mark Variables
$subQt = 4; //subject Quantity
$avgMark = $totalSubMark/$subQt; //Avrage mark variable

// echo all  vaue
echo "Your Total Mark is {$totalSubMark} Out off 400" ;
echo "<br>";
echo "Your Avrage Mark is {$avgMark}% Out of 100%";
echo "<br>";


// Result Calculate Formula and   condition logic if, elseif
 if ( $subjectA < 40|| $subjectB < 40 || $subjectC < 40 || $subjectD < 40 ) {

    echo "Your Grade is F ";}// condition for one subject failed

elseif ($subjectA > 100 || $subjectB > 100 || $subjectC > 100 || $subjectD > 100 ){

    echo "This is not Valid Number. You Enter Upper than 100 ";}// condition for enter invalid number upper than 100

elseif ($avgMark >=80 && $avgMark <= 100 ) {

    echo "Your Grade is A+ ";}// condition for A+

elseif ($avgMark >=70 && $avgMark <= 79 ) {

    echo "Your Grade is A ";}// condition for A

elseif ($avgMark >= 60 && $avgMark <= 69) {

    echo "Your Grade is A- ";}// condition for A-

elseif ($avgMark >=50 && $avgMark <=59) {

    echo "Your Grade is B ";}// condition for B
    
elseif ($avgMark >= 40 && $avgMark <=49) {

    echo "Your Grade is C ";}// condition for C

elseif ($avgMark >=1 && $avgMark <=39) {
   
    echo "Your Grade is F ";}// condition for F
    
else {
    
    echo "Please Enter a Valid Result";// is anything did not match anything
};





?>
