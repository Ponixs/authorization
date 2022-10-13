<?php
	session_start();
	if($_SESSION['user']['Token']<(time()))header('Location: index.php');
?>
<html>
	<head>
		<title>The best website</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="assets/CSS/main.css">

	</head>
	<body>
		<form action="includes/passch.php" method="post">
			<label>Enter your login</label>
			<input type="text" name="login" placeholder="Enter login">
			<label>Enter a new password</label>
			<input type="password" name="password" placeholder="Enter password" required  pattern="^\S*(?=\S{8,30})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$" title="Пароль должен содержать минимум 8 символов, исключительно латинских, 1 строчную букву, 1 прописную и 1 цифру ">
			<button type="submit">Сhange</button>

		</form>
	
	
	</body>
</html>
