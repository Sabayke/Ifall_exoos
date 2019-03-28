<?php
$tableau = array("rouge" => "rose" , "blanc" => "noir" , "bleu" => "bleu_du_ciel");

reset($tableau);
?>
<!DOCTYPE html>
<html lang="fr">
<head>

<title> tableau en php </title>
</head>
<body>
<table>
<tr>
<?php 
while(list($taille, $valeur)= each($tableau))
{
	echo "$taille ";	
}
?>
</tr>
<td>
<?php 
while(list($taille, $valeur)= each($tableau))
{
	echo "$valeur ";	
}
?>
</td>


</table>
</body>
</html>