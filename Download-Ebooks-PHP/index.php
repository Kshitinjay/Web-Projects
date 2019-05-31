<!DOCTYPE html>
<html>
<head>
	<title>E Learning Website</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
            * {
                margin: 0;
                padding: 0;
            }
            body {
                background-image: url(web-development-wallpaper.jpg);
                background-size: cover;
                margin: fit-;
                padding: 0;
                background-size: cover;
                background-repeat: no-repeat;
            }
            .banner {
                margin: 0;
                padding: 0;
                position: absolute;
                top: 9%;
                left: 28%;
            }
            .banner p {
                font-family: 'Charmonman', cursive;
                color: black;
                font-weight: 500;
                font-style: italic;
                font-size: 70px;
                border-top: 1px solid white;
                border-bottom: 1px solid white;
            }
            .banner a {
                text-align: center;
                margin: 0px;
                padding: 5 15 5 15;
                font-family: serif;
                font-size: 25px;
                color: white;
                background-color: rgba(0,0,0,0.7);
                border-radius: 9px;
            }
            .banner a:hover {
                background-color: black;
            }
            a:active {
                text-decoration: none;
            }
            a:hover {
                text-decoration: none;
                color: white;
            }
            a:link {
                text-decoration: none;
            }
            a:visited {
                text-decoration: none;
                color: white;
            }
			#login-box {
				position: absolute;
				top: -1500%;
				margin: 10% auto;
				height: 400px;
				width: 600px;
				background: #fff;
				box-shadow: 0 2px 4px rgba(0,0,0,0.6); 
				border-radius: 5px;
			}
			.left-box {
				position: absolute;
				top: 0;
				left: 0;
				box-sizing: border-box;
				padding: 40px;
				width: 300px;
				height: 400px;
			}
			h1 {
				margin: 0 0 20px 0;
				font-weight: 300;
				font-size: 28px;
			}
			input[type="text"],
			input[type="email"],
			input[type="password"] {
				display: block;
				box-sizing: border-box;
				margin-bottom: 20px;
				padding: 4px;
				width: 220px;
				height: 32px;
				border: none; 
				outline: none;
				border-bottom: 1px solid #aaa;
				font-family: sans-serif;
				font-weight: 400;
				font-size: 15px;
				transition: 0.1s ease;
			}

			input[type="submit"] {
				margin-bottom: 28px;
				width: 120px;
				height: 32px;
				background: #f44336;
				border: none;
				border-radius: 5px;
				color: #fff;
				font-family: sans-serif;
				font-weight: 500;
				text-transform: uppercase;
				transition: 1s ease;
				cursor: pointer;
			}

			input[type="submit"]:hover,
			input[type="submit"]:focus {
				background: #ff5722;
				transition: 1s ease;
			}

			.right-box {
				position: absolute;
				top: 0;
				right: 0;
				box-sizing: border-box;
				padding: 40px;
				width: 300px;
				height: 400px;
			}
        </style>
</head>
<body>
	<div class="banner"> <!-- body page code -->
	    <p>Complete Website <span><h5>Designed by Prachi Gupta</h5></span></p>
	</div>
<section class="container">
	<header>
		<div class="container center-div shadow">
				<div class="container d-flex flex-row justify-content-center mb-3">
					<div id="login-box">
						<form action="logincheck.php" method="POST">
							<div class="left-box">
								<h1>Sign Up</h1>
								<input type="text" name="user" placeholder="Username" value="" required />
								<input type="email" name="email" placeholder="Email" value="" required/>
								<input type="password" name="pass" placeholder="Password"  value="" required/>
								<input type="submit" name="submit"/>
							</div>
						</form>
						<form action="logincheck1.php" method="POST">
							<div class="right-box">
								<h1>Login</h1>
								<input type="text" name="usercheck" placeholder="Username" required />
								<input type="password" name="passcheck" placeholder="Password" required/>
								<input type="submit" name="submit1"/>
							</div>
						</form>
				</div>
			</div>		
	</header>
</section>	    
</body>
</html>