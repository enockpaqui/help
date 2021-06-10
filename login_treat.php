<?php 
	include_once ("bdd.php");

$rs = $bdd->prepare("SELECT * FROM users");
			$rs->execute();

			$resultat = $rs->fetchall();

			echo '<pre>';
			print_r($resultat);
			echo '</pre>'; 
?>

<?php 
	session_start();

	include_once ("bdd.php");
	$rs = $bdd->prepare("SELECT username,password FROM users");
			$rs->execute();

	if (isset($_POST['username']) && isset($_POST['password'])) {
		if (!empty($_POST['username']) && !empty($_POST['password'])) {
			$valide = false;

			while ($resultat = $rs->fetch()) {
				if ( $resultat['username'] == $_POST['username'] AND password_verify($_POST['password'], $resultat['password']))
				{
					$valide = true;
					$_SESSION['username'] = $_POST['username'];
				}
				else{
					header('location:index.php?message=Username ou mdp invalides');
				}
			}
			if ($valide == true) {
				header('location:first.php');
			}
			
		}
		else{
			header('location:index.php?message=Username et mdp vides');

		}
	}
	
 ?>

 

    
