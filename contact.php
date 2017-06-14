<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Sodefemar</title>
	<meta charset="utf-8">
	<meta name="description" content="Sodefemar" />
	<meta name="keywords" content="Sodefemar" />
	<meta name="author" content="Sodefemar" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">          
	<link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<!-- navbar -->
	<div class="navbar-fixed">
		<nav class="white">
			<div class="container nav-wrapper">
			  <a href="#!" class="brand-logo">
			  	<img src="imgs/logo.png" alt="hotel targante logo">
			  </a>
			  <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons grey-text text-darken-2">menu</i></a>
			  <ul class="right hide-on-med-and-down">
			    <li><a href="index.html">Accueil</a></li>
			    <li><a href="agences.html">Societé</a></li>
			    <li class="active"><a class="active" href="contact.php">Contact</a></li>
			  </ul>
			  <ul class="side-nav" id="mobile-demo">
			    <li><a href="index.html">Accueil</a></li>
			    <li><a href="agences.html">Societé</a></li>
			    <li class="active"><a class="active" href="contact.php">Contact</a></li>
			  </ul>
			</div>
		</nav>
	</div><!-- /end navbar -->
	<!-- First Title -->
	<div class="contact_bg agences">
		<div class="container">
			<h1>Contactez <span>Nous</span></h1>
		</div>
	</div><!-- /end First Title -->
	<!-- Content -->
	<div class="container">
		<div class="row">
			<?php
				$va_email="";
				if(isset($_POST['submit']) && isset($nom) && isset($email) && isset($message)){
					$nom=$_POST['nom'];
					$email=$_POST['email'];
					$message=$_POST['message'];
					$to = "nabaoui.abderrahim@gmail.com"; 
					$subject = "$nom";
					$body = "$message"; 
					$headers = "From: $email\n"; 
					$headers .= "Reply-To: $to";
					mail($to,$subject,$body,$headers);
					$va_email= "<span class='valid'>Votre email est bien envoyé</span>";
				}
			 ?>
		    <form action="" method="post" class="col s12">
				<?php echo $va_email; ?>
		      <div class="row">
		        <div class="input-field col m6 s12">
		          <i class="material-icons prefix">account_circle</i>
		          <input name="nom" id="nom" type="text" class="validate" required>
		          <label for="nom">Nom Complet</label>
		        </div>
		        <div class="input-field col m6 s12">
		          <i class="material-icons prefix">email</i>
		          <input name="email" id="email" type="email" class="validate" required>
		          <label for="email">Email</label>
		        </div>
		        <div class="input-field col s12">
		          <i class="material-icons prefix">mode_edit</i>
		          <textarea name="message" id="icon_prefix2" class="materialize-textarea" required></textarea>
		          <label for="icon_prefix2">Message</label>
		        </div>
		      </div>
		      <button class="btn-large waves-effect waves-light indigo" type="submit" name="submit">Envoyer
			    <i class="material-icons right">send</i>
			  </button>
		    </form>
		</div>
		<div id='Sodefemar'></div>
	</div>
	<!-- Footer -->
	<footer>
    	<div class="container bg_footer">
	    	<div class="row">
	    		<div class="col s12 m6 l4">
	        		<div class="card-panel">
			        	<img src="imgs/logo.png" alt="sodefemar logo">
			        	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			        	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			        	quis nostrud exercitation.</p>
	        		</div>
	    		</div>
	    	</div>
    	</div>
    	<div class="copy_right">
			<div class="container">
				<div class="row">
					<div class="col m5 s12">
						<span>Développer par l'agence <a target="_blank" href="http://www.fikralabs.com">fikralabs</a></span>
					</div>
					<div class="col m7 s12">
						<span>Tous droits réservés © 2016 Sodefemar</span>
					</div>
				</div>
			</div>
		</div>
    </footer>
    <script src='https://maps.googleapis.com/maps/api/js?key=&sensor=false&extension=.js'></script> 
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
	<script type="text/javascript" src="js/index.js"></script>
</body>
</html>