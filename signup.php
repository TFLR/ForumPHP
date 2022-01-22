<?php require('actions/users/signupinAction.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/style.css">
    <title>Forum</title>
</head>
<body>  
<?php if(isset($errorMsg)){echo $errorMsg.'</p>';} ?>
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="#" method="POST">
			<h1>Create Account</h1>
			<div class="social-container">
			</div>
			<span>or use your email for registration</span>
			<input type="text" placeholder="Username" name="username"/>
			<input type="email" placeholder="Email" name="email"/>
			<input type="password" placeholder="Password" name="password"/>
			<button type="submit" name="validate">Sign Up</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="#" method="POST">
			<h1>Sign in</h1>
			<div class="social-container">
			</div>
			<span>or use your account</span>
			<input type="email" placeholder="Email" name="email1"/>
			<input type="password" placeholder="Password" name="password1"/>
			<a href="#">Forgot your password?</a>
			<button type="submit" name="validate1">Sign In</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!</h1>
				<p>Enter your personal details and start journey with us</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>
<script src="./assets/javascript.js"></script>
</body>
</html>