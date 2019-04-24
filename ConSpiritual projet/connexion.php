<?php

	session_start();

	$server = "localhost";
	$login = "root";
	$pass = "";

	$connexion = new PDO("mysql:host=$server;dbname=construction", $login, $pass);

	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		
		$email = verifyInput($_POST["email"]);
		$password = verifyInput($_POST["password"]);
		$messageError = "Ce compte n existe pas";


		if(!empty($email) AND !empty($password))
		{
			$mdp = $_POST['password'];
			$email = $_POST['email'];
			$requete = $connexion->prepare("SELECT * FROM inscription WHERE email = ? AND password =?");
			$requete->execute(array($email,$mdp));
			$exist = $requete->rowCount();
			if( $exist == 1)
			{
				$userinfo = $requete->fetch();

				$_SESSION['id'] = $userinfo['id'];
				$_SESSION['nom'] =$userinfo['nom'];
				$_SESSION['prenom'] = $userinfo['prenom'];
				header("Location:user.php?id=".$_SESSION['id']);
				
			}
		else
		{
		echo "<h5 color='green;'> $messageError </h5>";
		}

		}
		
	}

	

	function verifyInput($var)
	{
		$var = trim($var);
		$var = stripcslashes($var);
		$var = htmlspecialchars($var);

		return $var;
	}



?>



<!DOCTYPE html>
<html>
<head>
	<title> Connexion </title>
</head>
<body>
	<?php include "menu.php"; ?>

	<!-- Default form login -->
	<form class="text-center border border-light p-5" action="" method="POST" style="margin-bottom: 80px;">

	    <p class="h4 mb-4">Se Connecter</p>


	    <!-- Email -->
	    <input type="email" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="E-mail" name="email" required>

	    <!-- Password -->
	    <input type="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Password" name="password" required>

	    <!-- Sign in button -->
	    <button class="btn btn-info btn-block my-4" type="submit"> Connexion </button>

	    <!-- Register -->
	    <p>pas encore inscris ?
	        <a href="inscription.php">inscris toi</a>
	    </p>	
	</form>
	<!-- Default form login -->


	<?php include "footer.php"; ?>
</body>
</html>