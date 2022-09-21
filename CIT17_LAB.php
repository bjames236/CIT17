<!DOCTYPE html>
<html>
<body>

<h3>Exercise 1</h3>
<?php
echo "Twinkle, Twinkle little star.";

$phrase1 = "Twinkle";
$phrase = "star";

echo "$phrase1, $phrase1 little $phrase.";
?>

<h3>Exercise 2</h3>
<?php
 $x=10; 
 $y=7;
 
 echo "$x + $y = " . ($x + $y);
 echo "<br>";
 echo "$x - $y = " . ($x - $y);
 echo "<br>";
 echo "$x * $y = " . ($x * $y);
 echo "<br>";
 echo "$x / $y = " . ($x / $y);
 echo "<br>";
 echo "$x % $y = " . ($x % $y);
 echo "<br>";
 
?>
<h3>Exercise 3</h3>
<?php
 $variable=8; 
 
 echo "Value is now " . $variable;
 $variable += 2;
 echo "<br>";
 echo "Value is now " . $variable;
 $variable -= 4;
 echo "<br>";
 echo "Value is now " . $variable;
 $variable *=5;
 echo "<br>";
 echo "Value is now " . $variable;
 $variable /=3;
 echo "<br>";
 echo "Value is now " . $variable;
 $variable++;
 echo "<br>";
 echo "Value is now " . $variable;
 $variable--;
 echo "<br>";
 echo "Value is now " . $variable;
 
 
?>
<h3>Exercise 4</h3>
<?php

$name = "Harry";
$age = 28;


var_dump($name); 
echo "<br>";
print_r($name);
echo "<br>";
var_dump($age);
echo "<br>";
$name = null;
var_dump($name);

?>

</body>
</html>
