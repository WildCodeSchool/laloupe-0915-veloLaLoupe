<?php
session_start();

$confirmation = 'Le message a bien été transmis, merci.';
$erreur = 'Le message n\'a pas été transmis !<br />N\'oubliez pas de remplir votre nom, prénom et une adresse email valide, merci.';
$non_valide = 'La confirmation de l\'adresse email ne correspond pas à l\'adresse email saisie';

$adresse = "km120.cycle@gmail.com";
$site = "http://www.km120.fr";

$TO = $adresse;

$head = "From: ".$adresse."\n";
$head .= "X-Sender: <".$adresse.">\n";
$head .= "X-Mailer: PHP\n";
$head .= "Return-Path: <".$adresse.">\n";
$head .= "Content-Type: text/plain; charset=UTF-8\n";

$sujet = "Demande de renseignements";

$informations = "
Nom : ".$_POST['nom']." \r\n
Prénom : ".$_POST['prenom']." \r\n
Adresse email : ".$_POST['email']." \r\n
N° de Téléphone : ".$_POST['telephone']." \r\n
Message : ".$_POST['message']." \r\n
";

$email = $_POST['email'];



if($_POST['email'] == $_POST['email_confirm'])
{
		if (!empty($_POST['prenom']) && !empty($_POST['nom']) && !empty($_POST['email']))
		{
		$res = mail($TO, $sujet ,$informations, $head);
		$_SESSION['confirmation'] = $confirmation;
		header('Location: contact.php');
		} 
		else 
		{
		$_SESSION['erreur'] = $erreur;
		header('Location: contact.php');
		}
}
else
{
	$_SESSION['non_valide'] = $non_valide;
	header('Location: contact.php');
}
?>
