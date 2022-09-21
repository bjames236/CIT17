<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP Exercises ODL Activity</title>
</head>
<body>
<h3>PHP exercise 5</h3>
<?php
 $around = "around";
 echo 'What goes ' . $around . ' comes ' . $around . '.';
?> 

<h3>PHP exercise 6</h3>
<?php
for ($x = 1; $x <= 12; $x++){
  $product = $x * $x;
  echo("$x * $x = $product" . "<br>");
}
?>
<h3>PHP exercise 7</h3>
<?php

echo "<table><tr>";
for($x = 1; $x <= 7; $x++){
	for($y = 1; $y <=7; $y++){
		echo "<td>" . ($x * $y) . "<td>";
	}
	if($x !=7) echo "</tr><tr>";
}
echo "</tr></table>";

?>

</body>
</html>
