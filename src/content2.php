<?php
error_reporting(E_ALL);
ini_set('display', 1);

if ( !isset($_GET["log"]) ) {
	header("Location: http://web.engr.oregonstate.edu/~brancalr/login.php");
}
else {
	echo "<a href='http://web.engr.oregonstate.edu/~brancalr/content1.php?log=yes'>content1</a>";
}

?>