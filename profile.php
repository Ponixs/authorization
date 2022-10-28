<?php
	session_start();
	if (empty($_SESSION)) {
		header("Location: register.php",true,302);
	}
	else {
		if($_SESSION['user']['Token']<(time())){
		$_SESSION['message']='Your session has expired';
		header('Location: index.php');
		}
		if($_SESSION['user']['pass']<time())header('Location: password_change.php');
	}
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
			
			<div>Your name: <?= $_SESSION['user']['username'] ?></div>
			<a href="#">  <?=$_SESSION['user']['email'] ?></a>
			<button tipe ="submit"><b>leave<hr></b></button>

		</form>
	
	
	</body>
</html>

