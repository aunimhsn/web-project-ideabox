<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La boîte à idées</title>
</head>
<body>
    <?php include('./layout/header.php') ?>

    <h2 class="subtitle">Ajouter une idée</h2>

    <form action="./add-idea.php" method="post">
        <label for="title">Titre de l'idée</label>
        <input type="text" name="title" id="title" required class="form-idea-title">
        <textarea placeholder="Décrire votre idée..." required class="form-idea-content"></textarea>
    </form>

    <?php include('./layout/footer.php') ?> 
</body>
</html>