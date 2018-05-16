<?php
	$conn = new mysqli("localhost","root","","pinank");
	// print_r($_POST);
	if(empty($_POST['firstname'])){
		echo "enter name";
	}
	echo "<br>";
	if(empty($_POST['lastname'])){
		echo "enter last name";
	}

	else {
		// echo "ok";
		$name=$_POST['firstname'];
		$lname=$_POST['lastname'];

		$sql= "select from person where firstname='$name',lastname='$lname'";
		// echo $sql;


	}
?>