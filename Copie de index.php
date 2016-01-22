<!DOCTYPE html>
<html lang="en">
	<head>
		
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
		<meta http-equiv="content-script-type" content="text/javascript" />
		<meta http-equiv="content-style-type" content="text/css" />
		<meta http-equiv="content-language" content="nl" />
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		
		<meta name="author" content="Pascal van Gemert" />	
		<meta name="description" content="I'm Pascal van Gemert, a ninja webdeveloper / creative programmer with good knowledge of front-end technics." />
		<meta name="keywords" content="Pascal van Gemert, Interactive Resume, PHP programmer, Web developer, Startup, Interactive CV, Resume, CV, Whoopaa, HRMatches, Sanitairwinkel, Algorithms, PHP, MySQL, OOP" />
		<meta name="robots" content="index, follow" />
		<meta name="revisit-after" content="14 days" />
			
		<title>Jérémy BERNARD - Web Developer - Interactive Resume</title>
		
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
				<h2 class="lead"><span style="color:#111;font-size: 31px;">DEVELOPPEUR WEB | <span style="color:#444;">FRONT</span>BACK-END</span> </h2>
				<h5 style="margin-top:30%;color:#3d1108;">
					"<?php echo $selectedSlogan; ?>"
				</h5>
				<i><a target="_blank" href="http://lesjoiesducode.fr/">source : Les joies du code</a></i>
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
					<li class="active"><a href="#profile">Profile</a></li>
					<li><a href="#experiences">Expériences</a></li>
					<li><a href="#abilities">Compétences</a></li>
										<li><a href="#projects">Projets</a></li>
					<li><a href="#contact">Contact</a></li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</nav>
		
		<div class="background-white">
			<div id="profile" class="container">
				<h2>Profile</h2>
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
		<img src="images/pascal_van_gemert.png" alt="Pascal van Gemert" width="246" height="246" />
	</div>
	<div class="col-md-4">
		<h3>Détails</h3>
		<p>
			<strong>Prénom :</strong> Jérémy<br />
			<strong>Nom :</strong> BERNARD<br />
			<strong>Age :</strong> 31 ans<br />
			<strong>Situation :</strong> Lyon, France<br />
			<strong>Mail :</strong> <a href="mailto:ln.tremegnavlacsap@lacsap">contact@web4jb.com</a>
		</p>
		
		<!--
		<a href="https://twitter.com/pascalvgemert" class="twitter-follow-button" data-show-count="false" data-size="large" data-show-screen-name="false">Follow @pascalvgemert</a>
		<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
	-->
	</div>
</div>			</div>	
		</div>	
		
		<div id="experiences" class="container">
			<h2>Expériences</h2>
<p class="lead">
	Développeur php en agence web pendant plus d'un an et sept ans en agence de communication au pôle multimédia m'ont permis d'améliorer mes compétences dans les domaines du développement et de l'ntégration web. 
</p>

<hr />

<!--<div class="alert alert-danger">
	<strong>Looking for an awesome new challenge somewhere in the neighborhood of Den Bosch or Amsterdam as a Creative PHP Web Developer. </strong>
</div>-->

<h3>Expérience professionnelle</h3>


<div class="experiences">

					
	<div class="experience row">
		<div class="col-md-4">
			<h4>2014/2015</h4>
			<!--<p class="experience-period">Feb 2015 - Jul 2015</p>-->
		</div>
		<div class="col-md-8">
			<p>
				<strong>CDD en alternace à l’agence Serco Point Web à Villeurbanne</strong>
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
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
									
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
				<span class="ability-title">JSON</span>
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
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
									
				</span>
			</li>
			
					
				
			<li>
				<span class="ability-title">PHP</span>
				<span class="ability-score">
				
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
									
				</span>
			</li>
			
					
				
			<li>
				<span class="ability-title">XML</span>
				<span class="ability-score">
				
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
									
				</span>
			</li>
			
					
				
			<li>
				<span class="ability-title">Bootstrap Framework</span>
				<span class="ability-score">
				
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star "></span>
					
									
				</span>
			</li>
			
					
				
			<li>
				<span class="ability-title">Builder Pattern</span>
				<span class="ability-score">
				
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star "></span>
					
									
				</span>
			</li>
			
					
				
			<li>
				<span class="ability-title">Command line</span>
				<span class="ability-score">
				
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star "></span>
					
									
				</span>
			</li>
			
					
				
			<li>
				<span class="ability-title">JQuery</span>
				<span class="ability-score">
				
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star "></span>
					
									
				</span>
			</li>
			
					
				
			<li>
				<span class="ability-title">Java</span>
				<span class="ability-score">
				
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star "></span>
					
									
				</span>
			</li>
			
					
				
			<li>
				<span class="ability-title">Javascript</span>
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
	<div class="col-md-6">
		<ul class="no-bullets">
			
					
				
			<li>
				<span class="ability-title">LESS</span>
				<span class="ability-score">
				
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star "></span>
					
									
				</span>
			</li>
			
					
				
			<li>
				<span class="ability-title">Laravel Framework</span>
				<span class="ability-score">
				
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star "></span>
					
									
				</span>
			</li>
			
					
				
			<li>
				<span class="ability-title">MVC Pattern</span>
				<span class="ability-score">
				
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star "></span>
					
									
				</span>
			</li>
			
					
				
			<li>
				<span class="ability-title">Method Factory Pattern</span>
				<span class="ability-score">
				
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
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
				<span class="ability-title">SASS</span>
				<span class="ability-score">
				
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star "></span>
					
									
				</span>
			</li>
			
					
				
			<li>
				<span class="ability-title">SEO</span>
				<span class="ability-score">
				
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star "></span>
					
									
				</span>
			</li>
			
					
				
			<li>
				<span class="ability-title">Singleton Pattern</span>
				<span class="ability-score">
				
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star "></span>
					
									
				</span>
			</li>
			
					
				
			<li>
				<span class="ability-title">UML</span>
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
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star "></span>
					
									
				</span>
			</li>
			
					
				
			<li>
				<span class="ability-title">AngularJS</span>
				<span class="ability-score">
				
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star "></span>
					
								
					<span class="glyphicon glyphicon-star "></span>
					
								
					<span class="glyphicon glyphicon-star "></span>
					
									
				</span>
			</li>
			
					
				
			<li>
				<span class="ability-title">Ruby</span>
				<span class="ability-score">
				
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star "></span>
					
								
					<span class="glyphicon glyphicon-star "></span>
					
								
					<span class="glyphicon glyphicon-star "></span>
					
								
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

<h3>Languages</h3>

<div class="row">

		
	<div class="col-md-6">
		<ul class="no-bullets">
		
				
			<li>
				<span class="ability-title">Dutch (Mother tongue)</span>
				<span class="ability-score">
				
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
									
				</span>
			</li>
			
					
				
			<li>
				<span class="ability-title">English (Daily use)</span>
				<span class="ability-score">
				
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
									
				</span>
			</li>
			
			 
			
		</ul>
	</div>
	<div class="col-md-6">
		<ul class="no-bullets">
			
					
				
			<li>
				<span class="ability-title">German (Survivable)</span>
				<span class="ability-score">
				
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star "></span>
					
								
					<span class="glyphicon glyphicon-star "></span>
					
								
					<span class="glyphicon glyphicon-star "></span>
					
									
				</span>
			</li>
			
					
				
			<li>
				<span class="ability-title">French (Un petit peu)</span>
				<span class="ability-score">
				
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star "></span>
					
								
					<span class="glyphicon glyphicon-star "></span>
					
								
					<span class="glyphicon glyphicon-star "></span>
					
								
					<span class="glyphicon glyphicon-star "></span>
					
									
				</span>
			</li>
			
					
				
		</ul>
	</div>
	
		
</div>

<hr />

<h3>Tools</h3>

<div class="row">
		
	<div class="col-md-6">
		<ul class="no-bullets">
		
				
			<li>
				<span class="ability-title">Filezilla (8 years)</span>
				<span class="ability-score">
				
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
									
				</span>
			</li>
			
					
				
			<li>
				<span class="ability-title">Firefox (8 years)</span>
				<span class="ability-score">
				
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
									
				</span>
			</li>
			
					
				
			<li>
				<span class="ability-title">MS Office (10+ years)</span>
				<span class="ability-score">
				
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
									
				</span>
			</li>
			
					
				
			<li>
				<span class="ability-title">Mac (4 years)</span>
				<span class="ability-score">
				
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
									
				</span>
			</li>
			
					
				
			<li>
				<span class="ability-title">Notepad++ (8 years)</span>
				<span class="ability-score">
				
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
									
				</span>
			</li>
			
					
				
			<li>
				<span class="ability-title">Webkit browsers (6 years)</span>
				<span class="ability-score">
				
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
									
				</span>
			</li>
			
					
				
			<li>
				<span class="ability-title">Windows (10+ years)</span>
				<span class="ability-score">
				
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
									
				</span>
			</li>
			
					
				
			<li>
				<span class="ability-title">Adobe Fireworks (8 years)</span>
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
	<div class="col-md-6">
		<ul class="no-bullets">
			
					
				
			<li>
				<span class="ability-title">Coda2 (2 years)</span>
				<span class="ability-score">
				
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star "></span>
					
									
				</span>
			</li>
			
					
				
			<li>
				<span class="ability-title">Git (3 year)</span>
				<span class="ability-score">
				
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star "></span>
					
									
				</span>
			</li>
			
					
				
			<li>
				<span class="ability-title">Internet Explore 6+ (8 years)</span>
				<span class="ability-score">
				
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star "></span>
					
									
				</span>
			</li>
			
					
				
			<li>
				<span class="ability-title">MAMP (1 year)</span>
				<span class="ability-score">
				
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star "></span>
					
									
				</span>
			</li>
			
					
				
			<li>
				<span class="ability-title">Stash (1 year)</span>
				<span class="ability-score">
				
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star "></span>
					
									
				</span>
			</li>
			
					
				
			<li>
				<span class="ability-title">Sublime Text (2 years)</span>
				<span class="ability-score">
				
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star "></span>
					
									
				</span>
			</li>
			
					
				
			<li>
				<span class="ability-title">Subversion (5 years)</span>
				<span class="ability-score">
				
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star "></span>
					
									
				</span>
			</li>
			
					
				
			<li>
				<span class="ability-title">Adobe Photoshop (6 years)</span>
				<span class="ability-score">
				
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star filled"></span>
					
								
					<span class="glyphicon glyphicon-star "></span>
					
								
					<span class="glyphicon glyphicon-star "></span>
					
									
				</span>
			</li>
			
					
				
		</ul>
	</div>
	
	</div>			</div>
		</div>
		
				
		<div id="projects" class="container">
			<h2>Projects</h2>
<p class="lead">
	&ldquo;You can do anything you set your mind to.&rdquo;<br />- Benjamin Franklin
</p>

<hr />


<div class="row">

		
	<div class="col-md-6 col-sm-12 col-xs-12">
		<figure class="effect">
			<img src="images/project_mals.jpg" alt="Mals" />
			
			<figcaption>
				<h3>Mals</h3>
				<p>Mals, a creative agency located in Rotterdam.</p>
				<p><strong>Tags:</strong> <br />Development, Wordpress, Bootstrap</p>
				<a href="http://studiomals.com" target="_blank">View more</a>
				<span class="icon">
					<span class="glyphicon glyphicon-new-window"></span>
				</span>
			</figcaption> 
		</figure>
	</div>

		
	<div class="col-md-6 col-sm-12 col-xs-12">
		<figure class="effect">
			<img src="images/project_mbm.jpg" alt="Medisch Biomagnetisme" />
			
			<figcaption>
				<h3>Medisch Biomagnetisme</h3>
				<p>A nice one pager build for Hanneke Velthuijsen.</p>
				<p><strong>Tags:</strong> <br />Development, Design, Bootstrap, Wordpress</p>
				<a href="http://medischbiomagnetisme.com" target="_blank">View more</a>
				<span class="icon">
					<span class="glyphicon glyphicon-new-window"></span>
				</span>
			</figcaption> 
		</figure>
	</div>

		
	<div class="col-md-6 col-sm-12 col-xs-12">
		<figure class="effect">
			<img src="images/project_soap.jpg" alt="SOAP - Den Bosch" />
			
			<figcaption>
				<h3>SOAP - Den Bosch</h3>
				<p>Build the website of the local barbershop.</p>
				<p><strong>Tags:</strong> <br />Design, Development, Bootstrap, Wordpress</p>
				<a href="http://soaphair.nl" target="_blank">View more</a>
				<span class="icon">
					<span class="glyphicon glyphicon-new-window"></span>
				</span>
			</figcaption> 
		</figure>
	</div>

		
	<div class="col-md-6 col-sm-12 col-xs-12">
		<figure class="effect">
			<img src="images/project_paf.jpg" alt="Playful Arts Festival" />
			
			<figcaption>
				<h3>Playful Arts Festival</h3>
				<p>Build a website for the Playful Arts Festival</p>
				<p><strong>Tags:</strong> <br />Development, Bootstrap, Wordpress</p>
				<a href="http://playfulartsfestival.com" target="_blank">View more</a>
				<span class="icon">
					<span class="glyphicon glyphicon-new-window"></span>
				</span>
			</figcaption> 
		</figure>
	</div>

		
	<div class="col-md-6 col-sm-12 col-xs-12">
		<figure class="effect">
			<img src="images/project_veramulder.jpg" alt="Vera Mulder" />
			
			<figcaption>
				<h3>Vera Mulder</h3>
				<p>Created a personal website for the Journalist Vera Mulder.</p>
				<p><strong>Tags:</strong> <br />Development, Design, Wordpress, Bootstrap</p>
				<a href="http://veramulder.com" target="_blank">View more</a>
				<span class="icon">
					<span class="glyphicon glyphicon-new-window"></span>
				</span>
			</figcaption> 
		</figure>
	</div>

		
	<div class="col-md-6 col-sm-12 col-xs-12">
		<figure class="effect">
			<img src="images/project_oetelspel.jpg" alt="Oetelspel" />
			
			<figcaption>
				<h3>Oetelspel</h3>
				<p>An online game specially for Carneval at 's-Hertogenbosch.</p>
				<p><strong>Tags:</strong> <br />Development, Concept, Founder</p>
				<a href="http://oetelspel.nl" target="_blank">View more</a>
				<span class="icon">
					<span class="glyphicon glyphicon-new-window"></span>
				</span>
			</figcaption> 
		</figure>
	</div>

		
</div>
	
		</div>
		
		<div class="background-gray">
			<div id="contact" class="container">
				<h2>Contact</h2>
<p class="lead">
	&ldquo;If I had asked people what they wanted, they would have said faster horses. &rdquo;<br />- Henry Ford
</p>

<hr />

<div class="row">
	<div class="col-md-6">
		<ul class="no-bullets">
			<li>
				<a href="http://twitter.com/pascalvgemert" target="_blank">
					<span class="icon icon-twitter"></span>
					http://twitter.com/pascalvgemert				</a>
			</li>
			<li>
				<a href="http://linkedin.nl/in/pascalvgemert/" target="_blank">
					<span class="icon icon-linkedin"></span>
					http://linkedin.nl/in/pascalvgemert/				</a>
			</li>
		</ul>
	</div>
	<div class="col-md-6">
		<ul class="no-bullets">
			<li>
				<a href="javascript:void(0);">
					<span class="icon icon-skype"></span>
					pascalvgemert				</a>
			</li>
			<li>
				<a href="mailto:ln.tremegnavlacsap@lacsap">
					<span class="icon icon-email"></span>
					<span style="unicode-bidi:bidi-override; direction: rtl;">
						ln.tremegnavlacsap@lacsap					</span>
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