<?php

function db_connect(){
    $cn = new PDO('mysql:host=localhost;dbname=dbproduit', "root", "");
    return $cn;
}


function uploadImage($file)
{
    // Vérifier si le fichier existe et s'il n'y a pas d'erreur
    if (!isset($file) || $file['error'] !== UPLOAD_ERR_OK) {
        return null;
    }

    // Récupérer le chemin temporaire
    $tmp = $file['tmp_name'];

    // Vérifier si le fichier a été uploadé
    if (!is_uploaded_file($tmp)) {
        return null;
    }

    // Dossier où on enregistre les fichiers 
    $folder = "app/uploads/";
    
    // Créer le dossier s'il n'existe pas
    if (!file_exists($folder)) {
        mkdir($folder, 0777, true);
    }
    
    $name = time() . "_" . basename($file['name']);

    // Chemin finale
    $chemin = $folder . $name;

    // Déplacer le fichier uploadé
    if (move_uploaded_file($tmp, $chemin)) {
        return $name;
    }

    return null;
}


function addproduct($libelle, $prix, $file){
$cn= db_connect();

$q = $cn->prepare("insert into produit (libelle, prix, image) values (?,?,?) ");

$q->execute([$libelle, $prix, $file]);

header("Location:liste.php");
}


function getProducts(){
    $cnx = db_connect();
    $produits=$cnx->query("Select * from produit")->fetchAll(PDO::FETCH_ASSOC);
    return $produits;
}