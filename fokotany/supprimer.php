
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style1.css">
	<meta charset="utf-8"/> 
	<title>Supprimer</title>
	
</head>

<body>
    <?php
        try{
            $pdo= new PDO("mysql:host=localhost; dbname=fokontany", 'root', '');
        }
        catch(Exception $e)
        {
            die('Erreur'.$e->getMessage());
        }
    
    if ( isset( $_GET['id'] ) ){
        $id=htmlspecialchars($_GET['id']);
        $reponse= $pdo->prepare( "DELETE FROM personne WHERE id_personne=?"); 
        $reponse->execute( array( $id ) );
        echo "Record deleted successfully";
        header("location: index.php");

    }
    ?>


    </form> 
</body>
</html>
