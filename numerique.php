<!DOCTYPE html>
<html lang="fr">

<head>
    <link rel="stylesheet" href="normalize.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="numerique.css">
    <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
    <title>Tours Tech Valley</title>
</head>

<body>
    <header>
        <img class="headerbackground" src="Images/banniere/mame-desktop.jpg" alt="backgroundarticle">
        <div class="desktop_title">
            <img class="logo" src="Images/Image-acceuil/logo_1.png" alt="logo">
            <h1>Tours Tech Valley</h1>
        </div>
        <?php
        include 'scriptnav.php'
        ?>
    </header>
    <section>
        <h2>Les entreprise à Tours</h2>
        <div class="bloc_article">
            <article>
                <img src="images/entreprise/capgemini.png" alt="capgemini">
                <div class="contenu_article">
                    <h3>Capgemini </h3>
                    <p>Capgemini est un leader mondial du conseil, des services informatiques et de la transformation
                        numérique. A la pointe de l’innovation, le Groupe aide ses clients à saisir l’ensemble des
                        opportunités que présentent le cloud, le digital et les plateformes.</p>
                    <a href="contacts.php">4bis Rue Emile Zola, 37000 Tours</a>
                </div>
            </article>
            <hr />
            <article class="inverse">
                <img src="images/logo_ecosysteme/apside.png" alt="apside">
                <div class="contenu_article">
                    <h3>Apside TOP </h3>
                    <p>Depuis 40 ans, le Groupe Apside collabore aux projets informatiques et scientifiques des grands
                        groupes français et européens.</p>
                    <a href="contacts.php">12 Rue Fabienne Landy, 37700 Saint-Pierre-des-Corps</a>
                </div>
            </article>
            <hr />
            <article>
                <img src="images/logo_ecosysteme/umanis.png" alt="umanis">
                <div class="contenu_article">
                    <h3>Umanis</h3>
                    <p>Depuis plus de 25 ans, Umanis est le leader français en Data, Digital, Business Solutions et
                        Industrialisation.</p>
                    <a href="contacts.php">18 Rue du Pont de l'Arche, 37550 Saint-Avertin</a>
                </div>
            </article>
        </div>
    </section>
    <section>
        <h2>Les structure à Tours</h2>
        <div class="bloc_article">
            <article>
                <img src="images/logo_ecosysteme/MAME.jpg" alt="mame">
                <div class="contenu_article">
                    <h3>La MAME</h3>
                    <p>Mame, cité de la création et de l’innovation : aux jeunes entreprises innovantes et à de grands
                        groupes nationaux qui y installent des bureaux. Tiers lieu de connexion dans l'écosystème French
                        Tech-Loire Valley.</p>
                    <a href="contacts.php">49 Boulevard Preuilly, 37000 Tours</a>
                </div>
            </article>
            <article class="inverse">
                <img src="images/logo_ecosysteme/startinbox.jpg" alt="startinbox">
                <div class="contenu_article">
                    <h3>Pepinieres (S)tart’inbox</h3>
                    <p>Pepinieres (S)tart’inbox crée un environnement favorable à l’esprit d’entreprise sur le
                        territoire. D'une surface de 1200 m² , elle est raccordée à la fibre et desservies par le
                        tramway.
                    </p>
                    <a href="contacts.php">30 Rue André Theuriet, 37000 Tours</a>
                </div>
            </article>
            <article>
                <img src="images/logo_ecosysteme/paloaltours.png" alt="paloaltours">
                <div class="contenu_article">
                    <h3>Paloaltours</h3>
                    <p>Palaoltours est une startup associative d’entreprises innovantes dans le domaine des technologies
                        numériques.</p>
                    <a href="contacts.php">LE HQ Tours - 1, impasse du palais, 37000 Tours</a>
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