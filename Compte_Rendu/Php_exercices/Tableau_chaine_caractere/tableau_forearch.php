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
foreach($tableau as $taille => $valeur) {
    echo "$taille => " . "$valeur" ."</br>";
}
?>
</tr>

</table>
</body>
</html>