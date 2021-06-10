<?php 
session_start();

	include_once ("bdd.php");
	$username = $_POST["username"];
	$email = $_POST["email"];
	$password = $_POST["password"];

	$requete = $bdd->prepare("INSERT INTO users(username,email,password) VALUES(:username,:email,:password)");
	$requete ->execute(array(
		":username" => $username,
		":email" => $email,
		":password" => password_hash($password, PASSWORD_DEFAULT)
	));
	if ($requete) {
		header('location:signin.php?message=Enregistrement effectué');
	}else{
		echo 'Erreur';
	}
	$requete = null;
   $bdd = null;
   

 ?>