<?php

include_once 'functions.php';

// verifier si le formulaire a été soumis

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    {}
    if(!isset($_POST['libelle']) || !isset($_POST['prix']) ){
       die(" les champs libelle et prix sont obligatoires");
    }


    $libelle = $_POST['libelle'];
    $prix = $_POST['prix'];


    // Gérer l'upload de l'image
    $photo = null;
    if (isset($_FILES['photo']) && $_FILES['photo']['error'] === UPLOAD_ERR_OK) {
        $photo = uploadImage($_FILES['photo']);
    }
    
    // Ajouter l'étudiant
    addproduct($libelle, $prix, $photo);
    
    echo "Ajout OK";
}