
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style1.css">
	<meta charset="utf-8"/> 
	<title>Modification</title>
	
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
           $reponse= $pdo->prepare("SELECT * from personne  WHERE id_personne=?"); 
           $reponse->execute( array( $id) );
           $donnees = $reponse->fetch();
    }
    ?>

<div class="header">
    <h2>FORMULARE DE MODIFICATION</h2>
    </div>
    <form method="post" action="test.php">
    <input type="hidden" name="id" value="<?php echo $donnees['id_personne']?>">
        <div class="input-group">
            <label>Nom</label>
            <input type="text" name="username" value="<?php echo $donnees['Nom']?>">
            <label>Prénoms</label>
            <input type="text" name="prenom" value="<?php echo $donnees['Prenom']?>">
            <label>Naissance</label>
            <input type="date" name="naissance" value="<?php echo $donnees['date_Naissance']?>">
            <label>Adresse</label>
            <input type="text" name="adresse" value="<?php echo $donnees['adresse']?>">
            <label>Zone</label>
            <input type="text" name="zone" value="<?php echo $donnees['zone_localisation']?>">
            <label>Sexe</label>
            <input type="text" name="sexe" value="<?php echo $donnees['sexe']?>">
            <label>Intégration</label>
            <input type="date" name="integration" value="<?php echo $donnees['date_Integration']?>">
        </div>
        <div class="input-group">
            <button type="submit" name="register" class="btn">modifier</button>
        </div>
        
    </form> 
</body>
</html>
