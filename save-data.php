<?php

	include "database.php";
	$obj = new Database();

	$sname = $_POST['sname'];
	$sage = $_POST['sage'];
	$scity = $_POST['scity'];

	$value = ["student_name"=>$sname, "age"=>$sage, "city"=>$scity];

	if($obj->insert("students",$value)){
		echo "<h2>Data Inserted Successfully.</h2>";
	}else{
		echo "<h2>Data is Not Inserted Successfully.</h2>";
	}

?>