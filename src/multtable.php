<?php
error_reporting(E_ALL);
ini_set('display', 1);

if ($_GET["min-multiplicand"] > $_GET["max-multiplicand"])
	echo 'Minimum multiplicand larger than maximum!<br>';
	


if ($_GET["min-multiplier"] > $_GET["max-multiplier"])
	echo 'Minimum multiplier larger than maximum!<br>';

foreach( $_GET as $key => $value ) {
	if ( !is_numeric($value) ) {
		echo $key . " must be an integer!<br>";
	}
}

foreach( $_GET as $key ) {
	if ( $key == "min-multiplier" ) {
		if ( empty($key) ) {
			echo "Missing parameter min-multiplier!";
		}
	}
	elseif ( $key == "max-multiplier" ) {
		if ( empty($key) ) {
			echo "Missing parameter max-multiplicand!";
		}
	}
	elseif ( $key == "min-multiplicand" ) {
		if ( empty($key) ) {
			echo "Missing parameter min-multiplicand!";
		}
	}
	elseif ( $key == "max-multiplicand" ) {
		if ( empty($key) ) {
			echo "Missing parameter max-multiplicand!";
		}
	}
}

$width = $_GET['max-multiplier'];
$height = $_GET['max-multiplicand'];

$table = '<table border="1"><tr><th></th>';

for ( $i = $_GET['min-multiplier']; $i < $width+1; $i++ ) {
	$table .= '<th style="font-weight:normal">'.$i.'</th>';
}
$table .= '<th></th></tr>';
echo $table;

for ( $i = $_GET['min-multiplicand']; $i < $height+1; $i++ ) {
	echo '<tr><td>'. $i .'</td>';
	for ( $j = $_GET['min-multiplier']; $j < $width+1; $j++ ) {
		echo '<td>'.($i * $j).'</td>';
	}
	echo '<td width="25"></td>';
	echo '</tr>';
}
echo '</table>';

?>