<!DOCTYPE HTML>

<html>

<head>
  <title>Affichage</title>
  <link rel="stylesheet" href="affichage.css"/>
  <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    <h1 align="center">Les vérifications de changement</h1>
    <?php
    $db=new PDO('mysql:host=localhost;dbname=fokontany;charset=utf8mb4', 'root', '');
    $req= "SELECT carnet_fokotany.nom,carnet_fokotany.prenom,carnet_fokotany.date_Integration,certificat_residence.date_demenagement from carnet_fokotany INNER join certificat_residence on certificat_residence.nom =carnet_fokotany.nom;";
    $res= $db->query($req);
     ?>

     <center >
         <table class="table table-striped">
    <tr>
        
        <td>Nom</td>
        <td>Prenom</td>
        <td>Date d'intégration</td>
        <td>Date de demenagement</td>
        
    </tr>
    <?php while($ligne=$res->fetch()) 
    {?>
    <tr>
        
        <td><?php echo $ligne['nom']; ?></td>
        <td><?php echo $ligne['prenom']; ?></td>
        <td><?php echo $ligne['date_Integration']; ?></td>
        <td><?php echo $ligne['date_demenagement']; ?></td>
        
    </tr>
    

    <?php } ?>
</table>
</body>

</html>