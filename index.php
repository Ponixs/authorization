<?php
	session_start();
?>
<html>
	<head>
		<title>The best website</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="assets/CSS/main.css">

	</head>
	<body>
		<form action="includes/signin.php" method="post">
			<label>Login</label>
			<input type="text" name="login" placeholder="Enter login">
			<label>Password</label>
			<input type="password" name="password" placeholder="Enter password">
			<a href="forgotpass.php">Forgot your password?</a>
			<button type="submit">Join</button>

			<p>
				don't have an account? <a href="register.php">Sign up!</a>
			</p>

			<?php 
				if (!empty($_SESSION['message'])) {
					if ($_SESSION['message']==='You are registered'||$_SESSION['message']==='incorrect login or password'||$_SESSION['message']==='You have changed your password!') {
						echo '<p class="msg">' . $_SESSION['message'] . '</p>';
						unset($_SESSION['message']);
					}
					
				}
				
			?>

		</form>
	
	
	</body>
</html>

