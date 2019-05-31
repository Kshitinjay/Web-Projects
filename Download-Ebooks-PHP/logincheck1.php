<?php
		session_start();
		$servername = "localhost";
		$username = "root";
		$password ="";
		$dbname = "prachidb";
		// creating connection

		$conn = mysqli_connect($servername,$username,$password,$dbname);
		// checking connection 

		if($conn->connect_error) {
			die("Connection Failed:" .$conn->connect_error);
		}
		else {
			echo "connection established";
		}

		if(isset($_POST['submit1'])) {
		$usern = $_POST['usercheck'];
		$passw = $_POST['passcheck'];

		$sql = "select * from prachi where user = '$usern' and pass = '$passw' ";
		$query = mysqli_query($conn,$sql);
		$row = mysqli_num_rows($query);
			if($row == 1) {
				echo "Login Successful";
				$_SESSION['user'] = $username;
				header('location:welcome.html');
			}else {
				echo "Login Fail";
				
			}	
		}
?>		