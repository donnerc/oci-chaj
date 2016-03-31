<?php
if ($_POST) {
	$nom = $_POST["nom"];
	$adresse = $_POST["adresse"];
	$ville = $_POST["ville"];
	$canton = $_POST["canton"];
	$sexe = $_POST["sexe"];
	$don = $_POST["don"];
	$comments = $_POST["comments"];
	
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">

<html> 
<head> 
<meta name="robots" content="noindex,  nofollow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8	">
<title>Inscription &acirc; Coeur de Gott&eacute;ron</title> 

</head>
<body>

<p>
<img src="images/coeur.jpg" alt="Gott&eacute;ron" />
</p>

<div>
<p>
Merci <strong><?php print($nom); ?></strong>,
pour vous &ecirc;tre inscrit au fan's club <i>Coeur de Gott&eacute;ron</i> Voici les informations dont nous disposons &agrave; votre sujet:
</p>
<ul>
<li><strong>Nom: </strong><?php print($nom); ?></li>
<li><strong>Adresse: </strong><?php print($adresse); ?></li>
<li><strong>Localit&eacute; :</strong><?php print($ville); ?></li>
<li><strong>Canton: </strong><?php print($canton); ?></li>
<li><strong>Sexe: </strong><?php print($sexe); ?></li>
<li><strong>Promesse de don: </strong><?php print($don); ?>.-</li>
<li><strong>Commentaires: </strong><?php print($comments); ?></li>
</ul>

<p>
Vous recevrez bient&ocirc;t plus d'informations concernant nos activit&eacute;s !
</p>
</div>


</body> 
</html>


<?php

}

?>
