<?php

function dbconnect()
{
    $cn = new PDO('mysql:host=localhost;dbname=dbetudiant', "root", "");
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

function ajouter_etudiant($nom, $prenom, $file)
{
    $cn = dbconnect();
    $req = $cn->prepare("INSERT INTO students (nom, prenom, photo) VALUES (?, ?, ?)");
    $req->execute([$nom, $prenom, $file]);
}

function getAllStudent()
{
    $cn = dbconnect();
    $etudiant = $cn->query("SELECT * FROM students")->fetchAll(PDO::FETCH_ASSOC);
    return $etudiant;
}

function deleteEtudiant($id)
{
    $cn = dbconnect();
    $del = $cn->prepare("DELETE FROM students WHERE id=?");
    $del->execute([$id]);
}
?>