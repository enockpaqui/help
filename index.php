<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="">
		<title>Connexion</title>
	</head>

	<body>
		<div>
			<h1>Connexion</h1>
			<div>
				<a href="signin.php">Inscription</a>
			</div>
		</div>
		<div>
			<div>
				<form action="login_treat.php" method="post">
					<label for="">username:</label>
					<input type="text" name="username"></br></br>
					<label for="">password:</label>
					<input type="password" name="password"></br></br>
					<input type="submit" value="Connexion">

					<?php 
							if (isset($_GET['message'])) {
								echo '<p>'. $_GET['message']. '</p>';
								echo '<br />'. '<br />';
							}
					 	?>
				</form>
			</div>
		</div>
	</body>
</html>