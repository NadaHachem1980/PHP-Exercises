<?php




/*
+---+
| 1 |
+---+
Declare and assign the indexed array with your favourite food 
(at least 4 array elements). Name the array food.
*/

/*
Print every array element in a new line.
*/

$food = array ('chicken soup', 'green salad', 'steak', 'shrimp');

echo $food[0] . "<br>";
echo $food[1] . "<br>";
echo $food[2] . "<br>";
echo $food[3] . "<br>";


// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 2 |
+---+
Print the array elements from the previous exercise in unordered list.
<ul>
  <li>...</li>
  <li>...</li>
  <li>...</li>
  <li>...</li>
</ul>
*/

$food = [
    "chikensoup", 
    "greensalad", 
    "steak",
    "shrimp"
];

echo "<ul>";
echo "<li>" . $food[2] . "</li>";
echo "<li>" . $food[1] . "</li>";
echo "<li>" . $food[0] . "</li>";
echo "<li>" . $food[3] . "</li>";
echo "</ul>";

echo "<hr>";

// function print_r prints everything about an array:
echo "<pre>";
print_r($food);
echo "</pre>";



// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 3 |
+---+
Turn the indexed array food from task 1 into associative array named food_assoc. 
Every array element of food becomes the key of food_assoc.
Every key of food_assoc has the value that describes the type of food (salad, main course or dessert).
*/

/*
Print every food and type in the separate lines so it renders like this:
pizza | main counrse 
cheesesake | desert 
*/

$food_assoc = [
    "chikensoup" => "soup",
    "greensalad" => "salad",
    "steak" => "meat",
    "shrimp" => "seafood",
];
echo "<ul>";
echo "<li>" . $food_assoc["chikensoup"] . "</li>";

echo "<li>" . $food_assoc["greensalad"] . "</li>";

echo "<li>" . $food_assoc["steak"] . "</li>";

echo "<li>" .  $food_assoc["shrimp"] . "</li>";
echo "</ul>";
print_r($food_assoc);


// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 4 |
+---+
Break down the food_assoc from the task 3 to type (salad, main course, dessert, ...) 
and country of origin (Italy, Spain, India, ...)
food_assoc:
  pizza:
    type: main course
    origin: Italy
  cheesesake: 
    type:desert
    origin: Greece
  
So, food_assoc is still going to be an associative array. 
Every key of food_assoc (pizza, cheesecake) will now have the value that is associative array itself 
and carries the information about the type and origin
*/

/*
Print every food, type and origin in the separate lines so it renders like this:
pizza | main counrse | Italy
cheesesake | desert | Greece
*/

$food_assoc = array("food"=>"chikensoup", "type"=>"soup", "origin"=>"china" );





// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 5 |
+---+
Print the array from task 4 in html table:
<table>
  <tr>
    <th>food</th>
    <th>type</th>
    <th>origin</th>
  </tr>
  <tr>
    <td>pizza</td>
    <td>main course</td>
    <td>Italy</td>
  </tr>
  <tr>
    <td>cheesecake</td>
    <td>desert</td>
    <td>Greece</td>
  </tr>
</table>
*/

echo "<tr>
    <th>chikensoup</th>
    <th>soup</th>
    <th>china</th>
  </tr>
  <tr>
    <td>greensalad</td>
    <td>salad</td>
    <td>greece</td>
  </tr>
  <tr>
    <td>steak</td>
    <td>meat</td>
    <td>africa</td>
  </tr>
     <tr>
    <td>shrimp</td>
    <td>seafood</td>
    <td>japan</td>
  </tr>";


?>