<?php session_start();  ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="">
		<title>Ma première page</title>
	</head>
	<body>
		<p>Coucou, <?php echo $_SESSION['username']; ?></p>
		<p><a href="logout.php">Se déconnecter</a></p>
	</body>
</html>