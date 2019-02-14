<?php




/*
+---+
| 1 |
+---+
Declare variable named redLight and 
assign it with the value true.
*/

$redlight = true;

/*
Use "if" statement to check if the red light is on,
if so, print "Stop the car!".
*/

if($redlight){
    $on = 'stop the car!';
    echo $on;
}



/*
If the red light is on, use ternary operator to print "Stop the car!" as a paragraph.
*/

$ternary = $redlight ? "Stop the car!": "redlight is not on";
echo $ternary;

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 2 |
+---+
Reasign redLight with the value false.
*/

$redlight = false;
/*
Use if/else statement to check if the red light is on,
if so, print "Stop the car!", otherwise print "Are you sure that yellow light is not on?".
*/

if ($redlight) {
     echo "stop the car!";
    
} else {
    echo "Are you sure that yellow light is not on?";
}



// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 3 |
+---+
Declare variable named yellowLight and 
assign it with the value false.
*/

$yellowLight = false;
/*
Use if/else statement to check if the red or yellow light is on,
if so, print "Stop the car!", otherwise print "Are you sure that traffic lights are working at all?".
*/

if ($redlight || $yellowLight ) {
     echo "stop the car!";
    
} else {
    echo "Are you sure that traffic lights are working at all?";
}

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 4 |
+---+
Declare variable named greenLight and 
assign it with the value false.
*/

$greenLight = false;
/*
Use if/else-if/else statement.

Check if the red or yellow light is on, and the green light is off,
if so, print "Stop the car!".

Next, check if the red and yellow and green light is off,
In this case, print "Power outage!".

Next, check if the red and yellow light is off, and the green light is on.
In this case, print "Keep moving!";

Next, check if the red or yellow light is on, and the green light is on too.
In this case, print "Traffic lights are messed up!".

In any other case, print "Use the common sense and stay safe!".
*/

if (($redlight || $yellowLight) && $greenLight==false) {
     echo "stop the car!";
    
} elseif($redlight==false && $yellowLight==false && $greenLight==false) {
    echo "Power outage!";
    
} elseif(($redlight==false && $yellowLight==false) && $greenLight==true){
    echo "Keep moving!";
    
} elseif(($redlight || $yellowLight==true) && $greenLight==true){
    echo "Traffic lights are messed up!";
}


// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 5 |
+---+
Handle the problem from the task 4 with switch-statement!
The referencial value will be true.
*/

switch(true) {
     case ($redlight || $yellowLight) && $greenLight==false:
        echo "stop the car";
        break; 
     case ($redlight==false && $yellowLight==false && $greenLight==false):
        echo "Power outage!";
        break;
     case ($redlight==false && $yellowLight==false) && $greenLight:
        echo "Keep moving";
        break;
     case ($redlight || $yellowLight==true) && $greenLight==true:
        echo "Traffic lights are messed up!";
        break;
}
