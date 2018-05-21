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

		$result=$obj->get_user_data($first,$last);
			// if(is_array($result)){

			// 	if($first!=$result[0]['firstname']){
			// 		echo "user added";
			// 	}
			// 	else{
					
			// 		$_SESSION['project_first']=$result[0]['first'];
			// 		$_SESSION['project_last']=$result[0]['last'];
			// 		//$_SESSION['project_usemail']=$result[0]['us_email'];
			// 		//$_SESSION['project_usmobile']=$result[0]['us_mobile']

					echo "ok";
				
		 }


	}

?>