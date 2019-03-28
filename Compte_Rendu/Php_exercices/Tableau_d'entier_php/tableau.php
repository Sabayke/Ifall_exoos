<?php
$tab[0]=5;
$tab[1]=10;
$tab[2]=15;
//echo "le 1er tableau est $tab1[0]";
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
for($i=0;$i<=2;$i++)
	echo "$i"." ";
?>

</tr>
<td>
<?php 
for($i=0;$i<=2;$i++)
	echo "$tab[$i]". " ";
?>

</td>
</table>
</body>
</html>