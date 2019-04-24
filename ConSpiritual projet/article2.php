<?php
    
    session_start();

?>


<!DOCTYPE html>
<html>
<head>
	<title> Article 1</title>
</head>
<body>

	<?php include"menuuser.php"; ?>

	<!-- News jumbotron -->
	<div class="jumbotron text-center hoverable p-4">

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

Pas question de s'engager à la hâte. Le choix d'un terrain à bâtir répond à une sélection rigoureuse. Parcelle individuelle ou lotissement, formalités, nature du sol, règles d'urbanisme... sont autant de points à vérifier pour réussir votre achat.<br>

A moins que vous n'en possédiez une, l'achat d'une parcelle reste le passage obligé de tout futur propriétaire. Encore faut-il la trouver. Où orienter ses recherches, à qui s'adresser, par où commencer ? Comment apprécier les qualités d'un terrain ? Autant d'interrogations qui jalonnent le parcours d'un acquéreur.<br>

La première des segmentations concerne le type de terrains. On fait généralement la distinction entre ceux dits isolés ou en secteur diffus, et ceux en lotissement. Si les premiers offrent bien plus de libertés que les seconds, ils offrent également bien moins de garanties.<br>

Mener vos investigations
Après avoir longuement mûri votre projet de construction, vous venez d'activer la phase de recherche de votre terrain. Petites annonces, bouche à oreille, aménageurs-lotisseurs, service de l'urbanisme... ne négligez aucune ressource pour vous aider à dénicher l'emplacement de vos rêves.<br>

Le terrain à la loupe<br>
Bien situé, idéalement exposé, ni trop grand, ni trop petit. Vous croyez avoir déniché la perle rare. Pas de précipitations. Un beau terrain n'est pas synonyme de bon terrain. Pour avoir oublié cette règle, quelques acquéreurs ont vu leur projet contrarié ou remis en cause. Situation, constructibilité, nature du sol, viabilisation, la prise en compte des aspects les plus techniques est déterminante pour le bon déroulement de votre projet.<br>

Parcelle isolée ou lotissement<br>
Le terrain en lotissement offre d'indéniables atouts. Constructible et livré prêt à bâtir, il est en outre assorti de nombreux équipements et s'inscrit dans un environnement paysager de qualité. Mais son acquisition implique le respect d'un strict cahier des charges. Le terrain isolé, hors lotissement, ne provient d'aucune division foncière. La transaction se fera généralement auprès d'un particulier et à la condition de soumettre un projet en adéquation avec les règles d'urbanisme en vigueur, vous avez l'assurance d'une liberté de réalisation.</p><br><br>
	      <p class="font-weight-normal">by <a><strong>Ali Soro</strong></a>, 24/04/2019</p><br><br><br>

	      <p class="h4 mb-4"> Preoccupations </p>

	      			        <div class="col">

			            <p style="text-align: center; font-weight: bold;"> <?php echo $_SESSION['nom']; ?> <?php echo $_SESSION['prenom']; ?>, Avez vous des preoccupations? Veillez nous contacter en cliquant sur le lien ci-dessous</p>
			        </div>
			        <a href="contactuser.php"><button class="btn btn-info my-4 btn-block" type="submit" name="envoyer"> Envoyer </button></a>


	    </div>
	    <!-- Grid column -->

	  </div>
	  <!-- Grid row -->

	</div>
	<!-- News jumbotron -->



	<?php include"footer.php"; ?>
</body>
</html>