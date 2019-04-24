<?php

$mysqli = new mysqli("localhost", "root", "", "computer_shop");

$query = "SELECT a.product_id, a.product_name, a.brand_id, b.brand_name, a.type_id, c.type_name, a.price, a.stock "
		."FROM "
		."product a "
		."JOIN brand b ON a.brand_id = b.brand_id "
		."JOIN product_type c ON a.type_id = c.type_id";

$result = $mysqli->query($query);

$data = array();

while ($row = $result->fetch_assoc()) {
	array_push($data, array(
		"product_id" => $row["product_id"],
		"product_name" => $row["product_name"],
		"brand_id" => $row["brand_id"],
		"brand_name" => $row["brand_name"],
		"type_id" => $row["type_id"],
		"type_name" => $row["type_name"],
		"price" => $row["price"],
		"stock" => $row["stock"]
	));
}

$mysqli->close();

header('Content-Type: application/json');
echo json_encode($data);



