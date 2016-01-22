<!DOCTYPE html>
<html lang="fr">
	<head>
		
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
		<meta http-equiv="content-script-type" content="text/javascript" />
		<meta http-equiv="content-style-type" content="text/css" />
		<meta http-equiv="content-language" content="fr" />
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		
		<meta name="author" content="Jérémy Bernard" />
		<meta name="description" content="Jérémy Bernard, développeur web" />
		<meta name="keywords" content="Bernard Jérémy, Développeur PHP, développeur web, Startup, CV, PHP, MySQL, POO" />
		<meta name="robots" content="index, follow" />
		<meta name="revisit-after" content="10 days" />
			
		<title>Jérémy BERNARD - DEVELOPPEUR WEB : FRONT & BACK-END </title>
		
		<!-- Bootstrap core CSS -->
		<link href='https://fonts.googleapis.com/css?family=Anton' rel='stylesheet' type='text/css'>
		<link href="css/bootstrap.min.css" rel="stylesheet" />
		<link href="css/style.css" rel="stylesheet" />
		
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
		<link rel="icon" href="favicon.ico" type="image/x-icon" />
		
		<!--[if lt IE 9]>
			<script src="js/ie/html5shiv.js"></script>
			<script src="js/ie/respond.min.js"></script>
		<![endif]-->
		
		<?php
		  $bg = array('bg-01.gif', 'bg-02.gif', 'bg-03.gif', 'bg-04.gif', 'bg-05.gif', 'bg-06.gif' ); // tableau d'images
		  $slogan = array("Quand on parle “nouvelles fonctionnalités” avec le client",
		   "Quand j'ai fait couler la prod et que le chef demande à me voir",
		    "Quand j'applique le nouveau CSS pour la première fois",
		    "Quand quelqu'un cherche à ce que je lui donne les droits d'admin de mon appli",
		     "Quand un collègue revient tout juste de son congé maladie",
		     "Quand on m'annonce que mon programme a plante en prod" );
		  $i = rand(0, count($bg)-1); // generate random number size of the array
		  $selectedBg = "$bg[$i]"; // set variable equal to which random filename was chosen
		  $selectedSlogan = "$slogan[$i]";
		?>
		<style type="text/css">
		.jumbotron {
			background: no-repeat center right fixed url(images/<?php echo $selectedBg; ?>);
			-ms-filter: "progid:DXImageTransform.Microsoft.AlphaImageLoader(src='../images/<?php echo $selectedBg; ?>', sizingMethod='scale')";
			filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='../images/<?php echo $selectedBg; ?>', sizingMethod='scale');
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
		}
		</style>

	</head>
	<body data-spy="scroll" data-target="#navbar-example">	 
	
		
			
		<div id="top" class="jumbotron" data-src="<?php echo $selectedBg; ?>" data-position="bottom right">
			<div class="container">
				<h1>Jérémy BERNARD</h1>
				<h2 class="lead"><span style="color:#fff;font-size:1.1em;">DEVELOPPEUR WEB : FRONT &</span> BACK-END </h2>
				<div class="slogan">
					<h5>
						"<?php echo $selectedSlogan; ?>"
					</h5>
					<h6><a target="_blank" href="http://lesjoiesducode.fr/">source : Les joies du code</a></h6>
				</div>
				
			</div>
			
			<div class="overlay"></div>
			
			<a href="#profile" class="scroll-down">	
				<span class="glyphicon glyphicon-chevron-down"></span>
			</a>
		</div>
		
		<nav class="navbar navbar-default" id="navbar-example" role="navigation">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav">
					<li class="active"><a href="#profile">Profil</a></li>
					<li><a href="#experiences">Expériences</a></li>
					<li><a href="#abilities">Compétences</a></li>
										<li><a href="#projects">Projets</a></li>
					<li><a href="#contact">Contact</a></li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</nav>
		
		<div class="background-white">
			<div id="profile" class="container">
				<h2>Profil</h2>
<p class="lead">DÉVELOPPEUR WEB FRONT & BACK-END</p>

<hr />

<div class="row">
	<div class="col-md-4">
		<h3>A propos</h3>
		<p>
Je suis un développeur front et back-end fraîchement diplômé de la licence professionnelle : Responsable Projet Informatique, Niv. BAC +3. 
Si mon diplôme est tout récent, mon expérience elle est beaucoup plus ancienne!
	</div>
	<div class="col-md-4 text-center">
		<img src="images/jeremy.png" alt="jeremy bernard" width="246" height="246" />
	</div>
	<div class="col-md-4">
		<h3>Détails</h3>
		<p>
			<strong>Prénom :</strong> Jérémy<br />
			<strong>Nom :</strong> BERNARD<br />
			<strong>Age :</strong> 31 ans<br />
			<strong>Situation :</strong> Lyon, France<br />
			<strong>Mail :</strong> <a href="mailto:contact@jeremy-bernard.info">contact@jeremy-bernard.info</a>
		</p>
	</div>
</div>			</div>	
		</div>	
		
		<div id="experiences" class="container">
			<h2>Expériences</h2>
<p class="lead">
	Développeur php en agence web pendant plus d'un an et sept ans en agence de communication au pôle multimédia m'ont permis d'améliorer mes compétences dans les domaines du développement et de l'ntégration web. 
</p>

<hr />


<h3>Expérience professionnelle</h3>


<div class="experiences">

					
	<div class="experience row">
		<div class="col-md-4">
			<h4>2014/2015</h4>
			<!--<p class="experience-period">Feb 2015 - Jul 2015</p>-->
		</div>
		<div class="col-md-8">
			<p>
				<strong>CDD en alternance à l’agence Serco Point Web à Villeurbanne</strong>
				<span class="hidden-phone">
				Poste de développeur web :<br>
				Développement/maintenance des sites internet en asp, php et CMS (Joomla, WordPress,...), hotline.<br>
				- Intégration de boutique en ligne sous Magento<br>
				- Participation à l’élaboration d’un CMS «maison» développé sous symfony2, création de bundle et mise en forme de l’administration.<br>
				- Refonte de l’administration du site «Namco Bandai Europe» , projet réalisé en PHP5, Design pattern MVC, Intégration de Bootstrap.<br>
				<span class="experience-details">
					<span class="location">
						<span class="glyphicon glyphicon-map-marker"></span>
						Villeurbanne (69).
					</span>

					<span class="seperator">|</span>
					<span class="link">
						<span class="glyphicon glyphicon-link"></span>
						<a href="http://www.point-web.fr/" target="_blank">http://www.point-web.fr//</a>
					</span>					
				</span>
			</p>
		</div>
	</div>
	
					
	<div class="experience row">
		<div class="col-md-4">
			<h4>2008/2014</h4>
		</div>
		<div class="col-md-8">
			<p>
				<strong>CDI à l’agence DBG studio (LOVENLY)</strong>
				<span class="hidden-phone">
				Poste sur-mesure :<br>
				- développement et intégration de site internet et d’application multimédia (web, tablette tactiles...).<br>
				- Motion design et montage vidéo des vidéos publicitaires.
				<span class="experience-details">
					<span class="location">
						<span class="glyphicon glyphicon-map-marker"></span>
						Lyon (69).
					</span>

					<span class="seperator">|</span>
					<span class="link">
						<span class="glyphicon glyphicon-link"></span>
						<a href="http://lovenly.com/" target="_blank">http://lovenly.com/</a>
					</span>					
				</span>
			</p>
		</div>
	</div>


	<div class="experience row">
		<div class="col-md-4">
			<h4>2007</h4>
		</div>
		<div class="col-md-8">
			<p>
				<strong>Stage d’infographie à l’agence 1-ter-net</strong>
				<span class="hidden-phone">
				- Poste de webdesigner, intégrateur de sites internet.<br>
				- Développement d’application web (Mysql/php).<br>
				<span class="experience-details">
					<span class="location">
						<span class="glyphicon glyphicon-map-marker"></span>
						Nantes (44).
					</span>

					<span class="seperator">|</span>
					<span class="link">
						<span class="glyphicon glyphicon-link"></span>
						<a href="https://www.1-ter-net.com/" target="_blank">https://www.1-ter-net.com</a>
					</span>					
				</span>
			</p>
		</div>
	</div>


	<div class="experience row">
		<div class="col-md-4">
			<h4>2005 & 2004</h4>
		</div>
		<div class="col-md-8">
			<p>
				<strong>Stage d’infographie à l’agence Arrobase</strong>
				<span class="hidden-phone">
				- Poste de webdesigner.<br>
				- Découverte du montage vidéo.<br>
				<span class="experience-details">
					<span class="location">
						<span class="glyphicon glyphicon-map-marker"></span>
						Auray (56).
					</span>

					<span class="seperator">|</span>
					<span class="link">
						<span class="glyphicon glyphicon-link"></span>
						<a href="http://www.arrowbase.com/" target="_blank">http://www.arrowbase.com/</a>
					</span>					
				</span>
			</p>
		</div>
	</div>


	<div class="experience row">
		<div class="col-md-4">
			<h4>Nov. 2003</h4>
		</div>
		<div class="col-md-8">
			<p>
				<strong>Stage d’infographie au P’tit zappeur</strong>
				<span class="hidden-phone">
				- Création d’encarts publicitaires pour le magazine.
				<span class="experience-details">
					<span class="location">
						<span class="glyphicon glyphicon-map-marker"></span>
						Vannes (56).
					</span>

					<span class="seperator">|</span>
					<span class="link">
						<span class="glyphicon glyphicon-link"></span>
						<a href="http://www.zap.tv/" target="_blank">http://www.zap.tv/</a>
					</span>					
				</span>
			</p>
		</div>
	</div>


	<div class="experience row">
		<div class="col-md-4">
			<h4>Juin 2003</h4>
		</div>
		<div class="col-md-8">
			<p>
				<strong>Stage d’infographie à e-comouest</strong>
				<span class="hidden-phone">
				- Création d’identités visuelles pour des sites internet.
				<span class="experience-details">
					<span class="location">
						<span class="glyphicon glyphicon-map-marker"></span>
						Vannes (56).
					</span>

					<span class="seperator">|</span>
					<span class="link">
						<span class="glyphicon glyphicon-link"></span>
						<a href="http://www.e-comouest.com/" target="_blank">http://www.e-comouest.com</a>
					</span>					
				</span>
			</p>
		</div>
	</div>
	

<hr />
	<h3>Études / formations</h3>


<div class="experiences">

					
	<div class="experience row">
		<div class="col-md-4">
			<h4>2014/2015</h4>
		</div>
		<div class="col-md-8">
			<p>
				<strong>Licence professionnelle Responsable Projet Informatique.</strong>
				<span class="hidden-phone">
					L’objectif de cette formation à pour but de former dans différents domaines de compétences : technologies des systèmes & réseaux, bases de données, outils & langages de développement, techniques de gestion de projet.
					<span class="experience-details">
					<span class="location">
						<span class="glyphicon glyphicon-map-marker"></span>
						École ISITECH à LYON (69).					</span>
				</span>
			</p>
		</div>
	</div>
	
					
	<div class="experience row">
		<div class="col-md-4">
			<h4>2007/2008</h4>
		</div>
		<div class="col-md-8">
			<p>
				<strong>Licence professionnelle création multimédia.</strong>
				<span class="hidden-phone">
					La formation vise à donner des compétences dans le domaine de la création multimédia
					et en particulier le développement de sites web.
					<span class="experience-details">
					<span class="location">
						<span class="glyphicon glyphicon-map-marker"></span>
						IUT de LA ROCHELLE (17).
					</span>
				</span>
			</p>
		</div>
	</div>
	
					
	<div class="experience row">
		<div class="col-md-4">
			<h4>2004/2006</h4>
		</div>
		<div class="col-md-8">
			<p>
				<strong>BTS Communication Visuelle, option : multimédia.</strong>
				<span class="hidden-phone">
					Le titulaire du BTS Communication Visuelle option Multimédia conçoit, met en œuvre et coordonne la réalisation d'un processus de communication visuelle dans le domaine du multimédia (site intranet et Internet, cédérom, DVD).
					<span class="experience-details">
					<span class="location">
						<span class="glyphicon glyphicon-map-marker"></span>
						Lycée Le Paraclet QUIMPER (29).
					</span>
				</span>
			</p>
		</div>
	</div>
	
	<div class="experience row">
		<div class="col-md-4">
			<h4>2002/2004</h4>
		</div>
		<div class="col-md-8">
			<p>
				<strong>BAC professionnel en communication graphique.</strong>
				<span class="hidden-phone">
				Le titulaire du BAC professionnel en communication graphique a les compétences nécessaires pour travailler dans les différents domaines de la communication graphique : édition, multimédia, création de site internet... Il conçoit l'aspect graphique d'un document. Il intervient sur l'ensemble des produits de communication graphique : livres, affiches, images, illustrations, images de marque, interface de sites web...
				<span class="experience-details">
					<span class="location">
						<span class="glyphicon glyphicon-map-marker"></span>
						Lycée Bertrand Duguesclin AURAY (56).
					</span>
				</span>
			</p>
		</div>
	</div>


	<div class="experience row">
		<div class="col-md-4">
			<h4>2000/2002</h4>
		</div>
		<div class="col-md-8">
			<p>
				<strong>CAP Dessinateur en communication graphique.</strong>
				<span class="hidden-phone">
				Le titulaire du CAP Dessinateur d'exécution en communication peut exécuter un projet, finaliser une maquette avant impression. Son travail se situe entre le travail de création du concepteur et le travail d'édition et d'impression.
				<span class="experience-details">
					<span class="location">
						<span class="glyphicon glyphicon-map-marker"></span>
						Lycée Saint Pierre La Joliverie NANTES (44).
					</span>
				</span>
			</p>
		</div>
	</div>
	
</div>
	

	
</div>
	
		</div>
		
		<div class="background-white">
			<div id="abilities" class="container">
				<h2>Compétences</h2>
<p class="lead">
	Mon domaine de compétences comprend
le développement d’applications
en PHP (back-office, intranet,
moteur de recherche...), seul ou
en équipe, outil de versioning (git).
L’intégration des sites en HTML5/
CSS3/JavaScript (responsive design,
bootstrap de Twitter, material
design, contraintes techniques de
référencement SEO...).
</p>

<hr />

<h3>Aptitudes techniques</h3>

<div class="row">

		
	<div class="col-md-6">
		<ul class="no-bullets">
		
				
			<li>
				<span class="ability-title">CSS(3)</span>
				<span class="ability-score">
				
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star"></span>
					
									
				</span>
			</li>
			
					
				
			<li>
				<span class="ability-title">HTML(5)</span>
				<span class="ability-score">
				
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
									
				</span>
			</li>
				
			<li>
				<span class="ability-title">MySQL</span>
				<span class="ability-score">
				
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star"></span>
					
									
				</span>
			</li>
			
					
				
			<li>
				<span class="ability-title">PHP</span>
				<span class="ability-score">
				
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star"></span>
					
									
				</span>
			</li>
			
			<li>
				<span class="ability-title">Javascript</span>
				<span class="ability-score">
				
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star"></span>
					
								
					<span class="glyphicon glyphicon-star "></span>
					
									
				</span>
			</li>	
				
			
				
			<li>
				<span class="ability-title">Framework Bootstrap</span>
				<span class="ability-score">
				
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star "></span>
					
									
				</span>
			</li>
			

				
				
			<li>
				<span class="ability-title">Framework JQuery</span>
				<span class="ability-score">
				
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star"></span>
					
								
					<span class="glyphicon glyphicon-star "></span>
					
									
				</span>
			</li>
			
				
				
			
			
			 
			
		</ul>
	</div>
	<div class="col-md-6">
		<ul class="no-bullets">
			
	
				
			<li>
				<span class="ability-title">MVC Pattern</span>
				<span class="ability-score">
				
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star"></span>
					
								
					<span class="glyphicon glyphicon-star "></span>
					
									
				</span>
			</li>

			<li>
				<span class="ability-title">Framework Symfony2</span>
				<span class="ability-score">
				
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star"></span>
					
								
					<span class="glyphicon glyphicon-star"></span>
					
								
					<span class="glyphicon glyphicon-star "></span>
					
									
				</span>
			</li>
			
				
			<li>
				<span class="ability-title">Object Orientated Programming</span>
				<span class="ability-score">
				
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star "></span>
					
									
				</span>
			</li>

			<li>
				<span class="ability-title">responsive design</span>
				<span class="ability-score">
				
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star "></span>
					
									
				</span>
			</li>
	
				
			<li>
				<span class="ability-title">Wordpress</span>
				<span class="ability-score">
				
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star"></span>
					
								
					<span class="glyphicon glyphicon-star "></span>
					
									
				</span>
			</li>

			<li>
				<span class="ability-title">Magento</span>
				<span class="ability-score">
				
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star"></span>
					
								
					<span class="glyphicon glyphicon-star "></span>
					
									
				</span>
			</li>

			<li>
				<span class="ability-title">SEO</span>
				<span class="ability-score">
				
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star"></span>
					
								
					<span class="glyphicon glyphicon-star "></span>
					
									
				</span>
			</li>
			
				
		</ul>
	</div>
	
		
</div>

<div class="text-center project-referal">
	<p>This project is build on a custom made PHP framework.</p>
	<a href="https://github.com/pascalvgemert/resume" class="btn btn-primary" target="_blank">See project on Github</a>
</div>

<hr />

<h3>Logiciels</h3>

<div class="row">
		
	<div class="col-md-6">
		<ul class="no-bullets">
		
				
			<li>
				<span class="ability-title">Filezilla</span>
				<span class="ability-score">
				
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star"></span>
					
									
				</span>
			</li>
			
					
				
			<li>
				<span class="ability-title">PHP Storm</span>
				<span class="ability-score">
				
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star"></span>
					
								
					<span class="glyphicon glyphicon-star"></span>
					
									
				</span>
			</li>
			
					
			
				
					
				
			<li>
				<span class="ability-title">Notepad++ (8 years)</span>
				<span class="ability-score">
				
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star"></span>
					
									
				</span>
			</li>
			
					
				
			
					
				
			<li>
				<span class="ability-title">Sublime Text</span>
				<span class="ability-score">
				
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star"></span>
					
									
				</span>
			</li>
			
			<li>
				<span class="ability-title">Git</span>
				<span class="ability-score">
				
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star"></span>
					
								
					<span class="glyphicon glyphicon-star"></span>
					
								
					<span class="glyphicon glyphicon-star "></span>
					
									
				</span>
			</li>


			
			
						
			<li>
				<span class="ability-title">EasyPHP</span>
				<span class="ability-score">
				
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star"></span>
					
								
					<span class="glyphicon glyphicon-star "></span>
					
									
				</span>
			</li>
			
					
				
			<li>
				<span class="ability-title">WAMPSERVER</span>
				<span class="ability-score">
				
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star"></span>
					
								
					<span class="glyphicon glyphicon-star "></span>
					
									
				</span>
			</li>
			
			
			 
			
		</ul>
	</div>
	<div class="col-md-6">
		<ul class="no-bullets">
			
					
			<li>
				<span class="ability-title">Word</span>
				<span class="ability-score">
				
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star"></span>
					
								
					<span class="glyphicon glyphicon-star"></span>
					
									
				</span>
			</li>

			<li>
				<span class="ability-title">Excel</span>
				<span class="ability-score">
				
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star"></span>
					
								
					<span class="glyphicon glyphicon-star"></span>
					
								
					<span class="glyphicon glyphicon-star"></span>
					
									
				</span>
			</li>

			<li>
				<span class="ability-title">Adobe Photoshop®</span>
				<span class="ability-score">
				
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
									
				</span>
			</li>
			
			<li>
				<span class="ability-title">Adobe Illustrator®</span>
				<span class="ability-score">
				
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star"></span>
					
								
					<span class="glyphicon glyphicon-star "></span>
					
									
				</span>
			</li>

			<li>
				<span class="ability-title">Adobe InDesign®</span>
				<span class="ability-score">
				
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star "></span>
					
									
				</span>
			</li>	

			<li>
				<span class="ability-title">Adobe After Effects®</span>
				<span class="ability-score">
				
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star "></span>
					
									
				</span>
			</li>	

			<li>
				<span class="ability-title">Adobe Premiere® Pro</span>
				<span class="ability-score">
				
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star "></span>
					
									
				</span>
			</li>	

					
				
		</ul>
	</div>
	
	</div>			</div>
		</div>
		
				
		<div id="projects" class="container">
			<h2>Projets</h2>
<p class="lead">

</p>

<hr />


<div class="row">

		
	<div class="col-md-6 col-sm-12 col-xs-12">
		<figure class="effect">
			<img src="images/project_bandainamco.jpg" alt="Projet Bandai Namco" />
			
			<figcaption>
				<h3>Projet Bandai Namco</h3>
				<p>Développement du backend du site de l'entreprise Bandai Namco Europe.</p>
				<p><strong>Tags:</strong> <br />Développement PHP, MVC, Bootstrap, BDD, Jquery.</p>
				<a href="http://jeremy-bernard.info/bandainamco/public/index.php?p=users.logout" target="_blank">Voir en ligne</a>
				<span class="icon">
					<span class="glyphicon glyphicon-new-window"></span>
				</span>
			</figcaption> 
		</figure>
	</div>

		
	<div class="col-md-6 col-sm-12 col-xs-12">
		<figure class="effect">
			<img src="images/project_celk.jpg" alt="Atelier Celk" />
			
			<figcaption>
				<h3>Projet Celk</h3>
				<p>Développement sous Magento de la boutique en ligne Atelier Celk.</p>
				<p><strong>Tags:</strong> <br />Développement Magento, Produits simples, configurables, groupés, vente privée. </p>
				<a href="http://www.atelier-celk.com/" target="_blank">Voir en ligne</a>
				<span class="icon">
					<span class="glyphicon glyphicon-new-window"></span>
				</span>
			</figcaption> 
		</figure>
	</div>

		
	<div class="col-md-6 col-sm-12 col-xs-12">
		<figure class="effect">
			<img src="images/project_symfony.jpg" alt="Projet asp" />
			
			<figcaption>
				<h3>Projet Symfony2</h3>
				<p>Développement sous Symfony2. En cours.</p>
				<p><strong>Tags:</strong> <br />Développement PHP, Symfony2, Jquery, MVC.</p>
				<a href="#" target="_blank">Voir en ligne</a>
				<span class="icon">
					<span class="glyphicon glyphicon-new-window"></span>
				</span>
			</figcaption> 
		</figure>
	</div>



	<div class="col-md-6 col-sm-12 col-xs-12">
		<figure class="effect">
			<img src="images/project_asp.jpg" alt="Projet asp" />

			<figcaption>
				<h3>Site ASP</h3>
				<p>Développement asp : maisons SCMC.</p>
				<p><strong>Tags:</strong> <br />Développement asp réalisée avec lecms "maison" de l'agence Serco Point-web.</p>
				<a href="http://www.maisonscmc.com/" target="_blank">Voir en ligne</a>
				<span class="icon">
					<span class="glyphicon glyphicon-new-window"></span>
				</span>
			</figcaption>
		</figure>
	</div>

		
</div>
			<div class="row">
				<p class="lead">
					Vous pouvez également retrouver quelques réalisations ci-dessous :
				</p>
				<div class="col-md-12">
					<ul class="no-bullets" style="text-align: center;">
						<li><a href="http://www.lovenly.com/#section1a" target="_blank">lovenly.com</a> - webdesign et intégration</li>
						<li><a href="http://www.suma-occasions.com/" target="_blank">suma-occasions.com</a> - webdesign et intégration</li>
						<li><a target="_blank" href="http://www.lacomplementairesantepourtous.fr">lacomplementairesantepourtous.fr</a> - Intégration </li>
						<li><a href="http://agedis-ra.com/" target="_blank">agedis-ra.com</a> - Développement ASP</li>
						<li><a href="http://mondial-stores.com/" target="_blank">mondial-stores.com</a> - Développement ASP</li>
						<li><a href="http://www.fira.fr/" target="_blank">fira.fr</a> - Développement ASP</li>
						<li><a href="http://transport-thiebaud.com/" target="_blank">transport-thiebaud.com</a> - Développement ASP</li>
						<li><a href="http://www.esthetique-et-coiffure.fr/" target="_blank">esthetique-et-coiffure.fr</a> - Développement ASP</li>
						<li><a href="http://topsilencebygerflor.com/fr/index.php?lang=fr" target="_blank">Top Silence</a> - webdesign et intégration</li>
						<li><a target="_blank" href="http://www.andre-location.fr/">andre-location.fr</a> - webdesign et intégration, développement PHP</li>
						<li><a target="_blank" href="http://www.scetic.com/">scetic</a> - webdesign et intégration, développement PHP</li>
						<li><a target="_blank" href="http://www.sitinao.com">sitinao</a> - WebDesign - Intégration - une partie de développement php (actus/pages génériques) </li>
						<li><a target="_blank" href="http://www.clermont-aeroport.com">clermont-aeroport.com</a> - WebDesign - Intégration </li>
						<li><a target="_blank"  href="http://www.ch-stjoseph-stluc-lyon.fr">ch-stjoseph-stluc-lyon.fr</a> - Intégration - une partie de développement php (actus/pages génériques) </li>
						<li><a target="_blank" target="_blank" href="http://www.clinique-mutualiste-lyon.com">clinique-mutualiste-lyon.com</a> - Intégration </li>
						<li><a target="_blank" href="http://www.pharmacos.fr">pharmacos</a> - Intégration - une partie de développement php (actus/pages génériques) </li>
						<li><a target="_blank" href="http://www.ifri.org/index.php">ifri.org</a> - WebDesign - Intégration </li>
						<li><br></li>
						<li>Mes sites 2013/2014 - <a target="_blank" href="http://web4jb.com/jb2014/">version 1</a> et <a target="_blank" href="http://web4jb.com/jb2014plus">version 2</a></li>
					</ul>
				</div>

			</div>
	
		</div>
		
		<div class="background-gray">
			<div id="contact" class="container">
				<h2>Contact</h2>
<p class="lead">

</p>

<hr />

<div class="row">
	<div class="col-md-6">
		<ul class="no-bullets">

			<li>
				<a href="http://www.viadeo.com/profile/00227330cgwuv4gg" target="_blank">
					<span class="icon icon-skype"></span>
					http://www.viadeo.com/
				</a>
			</li>
		</ul>
	</div>
	<div class="col-md-6">
		<ul class="no-bullets">
			<li>
				<a href="mailto:contact@jeremy-bernard.info">
					<span class="icon icon-email"></span>
					contact@jeremy-bernard.info
				</a>

			</li>
		</ul>
	</div>
</div>

<hr />

			</div>
		</div>
		
		<div class="modal fade" id="upgrade-dialog" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Your browser is out of date</h4>
			</div>
			<div class="modal-body">
				<p>To get the best possible experience using our site we recommend that you upgrade to a modern web browser. To download a newer web browser click on the Upgrade button.</p>
			</div>
			<div class="modal-footer">
				<a href="http://browsehappy.com/" target="_blank" class="btn btn-primary">Upgrade</a>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->		
		<!-- Bootstrap core JavaScript -->
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script type="text/javascript" src="js/script.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		
		
	</body>
</html>