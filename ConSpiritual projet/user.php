<?php
    
    session_start();

?>


<!DOCTYPE html>
<html>
<head>
	<title> Tableau de bord </title>
</head>
<body>

	<?php include"menuuser.php"; ?>

	<p style="text-align: center; font-weight: bold; font-size: 25px; margin-top: 30px;">Bienvenu <?php echo $_SESSION['nom']; ?> <?php echo $_SESSION['prenom']; ?></p>

	<div class="container-fluid">
		<div class="row">
						<!-- News jumbotron -->
			<div class="jumbotron text-center hoverable p-4 col-md-6">

			  <!-- Grid row -->
			  <div class="row">

			    <!-- Grid column -->
			    <div class="col-md-4 offset-md-1 mx-3 my-3">

			      <!-- Featured image -->
			      <div class="view overlay">
			        <img src="img/terrainAvendre.jpg" class="img-fluid" alt="Sample image for first version of blog listing">
			        <a>
			          <div class="mask rgba-white-slight"></div>
			        </a>
			      </div>

			    </div>
			    <!-- Grid column -->

			    <!-- Grid column -->
			    <div class="col-md-7 text-md-left ml-3 mt-3">

			      <!-- Excerpt -->

			      <h4 class="h4 mb-4"> Procedure de l'obtention d'un terrain en cote d'ivoire</h4>

			      <p class="font-weight-normal">Pour pouvoir Etre Propriétaire d'une surface a construire à Abidjan,il y a deux cas:
					Procédure d'Obtention d'un terrain Villageois:<br>
					Tout commence par l'information de la vente d'un Terrain appartenant à un particulier.
					Vous rentrer en contact avec le propriétaire.Ici il y a deux cas de figure.
					Dans ces deux cas vous auriez forcement besoin de l'approbation et l'accord du Chef de Village.Donc toutes les démarches se feront auprès du comité villageois.</p>
			      <p class="font-weight-normal">by <a><strong>Ali Soro</strong></a>, 24/04/2019</p>

			      <a class="btn btn-success" href="article1.php"> Lire plus </a>

			    </div>
			    <!-- Grid column -->

			  </div>
			  <!-- Grid row -->

			</div>
			<!-- News jumbotron -->
			<!-- News jumbotron -->
			<div class="jumbotron text-center hoverable p-4 col-md-6">

			  <!-- Grid row -->
			  <div class="row">

			    <!-- Grid column -->
			    <div class="col-md-4 offset-md-1 mx-3 my-3">

			      <!-- Featured image -->
			      <div class="view overlay">
			        <img src="img/terrain.jpg" class="img-fluid" alt="Sample image for first version of blog listing">
			        <a>
			          <div class="mask rgba-white-slight"></div>
			        </a>
			      </div>

			    </div>
			    <!-- Grid column -->

			    <!-- Grid column -->
			    <div class="col-md-7 text-md-left ml-3 mt-3">

			      <!-- Excerpt -->

			      <h4 class="h4 mb-4"> Les étapes à suivre avant d’acheter un terrain en Côte d'Ivoire </h4>

			      <p class="font-weight-normal">Avez-vous déjà pensé à acheter un terrain? Beaucoup de personne y ont déjà songé mais se sont vu freiné du fait d’un manque de connaissance et par peur du risque d’un tel achat. Lamudi, le site immobilier numéro 1 en Afrique vient à votre secours.<br>

				Pas question de s'engager à la hâte. Le choix d'un terrain à bâtir répond à une sélection rigoureuse. Parcelle individuelle ou lotissement, formalités, nature du sol, règles d'urbanisme... sont autant de points à vérifier pour réussir votre achat...</p>
			      <p class="font-weight-normal">by <a><strong>Ali Soro</strong></a>, 24/04/2019</p>

			      <a class="btn btn-success" href="article2.php"> Lire plus </a>

			    </div>
			    <!-- Grid column -->

			  </div>
			  <!-- Grid row -->

			</div>
			<!-- News jumbotron -->
		</div>
	</div>



	<?php include"footer.php"; ?>
</body>
</html>