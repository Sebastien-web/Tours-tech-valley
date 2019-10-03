<?php
$emailError = '';
$adressError = '';
$textAreaError = '';
$email = '';
$adress = '';
$textArea = '';

if (isset($_POST['isFormSubmitted'])) 
{
    $email = $_POST['email'];
    $adress = $_POST['adress'];
    $textArea = $_POST['textArea'];
    if (empty($_POST['email']) === true)
    {
        $emailError = '<br/> Erreur le champ ne peut pas être vide';
    }
    if (filter_var($email, FILTER_VALIDATE_EMAIL)===false){
        $emailError='email non valide';
    };
    if (empty($_POST['adress']) === true)
    {
        $adressError  = '<br/> Erreur le champ ne peut pas être vide';
    }
    if (empty($_POST['textArea']) === true)
    {
        $textAreaError = '</br> Erreur le champ ne peut pas être vide';
    }
    if
    (
        empty($email) === false
        && empty($adress) === false
        && empty($textArea) === false
    )
    {
        header('Location:succes.php');
        exit();
    }
    
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <link rel="stylesheet" href="normalize.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="contacts.css">
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
        <nav class="navbar">
            <button class="nav__burger"><img src="Images/Image-acceuil/Hamburger_icon.png" alt="Menu"></button>
            <ul class="nav__list">
                <li><a href="index.html">ACCUEIL</a></li>
                <li><a href="economie.html">ECOSYSTEME DU NUMERIQUE</a></li>
                <li><a href="economie.html">DYNAMISME ECONOMIQUE</a></li>
                <li><a href="lavie.html">QUALITE DE VIE</a></li>
                <li><a href="contacts.php">CONTACT</a></li>
            </ul>
        </nav>
    </header>
    <section>
        <h2 class="headertitle">Les entreprises</h2>
    </section>
    <div>
        <section>
            <article>
                <div class="infos">
                    <div>
                        <h2 class="nameentreprise">CAPGEMINI</h2>
                    </div>
                    <div class="dispo">
                        <p class="adress">4bis Rue Emile Zola, 37000 Tours</p>
                        <p class="phone">02 47 31 10 90</p>
                        <a class="website" href="https://www.capgemini.com/fr-fr/">Site web</a>
                    </div>
                    <div>
                        <iframe class="map"
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10803.846811622248!2d0.6883384!3d47.3931801!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x14fa610735e03da8!2sCapgemini%20Ouest!5e0!3m2!1sfr!2sfr!4v1568903133721!5m2!1sfr!2sfr"
                            width="600" height="450" allowfullscreen=""></iframe>
                    </div>
                </div>
            </article>
        </section>
        <section>
            <article>
                <div class="infos">
                    <div>
                        <h2 class="nameentreprise">APSIDE TOP</h2>
                    </div>
                    <div class="dispo">
                        <p class="adress">12 Rue Fabienne Landy, 37700 Saint-Pierre-des-Corps</p>
                        <p class="phone"> 02 47 46 26 26</p>
                        <a class="website" href="https://www.apside.com/">Site web</a>
                    </div>
                    <div>
                        <iframe class="map"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2701.30941863384!2d0.717830651001641!3d47.38639541105499!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47fcd412ef933da5%3A0xb58ea17ef99bca02!2sApside%20TOP!5e0!3m2!1sfr!2sfr!4v1568905091797!5m2!1sfr!2sfr"
                            width="600" height="450" allowfullscreen=""></iframe>
                    </div>
                </div>
            </article>
        </section>
        <section>
            <article>
                <div class="infos">
                    <div>
                        <h2 class="nameentreprise">UMANIS</h2>
                    </div>
                    <div class="dispo">
                        <p class="adress">18 Rue du Pont de l'Arche, 37550 Saint-Avertin</p>
                        <p class="phone">02 77 27 77 20</p>
                        <a class="website" href="https://www.umanis.com/">Site web</a>
                    </div>
                    <div>
                        <iframe class="map"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2702.0862275116438!2d0.7139519510011388!3d47.3712355120985!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47fcd6a0a81d9a45%3A0x28cbec6c7ad4a3d5!2sUmanis%20Tours!5e0!3m2!1sfr!2sfr!4v1568905268691!5m2!1sfr!2sfr"
                            width="600" height="450" allowfullscreen=""></iframe>
                    </div>
                </div>
            </article>
        </section>
    </div>
    <section>
        <h2 class="headertitle">Les structures</h2>
    </section>
    <div>
        <section>
            <article>
                <div class="infos">
                    <div>
                        <h2 class="nameentreprise">MAME</h2>
                    </div>
                    <div class="dispo">
                        <p class="adress">49 Boulevard Preuilly, 37000 Tours</p>
                        <p class="phone">02 47 22 49 75</p>
                        <a class="website" href="https://mame-tours.com/">Site web</a>
                    </div>
                    <div>
                        <iframe class="map"
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10803.875328677868!2d0.668619!3d47.393041!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf59dd58d55f79b77!2sMAME!5e0!3m2!1sfr!2sfr!4v1568906179024!5m2!1sfr!2sfr"
                            width="600" height="450" allowfullscreen=""></iframe>
                    </div>
                </div>
            </article>
        </section>
        <section>
            <article>
                <div class="infos">
                    <div>
                        <h2 class="nameentreprise">(S)TART INBOX</h2>
                    </div>
                    <div class="dispo">
                        <p class="adress">30 Rue André Theuriet, 37000 Tours</p>
                        <p class="phone">02 47 05 06 71</p>
                        <a class="website" href="http://www.pepinieres-agglotours.fr/#top">Site web</a>
                    </div>
                    <div>
                        <iframe class="map"
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10805.833340678213!2d0.6985364!3d47.3834895!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6b30e6f4e3fafa61!2sP%C3%A9pini%C3%A8re%20D&#39;entreprises%20de%20Tours-%20(S)TART&#39;inbox!5e0!3m2!1sfr!2sfr!4v1568905417673!5m2!1sfr!2sfr"
                            width="600" height="450" allowfullscreen=""></iframe>
                    </div>
                </div>
            </article>
        </section>
        <section>
            <article>
                <div class="infos">
                    <div>
                        <h2 class="nameentreprise">PALO ALTOURS</h2>
                    </div>
                    <div class="dispo">
                        <p class="adress">LE HQ Tours - 1, impasse du palais, 37000 Tours</p>
                        <p class="phone">06 23 39 03 12</p>
                        <a class="website" href="https://paloaltours.org/">Site web</a>
                    </div>
                    <div>
                        <iframe class="map"
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10804.451560468095!2d0.6874301!3d47.3902302!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5e0fe9df88ea2058!2sLE%20HQ%20Tours!5e0!3m2!1sfr!2sfr!4v1568905531259!5m2!1sfr!2sfr"
                            width="600" height="450" allowfullscreen=""></iframe>
                    </div>
                </div>
            </article>
        </section>
    </div>
    <form method="POST" action="contacts.php">
        <h2>Contact us</h2>
        <input type="email" id="email" name="email" placeholder="@" value = "<?php echo $email; ?>">
            <?php echo $emailError; ?>
        <input type="text" id="adress" name="adress" placeholder="&#8962;" value = "<?php echo $adress; ?>">
            <?php echo $adressError; ?>
        <select name="select">
            <option value="motif1">Demande d'information</option>
            <option value="motif2">Demande de contact</option>
            <option value="motif3">Demande de partenariat</option>
        </select>
        <textarea placeholder="Your message" name='textArea'></textarea>
        <input type="submit" value="Envoyer le formulaire" name="isFormSubmitted" value = "<?php echo $textArea; ?>">
        <?php echo $textAreaError; ?>
    </form>
    <footer>
        <ul class="contact">
            <li><a href="contacts.html">Contact Us</a></li>
            <li><a href="https://facebook.com/mametours/"></a><img class="reseaux"
                    src="Images/Images_reseaux_sociaux/Facebook.png" alt="facebook"></li>
            <li><a href="https://www.instagram.com/mame.tours/?hl=fr"></a><img class="reseaux"
                    src="Images/Images_reseaux_sociaux/Instagram.png" alt="intagram"></li>
            <li><a href="https://twitter.com/mametours"></a><img class="reseaux"
                    src="Images/Images_reseaux_sociaux/Twitter.png" alt="twitter"></li>
            <li><a href="contacts.html">Annuaire</a></li>
        </ul>
    </footer>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            document.querySelector('.nav__burger').addEventListener('click', (e) => {
                const $burger = e.currentTarget;
                const $list = $burger.parentElement.querySelector('.nav__list');
                $burger.classList.toggle('nav__burger--active');
                $list.classList.toggle('nav__list--active');
            });
        })
    </script>
</body>

</html>