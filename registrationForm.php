
<html>
	<head>
		<title>Register Page</title>
		<link rel='stylesheet' type='text/css' href='css/bootstrap.css'>
		<link rel='stylesheet' type='text/css' href='css/my_style.css'>
		<style type="text/css">
		form > input[type=text]{
			height:40px;
		}

		#password, #emailadd, #con_password{
			height: 40px
		}

		.form{
			text-align: center;
			height: 50%;
		}

		input[type=submit], input[type=reset]{
			width: 20%;
			height: 60px;
			font-size: 40px;
		}
		</style>
	</head>
	<body>
		<div class = 'container'>
			<div class = 'row'>
				<div class = 'span12' style = 'margin: 50px'>
					<!-- Start Registration Form -->
					<div class = 'navbar-inner' style = 'height: 114px;'> 
						<h3 style = 'font-size: 75px; margin-left: 15px; padding-top: 52px;'>Register Examinee Page</h3>
					</div>
					<form class = 'registration-form form well' method = 'POST' action = 'submitInfo.php'>
							<span id = 'xfname'>&nbsp;&nbsp;</span><input type = 'text' name = 'fname' id = 'fname' placeholder = 'First name. . .'/>
							<span id = 'xemailadd'>&nbsp;&nbsp;</span><input type = 'email' name = 'email' id = 'emailadd' placeholder = 'Email add. . .'/><br/>
							<span id = 'xmname'>&nbsp;&nbsp;</span><input type = 'text' name = 'mname' id = 'mname' placeholder = 'Middle name. . .'/>
							<span id = 'xpassword'>&nbsp;&nbsp;</span><input type = 'password' name = 'password' id = 'password' placeholder = 'Password. . .'/><br/>
							<span id = 'xlname'>&nbsp;&nbsp;</span><input type = 'text' name = 'lname' id = 'lname' placeholder = 'Last name. . .'/>
							<span id = 'xcon_password'>&nbsp;&nbsp;</span><input type = 'password' name = 'con_password' id = 'con_password' placeholder = 'Confirm password. . .'/><br/><br/>
							<input type = 'submit' value = 'Submit' name = 'btn-submit' class = 'btn btn-success' style = 'margin-left:7px'>
							<input type = 'reset' value = 'Reset' class = 'btn' id = 'reset'><br/>
							<a href="#loginModal" data-toggle = 'modal' class = 'btn btn-primary' style = 'font-size: 22; width: 20%; height: 28; padding-top: 10;'>Log in</a>
					</form>
					<!-- End Registration Form -->

					<!-- Start Modal -->
					<div class = 'modal hide fade' id = 'loginModal'>
						<div class = 'modal-header' style = 'height:20%; background-color: lightblue'>
							<h1 style = 'font-size: 83px; margin: 31px 130px;'>Login</h1>
						</div>
						<div class = 'modal-body' style = 'height: 33%; background-color: cornflowerblue;'>
							<input type = 'email' id = 'email' placeholder = 'Email add. . .' class = 'span3' style = 'height: 60px; width: 62%; margin: 6 0px 21px 32px; font-size: larger; font-weight: 900; letter-spacing: 5px;' /><br/>
							<input type = 'password' id = 'pass' placeholder = 'Password. . .' class = 'span3' style = 'height: 60px; width: 62%; margin: 6 0px 21px 170px; font-size: larger; font-weight: 900; letter-spacing: 5px; ' /><br/>
						</div>
						<div class = 'modal-footer' style = 'height: 52px; background-color: lightblue;'>
							<button class = 'btn' data-dismiss = 'modal' style = 'width: 35%; height: 55px; font-size: 33px; margin-right:62px' />Cancel</button>
							<button id = 'submit-for-modal' class = 'btn btn-success' style = 'width: 35%; height: 55px; margin-right:45px; font-size: 33px;'>Submit</button>
						</div>
					</div>
					<!-- End Modal -->
				</div>
			</div>
		</div>
		<script src = 'js/jquery-1.8.3.js' /></script>
		<script src = 'js/bootstrap.js' /></script>
		<script src = 'js/my_js.js' /></script>
	</body>
</html>