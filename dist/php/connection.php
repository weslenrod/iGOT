<?php
	$server = "dc-labwes";
	$user = "dbadmin";
	$password = 'Pas$w0rd';
	try {
		$conn = new PDO("mysql:host=$server;dbname=igot", $user, $password);
		echo "Connected successfully"; 
    }
	catch(PDOException $e)
    {
		echo "Connection failed: " . $e->getMessage();
    }
?>