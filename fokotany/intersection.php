<!DOCTYPE html>
<html lang="en">
<head>
	<title>formulaire</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	
</head>
<body>
<a href="/index.php" class="btn btn-success stretched-link">Home</a><br><br> <!-- / est equivalent à index.php -->
<form action="index.php?action=modifier_membre" method="POST" >
            <div class="form-group row">
        <label for="inputname" class="col-sm-2 col-form-label">Nom</label><br>
        <div class="col-sm-10">
            <input type="name" name="nom" class="form-control" id="inputname" value=<?= $membre["nom"] ?>> <br>
        </div>
    </div>

    <div class="form-group row">
        <label for="inputprenom"  class="col-sm-2 col-form-label">Prenom</label><br>
        <div class="col-sm-10">
            <input type="text" name="prenom" class="form-control" id="inputprenom" value=<?= $membre["prenom"] ?>><br><br>
        </div>
    </div>
    <input type="hidden"value=<?= $membre["id"] ?> name="id">
    <div class="form-group row">
        <label for="poste" class="col-sm-2 col-form-label">Poste</label><br>
        <select class="custom-select" style="max-width: 120px;" name="poste" required>
                        <option>Poste</option>
                        <option value="President">President</option>
                        <option value="Responsable Ui et Ux">Responsable Ui et Ux</option>
                        <option value="Responsable Back-Office">Responsable Back-Office</option>
                        <option value="Responsable Desktop et Mobile">Responsable Desktop et Mobile</option>
                        <option value="Responsable Exploitation">Responsable Exploitation</option>
                        <option value="CA">CA</option>
                        <option value="Equipe Ui et Ux">Equipe Ui et Ux</option>
                        <option value="Equipe Back-Office">Equipe Back-Office</option>
                        <option value="Equipe Desktop et Mobile">Equipe Desktop et Mobile</option>
                        <option value="Equipe Exploitation">Equipe Exploitation</option>
                    </select>
    </div>
    <div class="form-group row">
        <label for="username"  class="col-sm-2 col-form-label">Username github</label><br>
        <div class="col-sm-10">
            <input type="text" name="userGithub" class="form-control" id="username" value=<?= $membre["userGithub"] ?>><br><br>
        </div>
    </div


    
    <div class="form-group row">
        <div class="col-sm-10 offset-sm-2">
            <button type="submit" onClick="return confirm('Valider la modification')" class="btn btn-primary">Modifier</button>
        </div>
    </div>
</form>
</body>
</html>