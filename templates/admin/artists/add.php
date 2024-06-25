<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Ajout d'un artiste</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body>
    <div class="container mx-auto p-5">
        <div class="d-flex justify-content-between align-items-center pb-5">
                <h1>Administration</h1>
                <a href="/laboiteavinyles/admin" class="btn btn-primary btn-sm">Accueil Administration</a>
            </div>

            <!-- Message d'erreur -->
            <?php if(isset($error)): ?>
                <div class="alert alert-danger">
                    <?= $error; ?>
                </div>
            <?php endif; ?>

            <!-- Message de succès -->
            <?php if(isset($success)): ?>
                <div class="alert alert-success">
                    <?= $success; ?>
                </div>
            <?php endif; ?>

            <form method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="name" class="form-label">Nom de l'artiste</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description de l'artiste</label>
                    <textarea class="form-control" rows="5" id="description" name="description"></textarea>
                </div>
                <div class="mb-3">
                    <label for="country" class="form-label">Pays</label>
                    <select id="country" name="country"><?php foreach($country as $country): ?>
                            <option value="<?= $country->getId(); ?>"><?= $country->getName(); ?></option>
                        <?php endforeach; ?></select>
                </div>
                <div>
                    <input type="hidden" id="token" name="token" value="<?= $_SESSION['token'] ?? '' ?>">
                </div>
                <div class="mt-4">
                    <button class="btn btn-success">Enregistrer l'artiste</button>
                    <a href="/laboiteavinyles/admin" class="btn btn-light ml-3">Annuler</a>
                </div>
            </form>
        </div>
    </body>
</html>