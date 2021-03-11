<!DOCTYPE HTML>

<html>

<head>
  <title>Affichage</title>
  <link rel="stylesheet" href="affichage.css"/>
  <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    <h1 align="center">Filtration des personnes agées pour les subvention</h1>
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
    $requete= "SELECT DISTINCT personne.Nom, personne.Prenom, personne.date_Naissance, personne.date_Integration FROM personne WHERE date_Naissance BETWEEN '1956-01-01' AND '1990-01-01'";
    $response= $bdd->query($requete);
    ?>

     <center >
    <table class="table table-striped">
    <tr>
        
        <td>Nom</td>
        <td>Prenom</td>
        <td>Date de naissance</td>
        <td>Date d'intergration</td>
        
    </tr>
    <?php while($donne=$response->fetch()) {?>
    <tr>
        
        <td><?php echo $donne['Nom']; ?></td>
        <td><?php echo $donne['Prenom']; ?></td>
        <td><?php echo $donne['date_Naissance']; ?></td>
        <td><?php echo $donne['date_Integration']; ?></td>
        
    </tr>
    

    <?php } ?>
</table>
</body>