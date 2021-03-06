<?php
require_once 'controller.php';
?>
<!DOCTYPE html>
<html>
	<head>
    	<title>CV de Maryanne</title>
    	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  		<link rel="stylesheet" type="text/css" href="/css/style.css" media="screen" />
  		<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
     	 rel="stylesheet">
     	 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster">
     	 <script src="https://use.fontawesome.com/13efbd30e6.js"></script>
	</head>
	<body id="body">

    <?php
    if ($view) {
        include ('view/'.$view);
    }
    ?>

	<div id="header-container">

		<div class="titles">
	  		<h1 class="titlestyle">Maryanne Audran</h1>
	  		<h2 class="txtstyle">Présentation</h2>
		</div>

	</div>

	<div id="page">

		<div id="sidebar-container">

			<div class="img-container">
		   	 	<img src="/img/avatar.png">
		   	</div>

		   	<div class="details">

		   	 	<div class="coordonnees"><i class="fa fa-birthday-cake" aria-hidden="true"></i> 22 ans </div>
		   	 	<div class="coordonnees"><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:maryanne.audran@gmail.com" class="mail-to"> maryanne.audran@gmail.com </a></div>
		   	 	<div class="coordonnees"><i class="fa fa-map-marker" aria-hidden="true"></i> 4 rue Françoise Dolto 56400 Le Bono</div>
		   	 	<div class="coordonnees"><i class="fa fa-phone" aria-hidden="true"></i> 06 40 21 10 97</div>
		   	 	<div class="coordonnees"><i class="fa fa-car" aria-hidden="true"></i> Permis B</div>
		   	 	<div class="coordonnees"><i class="fa fa-check" aria-hidden="true"></i> Véhicule personnel</div>

		   	</div>

		   	<div class="languages">

				<h2 class="titlestyle">Langues</h2>
				<p class="languages"><b class="txtcolor">Anglais :</b> Courant</p>
				<p class="languages"><b class="txtcolor">Allemand :</b> Notions</p>

			</div>

			<div class="computer-skills">

				<h2 class="titlestyle">Informatique</h2>
				<p class="computer-skills"><b class="txtcolor">Java (Android) - SQLite :</b> Notions</p>
				<p class="computer-skills"><b class="txtcolor">PackOffice :</b> Maîtrise</p>

			</div>

			<div class="literature">
		 		<h2 class="titlestyle">Lecture</h2>
		 		<div>Classiques francophones et anglophones, fantasy</div>
	 		</div>

	 		<div class="culture">
	 			<h2 class="titlestyle">Activités culturelles</h2>
	 			<div class="culture">Concerts réguliers, voyages (Europe)</div>
	 		</div>

	 		<div class="videogames">
	 			<h2 class="titlestyle">Jeux vidéos</h2>
	 			<div class="videogames">Jeux de rôles, casual</div>
	 		</div>


		</div>	 

		 <div id="body-container">


		 	<div class="project">
				<div class="txt-project">Bonjour, je m'appelle Maryanne Audran. Mon projet est d'intégrer l'ENI de Rennes
					 en formation continue afin d'obtenir le titre de développeuse logiciel.</div>
			</div>

			<div id="resume-container">

				<div id="training">
			 		<h1 class="titlestyle">Diplômes et formations</h1>

		 			<div class="form1">
		 				<h3 class="line-form1"><span class="txtcolor">Avril-Juillet 2017</span> Plateforme d'Orientation Professionnelle</h3>
		 				<div class="line-form1"><span class="txtcolor">AMISEP</span> - Auray</div>
		 				<div class="line-form1">- Bilans personnel et professionnel</div>
		 				<div class="line-form1">- Etude des métiers</div>
		 				<div class="line-form1">- Stages en entreprise</div>
		 			</div>

		 			<div class="form2">
		 				<h3 class="line-form2"><span class="txtcolor">2014 - 2016</span> Licence Anglais (obtenue)</h3>
		 				<div class="line-form2"><span class="txtcolor">Université de Nantes</span> Nantes</div>
		 				<div class="line-form2">- Licence LLCE Anglais</div>
		 			</div>

		 			<div class="form3">
		 				<h3 class="line-form3"><span class="txtcolor">2013 - 2014</span> Prépa Lettres</h3>
		 				<div class="line-form3"><span class="txtcolor">Lycée Clémenceau</span> Nantes</div>
		 				<div class="line-form3">- Validation L1 Anglais</div>
		 			</div>

		 			<div class="form4">
		 				<h3 class="line-form4"><span class="txtcolor">2013</span> Bac (obtenu)</h3>
		 				<div class="line-form4"><span class="txtcolor">Lycée Sainte Anne-Saint Louis</span> Sainte-Anne d'Auray</div>
		 				<div class="line-form4">Baccalauréat littéraire options Anglais, Euro Anglais, Musique</div>

		 			</div>

			 	</div>

		 		<div id="prof-experience">
		 			<h1 class="titlestyle">Expériences professionnelles</h1>

	 				<div class="exp1">

	 					<h3 class="line-exp1"><span class="txtcolor">Juillet 2017</span> Développeuse stagiaire Web/Android</h3>
	 					<div class="line-exp1"> <span class="txtcolor">RetailMeNot</span> - Vannes</div>
	 					<div class="line-exp1">- 2 semaines au développement Android</div>
	 					<div class="line-exp1">- 2 semaines au développement Web</div>

	 				</div>

		 			<div class="exp2">

		 				<h3 class="line-exp2"><span class="txtcolor">2014 - 2016</span> Hôtesse de caisse</h3>
		 				<div class="line-exp2"><span class="txtcolor">Carrefour</span> - Baden</div>
		 				<div class="line-exp2">- Travail saisonnier Juillet/Août</div>

					</div>

			 	</div>

			 	

			 	

			 </div>

		 </div>

	</div>


	<div id="footer-container">

		<div id="social-links">
			<h3 class="titlestyle">Réseaux sociaux</h3>
	  		<a href="https://www.linkedin.com/in/maryanne-audran-b16569119/" title="LinkedIn" target="_blank" class="linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i> LinkedIn</a>
	  		<a href="https://www.facebook.com/maryanne.audran.9" title="Facebook" target="_blank" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a>
		</div>

	  	<div id="other-links"> 
	  		<h3 class="titlestyle">Autre</h3>
	  		<a href="contact.php" title="Me contacter" target="_blank" class="contact-link">Me contacter</a>
	  		<a href="CV_maryanne_audran.pdf" title="Mon CV en pdf" target="_blank" class="cv-link">Télécharger mon CV</a>
	   	</div>

	 </div>

	 <?php /*echo '<p>Cette ligne est écrite en PHP '.rand(0, 9999).'</p>';*/ ?>
  	</body>
</html>