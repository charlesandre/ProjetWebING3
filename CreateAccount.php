<html>
	<head>
		<meta charset="utf-8" />
		<title>Index</title>
		<link rel="stylesheet" href="style.css" />
		<link href='http://fonts.googleapis.com/css?family=Dancing+Script:700' rel='stylesheet' type='text/css'>
		
	</head>


	<body>
	
/*
	<div align="center">
		<h1>Inscription</h1>
		<br/><br/>
		<form method="POST" action ="" align ="center">
			<br/> <br/>
			<table align ="center">
				<tr>
					<td>
						<label for "login"> Login : </label>
					</td>
					<td>
						<input id ="inputbox" type="text" name "login" placeholder="Your Login" />
					</td>
				</tr>
				<tr>
					<td>
						<label for "email"> E-mail : </label>
					</td>
					<td>
						<input id ="inputbox" type="text" name "email" placeholder="Your E-Mail" />
					</td>
				</tr>
				<tr>
					<td>
						<label for "pass"> Password : </label>
					</td>
					<td>
						<input id ="inputbox" type="password" name "pass" placeholder="Your Password" />
					</td>
				</tr>
				<tr>
					<td>
						<label for "pass"> Repeat Your Password : </label>
					</td>
					<td>
						<input id ="inputbox" type="password" name "pass2" placeholder="Your Password" />
					</td>
				</tr>
			</table>
		</form>

	</div>

		

	<div id="container">

	</div>

	<div id="bottom">
		Charles ANDRE - Antoine DIOULOUFFET - Alexandre TUBIANA - ECE PARIS - 2016
	</div>

	</body>

</html>

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