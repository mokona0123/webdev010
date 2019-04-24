
<?php
$con = mysqli_connect("localhost","root","","6010210010_lab12");
$stmt = mysqli_prepare($con,"INSERT INTO employee (EMP_ID,NAME,DEP_ID,AGE,SALARY) VALUES (?,?,?,?,?)");
mysqli_stmt_bind_param($stmt,"sssss",$_POST["EMP_ID"],$_POST["NAME"],$_POST["DEP_ID"],$_POST["AGE"],$_POST["SALARY"]);
mysqli_stmt_execute($stmt); 
mysqli_close($con);     
header("Location: lab12_2.html"); 
?>

