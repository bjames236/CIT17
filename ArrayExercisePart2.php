<body>

<h1>Exercise1 </h1>

<?php
<form action ="ArrayExercisePart2.php" method="get">
	Age: <input type ="number" name="Elements">
$number = array(5,1,1);
for($i = 0; $i < COUNT($number); $i++) {
echo "element - " . $i . " : " . $number{$i} . "<br>";
}
echo "Total number of duplicate elements found in the array is :" . $number[1];

?>


</body>
</html>