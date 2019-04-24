<?php

$mysqli = new mysqli("localhost", "root", "", "computer_shop");

$query = "SELECT * FROM brand";

$result = $mysqli->query($query);

$data = array();

while ($row = $result->fetch_assoc()) {
	array_push($data, array(
		"brand_id" => $row["brand_id"],
		"brand_name" => $row["brand_name"]
	));
}

$mysqli->close();

header('Content-Type: application/json');
echo json_encode($data);