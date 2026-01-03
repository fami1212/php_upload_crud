<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ajout.php" method="post" enctype="multipart/form-data">
        <label for="">Libelle</label>
        <input type="text" name="libelle">
        <label for="">prix</label>
        <input type="text" name="prix">
        <label for="">image</label>
        <input type="file" name="photo">
        <button type="submit">Ajouter</button>
    </form>
</body>
</html>