<?php

	$data = json_decode(file_get_contents("php://input"));
	
	include('config.php');

	$db = new DB();

	$sql = "DELETE FROM attribute_table WHERE attribute_id = $data->attribute_id";

	$data = $db->qryFire($sql);

	echo json_encode($data);
