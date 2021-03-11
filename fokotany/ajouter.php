

<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style1.css">
	<meta charset="utf-8"/> 
	<title> Nouveaux membres</title>
	
</head>

<body>
<div class="header">
    <h2>Ajouter</h2>
    </div>
    <form method="post" action="foncton.php">
    
        <div class="input-group">
            <label>Nom</label>
            <input type="text" name="username">
            <label>Prénoms</label>
            <input type="text" name="prenom">
            <label>Naissance</label>
            <input type="date" name="naissance">
            <label>Adresse</label>
            <input type="text" name="adresse">
            <label>Zone</label>
            <input type="text" name="zone">
            <label>Sexe</label>
            <input type="text" name="sexe">
            <label>Intégration</label>
            <input type="date" name="integration">
        </div>
        <div class="input-group">
            <button type="submit" name="ajouter" class="btn" > Ajouter </button>
        </div>
		</body>
</html>
