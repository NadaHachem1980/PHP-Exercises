<?php

/*
+---+
| 1 |
+---+
Use while-loop to print the numbers 1 to 10.
*/

$i=1;
 
while($i<=10)
   
{
   
echo  $i . "<br>";
   
$i++;
   
}

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 2 |
+---+
Use the PHP function range(start, end, step) 
to create array of numbers 5 to 100 with the step 5 
(example: 5, 10, 15, ...)
*/
$numbers = range(5, 100, 5);

/*
Use for-loop and if-statement to print all odd numbers.

How to check if a number is odd or even? 
Divide it by 2, and if there is a remainder, the number is odd. 
Use modulus operator (outputs the remainder after division), 
for example: 
1 % 2 = 1 -> odd number
2 % 2 = 0 -> even number
3 % 2 = 1 -> odd number
4 % 2 = 0 -> even number
*/

for ($j = 0; $j < sizeof($numbers); $j++){
    if($numbers[$j] % 2 == 0){
        echo $numbers[$j] . "%2 = 0 -> even number <br>"; 
    } elseif($numbers[$j] % 2 != 0){
        echo $numbers[$j] . "%2 = 1 -> odd number <br>"; 
    }
}

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 3 |
+---+
Declare and assign the indexed array with your favourite food 
(at least 4 array elements). Name the array food.
*/
$food_assoc = ["steak","salad","chicken","spagethhti","tuna"];

/*
Use while-loop to print array elements (every food in a new row).
*/

$x = 0;
while($x < sizeof($food_assoc)){
   echo $food_assoc[$x] .  "<br>";
   $x++;
}

echo "-------- <br>";
/*
Use for-loop to print array elements (every food in a new row).
*/
for ($y = 0; $y < sizeof($food_assoc); $y++){
    echo $food_assoc[$y]. "<br>";
  
}  

echo "-------- <br>";
/*
Use foreach-loop to print array elements (every food in a new row).
*/

$food_assoc = ["steak","salad","chicken","spagethhti","tuna"];
foreach ($food_assoc as $food_item){
    echo $food_item . "<br>";
}

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 4 |
+---+
Print the array from task 3 as unordered list. Printing has to be done inside the for-loop.

Before looping, you need to print the opening list-tag <ul>
After looping, you need to print the closing list-tag </ul>
*/
$food_assoc = ["steak","salad","chicken","spagethhti","tuna"];
   
   
/* if( count( $food_assoc) > 0) {
    echo '<ul>';
    echo '<li>' . implode( '</li><li>', $food_assoc) . '</li>';
    echo '</ul>';
}*/

echo '<ul>';
for ($k = 0; $k < sizeof($food_assoc); $k++){
    echo '<li>'. $food_assoc[$k] . '</li>';
    
}
echo '</ul>';
                                            

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 5 |
+---+
The array from task 3 is turned into associative array. 
The meal courses are broken down based on the type (salad, main course, dessert, ...) 
and country of origin (Italy, Spain, India, ...)

$food_assoc = [
  "pizza" => [
    "type" => "main course",
    "origin" => "Italy"
  ],
  "cheesesake" => [
    "type" => "desert",
    "origin" => "Greece"
  ]
]

So, food_assoc is an associative array. 
Every key of food_assoc (pizza, cheesecake) will now have the value that is associative array itself 
and carries the information about the type and origin.
*/
$food_assoc = [
  "pizza" => [
    "type" => "main course",
    "origin" => "Italy"
  ],
  "cheesesake" => [
    "type" => "desert",
    "origin" => "Greece"
  ]
];
//echo $food_assoc["pizza"]["origin"];

/*
Loop through $food_assoc and use print_r() to print the entire meal course 
(entire array that includes type and origin).
*/

foreach($food_assoc as $key => $value){
    //to print out in two lines
    echo "<pre>";
    print_r($value);
    echo "</pre>";
    //print_r($food_assoc[$key]); one way or another
}
/*
Loop through $food_assoc and print the meal names (keys of $food_assoc)
as unordered list-items. Loop through the current meal (inner loop through sub-array) 
and print the type and origin as nested list items (see the example below).
*/
echo "<ul>";
foreach($food_assoc as $key => $value){
    echo "<li>". $key ."</li>";
    foreach($food_assoc[$key] as $k => $v){
        echo "<ul>";
            echo "<li>". $k.": " . $v. "</li>";
        echo "</ul>";
    }
}
echo "</ul>";

?> 