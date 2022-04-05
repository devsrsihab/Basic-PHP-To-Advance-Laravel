

<?php 

/*<!-- Assignment 02: 

Let’s make a game with your bike… You are riding a bike, your bike has some functionalities, these are… start, stop, break, gear, signal, headlight. 

When you click on the power/start button, your bike takes a start, 

When you click stop, your bike takes a stop, 

When you press the break, your bike take break, 

when you give the gear, your bike move faster and faster, 

when you press the signal button, your bike shows a signal light.

When you press the headlight button, your bike’s headlight will start.

Solve this game using Switch case and submit it on github. -->*/



$myBik = 'gear';//switch variable 

switch ($myBik) {
    case 'start':
       echo 'Bike take a start';
        break;

    case 'stop':
       echo 'Bike take a stop';
        break;

    case 'break':
       echo 'Bike take a break';
        break;

    case 'gear':
       echo 'Bike Move faster and faste';
        break;

    case 'signal':
       echo 'Bike shows a signal light';
        break;

    case 'headlight':
        echo "Bike’s headlight will start";

    default:
        echo "Enter a Valid Key";
       
};


//i have also make it with if, elseif

/*if ($myBik == 'start') {
    echo 'Your bike is take a start';
}
elseif ($myBik == 'stop') {
   echo 'Your bike take a stop';
}
elseif ($myBik == 'break') {
    echo 'Your bike take a break';
 }
 elseif ($myBik == 'gear') {
    echo 'Your bike move faster and faster';
 }
 elseif ($myBik == 'signal') {
    echo 'Your bike shows a signal light';
 }
 elseif ($myBik == 'headlight') {
    echo 'headlight will start';
 }
 else {
     echo 'Please enter Right Command';
 }*/
    
?>