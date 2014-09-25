<?php
if (!defined('ROOT'))
	define('ROOT', './');
require ROOT.'config/common.php';

// Variables d'entete
$rubrique = 'accueil';
$title = "Titre de la page";
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
                <li><a href="#rea">R�alisation r�centes</a></li>
                <li><a href="#for">Formulaire et mentions l�gales</a></li>
            </ul>
        </div>
        <div class="sociaux">
            <ul class="sociaux-liste">
                        <li><a href="https://www.facebook.com/pages/Oc%C3%A9ane-Finances/225308804320795"><img src="composants/facebook.png" alt="Facebook"></a></li>
                        <li><a href="https://twitter.com/Oceane_Finances"><img src="composants/twitter.png" alt="Twitter"></a></li>
                        <li><a href="https://www.linkedin.com/company/oceane-finances?trk=biz-companies-cym"><img src="composants/linkedin.png" alt="Linkedin"></a></li>
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
						<div class="box3">
							<h3>Bienvenue sur le site de la DDR Web!</h3>
							<p>Et prima ut dictum est, ab hac descriptione discrevimus, Commagena, nunc Euphratensis, clementer adsurgit, Hierapoli, vetere Nino et Samosata civitatibus amplis inlustris.Haec igitur Epicuri non probo, inquam. De cetero vellem equidem aut ipse doctrinis fuisset instructior est enim, quod tibi ita videri necesse est, non satis politus iis artibus, quas qui tenent, eruditi appellantur aut ne deterruisset alios a studiis.</p>
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
                    DDR Web c'est l'abr�viation des mots D�veloppement / Design / R�f�rencement qui correspondent aux phases m�me de la cr�ation d'un site web.
                    </p>
                    <p style="text-shadow: 1px 1px grey;" >
                    Cette soci�t�e propose diff�rents services en rapport avec la conception de sites internet qu'ils soient gros, petits, avec boutique en ligne, avec un formulaire php, etc. La chartre graphique, l'int�gration et le d�veloppement de chaque sites web sont fait par une seule personne auto-entrepreneur. Pour plus d'informations sur les services propos�s, cliquez sur le bouton ci-dessous.
                    </p>
                </div>
				 <p class="txtcenter mbm right mrl mtl"><a style="color:black" class="bouton1" href="#">Lire la suite</a></p>
			</div>
			<div class="col w50 pam">
				<h2 class="title-h2"><img><span>Qui</span> suis-je?<img></h2>
                <div class="separation2 plm">
                    <p style="text-shadow: 1px 1px grey;">
                    Je suis un �tudiant de 2�me ann�e � Epitech lyon, une �cole d'informatique qui propose un cursus d'expert en 5 ans durant lequel vous serez confront� � faire environ 1 an et demi de stage en entreprise.
                    </p>
                    <p style="text-shadow: 1px 1px grey;">
                    Je code depuis pr�s de 3 ans et ai appris les bases du Web gr�ce � l'association Epiweb Lyon et me suis form� durant un stage de 4 mois chez Pixellweb une entreprise �galement bas�e sur la conception de sites internet aux Antilles. Durant ces 3 ann�es � coder, j'ai aquis pas mal de comp�tences que vous pourrez d�cortiquer en cliquant sur le lien suivant.
                    </p>
                </div>
				<p class="txtcenter mbm right mrl mtl"><a style="color:black" class="bouton1" href="#">Lire la suite</a></p>
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
		<h2 class="title-h2" id="rea"><span>Mes derni�res</span> r�alisations</h2>
		<div id="carousel">
        <div class="carousel-feature">
          <a href="#"><img class="carousel-image" alt="Image Caption" src="styles/bijoudexpo.jpg"></a>
		  <div class="carousel-caption">
            <p>
              This area is typically used to display captions associated with the images. They are set to hide and fade in on rotation.
            </p>
          </div>
        </div>
        <div class="carousel-feature">
          <a href="#"><img class="carousel-image" alt="Image Caption" src="styles/bijoudexpo.jpg"></a>
        </div>
        <div class="carousel-feature">
          <a href="#"><img class="carousel-image" alt="Image Caption" src="styles/bijoudexpo.jpg"></a>
        </div>
        <div class="carousel-feature">
          <a href="#"><img class="carousel-image" alt="Image Caption" src="styles/bijoudexpo.jpg"></a>
        </div>
        <div class="carousel-feature">
          <a href="#"><img class="carousel-image" alt="Image Caption" src="styles/bijoudexpo.jpg"></a>
          </div>
        </div>
	</div>
</div>

<div role="main" class="texte6 pam">
	<div class="conteneur center">
		<div class="accordion" id="for">
			<p class="mbm mll fuck accordion-titre"><a style="color:#FFFFFF" class="bouton2"><img src="styles/btn.png" id="test" onclick="change();" class="pad"/>Pour d�marrer un contrat, cliquez ici</a></p>
			<div class="formulaire1">
				<form method="post" action="contact.php">
					<p class="form-style" >Nom : <input type="text" name="nom" /></p>
				</form><br>
				<form method="post" action="contact.php">
					<p class="form-style">Pr�nom : <input type="text" name="prenom" /></p>
				</form><br>
				<form method="post" action="contact.php">
					<p class="form-style">E-mail : <input type="email" placeholder="Ex : test@hotmail.fr" name="email" /></p>
				</form><br>
				<a href="contact.php"><input type="submit" value="Continuer" /></a>
			</div>
		</div>
	</div>
</div>
<?php include("include/baspage.php"); ?>