<?php 
// Hachage du mot de passe
// Vérification des identifiants


$mysqli = new PDO("localhost", "root", "root", "bdd");

if ($mysqli->connect_errno) {
    printf("Échec de la connexion : %s\n", $mysqli->connect_error);
    exit();
}


 $Log = $_POST['login']; 

 $Password = $_POST['pw1']; 

 echo "tentative de connexion avec login : ";
 echo $Log;
 echo " et mot de passe : ";
 echo $Password;


$requser = $mysqli->prepare("SELECT * FROM Users WHERE Login = ? AND Password = ?");
$requser->execute(array($Log, $Password));
$userexist = $requser->rowCount();
if($userexist == 1)
	{
		echo "oklm";
	}
else
	{
		echo "Mauvais mail ou mot de passe";
	} 

?>