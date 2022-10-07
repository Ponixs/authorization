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
		<form action="includes/confirmail.php" method="post">

			<label>Enter your email</label>
			<input type="email" name="email" placeholder="Enter email">
			
			<button type="submit">mail check</button>

			

			<?php 
				if (!empty($_SESSION['message'])) {
					
						echo '<p class="msg">' . $_SESSION['message'] . '</p>';
						unset($_SESSION['message']);
					}
				
			?>

		</form>
	
	
	</body>
</html>
