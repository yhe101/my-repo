<?php
	$data = json_decode(file_get_contents("php://input"));
	
	include('config.php');
	
	if($data){

	$db = new DB();
	
	$sql = "INSERT INTO attribute_table (attribute_name, attribute_type, uniqueness, weight)VALUES('$data->attribute_name','$data->attribute_type','$data->uniqueness','$data->weight')";

	$data = $db->qryFire($sql);

	echo json_encode($data);}
?>