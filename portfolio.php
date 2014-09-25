<?php
if (!defined('ROOT'))
	define('ROOT', './');
require ROOT.'config/common.php';

// Variables d'entete
$rubrique = 'portfolio';
$title = "Mes Projets";
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
            <p class="mini-menup">Portfolio</p>
            <ul class="mini-menu">
                <li><a href="#bvn">Mes projets</a></li>
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

<div role="main" class="texte2portfolio pam">
	<div class="conteneur center">
        <h3 class="title-h3">- <span>Filtrer</span> nos projets -</h3>
        <ul id="portfolio-filter" class="txtcenter">
			<li><a href="#all" title="">Tous</a></li>
			<li><a href="#web" title="" rel="design">Html / css / php / js</a></li>
			<li><a href="#wp" title="" rel="partner">Wordpress</a></li>
			<li><a href="#c" title="" rel="political">Projets en C</a></li>
            <li><a href="#cplus" title="" rel="political">Projets en C++</a></li>
            <li><a href="#photo" title="" rel="political">Projets photoshop</a></li>
		</ul>
    </div>
</div>


<div role="main" class="texte3portfolio pam">
	<div class="conteneur center" id="slides">
        <ul id="portfolio-list" class="txtcenter" style=" margin-left:60px;">
            <li style="display: block;" class="web">
                <div style="width:164px;height:121px;" class="slide-left" >
                <a href="sites/bijoudexpo/index.html" style="text-decoration:none"><p><b>Un bijou d'expo:</b><br><br> Ce site à été fait dans le cadre d'une recherche de stage. Il présente une exposition de bijou ayant eu lieu à Reims le 18/06/14.</p>
                <img style="border:1px black solid;" src="composants/portfolio/portfolio1.jpg" alt=""></a>
                </div>
            </li>
            
            <li style="display: block;" class="wp">
                <div style="width:164px;height:121px;" class="slide-right" >
                <a href="sites/bijoudexpo/index.html" style="text-decoration:none"><p><b>Un bijou d'expo:</b><br><br> Ce site à été fait dans le cadre d'une recherche de stage. Il présente une exposition de bijou ayant eu lieu à Reims le 18 Juin 2014.</p>
                <img style="border:1px black solid;" src="composants/portfolio/portfolio2.gif" alt=""></a>
                </div>
            </li> 
            
            <li style="display: block;" class="c cplus">
                <div style="width:164px;height:121px;" class="slide-down" >
                <a href="sites/bijoudexpo/index.html" style="text-decoration:none"><p><b>Un bijou d'expo:</b><br><br> Ce site à été fait dans le cadre d'une recherche de stage. Il présente une exposition de bijou ayant eu lieu à Reims le 18 Juin 2014.</p>
                <img style="border:1px black solid;" src="composants/portfolio/portfolio3.gif" alt=""></a>
                </div>
            </li> 
            
            <li style="display: block;" class="photo">
                <div style="width:164px;height:121px;" class="slide-up" >
                <a href="sites/bijoudexpo/index.html" style="text-decoration:none"><p><b>Un bijou d'expo:</b><br><br> Ce site à été fait dans le cadre d'une recherche de stage. Il présente une exposition de bijou ayant eu lieu à Reims le 18 Juin 2014.</p>
                <img style="border:1px black solid;" src="composants/portfolio/portfolio4.gif" alt=""></a>
                </div>
            </li>
            
            <li style="display: block;" class="web">
                <div style="width:164px;height:121px;" class="slide-down-left" >
                <a href="sites/bijoudexpo/index.html" style="text-decoration:none"><p><b>Un bijou d'expo:</b><br><br> Ce site à été fait dans le cadre d'une recherche de stage. Il présente une exposition de bijou ayant eu lieu à Reims le 18 Juin 2014.</p>
                <img style="border:1px black solid;" src="composants/portfolio/portfolio1.jpg" alt=""></a>
                </div>
            </li>
            
            <li style="display: block;" class="wp">
                <div style="width:164px;height:121px;" class="slide-down-right" >
                <a href="sites/bijoudexpo/index.html" style="text-decoration:none"><p><b>Un bijou d'expo:</b><br><br> Ce site à été fait dans le cadre d'une recherche de stage. Il présente une exposition de bijou ayant eu lieu à Reims le 18 Juin 2014.</p>
                <img style="border:1px black solid;" src="composants/portfolio/portfolio2.gif" alt=""></a>
                </div>
            </li> 
            
            <li style="display: block;" class="c cplus">
                <div style="width:164px;height:121px;" class="slide-up-left" >
                <a href="sites/bijoudexpo/index.html" style="text-decoration:none"><p><b>Un bijou d'expo:</b><br><br> Ce site à été fait dans le cadre d'une recherche de stage. Il présente une exposition de bijou ayant eu lieu à Reims le 18 Juin 2014.</p>
                <img style="border:1px black solid;" src="composants/portfolio/portfolio3.gif" alt=""></a>
                </div>
            </li> 
            
            <li style="display: block;" class="photo">
                <div style="width:164px;height:121px;" class="slide-up-right" >
                <a href="sites/bijoudexpo/index.html" style="text-decoration:none"><p><b>Un bijou d'expo:</b><br><br> Ce site à été fait dans le cadre d'une recherche de stage. Il présente une exposition de bijou ayant eu lieu à Reims le 18 Juin 2014.</p>
                <img style="border:1px black solid;" src="composants/portfolio/portfolio4.gif" alt=""></a>
                </div>
            </li> 
            
            <li style="display: block;" class="web">
                <div style="width:164px;height:121px;" class="slide-left" >
                <a href="sites/bijoudexpo/index.html" style="text-decoration:none"><p><b>Un bijou d'expo:</b><br><br> Ce site à été fait dans le cadre d'une recherche de stage. Il présente une exposition de bijou ayant eu lieu à Reims le 18 Juin 2014.</p>
                <img style="border:1px black solid;" src="composants/portfolio/portfolio1.jpg" alt=""></a>
                </div>
            </li>
            
            <li style="display: block;" class="wp">
                <div style="width:164px;height:121px;" class="slide-right" >
                <a href="sites/bijoudexpo/index.html" style="text-decoration:none"><p><b>Un bijou d'expo:</b><br><br> Ce site à été fait dans le cadre d'une recherche de stage. Il présente une exposition de bijou ayant eu lieu à Reims le 18 Juin 2014.</p>
                <img style="border:1px black solid;" src="composants/portfolio/portfolio2.gif" alt=""></a>
                </div>
            </li> 
            
            <li style="display: block;" class="c cplus">
                <div style="width:164px;height:121px;" class="slide-down" >
                <a href="sites/bijoudexpo/index.html" style="text-decoration:none"><p><b>Un bijou d'expo:</b><br><br> Ce site à été fait dans le cadre d'une recherche de stage. Il présente une exposition de bijou ayant eu lieu à Reims le 18 Juin 2014.</p>
                <img style="border:1px black solid;" src="composants/portfolio/portfolio3.gif" alt=""></a>
                </div>
            </li> 
            
            <li style="display: block;" class="photo">
                <div style="width:164px;height:121px;" class="slide-up" >
                <a href="sites/bijoudexpo/index.html" style="text-decoration:none"><p><b>Un bijou d'expo:</b><br><br> Ce site à été fait dans le cadre d'une recherche de stage. Il présente une exposition de bijou ayant eu lieu à Reims le 18 Juin 2014.</p>
                <img style="border:1px black solid;" src="composants/portfolio/portfolio4.gif" alt=""></a>
                </div>
            </li>
            
            <li style="display: block;" class="web">
                <div style="width:164px;height:121px;" class="slide-down-left" >
                <a href="sites/bijoudexpo/index.html" style="text-decoration:none"><p><b>Un bijou d'expo:</b><br><br> Ce site à été fait dans le cadre d'une recherche de stage. Il présente une exposition de bijou ayant eu lieu à Reims le 18 Juin 2014.</p>
                <img style="border:1px black solid;" src="composants/portfolio/portfolio1.jpg" alt=""></a>
                </div>
            </li>
            
            <li style="display: block;" class="wp">
                <div style="width:164px;height:121px;" class="slide-down-right" >
                <a href="sites/bijoudexpo/index.html" style="text-decoration:none"><p><b>Un bijou d'expo:</b><br><br> Ce site à été fait dans le cadre d'une recherche de stage. Il présente une exposition de bijou ayant eu lieu à Reims le 18 Juin 2014.</p>
                <img style="border:1px black solid;" src="composants/portfolio/portfolio2.gif" alt=""></a>
                </div>
            </li> 
            
            <li style="display: block;" class="c cplus">
                <div style="width:164px;height:121px;" class="slide-up-left" >
                <a href="sites/bijoudexpo/index.html" style="text-decoration:none"><p><b>Un bijou d'expo:</b><br><br> Ce site à été fait dans le cadre d'une recherche de stage. Il présente une exposition de bijou ayant eu lieu à Reims le 18 Juin 2014.</p>
                <img style="border:1px black solid;" src="composants/portfolio/portfolio3.gif" alt=""></a>
                </div>
            </li> 
            
            <li style="display: block;" class="photo">
                <div style="width:164px;height:121px;" class="slide-up-right" >
                <a href="sites/bijoudexpo/index.html" style="text-decoration:none"><p><b>Un bijou d'expo:</b><br><br> Ce site à été fait dans le cadre d'une recherche de stage. Il présente une exposition de bijou ayant eu lieu à Reims le 18 Juin 2014.</p>
                <img style="border:1px black solid;" src="composants/portfolio/portfolio4.gif" alt=""></a>
                </div>
            </li>

            <li style="display: block;" class="web">
                <div style="width:164px;height:121px;" class="slide-left" >
                <a href="sites/bijoudexpo/index.html" style="text-decoration:none"><p><b>Un bijou d'expo:</b><br><br> Ce site à été fait dans le cadre d'une recherche de stage. Il présente une exposition de bijou ayant eu lieu à Reims le 18 Juin 2014.</p>
                <img style="border:1px black solid;" src="composants/portfolio/portfolio1.jpg" alt=""></a>
                </div>
            </li>
            
            <li style="display: block;" class="wp">
                <div style="width:164px;height:121px;" class="slide-right" >
                <a href="sites/bijoudexpo/index.html" style="text-decoration:none"><p><b>Un bijou d'expo:</b><br><br> Ce site à été fait dans le cadre d'une recherche de stage. Il présente une exposition de bijou ayant eu lieu à Reims le 18 Juin 2014.</p>
                <img style="border:1px black solid;" src="composants/portfolio/portfolio2.gif" alt=""></a>
                </div>
            </li> 
            
            <li style="display: block;" class="c cplus">
                <div style="width:164px;height:121px;" class="slide-down" >
                <a href="sites/bijoudexpo/index.html" style="text-decoration:none"><p><b>Un bijou d'expo:</b><br><br> Ce site à été fait dans le cadre d'une recherche de stage. Il présente une exposition de bijou ayant eu lieu à Reims le 18 Juin 2014.</p>
                <img style="border:1px black solid;" src="composants/portfolio/portfolio3.gif" alt=""></a>
                </div>
            </li> 
            
            <li style="display: block;" class="photo">
                <div style="width:164px;height:121px;" class="slide-up" >
                <a href="sites/bijoudexpo/index.html" style="text-decoration:none"><p><b>Un bijou d'expo:</b><br><br> Ce site à été fait dans le cadre d'une recherche de stage. Il présente une exposition de bijou ayant eu lieu à Reims le 18 Juin 2014.</p>
                <img style="border:1px black solid;" src="composants/portfolio/portfolio4.gif" alt=""></a>
                </div>
            </li>           
        </ul>
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
		<div class="accordion" id="for">
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
				<a href="contact.php"><input type="submit" value="Continuer" /></a>
			</div>
		</div>
	</div>
</div>

<?php include("include/baspage.php"); ?>

