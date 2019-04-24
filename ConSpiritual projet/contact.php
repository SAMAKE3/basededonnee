<!DOCTYPE html>
<html>
<head>
	<title> Contact </title>
</head>
<body>

	<?php include"menu.php"; ?>
		<!--Section: Contact v.2-->
		<div class="container">
		<section class="mb-4">

		    <!--Section heading-->
		    <h2 class="h1-responsive font-weight-bold text-center my-4">Nous Contacter</h2>

		    <div class="row">

		        <!--Grid column-->
		        <div class="col-md-9 mb-md-0 mb-5">
		            <form id="contact-form" name="contact-form" action="mail.php" method="POST">

		                <!--Grid row-->
		                <div class="row">

		                    <!--Grid column-->
		                    <div class="col-md-6">
		                        <div class="md-form mb-0">
		                            <input type="text" id="name" name="name" class="form-control" required>
		                            <label for="name" class="">Votre Nom</label>
		                        </div>
		                    </div>
		                    <!--Grid column-->

		                    <!--Grid column-->
		                    <div class="col-md-6">
		                        <div class="md-form mb-0">
		                            <input type="text" id="email" name="email" class="form-control" required>
		                            <label for="email" class="">Votre Email</label>
		                        </div>
		                    </div>
		                    <!--Grid column-->

		                </div>
		                <!--Grid row-->

		                <!--Grid row-->
		                <div class="row">
		                    <div class="col-md-12">
		                        <div class="md-form mb-0">
		                            <input type="text" id="subject" name="subject" class="form-control" required>
		                            <label for="subject" class="">Sujet</label>
		                        </div>
		                    </div>
		                </div>
		                <!--Grid row-->

		                <!--Grid row-->
		                <div class="row">

		                    <!--Grid column-->
		                    <div class="col-md-12">

		                        <div class="md-form">
		                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea" required></textarea>
		                            <label for="message">Votre Message</label>
		                        </div>

		                    </div>
		                </div>
		            <div class="text-center text-md-left">
		                <a class="btn btn-primary" href="mailto: samake@gmail.com"> Envoyer </a>
		            </div>
		                <!--Grid row-->

		            </form>
		            <div class="status"></div>
		        </div>
		        <!--Grid column-->

		    </div>

		</section>
		</div>
		<!--Section: Contact v.2-->

	<?php include"footer.php"; ?>
</body>
</html>