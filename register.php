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
		<form action="includes/signup.php" method="post">
			<label>Username</label>
			<input type="text" name="username" placeholder="Enter your nickname">

			<label>Login</label>
			<input type="text" name="login" placeholder="Enter login">

			<label>Email</label>
			<input type="email" name="email" placeholder="Enter email">

			<label>Password</label>
			<input type="password" name="password" placeholder="Enter password" required  pattern="^\S*(?=\S{8,30})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$" title="Пароль должен содержать минимум 8 символов, исключительно латинских, 1 строчную букву, 1 прописную и 1 цифру ">

			<label>Confirm Password</label>
			<input type="password" name="password_confirm" placeholder="Enter password" required >
			<button type="submit">Register</button>
			<p>
				Have an account? <a href="index.php">Sign In!</a>
			</p>
			
			<?php 
				if (!empty($_SESSION['message'])) {
					if ($_SESSION['message']==='Passwords do not match') {
						echo '<p class="msg">' . $_SESSION['message'] . '</p>';
						unset($_SESSION['message']);
					}
					
				}
				
			?>
			
		</form>
	
	
	</body>
</html>

