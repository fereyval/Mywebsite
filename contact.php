<?php
if (!defined('ROOT'))
	define('ROOT', './');
require ROOT.'config/common.php';

// Tests des variables du formulaire
if (isset($_POST['submit'])) {
    if (empty($_POST['age'])) {
        // Controle des saisies
        $errors = new Errors($_POST, 'saisie');
        $errors->add("Le nom est obligatoire.", 'nom', 'notEmpty');
        $errors->add("L'email est obligatoire.", 'email', 'notEmpty');
        $errors->add("L'email n'est pas valide.", 'email', 'isMail');
        $errors->add('Le message est obligatoire.', 'message', 'notEmpty');
        $msg->adds('e', $errors->invalid());

        // Envoie de l'email
        if (!$msg->hasErrors()) {
            $message =
                    "Nom : ".$_POST['nom']."\n".
                    "Prénom : ".$_POST['prenom']."\n".
                    "E-mail : ".$_POST['email']."\n".
                    "Téléphone : ".$_POST['telephone']."\n".
                    "Message : ".$_POST['message']."\n";

            if (MAIL_TEST != '') {
                $resultat=sendMail( MAIL_TEST, $_POST['nom'].' '.$_POST['prenom'], $_POST['email'], MAIL_OBJET, $message);
            }
            $resultat=sendMail( MAIL_TO,   $_POST['nom'].' '.$_POST['prenom'], $_POST['email'], MAIL_OBJET, $message);

            if($resultat != 1) {
                $msg->adds('e', 'Votre demande de contact <strong>n\'a pas été envoyée</strong>');
            } else {
                $msg->add('s', 'Votre demande de contact <strong>a été envoyée</strong>');
                unset($_POST);
            }
        }
    }
    else {
        $msg->adds('e', 'Le champ <strong>age</strong> ne doit pas être renseigné', 'age');
    }
}

// Variables d'entete
$rubrique = 'contact';
$title = "Contact";
$description = "";
$head = '
<style type="text/css">
.s_kill { display: none; }
</style>';
$javascript = '';
include("include/entete.php");
?>
<div role="main" class="texte4 mod mls pam">
<h1>Contactez-nous</h1>

<h2>Nos coordonnées</h2>
<div class="vcard">
    <p>
        <strong class="fn"><?php echo SOC_NOM ?></strong>
    </p>
    <p>
        <strong>Adresse :</strong><br>
        <span class="street-address"><?php echo SOC_ADRESSE ?></span><br>
        <span class="postal-code"><?php echo SOC_CP ?></span> - <span class="locality"><?php echo SOC_VILLE ?></span><br>
        <strong>Téléphone :</strong> <span class="tel"><?php echo SOC_TEL ?></span><br>
        <strong>GSM :</strong> <span><?php echo SOC_GSM ?></span><br>
        <strong>Fax :</strong> <?php echo SOC_FAX ?><br>
        <strong>Courriel :</strong> <span class="email"><?php echo mailAntiSpam(SOC_EMAIL) ?></span>
    </p>
</div>
<h2>Envoyez-nous un message</h2>
<?php echo $msg->display('all', true, false); ?>
<form class="saisie2" method="post" action="?">
	<p <?php  echo $msg->hasErrors('nom') ? 'class="form_erreur"' : '' ?>>
		<label for="nom" class="oblig" >Nom </label>
		<input name="nom" id="nom" type="text" value="<?php echo htmlXspecialchars(!empty($_POST['nom']) ? $_POST['nom'] : '')?>">
	</p>
	<p>
		<label for="prenom">Prénom</label>
		<input name="prenom" id="prenom" type="text" value="<?php echo htmlXspecialchars(!empty($_POST['prenom']) ? $_POST['prenom'] : '')?>">
	</p>
	<p class="s_kill">
		<label for="age">Age</label>
		<input name="age" id="age" type="text" value="">
	</p>
	<p <?php  echo $msg->hasErrors('email') ? 'class="form_erreur"' : '' ?>>
		<label for="email" class="oblig" >Courriel </label>
		<input name="email" id="email" type="text" value="<?php echo htmlXspecialchars(!empty($_POST['email']) ? $_POST['email'] : '')?>">
	</p>
    <p>
        <label for="telephone">Téléphone </label>
        <input name="telephone" id="telephone" type="text" value="<?php echo htmlXspecialchars(!empty($_POST['telephone']) ? $_POST['telephone'] : '')?>">
    </p>
	<p <?php  echo $msg->hasErrors('message') ? 'class="form_erreur"' : '' ?>>
		<label for="message" class="oblig" >Message</label>
		<textarea name="message"  id="message" cols="40" rows="5" ><?php echo htmlXspecialchars(!empty($_POST['message']) ? $_POST['message'] : '')?></textarea>
	</p>
	<p>
		<label for="submit">&nbsp;</label>
		<input name="submit" id="submit" class="envoyer_mail" type="submit" value="Envoyer">
	</p>
</form>
<?php
$msg->clear();
include("include/baspage.php");
?>