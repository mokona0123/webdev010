<?php
	$host = 'localhost';
	$usernamne = 'root';
	$password = "";
	$db = 'lab14';

	$con = new mysqli($host, $usernamne, $password, $db);
	$sql = "SELECT * FROM `employee` INNER JOIN department ON employee.DEP_ID = department.DEP_ID  WHERE 1";
	$stmt = $con -> query($sql);
	
	$data = array();
	while ($row = $stmt -> fetch_assoc()){
		array_push($data, array(
			"EMP_ID" => $row['EMP_ID'],
			"NAME" => $row['NAME'],
			"DEP_ID" => $row['DEP_ID'],
			"DEP_NAME" => $row['DEP_NAME'],
			"AGE" => $row['AGE'],
			"SALARY" => $row['SALARY'],
		));
	}
$con -> close();


	echo "<employee>";
	for ($i = 0;$i <sizeof($data);$i++ ){
		$item = $data[$i];
		echo "<data>";
		echo "<emp>" .$item["EMP_ID"]."</emp>";
		echo "<name>" .$item["NAME"]. "</name>";
		echo "<dep_id>".$item["DEP_ID"]."</dep_id>";
		echo "<dep>" .$item["DEP_NAME"]. "</dep>";
		echo "<age>" .$item["AGE"]. "</age>";
		echo "<salary>" .$item["SALARY"]. "</salary>";
		echo "</data>";
		}
	echo "</employee>";
header("Content-type: text/xml");

?>