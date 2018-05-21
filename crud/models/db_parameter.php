<?php
	interface db_parameters{
		const HOSTNAME="localhost";
		const USER="root";
		const PASSWORD="";
		const DATABASE="pinank";
	}
	interface db_general_function{
		function insert($tables,$columns,$values);
		function select($columns,$tables,$condition);
		function delete();
		function update();
	}
?>