<!--<a href="../login.php">Login</a><br>-->
<?php
	session_start();
	include 'db-connect.php';
	

	$username = '';
	$password = '';

	if(isset($_POST["username"]))
		$username = $_POST["username"];
	if(isset($_POST["password"]))
		$password = $_POST["password"];


	$sql = "SELECT name, department FROM FACULTY WHERE name='$username' AND password = '$password'";

	$result = pg_query($dbconn, $sql);
	if(!$result){
		echo 'An error occurred in faculty login';
	}else{
		$cnt = pg_num_rows($result);
		if($cnt==1){
			$row = pg_fetch_array($result, NULL, PGSQL_ASSOC);
			$_SESSION['username'] = $username;
			header("location:../editFaculty.php");
		}else{
			header("Location: ../loginF.php");
			echo 'Incorrect username or password.';
		}

	}

?>