<?php
		$host = "localhost";
		$port = "5432";
		$dbname = "dummy";
		$user = "postgres";
		$password = "Akansharocks";
		$pg_options = "--client_encoding=UTF8";

		$connection_string = "host=$host port=$port dbname=$dbname user=$user password=$password";
		$dbconn = pg_connect($connection_string);

		//$pdo = new PDO("pgsql:host=localhost;dbname=dummy", "postgres", "Akansharocks");

		if($dbconn){
			echo "Connected to ".pg_host($dbconn);
		}else{
			echo "Error in connecting to database. ";
		}

		echo "<br />";

?>