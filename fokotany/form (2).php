<html>
 <head>
 <title>Formulaire</title>
 <meta charset="utf-8" />
 <link rel="stylesheet" href="css/style.css" >
 </head>
 <body align="center">
 <h1>Certificat de résidence</h1>
 <?php 
 try
 {
     $pdo = new PDO ( "mysql:host=localhost; dbname=fokontany", "root", '');
 }
 
 catch(PDOException $e){
     echo $e->getMessage();
  }
    $requete= "SELECT nom,prenom,date_naissance,date_integration,adresse FROM personne WHERE nom=?";
    $rep=$pdo->query($requete);
    $donnee= $rep->fetch(); 
?>

 <form method="GET" action=""  >
 <table>
     <tr>
         <td>
        <label for="nom" >Nom<label>:</td>
        <td><input type="text" value="<?php echo $donnee['Nom']?>" name="nom"/></br>
        </td>
    </tr>
    <tr>
    <td><label for="prenom">Prénom:</label></td>
    <td> <input type="text" value="<?php echo $donnee['Prenom']?>" name ="prenom"/></td>   
 </tr>

    <tr>
    <td><label for="date_naissance">Date de naissance:</label></td>
    <td><input type="date" value="<?php echo $donnee['date_Naissance']?>" name="date_de_naissance" /></td>
    </tr>
    <tr>
    <td><label for="adresse">Adresse:</label></td>
    <td> <input type="text" value="<?php echo $donnee['adresse']?>" name="adresse"/></td>
    </tr>

    <tr>
    <td><label for="date_Integration">date d'intégration:</label></td>
    <td> <input type="date" value="<?echo $donnee['date_Integration']?>" name="date_d_integration" /></td>
    </tr>

    <tr>
    <td> <label for="sexe">Sexe:</label></td>
    <td><input type="text" value="<?php echo $donnee['sexe']?>" name="sexe" /></td>
    </tr>
 </table>
 </form>

 </body>
</html>