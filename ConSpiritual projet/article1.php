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

	      <h4 class="h4 mb-4">Procedure de l'obtention d'un terrain en cote d'ivoire</h4>

	      <p class="font-weight-normal">Pour pouvoir Etre Propriétaire d'une surface a construire à Abidjan,il y a deux cas:
			Procédure d'Obtention d'un terrain Villageois:<br>

			Tout commence par l'information de la vente d'un Terrain appartenant à un particulier.
			Vous rentrer en contact avec le propriétaire.Ici il y a deux cas de figure.
			Dans ces deux cas vous auriez forcement besoin de l'approbation et l'accord du Chef de Village.Donc toutes les démarches se feront auprès du comité villageois.<br>

			Dans le premier cas le propriétaire se sert comme preuve d'une Attestation Villageoise.Ce document est délivré par le comité Villageois.La ville d'Abidjan dans le cadre de son extension s'approprie certains terrains appartenant à des localités proches,localités devenant victimes de l'urbanisme.
			Donc pour dédommager ces communautés villageoise des terres sont attribués directement au village.Le comité Villageois se charge de partager ces terres équitablement aux nombres de familles présents dans le village. Un document garantie cet acte: L'Attestation Villageoise.Généralement tous les autres membres du village reconnaissent le terrain de toutes les familles présentent dans le village.<br>

			Puisque les terres attribués aux villageois par le Ministère de l'Urbanisme sont inclus dans le programme d'extension de la ville,il est du ressort des villageois d'aller se faire enregistrement normalement au District D’Abidjan en vue de régulariser leur terrain.Cette information est généralement connu des villageois mais certains faute de moyens ou de problèmes de longues procédures administratives s'en passent.
			Pour un villageois ayant suivi les recommandations,il lui est délivre un document dénommé " Lettre D'attribution" délivré par le DISTRICT D'ABIDJAN.<br>
			Ainsi dans le cas d'une procédure d'achat de terrain villageois,soit le villageois vous tendra comme preuve propriétaire une ATTESTATION VILLAGEOISE soit une LETTRE D'ATTRIBUTION. Donc comme je le disais plus haut il y a deux cas de figure.Toutefois,dans les deux cas ,le comité Villageois et le Chef de Village sont les seuls vrais témoin et approbateur avant tout achat de terrain villageois.<br>

			Le seul fait d'avoir acheter un terrain avec comme document une Attestation villageoise ou une Lettre d'Attribution ,n'implique forcement que nous avions le feu vert pour construire.Non!!!!!!.
			Dans le cadre de l'Urbanisation de la ville D’Abidjan,les constructions doivent obéir à une règle.C'est pourquoi vous êtes appelez encore à faire des démarches d'Obtention de Document d'autorisation,entre autre:
			-La Délivrance D'ACP ( Arrêté de Construire Provisoire.) Délivré par le Ministère de la Construction.
			Ensuite pour devriez avoir le :<br>
			-PERMIS DE CONSTRUIRE.<br>
			Par la suite vous seriez appeler à avoir:<br>
			-Le TITRE FONCIER, Délivré par les bons soins du ministère de la Construction et la Direction Générale des Impôts (DGI).
			Enfin,vous auriez besoin du:<br>
			-Certificat de Propriété,Délivré par le Ministère de la Construction.<br>

			Procédure d'Obtention d'un terrain avec un Tiers Propriétaire:<br>
			Pour l'achat de Terrain avec une personne qui aimerait revendre le sien,les démarches sont simples.
			L'ancien propriétaire devra présenté son Titre foncier.Un notaire recommandé après approbation validerait les transaction d'achat et de vente.<br>
			Évidemment des vérifications d'usages se feront auprès des Ministères accrédités.<br>

			Les Nouveautés<br>
			Ces dernières années une nouvelle formule a été mise en place.L'Actuel Arrêté de Construction Définitive ou ACD est la dernière formule tout-en-un que le Ministère de la Construction et de l'Urbanisme vient de mettre en place.Avec ce seul document vous pouvez mettre votre terrain en valeur: Le nouveau ACD englobe en quelque sorte à la fois l'ancien ACP, l'Ancien Lettre d'Attribution et l'Ancien Certificat de Titre Foncier.
			Pour faire simple, si vous aviez un ACD datant de 2015, votre ACD fait à la fois office de Certificat foncier.Le Gouvernement ayant estimé que les procédures anciennes étaient longues et fastidieuses.
			Les nouveautés de cette dernière formule réside dans la sécurité et surtout l'informatisation et la vérification en ligne.<br><br>

			Source : abidjansolution.biz.</p>
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