<?php
include_once 'functions.php';

// Vérifier si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Vérifier que les champs obligatoires sont présents
    if (!isset($_POST['nom']) || !isset($_POST['prenom'])) {
        die("Les champs nom et prénom sont obligatoires");
    }
    
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    
    // Gérer l'upload de l'image
    $photo = null;
    if (isset($_FILES['photo']) && $_FILES['photo']['error'] === UPLOAD_ERR_OK) {
        $photo = uploadImage($_FILES['photo']);
    }
    
    // Ajouter l'étudiant
    ajouter_etudiant($nom, $prenom, $photo);
    
    echo "Ajout OK";
}
?>