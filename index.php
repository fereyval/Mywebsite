<?php
if (!defined('ROOT'))
	define('ROOT', './');
require ROOT.'config/common.php';

// Variables d'entete
$rubrique = 'accueil';
$title = "DDR Web accueil";
$description = "";
$head = '';
$javascript = '
    <script src=javascripts/jquery.b1njAccordion.js></script>
    <script>
        $(function() {
            $(".accordion").b1njAccordion({
                header      : "p",
                conteneur   : "div",
            });
        });
    </script>
    
    <script type="text/javascript">
        function change()
        {
         a = document.getElementById("test").getAttribute("src");
         if (a=="styles/btn.png") {
                      document.getElementById("test").src="styles/btn2.png";
                  }
 
                  else {
                 document.getElementById("test").src="styles/btn.png";
                  }
        }
        </script>
		
    <script src="javascripts/jquery.featureCarousel.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        var carousel = $("#carousel").featureCarousel({
        });
      });
    </script>';
include("include/entete.php");
?>
<div role="main" class="texte plm">
	<div class="conteneur center pam">
        <div class="separation mls" style="border-left: 4px solid black;padding-left:10px;">
            <p class="mini-menup">Acceuil</p>
            <ul class="mini-menu">
                <li><a href="#bvn">Bienvenue</a></li>
                <li><a href="#rea">Réalisation récentes</a></li>
                <li><a href="#for">Formulaire et mentions légales</a></li>
            </ul>
        </div>
        <div class="sociaux">
            <ul class="sociaux-liste">
				<li><a href="https://www.facebook.com/fereyva"><img src="composants/facebook.png" alt="Facebook"></a></li>
				<li><a href="https://twitter.com/Firely23"><img src="composants/twitter.png" alt="Twitter"></a></li>
				<li><a href="https://github.com/firely23"><img src="composants/linkedin.png" alt="Linkedin"></a></li>
            </ul>
        </div>
	</div>
</div>

<div role="main" class="texte2 plm ptm">
	<div class="conteneur center plm">
		<div class="carrousel">
			<ul class="bxslider">
				<li>
					<div class="diapo">
						<div class="box2">
							<img src="composants/diapo2.jpg" alt="" class="diapo-img" id="bvn">
						</div>
						<div class="box4">
							<h3>Bienvenue sur le site de la DDR Web!</h3>
							<p>Je suis étudiant développeur web dans l'ain à coté de Lyon et également auto-entrepreneur. Voici mon site portfolio dans lequel je vous parle de ma passion pour le Web. Que ce soit pour le développement web ou le web design, je partage sur mon site toutes les informations que j'ai et les services que je propose. Vous trouverez aussi mes derniers projets web , mon cv ainsi qu'un <a style="text-decoration:none;color:black;font-size:1.1em;font-weight:bold;" href="#for">formulaire d'inscription</a> pour débuter un nouveau dossier chez DDR Web! N'hésitez pas à visiter toutes les pages et laisser vos impressions...</p>
						</div>
					</div>
				</li>
				<li>
					<div class="diapo">
						<img src="composants/diapo1.jpg" alt="" class="diapo-img">
					</div>
				</li>
				 <li>
					<div class="diapo">
						<img src="composants/diapo3.jpg" alt="" class="diapo-img">
					</div>
				</li>
				<li>
					<div class="diapo">
						<img src="composants/diapo4.jpg" alt="" class="diapo-img">
					</div>
				</li>
			</ul>
        </div>
	</div>
</div>

<div role="main" class="texte3 pam">
	<div class="conteneur center">
		<div class="row pts pll">
			<div class="col w50 pam">
				<h2 class="title-h2"><img><span>Pourquoi</span> DDR Web?<img></h2>
                <div class="separation2 plm">
                    <p style="text-shadow: 1px 1px grey;" >
                    DDR Web c'est l'abréviation des mots Développement / Design / Référencement qui correspondent aux phases même de la création d'un site web.
                    </p>
                    <p style="text-shadow: 1px 1px grey;" >
                    Cette sociétée propose différents services en rapport avec la conception de sites internet, que ce soit un simple blog wordpress, un site personnel ou même un E-commerce (simplifié). La chartre graphique, l'intégration et le développement de chaque sites web sont fait par moi. Pour plus d'informations sur les services que je propose, cliquez sur le bouton ci-dessous.
                    </p>
                </div>
				 <p class="txtcenter mbm right mrl mtl"><a style="color:black" class="bouton1" href="#">Lire la suite</a></p>
			</div>
			<div class="col w50 pam">
				<h2 class="title-h2"><img><span>Qui</span> suis-je?<img></h2>
                <div class="separation2 plm">
                    <p style="text-shadow: 1px 1px grey;">
                    Je suis un étudiant de 2ème année à Epitech lyon, une école d'informatique qui propose un cursus d'expert en 5 ans durant lequel vous serez confronté à faire environ 1 an et demi de stage en entreprise.
                    </p>
                    <p style="text-shadow: 1px 1px grey;">
                    Je code depuis près de 3 ans et ai appris les bases du Web grâce à l'association Epiweb Lyon et me suis formé durant un stage de 4 mois chez Pixellweb une entreprise également basée sur la conception de sites internet aux Antilles. Durant ces 3 années à coder, j'ai aquis pas mal de compétences que vous pourrez décortiquer en cliquant sur le lien suivant.
                    </p>
                </div>
				<p class="txtcenter mbm right mrl mtl"><a style="color:black" class="bouton1" href="competence.php">Lire la suite</a></p>
			</div>
		</div>
	</div>	
</div>

<div role="main" class="texte4 pam">
	<div class="conteneur center pam" style="border: 1px solid white;">
		<div class="box">
            <img src="composants/icondev.png" alt="developpement" class="iconbar"/>
            <p class="title-p"><span>D</span>eveloppement</p>
		</div>
		<div class="box">
            <img src="composants/iconpaint.png" alt="developpement" class="iconbar" style="padding-left:50px;"/>
            <p class="title-p" style="text-align:left; padding-left:60px;"><span>D</span>esign</p>
        </div>
		<div class="box">
            <img src="composants/inconref.png" alt="developpement" class="iconbar"/>
            <p class="title-p"><span>R</span>eferencement</p>
        </div>
	</div>
</div>

<div role="main" class="texte5 pam">
	<div class="conteneur center">
		<h2 class="title-h2" id="rea"><span>Mes dernières</span> réalisations</h2>
		<div id="carousel">
        <div class="carousel-feature">
			<a href="sites/bijoudexpo/index.html"><img class="carousel-image" alt="Image Caption" src="styles/last/bijoudexpo.jpg"></a>
			<div class="carousel-caption">
				<p>Un bijou d'expo : Ce site à été fait dans le cadre d'une recherche de stage. Il présente une exposition de bijou ayant eu lieu à Reims le 18/06/14.</p>
			</div>
        </div>
        <div class="carousel-feature">
			<a href="http://antilles-recouvrement.com/"><img class="carousel-image" alt="Image Caption" src="styles/last/antillerecou.jpg"></a>
			<div class="carousel-caption">
				<p>Antille Recouvrement : Site réalisé pendant mon stage de 4 mois chez Pixell Martinique.</p>
			</div>
        </div>
        <div class="carousel-feature">
			<a href="#"><img class="carousel-image" alt="Image Caption" src="styles/last/ddrweb.jpg"></a>
			<div class="carousel-caption">
				<p>DDR Web : C'est le site sur lequel vous êtes il fut créer par moi et moi seul pendant ma periode de stage.</p>
			</div>
        </div>
        <div class="carousel-feature">
			<a href="http://inkcaraibes-mq.com/"><img class="carousel-image" alt="Image Caption" src="styles/last/ink.jpg"></a>
			<div class="carousel-caption">
				<p>Ink'martinique : Site réalisé pendant mon stage de 4 mois chez Pixell Martinique.</p>
			</div>
        </div>
        <div class="carousel-feature">
			<a href="404.hmtl"><img class="carousel-image" alt="Image Caption" src="styles/last/vide.jpg"></a>
			<div class="carousel-caption">
				<p>Emplacement vide : Devenez client pour que votre site apparaisse ici!</p>
			</div>
          </div>
        </div>
	</div>
</div>

<div role="main" class="texte6 pam">
	<div class="conteneur center">
		<div class="accordion" id="for">
            <img src="styles/button.png" class="pad2"/>
			<p class="mbm mll fuck accordion-titre"><a style="color:#FFFFFF" class="bouton2"><img src="styles/btn.png" id="test" onclick="change();" class="pad"/>Pour démarrer un contrat, cliquez ici</a></p>
			<div class="formulaire1">
				<form method="post" action="contact.php">
					<p class="form-style" >Nom : <input type="text" name="nom" /></p>
				</form><br>
				<form method="post" action="contact.php">
					<p class="form-style">Prénom : <input type="text" name="prenom" /></p>
				</form><br>
				<form method="post" action="contact.php">
					<p class="form-style">E-mail : <input type="email" placeholder="Ex : test@hotmail.fr" name="email" /></p>
				</form><br>
				<a href="conditions.php"><input type="submit" value="Continuer" /></a>
			</div>
		</div>
	</div>
</div>
<?php include("include/baspage.php"); ?>