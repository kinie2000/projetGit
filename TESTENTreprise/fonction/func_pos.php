<?php
//on inclut la fonction connexion.php
include 'connexion.php';

if (isset($_POST['submit'])) {
	//on crée les valeurs en eliminant les espaces en debut de phrase et les carractères speciaux
	$mail=htmlspecialchars(trim($_POST['mail']));
	$nom=htmlspecialchars(trim($_POST['nom']));
	$datenais=htmlspecialchars(trim($_POST['datnais']));
	$diplome=htmlspecialchars(trim($_POST['diplome']));
	$nivang=htmlspecialchars(trim($_POST['nivangl']));
	$atout=htmlspecialchars(trim($_POST['atout']));
	//on verifie si tous les champs sont bien remplis
	if ($mail&&$nom&&$datenais&&$diplome&&$nivang&&$atout) {
		//insertion des donnée avec une methode preparé
	$req=$bd->prepare("INSERT INTO `client` (`mail`, `nom`, `datenais`, `diplome`, `nivangl`, `atout`) VALUES(?,?,?,?,?,?)");
$req->execute(array($mail,$nom,$datenais,$diplome,$nivang,$atout));
	}
	else
	{
		//on redirige vers la meme page postuler lorsque tous les champs ne sont remplis
	header("location: ../pages/postuler.php?erreur");
	}


}
?>