<?php 
require(connect-db.php);

header('Access-Control-Allow-Origin: http://localhost:4200');
header('Access-Control-Allow-Headers: X-Requested-With, Content-Type, Origin, Authorization, Accept, Client-Security-Token, Accept-Encoding');

// retrieve data from the request
$postdata = file_get_contents("php://input");

// process data 
// (this example simply extracts the data and restructures them back) 
$request = json_decode($postdata);

$query = "INSERT INTO users (username, `password`) VALUES ($request);
$statement = $db->prepare($query);
$statement->execute();

// send response (in json format) back the front end
echo json_encode(['content'=>$data]);
	
?>