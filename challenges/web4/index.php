<!DOCTYPE html>
<html>
<head>
<title>Mighty-PHP</title>
<link rel="stylesheet" href = "style.css" />
</head>
<body>


<?php
try{
	include 'secret.php';    //contains the secretpassword
	include 'flag.php';		 //contains the FLAG
}
catch(Exception $e) {
}
 
$msg = '';
$admin_id = 3735928559;

if (array_key_exists(userid, $_REQUEST) && array_key_exists(pass, $_REQUEST)){
	if (!strspn($_REQUEST['userid'], "123456789")){

		if ($_REQUEST['userid'] == $admin_id && $_REQUEST['pass'] == $secretpassword){
			$msg = 'You are admin' . '<br>';
			$msg.=$flag;
		}
		else {
			$msg= 'Try harder, you can do it.';
		}
	}
	else {
		$msg= 'Don\'t give up so quickly.';
	}
}
else{
	$msg = 'At least make some effort';
}
?>
<div id="msgBox">
<?php echo $msg;?>
</div>
<br>
<div id="link">
<a href="./source.php">Show Source</a>
</div>

</body>
</html>

