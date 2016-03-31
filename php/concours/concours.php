<?php
if ($_POST) {
	$prenom = $_POST["prenom"];
	$nom = $_POST["nom"];
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">

<html> 
<head> 
<meta name="robots" content="noindex,  nofollow">
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>T&ecirc;te la premi&egrave;re HTML avec CSS &amp; XHTML- Concours du chapitre 14</title> 
<style type="text/css">
img {
	float: left;
	margin-right: 20px;
}
div {
	padding-top: 40px;
}
</style>
</head>
<body>

<p>
<img src="http://headfirstlabs.com/Images/hfguy.jpg" alt="T&ecirc;te la premi&egrave;re" />
</p>

<div>
<p>
Merci <strong><?php print($prenom); print(" "); print($nom); ?></strong>,
pour avoir particip&eacute; au grand concours du chapitre "Tableaux et Formulaires" du cours HTML-CSS du Coll&egrave;ge du Sud.
</p>
<p>
Si vous gagnez quelque chose, vous le saurez bient&ocirc;t !
</p>
</div>


</body> 
</html>


<?php

}

?>
