<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edition artiste</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container mx-auto p-5">
        <div class="d-flex justify-content-between align-items-center pb-5">
            <h1>Administration</h1>
            <a href="/laboiteavinyles/admin" class="btn btn-primary">Accueil Administration</a>
        </div>

        <!-- Message d'erreur -->
        <?php if (isset($error)) : ?>
            <div class="alert alert-danger">
                <?= $error; ?>
            </div>
        <?php endif; ?>

        <!-- Message de succès -->
        <?php if (isset($success)) : ?>
            <div class="alert alert-success">
                <?= $success; ?>
            </div>
        <?php endif; ?>

        <form method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="name" class="form-label">Nom de l'artiste</label>
                <input type="text" class="form-control" id="name" name="name" value="<?= $artist->getName(); ?>">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description de l'artiste</label>
                <textarea class="form-control" id="description" rows="3" name="description"><?= $artist->getDescription(); ?></textarea>
            </div>
            <div class="mb-3">
                <label for="country" class="form-label">Pays</label>
                <input type="text" class="form-control" id="country" name="country" value="<?= $artist->getCountry(); ?>" readonly>
            </div>
            <div>
                <input type="hidden" id="token" name="token" value="<?= $_SESSION['token'] ?? '' ?>">
            </div>
            <div class="mt-4">
                <button class="btn btn-success">Modifier l'artiste</button>
                <a href="/laboiteavinyles/admin" class="btn btn-light ml-5">Annuler</a>
            </div>
        </form>
    </div>
</body>

</html>