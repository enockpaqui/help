<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="">
		<title>Inscription</title>
	</head>

	<body>
		<div>
			<h1>Inscription</h1>
			<div>
				<a href="index.php">Connexion</a>
			</div>
		</div>
		<div>
			<div>
				<form action="signin_treat.php" method="post">
					<label for="">username:</label>
					<input type="text" name="username"></br></br>
					<label for="">email:</label>
					<input type="text" name="email"></br></br>
					<label for="">password:</label>
					<input type="password" name="password"></br></br>
					<input type="submit" value="S'inscrire">

					
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