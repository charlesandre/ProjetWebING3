<?php
session_start();
$bdd = mysql_connect('localhost', 'root', 'root');
$db_selected = mysql_select_db('bdd', $bdd);


if(isset($_GET['id']) AND $_GET['id']>0)
{
	$getid = intval($_GET['id']);
	$result = mysql_query("SELECT * FROM Users WHERE ID = '$getid'");
	$row = mysql_fetch_row($result);
	$login = $row[1];


?>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Index</title>
		<link rel="stylesheet" href="style.css" />
		<link href='http://fonts.googleapis.com/css?family=Dancing+Script:700' rel='stylesheet' type='text/css'>
		
	</head>

	<body>
		
		

	



		<div id="container">
			
			
		


		</div>
		<div>
			connecté sous le pseudo de :   <?php echo $login; ?>
		</div>
		<?php

			if(isset($erreur))
			{
				echo '<font color = "red">'.$erreur. "</font>";
			}
			
		?>
		












	</body>

	<footer>
		Charles ANDRE - Antoine DIOULOUFFET - Alexandre TUBIANA - ECE PARIS - 2016
	</footer>



</html>

<?php

}
else{
header("Location: Connexion.php");
}
?>