<?php 
try{
	$bdd = new PDO("mysql:host=localhost;dbname=anime","root","",
		array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
} 
catch(PDOException $e){
	
	die('Erreur: '.$e->getMessage());
} 
 ?>