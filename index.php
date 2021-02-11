<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Presigram</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="./assets/images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="./assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="./assets/vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="./assets/vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="./assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="./assets/css/main.css">
</head>
<body>


	<div class="container-contact100">

		<div class="wrap-contact100">
			<form class="contact100-form validate-form" method="POST">
				<span class="contact100-form-title">
					#PRESIGRAM<br>
					<span class="subtitle">générateur de photos présidentielles</span>
				</span>
				<img class="drapeau" src="./assets/img/bbr.png">

				<div class="wrap-input100 validate-input" data-validate = "Merci d'entrer un verbe">
					<input class="input100 input-form" type="text" name="verbe" id="verbe" placeholder="Verbe (max. 20 caractères)">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Merci d'entrer un COD">
					<input class="input100 input-form" type="text" name="adverbe" id="adverbe" placeholder="Complément d'objet direct (max. 20 caractères)">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Merci de choisir une image de fond">
                    <label for="file-upload" class="input100">
                        <i class="fa fa-cloud-upload"></i> Choisir une image de fond
                    </label>
					<input class="input100 input-file input-form" type="file" name="file" id="file-upload" placeholder="Phone">
					<span class="focus-input100"></span>
				</div>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn" type="button">
						<span>
							<i class="fa fa-camera"></i> 
							Télécharger
						</span>
					</button>
				</div>
				<p class="footer">Presigram © Morgan Jacquet - <a href="#">Mentions légal</a></p>
			</form>
			
		</div>
		
	</div>
	<script src="./assets/js/download.js"></script>
	<script src="./assets/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="./assets/vendor/animsition/js/animsition.min.js"></script>
	<script src="./assets/vendor/bootstrap/js/popper.js"></script>
	<script src="./assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="./assets/js/main.js"></script>

</body>
</html>
