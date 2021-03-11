<?php 
    try{
        $pdo= new PDO("mysql:host=localhost; dbname=fokontany", 'root', '');
    }
    catch(Exception $e)
    {
        die('Erreur'.$e->getMessage());
    }
function modifier($Nom,$Prenom,$date_Naissance,$adresse,$zone_localisation,$sexe,$date_Integration,$id_personne){
    global $pdo;//On appelle le pdo qui est déclaré à l'extérieur du fonction
    
    $query = $pdo->prepare("UPDATE personne SET Nom=? ,Prenom=?, date_Naissance=?  , adresse=? , zone_localisation=? , sexe=? , date_Integration=? WHERE id_personne=?");
    $query->execute(array($Nom,$Prenom,$date_Naissance,$adresse,$zone_localisation,$sexe,$date_Integration,$id_personne));
    if($query){ //Si la réquette est réussi, on returne true
    return true;
    echo("nety");
    }	
else{
echo "Erreur modifier membre";
}  
} 
    if ( isset( $_POST['id'] ) ){
        $username=htmlspecialchars($_POST['username']);
        $id=htmlspecialchars($_POST['id']);
        $prenom=htmlspecialchars($_POST['prenom']);
        $adresse=htmlspecialchars($_POST['adresse']);
        $naissance=htmlspecialchars($_POST['naissance']);
        $zone=htmlspecialchars($_POST['zone']);
        $sexe=htmlspecialchars($_POST['sexe']);
        $integration=htmlspecialchars($_POST['integration']);

        modifier($username,$prenom,$naissance,$adresse,$zone,$sexe,$integration,$id);
        header("location:index.php");
    }
?>