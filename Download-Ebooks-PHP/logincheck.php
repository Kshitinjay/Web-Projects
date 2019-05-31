<?php
		session_start();
		$servername = "localhost";
		$username = "root";
		$password ="";
		$dbname = "prachidb";
		// creating connection

		$conn = new mysqli($servername,$username,$password,$dbname);
		// checking connection 

		if($conn->connect_error) {
			die("Connection Failed:" .$conn->connect_error);
		}
		// storing values in variables
		if (isset($_POST['submit'])) {
			$uname=$_POST['user'];
			$em=$_POST['email'];
			$pa=$_POST['pass'];
			// inserting values

			$sql = "INSERT INTO prachi (user,email,pass) VALUES ('$uname','$em','$pa')";

			if ($conn->query($sql) === TRUE) {
	    		echo "<script type='text/javascript'>";
  				echo "alert('Registered');";
  				echo "</script>";
	    		header('location:index.php');

			} else {
	    		echo "Error";
			}
		}	
	?>