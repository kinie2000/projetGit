<?php

include '../fonction/func_pos.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
if(isset($_GET['erreur']))
{
	echo "vous devez remplir tous les champs";
}
?>
<form method="POST">
	<fieldset>
		<legend>INFORMATION PERSONNELLE</legend>
	<label>ADRESSE MAIL</label><br><input type="mail" name="mail"><br>
	<label>NOM</label><br><input type="text" name="nom"><br>
	<label>DATE DE NAISSANCE</label><br><input type="date" name="datnais"><br><br>
	    <legend>AUTRES INFORMATIONS</legend><br>
	<label>DERNIER DIPLOME</label><br><input type="texte" name="diplome"><br>
	<label>VOTRE NIVEAU EN ENGLAIS</label><br><input type="text" name="nivangl"><br>
	<label>VOS ATOUTS POUR LE POSTE</label><br><input type="text" name="atout">	<br>
	</fieldset>
	

	<input type="submit" name="submit" value="ENREGISTRER">
</form>
</body>
</html>