<!DOCTYPE html>
<html lang="fr">
<body>
<form>
<?php
if($isset($_POST['ok'])) {
	?>
Nom: <input type="text" name="nom">
age: <input type="text" name="age">
<input type="submit" value="ok">
</form>
</body>
</html>
<?php
}
else {
$n= $_REQUEST["nom"];
$v= $_REQUEST["age"];
echo "Bonjour  "  .$n. "Vous avez " .$v. "ans";
}
?>