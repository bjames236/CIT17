<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Praktis sa PHP</title>
</head>
<body>
<h2>Variables</h2>
<?php
$txt = "Hello World!";
$firstNum = 5;
$secondNum = 7;
$total = $firstNum + $secondNum;

echo $txt;
echo "<br>";
echo $total;
?>
<h3>Constant</h3>
<?php
define("My_Website", "https://www.youtube.com/");

echo 'Visit my website here - ' . My_Website;
?>

<h3>Echo and Print</h3>
<?php
$txt = "Hello World:";
$num = 123456789;
$colors = array("Red", "Green", "Blue");

// Displaying 

echo $txt;
echo "<br>";
echo $num;
echo "<br>";
echo $colors[0];
?>

<?php
print "<br>";
print "<br>";
$txt = "Hello World:";
$num = 123456789;
$colors = array("Red", "Green", "Blue");

// Displaying 

print $txt;
print "<br>";
print $num;
print "<br>";
print $colors[0];
?>
</body>
</html>