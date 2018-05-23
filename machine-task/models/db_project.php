<?php
require_once "db_helper.php";

	final class db_project extends db_helper{
		
		function check_email_count($email){
			return self::select(
				"count(*) as cnt","users","us_email='$email'"
			);
		}
		function user_insert($name,$mobile,$email,$password){
			return self::insert(
					"users",
					"us_name,us_mobile,us_email,us_password",
					"'$name','$mobile','$email','$password'"
					);			
				}
		function get_user_data($email){
					return $this->select(
					"*","users","us_email='$email'"
			);

		}
			function get_password_userwise($email){
					return $this->select(
					"us_password","users","us_email='$email'"
			);

		}
		function update_password($pass,$email){
			return $this->update("users","us_password='$pass'","us_email='$email'");
		}
		
	}
	$obj = new  db_project();
?>