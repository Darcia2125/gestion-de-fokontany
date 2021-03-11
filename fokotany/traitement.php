<!DOCTYPE html>
<html>
    <head>
        <title>Connexion à une base de donnée</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" crossorigin="anonymous"/>
    </head>
    <body>
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
        $reponse= $bdd->query("SELECT * FROM personne ");
        $donnees= $reponse->fetch();
    ?>
    <form method="GET" action="verification.php">
   <input type="search" name="terme" placeholder="valeur cherché" />
   <input type="submit" name="ok" value="Valider" class="btn btn-success"/>
    </form>
          
        <?php

            //if(isset ($_GET['search']) AND !empty($_GET['search']))
            //{
             //   $valeur = htmlspecialchars($_GET['search']);

             //   $requete = $bdd->query("SELECT * FROM personne WHERE nom LIKE "%'.$search.'%" ORDER BY id_personne DESC");
                
               //if($requete->rowcount()>0){
        ?>

        <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">Références</th>
                    <th scope="col">Nom d'identifiant</th>
                    <th scope="col">Prénom</th>
                    <th scope="col">Date de naissance</th>
                    <th scope="col">Date d'intégration</th>
                    <th colspan='2' scope="col">Actions</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                        while ($donnees=$reponse ->fetch())
                        {
                    ?>
                    <tr>
                    
                            <td><?php echo $donnees['id_personne']?></td>
                            <td><?php echo $donnees['Nom']?></td>
                            <td><?php echo $donnees['Prenom']?></td>
                            <td><?php echo $donnees['date_Naissance']?></td>
                            <td><?php echo $donnees['date_Integration']?></td>
                            <td>
                            <a href="Update.php?updateid=<?php echo $donnees['id_personne'] ?>" class="btn btn-primary stretched link"> Modifier </a>
                            <a href="Delete.php?delid=<?php echo $donnees['id_personne'] ?>" class="btn btn-danger stretched link"> Supprimer </a>
                            </td>
                    </tr>
                    <!-- <?php
                        }
                    ?>
                </tbody>
                </table>
                <?php //} else{?>
                    Aucun résultat obtenu pour <?$valeur?> -->
        <?php
           
        ?>
        
            


</body>
</html>