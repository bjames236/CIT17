<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Array Exercise 2</title>
</head>
<body>
<h1>Array Exercise 2</h1>
<?php
$cities = array("Tokyo", "Mexico City", "New York City", "Mumbai", "Seoul", "Shanghai", "Lagos", "Buenos Aires", "Cairo", "London");

for ($i = 0; $i < COUNT($cities); $i++) {
	 		echo $cities{$i} . ", ";
}
sort($cities);
?>
<ul>
	<?php
	for ($x = 0; $x < COUNT($cities); $x++) {
	 	echo "<li>{$cities{$x}}</li>";
	}
	?>
</ul>
<?php
array_push($cities, "Los Angeles", "Calcutta", "Osaka", "Beijing");
	sort($cities);

?>
<ul>
	<?php
	for ($x = 0; $x < COUNT($cities); $x++) {
	 	echo "<li>{$cities{$x}}</li>";
	}
	?>
</ul>
</body>
</html>