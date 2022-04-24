<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V1</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body onscroll="disableScrolling()" onmousewheel="enableScrolling()" onclick="enableScrolling()">
	
		<div class="container">
			<div class="wrap-login">
				<div id="logo" class="login-pic">
					<img src="images/img-01.png" alt="IMG">
				</div>

				<form action="create.php" name="myform" id="form" method="post" class="login-form">
					<span class="title" style="color: #3db1c0;">
						Member Register
					</span>
					<span id="error">
					</span>
					<div class="wrap-input">
						<input id="fullname" class="input" type="text" name="fname" placeholder="Name and Surname">
						<span class="focus-input"></span>
						<span class="symbol-input">
							<img src="images/name.png" style="width: 30px; height:30px; opacity:80%; margin-left:-5%;"></img>
						</span>
					</div>
					<div id="not-valid-fullname" class="not-valid"></div>
                    <div class="wrap-input">
						<input id="username" class="input" type="text" name="username" placeholder="Username">
						<span class="focus-input"></span>
						<span class="symbol-input">
							<img src="images/name.png" style="width: 30px; height:30px; opacity:80%; margin-left:-5%;"></img>
						</span>
					</div>
					<div id="not-valid-username" class="not-valid"></div>
                    <div class="wrap-input">
						<input id="email" class="input" type="text" name="email" placeholder="Email">
						<span class="focus-input"></span>
						<span class="symbol-input">
							<img src="images/username.png" style="width: 30px; height:30px; opacity:80%; margin-left:-5%;"></img>		
						</span>
					</div>
					<div id="not-valid-email" class="not-valid"></div>
					<div class="wrap-input">
						<input id="password" class="input" type="password" name="pass" placeholder="Password">
						<span class="focus-input"></span>
						<span class="symbol-input">
							<img src="images/password.png" style="width: 30px; height:30px; opacity:80%; margin-left:-5%;"></img>
						</span>
					</div>
					<div id="not-valid-password" class="not-valid"></div>
                    <div class="wrap-input">
						<input id="cpassword" class="input" type="password" name="cpass" placeholder="Confirm Password">
						<span class="focus-input"></span>
						<span class="symbol-input">
							<img src="images/password.png" style="width: 30px; height:30px; opacity:80%; margin-left:-5%;"></img>
						</span>
					</div>
					<div id="not-valid-cpassword" class="not-valid"></div>
					
					<div class="container-btn">
						<input class="btn" type="submit" name="submit" value="Register">
						</input>
					</div>
					<div class="centered">
					<div>
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="#">
							Username / Password?
						</a>
					</div>

					<div>
						<a class="txt2" href="index.html">
							Sign in
						</a>
					</div>
				</div>
				</form>
				<div id="fullyvalid" style="display: none; color: #3db1c0;">
					<h2>Congratulations! You have succesfully registered and made an account!</h2>
					<img src="images/check.png">
				</div>
			</div>
		</div>
	<?php
	include 'js/main.php';
	?>
</body>
</html>