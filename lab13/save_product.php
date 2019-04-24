<?php

$mysqli = new mysqli("localhost", "root", "", "computer_shop");

if ($_POST["product_id"] == 0) {
	$query = "INSERT INTO product (product_name, brand_id, type_id, price, stock) VALUES (?, ?, ?, ?, ?)";

	$stmt = $mysqli->prepare($query);

	$stmt->bind_param(
		"siiii",
		$_POST["product_name"],
		$_POST["brand_id"],
		$_POST["type_id"],
		$_POST["price"],
		$_POST["stock"]
	);	

	$stmt->execute();
} else {
	$query = "UPDATE product SET product_name = ?, brand_id = ?, type_id = ?, price = ?, stock = ? WHERE product_id = ?";

	$stmt = $mysqli->prepare($query);

	$stmt->bind_param(
		"siiiii",
		$_POST["product_name"],
		$_POST["brand_id"],
		$_POST["type_id"],
		$_POST["price"],
		$_POST["stock"],
		$_POST["product_id"]
	);	

	$stmt->execute();
}

$mysqli->close();

$data = array("result" => true);

header('Content-Type: application/json');
echo json_encode($data);