<!DOCTYPE html>
<html lang="fr">

<head>
    <link rel="stylesheet" href="normalize.css">
    <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="accueil.css">
    <title>Tours Tech Valley</title>
</head>

<body>
    <header>
        <div class="desktop_title">
            <img class="logo" src="Images/Image-acceuil/logo_1.png"  alt="logo">
            <h1>Tours Tech Valley</h1>
        </div>
        <?php
        include 'scriptnav.php'
        ?>
    </header>
    <section class="bloc_article">
        <article class="category2"><img src="Images/Image-acceuil/MAME.jpg" class="category-image" title="mame" alt="mame">
            <h2><a href="numerique.php"> Le numérique</a></h2>
        </article>
        <div class="article_desktop">
            <article class="category"><img src='Images/Image-acceuil/tours.jpg' class="category-image" title="tours" alt="tours">
                <h2><a href="economie.php">L'économie</a></h2>
            </article>
            <article class="category"><img src="Images/Image-acceuil/La-vie.jpg" class="category-image" title="vie" alt="vie">
                <h2><a href="lavie.php">La vie à Tours</a></h2>
            </article>
        </div>
    </section>
    <?php include 'footer.php' ?>

    <?php include 'scriptburger.php' ?>
</body>

</html>