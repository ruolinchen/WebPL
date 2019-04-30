<?php 
$hostname = 'localhost';
$dbname = 'kpopkommunity';
$username = 'sandygould';
$password = 'cs4640s19';
$dsn = "mysql:host=$hostname;dbname=kpopkommunity";
try {
	$db = new PDO($dsn, $username, $password);
}

catch (PDOException $e) {
	$error_message = $e -> getMessage();
	echo "<p>An error occured while connnecting to the database: $error_message </p>";
}

catch (Exception $e) {
    $error_message = $e->getMessage();
    echo "<p>Error message: $error_message </p>";
}
	
?>