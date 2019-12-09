<html>
<head>
<title>Web 3</title>
</head>
<body>
<form action="index.php" method="POST">
Username:<input type="text" name="name" /><br>
Password:<input type="password" name="password" />
<input type="submit">
</form>

<br>
Here is the source of <a href="source.php">index.php</a><br>
<br><br>
<code>
<?php
ini_set('display_errors', 'on');
ini_set('error_reporting', E_ALL);
include 'flag.php';

if(isset($_REQUEST['name'])&&isset($_REQUEST['password'])){
	$username = $_REQUEST['name'];
	$password = $_REQUEST['password'];

	if(!(is_string($username)&&is_string($password))){
		header( "refresh:1;url=index.php");
		die("You are not allowed to do this");
	}

	$password = md5($password);
	
	include 'dbconnect.php';
	/*CREATE TABLE IF NOT EXISTS users(id INTEGER PRIMARY KEY AUTOINCREMENT,username TEXT,password TEXT)*/

	$message = "";
	
	$query = "SELECT * FROM users WHERE username='$username' and password='$password'";

	$result = $pdo->query($query);
	$users = $result->fetchArray(SQLITE3_ASSOC);

	if($users) {
		$message = $flag;
	}
	else{
		$message = "No such user exists";
	}
	echo $message;
}
?>
</code>
</body>
</html>