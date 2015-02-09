<?php
error_reporting(E_ALL);
ini_set('display', 1);

if ( !isset($_POST["username"]) && !isset($_GET["log"])) {
	header("Location: http://web.engr.oregonstate.edu/~brancalr/login.php");
}
else {
	session_start();
	if ( strlen($_POST["username"]) == 0 && $_SESSION['visits'] == 0 ) {
		echo "A username must be entered. Click 
			  <a href='http://web.engr.oregonstate.edu/~brancalr/login.php'>here</a> to return to login screen.";
	 	exit();
	}
	else {
		if ( !isset($_SESSION['visits']) ) {
			$_SESSION['visits'] = 0;
		}
	}
}

echo "Hello ". $_POST['username']. " you have visited this page ".$_SESSION['visits']." times before. Click 
      <a href='http://web.engr.oregonstate.edu/~brancalr/login.php?value=off'>here</a> to logout.";
$_SESSION['visits']++;
echo "<a href='http://web.engr.oregonstate.edu/~brancalr/content2.php?log=yes'>content2</a>";


?>
