<?php
require_once("../backend/database.php");

define("TABLE", "mmsp_project");

$db = null;


function getAllProjects(){

	global $db;

	$sql = "SELECT * FROM ".TABLE."";
	
	// Connect to database
	$db = db_connect();

	// Execute query
	$result = mysqli_query($db, $sql);
	$rows = (mysqli_fetch_all($result));
	
	return $rows;
}
?>
