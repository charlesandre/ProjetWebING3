<?php 


$mysqli = new mysqli("localhost", "root", "root", "bdd");

if ($mysqli->connect_errno) {
    printf("Échec de la connexion : %s\n", $mysqli->connect_error);
    exit();
}

 $Login = $_POST['login']; 

 $Password = $_POST['pw1']; 
 
 // Insertion d'un enregistrement dans la table livre
$mysqli->query("INSERT INTO Users (Login,Password) VALUES ('$Login', '$Password')");
  
 $mysqli->close(); // On oubli pas de déconnecter la base de données
?>