<body>

<h1>Exercise1 </h1>

<?php
$number = array(5,1,1);
for($i = 0; $i < COUNT($number); $i++) {
echo "element - " . $i . " : " . $number{$i} . "<br>";
}
echo "Total number of duplicate elements found in the array is :" . $number[1];

?>

<h1>Exercise 2</h1>

<?php
$num = array(25,12,43);

for($i = 0; $i < COUNT($num); $i++) {
echo "element - " . $i . " : " . $num{$i} . "<br>";
}

echo "The frequency of all elements of an array: " . "<br>";
print_r(array_count_values($num));

?>

<h1>Exercise 3</h1>
<?php

$num1 = array(25,47,42,56,32);
$odd = array();
$even= array();


for($i = 0; $i < COUNT($num1); $i++) {
echo "element - " . $i . " : " . $num1{$i} . "<br>";
}

$j = 0;
$k = 0;

for($i = 0; $i < COUNT($num1); $i++) {

if ($num1[$i] % 2 == 0) {
$even[$j] = $num1[$i];
$j++;
} else {
$odd[$k] = $num1[$i];
$k++;
}

}

echo "The even elements are : " . "<br>";
for ($i = 0; $i <= $j; $i++) {
echo "$even[$i] ";
}
echo "<br>" . "The odd elements are : " . "<br>";
for ($i = 0; $i <= $k; $i++) {
echo "$odd[$i] ";
}

?>
</body>
</html>