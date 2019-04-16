<?php

if ($_SERVER['REQUEST_METHOD'] == "POST")
{
	//Retrieve all form inputs from the POST object
	if (!empty($_POST["comment-content"])){
		echo $_POST["comment-content"];
		echo "Written by you!"
		echo "Posted just now"
	}
	else
		echo "Please enter text for the comment.";
}

?>