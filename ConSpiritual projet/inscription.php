<?php
    
    $serveur = "localhost";
    $login = "root";
    $pass = "";
    $connexion = new PDO("mysql:host=$serveur;dbname=construction", $login, $pass);


    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $nom = verifyInput($_POST["nom"]);
        $prenom = verifyInput($_POST["prenom"]);
        $phone = verifyInput($_POST["phone"]);
        $email = verifyInput($_POST["email"]);
        $password = verifyInput($_POST["password"]);
        $message = "votre inscription été valider";

        

        if (!empty($nom) AND !empty($prenom) AND !empty($email) AND !empty($password) AND !empty($phone))
        {

            $Requet = $connexion->Prepare("INSERT INTO inscription(nom, prenom, email, password, phone) Values(?,?,?,?,?)");
            $Requet->execute(array($nom ,$prenom ,$email ,$password ,$phone));
            echo "<h5 color='green;'> $message </h5>";
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
	<title> Inscription </title>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
  <!-- Bootstrap core CSS -->
     <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.6/css/mdb.min.css" rel="stylesheet">
</head>
<body>

	<?php include "menu.php"; ?>

	<!-- Default form register -->
<form class="text-center border border-light p-5" action="" method="POST">

    <p class="h4 mb-4"> INSCRIPTION</p>


    <div class="form-row mb-4">
        <div class="col">
            <!-- First name -->
            <input type="text" id="defaultRegisterFormFirstName" class="form-control" placeholder="Nom" name="nom" required>
        </div>
        <div class="col">
            <!-- Last name -->
            <input type="text" id="defaultRegisterFormLastName" class="form-control" placeholder="Prenom" name="prenom" required>
        </div>
    </div>

    <!-- E-mail -->
    <div>
        <input type="email" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="E-mail" name="email" required>
    </div>

    <!-- Password -->
    <div>
        <input type="password" id="defaultRegisterFormPassword" class="form-control" placeholder="Mot de passe" aria-describedby="defaultRegisterFormPasswordHelpBlock" name="password" required>
    </div>

    <hr>

    <!-- Phone number -->
    <div>
        <input type="text" id="defaultRegisterPhonePassword" class="form-control" placeholder="Numero de telephone" aria-describedby="defaultRegisterFormPhoneHelpBlock" name="phone" required>
    </div>

    <!-- Sign up button -->
    <button class="btn btn-info my-4 btn-block" type="submit" name="envoyer">Envoyer</button>
</form>
<!-- Default form register -->

    <?php include"footer.php"; ?>

</body>
</html>