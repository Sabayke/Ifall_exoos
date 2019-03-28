<?php
function form()
// affichage du formulaire
{
    ?>
    <html>
    <body>
    <form name="formulaire" method="post" action="fonction_form_trait.php">
        Nom: <input type="text" name="nom">
        Age: <input type="text" name="age">
        <input type="submit" name="valider" value="OK">
    </form>
    <?php
}

echo form();
?>
<?php
// traitement 
function affichage()
{
    if (isset($_POST['valider'])) {
        $nom = $_POST['nom'];
        $age = $_POST['age'];

        echo "Bonjour " . $nom . " votre age est " . $age . " ans";
    }
}

echo affichage();
?>