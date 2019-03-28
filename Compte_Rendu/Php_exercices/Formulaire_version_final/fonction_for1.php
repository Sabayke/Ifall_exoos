<?php

function form()
{
    ?>
    <html>
    <body>
    <form name="formulaire" method="POST" action="fonction_for1.php">
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
	
       if(empty($_POST['nom']) OR empty($_POST['age']))
			 { 
		 echo "Avez vous oublier de remplir tous les champs";
			 }
	   
		else
		{
			if(isset($_post['nom']))
		{
		  echo $_POST['nom'];
		}
		
        else if(isset($_POST['age']))
		{
		  echo $_POST["age"];
		}
		}
		if($age<18)
			{
				echo "vous n'êtes pas autorisé à s'inscrire";
			}
			else {
        echo "Bonjour " . $nom . " votre age est " . $age . " ans";
			}
	}
	
}

echo affichage();
?>