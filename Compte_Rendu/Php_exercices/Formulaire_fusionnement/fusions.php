<html>
    <head><title>formulaire</title></head>
    <body>
        
        
        <form name="inscription" method="REQUEST" action="fusions.php">
            Nom : <input type="text" name="nom"/> <br/>
            Age : <input type="text" name="age"/><br/>
            <input type="submit" name="valider" value="OK"/>
        </form>
        <?php
        if(isset($_REQUEST['valider'])){
            $nom=$_REQUEST['nom'];
            $age=$_REQUEST['age'];
			 if(empty($_REQUEST['nom']) OR empty($_REQUEST['age']))
			 { echo "Avez vous oublier de remplir tous les champs";
			 }
			 else {
			if($age<18)
			{
				echo "vous etes pas autoriser à s'inscrire";
			}
			else {
            echo "Bonjour ".$nom. " votre age est ".$age;
			}
		}
		}
        ?>
    </body>
</html>