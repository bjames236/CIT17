<?php

$dir = 'ArrayProject';
$files = scandir($dir);

//pre_r($files);

function pre_r($array){
	echo '<pre>';
	print_r($array);
	echo '</pre>';

}

$files = array_diff($files, array('..', '.'));

//pre_r($files);

$files = array_values($files);

//pre_r($files);

$movies = array();

for ($i = 0; $i <count($files); $i++){

	preg_match("!(.*?)\((.*)\)!", $files[$i],$results);
	$movie_name = str_replace('_',' ',$results[1]);
	$movie_name = ucwords($movie_name);

	$movies[$movie_name]['image'] = $files[$i];
	$movies[$movie_name]['year'] = $results[2];


}

echo "<table id = 'ArrayProject' cellpadding = 50>";
echo "<tr class = 'odd'>";

foreach ($movies as $movie_name => $info){
	$content = "<td><span class = 'name'> $movie_name</span><br />"
	. "<img src = 'ArrayProject/$info[image]'><br />"
	. "<span class = 'year'>( $info[year] ) </span></td>";
	echo $content;
}

echo "</tr></table>";

?>


<style>
		#ArrayProject{
			background-color: #0000;
			color: #fff;
			font: 11pt Calibri;
		}
		tr.header{
			background-color: #111f4e;
			color: "white";
			font:  bold 11pt Calibri;
		}
		tr.odd{
			background-color: #18182b;
		}
		tr.even{
			background-color: #141423;
		}
		img {
			padding:  10px;
		}
		td{
			text-align: center;
		}
		span.year{
			color: #ccc;
			font-size: 26px;
		}
		span.name{
			font-size: 26px;
			font-weight: bold;
		}body{
			margin: 0;
			padding: 0
		}
</style>