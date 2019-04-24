<?php

$mysqli = new mysqli("localhost", "root", "", "computer_shop");

$query = "DELETE FROM product WHERE product_id = ".$_POST["product_id"];

$result = $mysqli->query($query);

$data = array();

$mysqli->close();

header('Content-Type: application/json');
echo json_encode($data);