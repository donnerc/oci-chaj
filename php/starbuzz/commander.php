<?php
if ($_POST) {
	$nom = $_POST["nom"];
	$adresse = $_POST["adresse"];
	$ville = $_POST["ville"];
	$region =$_POST["region"];
	$code = $_POST["codepostal"];
	$cafes = $_POST["cafes"];
	$formecafe = $_POST["formecafe"];
	$commentaire = $_POST["commentaire"];
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">

<html> 
<head> 
<meta name="robots" content="noindex,  nofollow">
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>La Machine à café Starbuzz</title> 
</head>
<body>

<h1>La Machine à café Starbuzz</h1>

	<div>
<p>
Merci <strong><?php print($nom);?></strong> de votre commande. Voici les informations dont nous disposons:</p>

<p>
<strong>Café: </strong> <?php print($cafes);?><br>
<strong>Type de grains: </strong> <?php print($formecafe);?><br>
<strong>Nom: </strong> <?php print($nom);?><br>
<strong>Adresse: </strong> <?php print($adresse);?><br>
<strong>Ville: </strong><?php print($ville);?><br>
<strong>Région: </strong><?php print($region);?><br>
<strong>Code postal: </strong><?php print($code);?><br>
<strong>Commentaire: </strong><?php print($commentaire);?>
</p>
</div>


</body> 
</html>


<?php

}

?>




































