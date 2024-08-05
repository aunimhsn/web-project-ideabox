<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La boîte à idées</title>

    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
    <?php include('./layout/header.php') ?>

    <main>
        <a href="./add-idea.php" class="add-idea">Ajouter une idée</a>

        <h2 class="subtitle">Liste des idées</h2>
        <div class="ideas">
            <div class="idea">
                <h3 class="idea-title">Ajouter des plantes dans le hall d'entrée</h3>
                <p class="idea-content">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Autem ipsam asperiores, totam in possimus blanditiis quos consequatur quam quas minus magnam aut ab, 
                    minima amet expedita quaerat rem! Hic, voluptate?
                </p>
                <div class="idea-vote">
                    
                </div>
                <div class="comments">

                </div>
            </div>
        </div>
    </main>

    <?php include('./layout/footer.php') ?> 
</body>
</html>