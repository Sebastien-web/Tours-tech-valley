<!DOCTYPE html>
<html lang="fr">

<head>
    <link rel="stylesheet" href="normalize.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="economie.css">
    <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
    <title>Tours Tech Valley</title>
</head>

<body>
    <header>
        <img class="headerbackground" src="Images/banniere/La-vie.jpg" alt="backgroundarticle">
        <div class="desktop_title">
            <img class="logo" src="Images/Image-acceuil/logo_1.png" alt="logo">
            <h1>Tours Tech Valley</h1>
        </div>
        <?php
        include 'scriptnav.php'
        ?>
    </header>
    <section>
        <h2>L'économie à Tours</h2>
        <div class="bloc_article">
            <article>
                <img src="images/logo_ecosysteme2/emploi.jpg" alt="emploi">
                <div class="contenu_article">
                    <h3>L'emploi</h3>
                    <p>Le chômage y est inférieur au niveau national, les activités restent diversifiées et positionnées
                        sur des technologies stratégiques (digital, pharmaceutique, agroalimentaire), très ouvertes à
                        l’international.</p>
                </div>
            </article>
            <hr />
            <article class="inverse">
                <img src="images/logo_ecosysteme2/Touraine.jpg" alt="touraine">
                <div class="contenu_article">
                    <h3>Le tourisme</h3>
                    <p>L’Indre-et-Loire est le premier département touristique du Val de Loire, son appareil de
                        formation et de recherche publique est performant, avec ses 27.000 étudiants, ses 2.500
                        chercheurs également présents à l’INRA et au CEA, ses écoles de commerce et d’ingénieurs, son
                        Institut du médicament, son campus de start-up, une hausse de 5 % des entrées dans
                        l’apprentissage</p>
                </div>
            </article>
            <hr />
            <article>
                <img src="images/logo_ecosysteme2/solary.png" alt="solary">
                <div class="contenu_article">
                    <h3>Des univers variés</h3>
                    <p>La variété des entreprises tourangelle permet de laisser parler la matière, grise, électrique,
                        numérique, naturelle ou brute de fonderie : Escape Yourself, Bertucelli, RDV Productions,
                        Alienor France, Belorr, Solary TV Productions, Lestra, Le Kiosque Gourmand, Edgar Opticiens,
                        SKF, Supra Technologies…</p>
                </div>
            </article>
        </div>
    </section>
    <?php
    include 'footer.php'
    ?>
    <?php
    include 'scriptburger.php'
    ?>
</body>

</html>