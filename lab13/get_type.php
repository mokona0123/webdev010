<?php

$mysqli = new mysqli("localhost", "root", "", "computer_shop");

$query = "SELECT * FROM product_type";

$result = $mysqli->query($query);

$data = array();

while ($row = $result->fetch_assoc()) {
	array_push($data, array(
		"type_id" => $row["type_id"],
		"type_name" => $row["type_name"]
	));
}

$mysqli->close();

header('Content-Type: application/json');
echo json_encode($data);