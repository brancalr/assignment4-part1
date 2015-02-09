<?php
error_reporting(E_ALL);
ini_set('display', 1);

if ( isset($_GET['value']) ) {
	session_start();
	$_SESSION = array();
	session_destroy();
}

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Login.php</title>
	</head>
	<body>
	  <form action="content1.php" method="POST">
	    Username:<br>
	    <input type="text" name="username"><br>
	    <input type="submit" value="Login">
	  </form>
	</body>
</html>
