<?php
	session_start();
	if ($_COOKIE['cook']=="") {
		header('Location: index.php');
	}
	setcookie("cook","cook",time()+20);
?>
<html>
	<head>
		<title>The best website</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="assets/CSS/main.css">

	</head>
	<body>
		<form action="password_change.php" method="post" >
			<button class="but" tipe ="submit"><em>Want to change your password?</em></button>
		</form>
		<form action="index.php" method="post">
			
			<h4>Your name: <?= $_SESSION['user']['username'] ?></h4>
			<a href="#">  <?=$_SESSION['user']['email'] ?></a>
			<button tipe ="submit"><b>leave<hr></b></button>

		</form>
	
	
	</body>
</html>

