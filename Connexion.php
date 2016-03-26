<?php 
// Hachage du mot de passe
// Vérification des identifiants


$mysqli = new mysqli("localhost", "root", "root", "bdd");

if ($mysqli->connect_errno) {
    printf("Échec de la connexion : %s\n", $mysqli->connect_error);
    exit();
}


 $Login = $_POST['login']; 

 $Password = $_POST['pw1']; 


$result = $mysqli->query("SELECT ID FROM Users WHERE (Login = 'Login')");



if (!$result)
{
    echo 'Mauvais identifiant ou mot de passe !';
}
else
{
    session_start();
    $_SESSION['ID'] = $resultat['ID'];
    $_SESSION['Login'] = $pseudo;
    echo 'Vous êtes connecté !';
}
?>