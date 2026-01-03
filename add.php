<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'ajout d'un etudiant</title>
</head>
<body>
    <form action="ajout.php" method="post" enctype="multipart/form-data">
        <label for="nom">Nom:</label>
        <input type="text" name="nom">
        <label for="prenom">Prenom:</label>
        <input type="text" name="prenom">
        <label for="photo">Photo:</label>
        <input type="file" name="photo">
        <button type="submit">Ajouter</button>
    </form>
</body>
</html>