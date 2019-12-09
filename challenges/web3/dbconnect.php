<?php
require_once 'Zend/Db.php';
if(!file_exists('f317da95d93a1c1e52d4e06c6cc8f9c7.db')){
	$pdo = new SQLiteDatabase('f317da95d93a1c1e52d4e06c6cc8f9c7.db');

	$create_table = "CREATE TABLE IF NOT EXISTS users(id INTEGER PRIMARY KEY AUTOINCREMENT,username TEXT,password TEXT)";
	$pdo->query($create_table) OR die("DATABASE Creation Failed");

	$insert = "INSERT INTO users (username,password) VALUES ('Darklord','0e56abcc023046045310587974628079')";
	$pdo->query($insert) OR die("Normal user creation Failed");

	$pdo->close();
}

$pdo = new Zend\Db\Adapter\Adapter(array(
	'driver' => 'Pdo_Sqlite',
	'database' => '/var/www/html/challenges/web3_problems_occur/f317da95d93a1c1e52d4e06c6cc8f9c7.db'
));

?>
