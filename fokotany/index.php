<!DOCTYPE html>
<html>
    <head>
    <meta charset='utf-8'>
    <title>Fonkotany Mobile</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" crossorigin="anonymous"/>
    <script LANGUAGE="JavaScript">
        function change(){
            if (window.document.choice.selectedIndex != 0)
            window.location = window.document.myform.choice.options
                [document.myform.choice.selectedIndex].value;
                alert("vous devez choisir")
            }
    </script>
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
     <h1 align="center"> Gestion de fokontany </h1><hr>
     <div class="row">
     <div class= "col-md-3">
        <a href="impot.php" id="impot" class="btn btn-success" ></i>Impôt </i></a></br></br>
        <a href="projection.php" id="impot" class="btn btn-success" ></i>Filtre age </i></a></br></br>
        <a href="form.php" id="impot" class="btn btn-success" ></i>Certificat </i></a></br></br>
         <a href="demenagement.php" id="impot" class="btn btn-success"  ></i>Intégration et déménagement</i></a>
    </div>
    <div class="col-md-9">
     <div class="card" width="40%">
        <div class="card-header">
        <h5>Ajouter de nouveaux produits:</h5></br>
    

        <a href="ajouter.php" id="add" class="btn btn-dark"><i class="fa fa-plus-circle"></i>Ajouter </i></a>
        </div>
        <div class="card-body">
                 <form method="GET" action="traitement.php" name="myform">
                 <div class="row">
                 <div class="col-md-6">
                 <i class="fa fa-search" aria-hidden="true"></i><input type= "search" name="terme" id="terme" width="80%" />
                         <input type="submit"  value="Rechercher" name="envoi" id="name" class="btn btn-primary"/> 
                         

                          
                          
                          
               
                <div class="col-md-6">
                <!--<select name="choice" onChange="change()">
                <option value="impot.php">Impôt</option>
                <option value="http://www.altavista.com">Filtre age</option>
                <option value="certificat.php">Certificat</option>
                <option value="Mariage.php">Mariage</option>
                
                </select>-->
                
                </div>
                </div>
                </form> 
         </div>
    </div>
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
                <a href="modifier.php?id=<?php echo $donnees['id_personne'] ?>" class="btn btn-primary stretched link"> Modifier </a>
                <a href="supprimer.php?id=<?php echo $donnees['id_personne'] ?>" class="btn btn-danger stretched link"> Supprimer </a>
                </td>
        </tr>
        <?php
            }
        ?>
    </tbody>
    </table>
    </div>
    </div>
    </body>
</html>
