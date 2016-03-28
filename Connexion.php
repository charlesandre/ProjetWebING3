<?php 
@ob_start();

	session_start();	

	$bdd = mysql_connect('localhost', 'root', 'root');
	if (!$bdd) 
		{
    die('Not connected : ' . mysql_error());
		}

	$db_selected = mysql_select_db('bdd', $bdd);
	if (!$db_selected) 
		{
    die ('Can\'t use foo : ' . mysql_error());
		}


	if (isset($_POST['formconnect']))
	{
		if(!empty($_POST['log']) AND !empty($_POST['pass']))
		{
			$login=$_POST['log'];
			$pass=$_POST['pass'];


			$result = mysql_query("SELECT * FROM Users WHERE Login = '$login' AND Password = '$pass'");
			$num_rows = mysql_num_rows($result);

			if($num_rows ==1)
			{
				$row = mysql_fetch_row($result);
				$_SESSION['ID'] = $row[0];
				$_SESSION['Login'] = $row[1];
				header('Location: home.php?id='.$_SESSION['ID']);

			}	
			else
			{
				$erreur = "Bad login or password";
			}		
		}	
		else
		{
			$erreur = "All fields must be completed";
		}
		
		
	}
 

?>


<html>
	<head>
		<meta charset="utf-8" />
		<title>Index</title>
		<link rel="stylesheet" href="style.css" />
		
	</head>


	<body>
	

	<div align="center">
		
		<br/>
		<form method="post" action ="" align ="center">
			<h1>Connexion</h1>
			<table align ="center">
				<tr>
					<td>
						<label for "login"> Login : </label>
					</td>
					<td>
						<input id ="login" type="text" name="log" placeholder="Your Login" />
					</td>
				</tr>
				
				<tr>
					<td>
						<label for "pass"> Password : </label>
					</td>
					<td>
						<input id ="pass" type="password" name="pass" placeholder="Your Password" />
					</td>
				</tr>
			</table>
				<br/>
				<input type = "submit" name="formconnect" value="Connect !"> </input> 
				<br/><br/>
				<?php
			if(isset($erreur))
			{
				echo '<font color = "red">'.$erreur. "</font>";
			}
			
			?> <br/>
			<a href="">Forgot your password ? </a> <p/>
			<a href="CreateAccount.php">Register</a>

		</form>
		

	</div>

		
		

	<div id="container">
			</div>

	<div id="bottom">
		Charles ANDRE - Antoine DIOULOUFFET - Alexandre TUBIANA - ECE PARIS - 2016
	</div>

	</body>

</html>


