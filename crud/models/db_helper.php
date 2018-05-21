<?php
	require_once 'db_connect.php';
	abstract class db_helper extends db_connect implements db_general_function{
		function insert($tables,$columns,$values){

		$sql="insert into $tables ($columns) values($values)";
		//echo $sql; 
 		return $this->conn->query($sql) or die($this->$conn->error);	 
		
		}
		function select($columns,$tables,$condition){
			 $sql="select $columns from $tables where $conditions";
			 $result =$this->conn->query($sql) or die($this->$conn->error);
		}
		function delete(){}
		function update(){
			
		}
	}
?>
