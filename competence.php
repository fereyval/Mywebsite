<?php
if (!defined('ROOT'))
	define('ROOT', './');
require ROOT.'config/common.php';

// Variables d'entete
$rubrique = 'competence';
$title = "Mes Compétences";
$description = "";
$head = '';
$javascript = '<script src=javascripts/jquery.b1njAccordion.js></script>
    <script>
        $(function() {
            $(".accordion").b1njAccordion({
                header      : "p",
                conteneur   : "div",
            });
        });
    </script>';
include("include/entete.php");
?>

<div role="main" class="texte plm">
	<div class="conteneur center pam">
        <div class="separation mls" style="border-left: 4px solid black;padding-left:10px;">
            <p class="mini-menup">Compétences</p>
            <ul class="mini-menu">
                <li><a href="#bvn">Mes compétences</a></li>
				<li><a href="#bvn">Mon Curriculum vitae</a></li>
                <li><a href="#for">Formulaire et mentions légales</a></li>
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

<div role="main" class="textportfolio plm ptm">
	<div class="conteneur center plm">
		<div class="carrousel">
			<ul class="lel" style="padding-left: 0px;">
				<li style="text-decoration:none; list-style-type:none;">
					<div class="diapo">
						<div class="box2">
							<img src="composants/diapo1.jpg" alt="" class="diapo-img" id="bvn">
						</div>
						<div class="box3">
							<h3>Ceci est mon portfolio!</h3>
							<p>Vous découvrirez ici tout les projets que j'ai pu réaliser ou ceux auquels j'ai contribué, ainsi qu'une brêve description de leurs fonctionnalitées. Ils y a des projets dans plusieurs langages comme les languages du web, le C, le C++ et des maquettes graphiques en photoshop / firework.</p>
                         </div>
					</div>
				</li>
            </ul>
        </div>
	</div>
</div>    

<div role="main" class="texte3 pam">
	<div class="conteneur center">
		<div class="caracteristiques cara_droite" >
			<h2>Mes compétences</h2>
				<ul>
					<li>HTML / CSS
						<span class="etoile">
							<img src="styles/etoileP.png" alt="étoile" />
							<img src="styles/etoileP.png" alt="étoile" />
							<img src="styles/etoileP.png" alt="étoile" />
							<img src="styles/etoilev.png" alt="étoile" />
							<img src="styles/etoileV.png" alt="" />
						</span>
					</li>
					<li>Javascript
						<span class="etoile">
							<img src="styles/etoileP.png" alt="étoile" />
							<img src="styles/etoilev.png" alt="étoile" />
							<img src="styles/etoilev.png" alt="étoile" />
							<img src="styles/etoilev.png" alt="étoile" />
							<img src="styles/etoileV.png" alt="" />
						</span>
					</li>
					<li>PHP
						<span class="etoile">
							<img src="styles/etoileP.png" alt="étoile" />
							<img src="styles/etoilev.png" alt="étoile" />
							<img src="styles/etoilev.png" alt="étoile" />
							<img src="styles/etoilev.png" alt="étoile" />
							<img src="styles/etoileV.png" alt="" />
						</span>
					</li>
					<li>C
						<span class="etoile">
							<img src="styles/etoileP.png" alt="étoile" />
							<img src="styles/etoileP.png" alt="étoile" />
							<img src="styles/etoileP.png" alt="étoile" />
							<img src="styles/etoileP.png" alt="étoile" />
							<img src="styles/etoileV.png" alt="" />
						</span>
					</li>
					<li>C++
						<span class="etoile">
							<img src="styles/etoileP.png" alt="étoile" />
							<img src="styles/etoilev.png" alt="étoile" />
							<img src="styles/etoilev.png" alt="étoile" />
							<img src="styles/etoilev.png" alt="étoile" />
							<img src="styles/etoileV.png" alt="" />
						</span>
					</li>
				</ul>
		</div>
	</div>
</div>

<div role="main" class="texte4 pam">
	<div class="conteneur center">
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
</div>

<div role="main" class="texte6 pam">
	<div class="conteneur center">
		<div class="accordion"  id="for">
			<p class="mbm mll fuck accordion-titre"><a style="color:#FFFFFF" class="bouton2"><img src="styles/btn.png" id="test" onclick="change();" class="pad"/>Pour toute demande cliquez ici</a></p>
			<div class="formulaire1">
				<form method="post" action="contact.php">
					<p class="form-style">Nom : <input type="text" name="nom" /></p>
				</form><br>
				<form method="post" action="contact.php">
					<p class="form-style">Prénom : <input type="text" name="prenom" /></p>
				</form><br>
				<form method="post" action="contact.php">
					<p class="form-style">E-mail : <input type="email" placeholder="Ex : test@hotmail.fr" name="email" /></p>
				</form><br>
				<a href="contact.php"><input type="submit" value="Envoyer" /></a>
			</div>
		</div>
	</div>
</div>
<?php include("include/baspage.php"); ?>