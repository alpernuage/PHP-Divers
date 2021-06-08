<?php
header('Content-Type: application/json');

try {
    $pdo = new PDO('mysql:host=localhost; port=3306;dbname=api', 'root', '');
    $retour["success"] = true;
    $retour["message"] = "Connexion à la BDD réussie";
} catch (Exception $e) {
    $retour["success"] = false;
    $retour["message"] = "Connexion à la BDD imposible";
}

if (!empty($_POST["ville_depart"]) && !empty($_POST["ville_destination"]) && !empty($_POST["date"]) && !empty($_POST["nb_heure"]) && !empty($_POST["prix"]) ) {
    // $requete = $pdo->prepare("SELECT *  FROM `vols` WHERE `ville_depart` LIKE :v");
    // $requete->bindParam(':v', $_POST["ville_depart"]);
} else {
$retour["success"]=false;
$retour["success"]="Il manque des infos";
}

// $resultats = $requete->fetchAll();

// $retour["success"] = true;
// $retour["message"] = "Voici les vols";
// $retour["results"]["nb"] = count($resultats);
// $retour["results"]["vols"]= $resultats;

echo json_encode($retour);
