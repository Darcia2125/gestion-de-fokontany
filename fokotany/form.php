<html>
 <head>
 <title>Formulaire</title>
 <meta charset="utf-8" />
 </head>
 <body>
 <h1>Certificat de résidence</h1>
 <?php 
 try
    $bdd= new PDO("mysql: host=localhost; dbname=fokontany", "root", "");
    $requete= "SELECT * FROM personne";
    $rep=$bdd->query($requete);
    $donnee= $req->fetch(); 
?>
 <form method="GET" action="">
 <label for="nom" >Nom<label>
 <input type="text" value="echo $donnee['nom']" name="nom" />
 <label for="prenom">Prénom</label>
 <input type="text" value="echo $donnee['Prenom']" name ="prenom"/>
 <label for="date_naissance">Date de naissance</label>
 <input type="date" value="echo $donnee['date_Naissance]" name="date_de_naissance" />
 <label for="adresse">Adresse</label>
 <input type="text" value="echo $donnee['Adresse']" name="adresse"/>
 <label for="date_Integration">date d'intégration</label>
 <input type="text" value="echo $donnee['date_Integration']" name="date_d_integration" />
 <label for="sexe">Sexe</label>
 <input type="text" value="echo $donnee['Sexe']" name="sexe" />
 </form>
 </body>
</html>