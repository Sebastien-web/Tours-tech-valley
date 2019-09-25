<!DOCTYPE html>
<html lang="fr">

<head>
    <link rel="stylesheet" href="normalize.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="lavie.css">
    <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
    <title>Tours Tech Valley</title>
</head>

<body>
    <header>
        <img class="headerbackground" src="Images/banniere/tours.jpg" alt="backgroundarticle">
        <div class="desktop_title">
            <img class="logo" src="Images/Image-acceuil/logo_1.png" alt="logo">
            <h1>Tours Tech Valley</h1>
        </div>
        <?php
        include 'scriptnav.php'
        ?>
    </header>
    <section>
        <h2>Qualité de vie</h2>
        <div class="bloc_article">
            <article>
                <img src="images/logo_ecosysteme3/la_vie.jpg" alt="vie">
                <div class="contenu_article">
                    <h3>La vie à Tours</h3>
                    <p>Nichée en plein cœur de la Vallée de la Loire, Tours sait allier vieilles pierres et high-tech,
                        afin de passer aisément de châteaux mondialement connus aux entreprises du numérique les plus
                        performantes.</p>
                </div>
            </article>
            <hr />
            <article class="inverse">
                <img src="images/logo_ecosysteme3/tram.jpg" alt="tram">
                <div class="contenu_article">
                    <h3>Transports</h3>
                    <p>Au milieu d’un réseau autoroutier entre Paris, Bordeaux, Nantes et Bourges. À 1h00 en train de
                        Paris et 2h00 de Nantes. Un réseau Tram+Bus desservant régulièrement la ville et son
                        agglomération. Son aéroport et des vols réguliers vers Londres, Dublin, Marrakech, Porto et
                        Marseille.</p>
                </div>
            </article>
            <hr />
            <article>
                <img src="images/logo_ecosysteme3/loisir.png" alt="loisir">
                <div class="contenu_article">
                    <h3>Loisirs</h3>
                    <p>En territoire littéraire et gastronome, vous saurez apprécier un livre de Balzac tout en
                        dégustant une tartine chaude fromage de chèvre de Sainte-Maure-De-Touraine accompagné de son
                        verre de vin de Chinon. À proximité du vieux mûrier de la place Plumereau, sinon rien!</p>
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