<?php 
 mysql_connect("localhost", "root", "root"); // Connesion à la base de données
 mysql_select_db("bdd"); // Sélection de la base de données

 $Login = $_POST['login']; 

 $Password = $_POST['pw1']; 
 
 // Insertion d'un enregistrement dans la table livre
 mysql_query ("INSERT INTO Users (Login,Password) VALUES ('$Login', '$Password')");
  
 mysql_close(); // On oubli pas de déconnecter la base de données
?>