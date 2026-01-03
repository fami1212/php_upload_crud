<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>

<body>
    <?php 
    include_once 'functions.php';
    $produits= getProducts();
    
    ?>
    <div class="container-fluid">
        <div class="row">

        <?php foreach ($produits as $p) { ?>
            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                    <img src="app/uploads/<?= $p['image'] ?>" height="200px" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?= $p['libelle'] ?></h5>
                        <p class="card-text"><?= $p['prix'] ?></p>
                        <a href="#" class="btn btn-primary">Acheter</a>
                    </div>
                </div>
            </div>

            <?php } ?>
        </div>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</body>

</html>