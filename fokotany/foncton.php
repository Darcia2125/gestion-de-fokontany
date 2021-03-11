

<?php


try{
            $pdo= new PDO("mysql:host=localhost; dbname=fokontany", 'root', '');
        }
        catch(Exception $e)
        {
            die('Erreur'.$e->getMessage());
		}
        function ajoutMembre($Nom, $Prenom, $date_Naissance, $adresse, $zone_localisation, $sexe, $date_Integration){
			global $pdo;//On appelle le pdo qui est déclaré à l'extérieur du fonction
			$query = $pdo->prepare("INSERT INTO personne(Nom, Prenom, date_Naissance, adresse, zone_localisation, sexe, date_Integration) VALUES(?, ?, ?, ?, ?, ?, ?)");
			$query->execute(array($Nom, $Prenom, $date_Naissance, $adresse, $zone_localisation, $sexe, $date_Integration));
			if($query){ //Si la réquette est réussi, on returne true
				return true;
			}
			else{
				echo ("Erreur ajout membre");
			}   
		}	
      
		if ( isset( $_POST['username'] ) ){
			echo("test");
			$username=htmlspecialchars($_POST['username']);
			$prenom=htmlspecialchars($_POST['prenom']);
			$adresse=htmlspecialchars($_POST['adresse']);
			$naissance=htmlspecialchars($_POST['naissance']);
			$zone=htmlspecialchars($_POST['zone']);
			$sexe=htmlspecialchars($_POST['sexe']);
            $integration=htmlspecialchars($_POST['integration']);
						ajoutMembre($username, $prenom, $naissance, $adresse, $zone, $sexe,$integration);
						header("location:index.php");
		}


	
       
?>