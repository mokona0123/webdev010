<?php

  $conn = new mysqli("localhost","root","","6010210010_Lab12");
  $result = $conn->query("SELECT * FROM employee join department ON employee.DEP_ID = department.DEP_ID ");
  $dbdata = array();
  while ( $row = $result->fetch_assoc())  {
	$dbdata[]=$row;
  }
  mysqli_close($conn);
 echo json_encode($dbdata);
 
?>