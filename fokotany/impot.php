<!DOCTYPE HTML>

<html>

<head>
  <title>Affichage</title> 
  <link rel="stylesheet" href="affichage.css"/>
  <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    <a class
    <h1 align="center">Impôt</h1>
    <?php
   try{
       $bdd= new PDO("mysql:host=localhost; dbname=fokontany", 'root', '');
   }
   catch(Exception $e)
   {
       die('Erreur'.$e->getMessage());
   }
   ?>
   <?php
    $requete= "SELECT DISTINCT impot.type,impot.montant, impot.date_paiement, impot.reste, impot.nom, personne.Prenom FROM `impot` NATURAL JOIN personne WHERE impot.nom=personne.nom";
    $response= $bdd->query($requete);
    ?>

     <center >
    <table class="table table-striped">
    <tr>
        
        <td>Type d'impôt</td>
        <td>Montant</td>
        <td>reste</td>
        <td>Nom de personne</td>
        <td>Prénom</td>
        <td>date_paiement</td>
        
    </tr>
    <?php while($donne=$response->fetch()) {?>
    <tr>
        
        <td><?php echo $donne['type']; ?></td>
        <td><?php echo $donne['montant']; ?></td>
        <td><?php echo $donne['reste']; ?></td>
        <td><?php echo $donne['nom']; ?></td>
        <td><?php echo $donne['Prenom']; ?></td>
        <td><?php echo $donne['date_paiement']; ?></td>
        
    </tr>
    

    <?php } ?>
</table>
</body>