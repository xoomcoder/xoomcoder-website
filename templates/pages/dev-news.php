<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="xoomcoder formation à distance. Formation Développeur Web Fullstack.">

    <title>XoomCoder Formation à Distance</title>
    <link rel="icon" href="assets/img/xoomcoder.svg">

    <link rel="stylesheet" href="assets/uikit/css/uikit.min.css">
    <style>
        /* variables */
        :root {
            --primary: #f44336;
            --primary-dark: #ba000d;
            --primary-light: #ff7961;
            --secondary: #ffeb3b;
            --secondary-dark: #c6ff00;
            --secondary-light: #f4ff81;
            --light: #ffffff;
            --dark: #000000;
            --grey: #aaaaaa;
            --dark-grey: #333333;
        }

        .logo {
            width: 2rem;
            height: 2rem;
            object-fit: contain;
        }

        .title {
            font-size: 1.5rem;
            font-weight: 700;
        }

        .h100 {
            width: 100%;
            height: 100px;
            object-fit: cover;
        }

        .h200 {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .h300 {
            width: 100%;
            height: 300px;
            object-fit: cover;
        }

        @media (max-width:360px) {
            .h200 {
                object-fit: contain;
            }
        }

        article pre {
            white-space: pre-wrap;
            font-family: 'Roboto', sans-serif;
            text-align: justify;
            border: none;
        }

        .of-cn {
            object-fit: contain;
        }

        .of-cv {
            object-fit: cover;
        }

        .ta-cn {
            text-align: center;
        }

        article h1,
        article h2 {
            font-size: 2rem;
            line-height: 1.3;
            text-align: center;
        }

        article h3 {
            font-size: 1.2rem;
            text-align: center;
        }

        .uk-grid article.uk-width-1-1\@s:first-child h3 {
            padding: 2rem;
        }


        /* COLORS */
        header {
            background-color: var(--light);
            box-shadow: 2px 4px 8px var(--dark-grey);
            color: var(--primary-dark);
        }

        .title {
            text-shadow: 1px 2px 4px var(--grey);
        }

        article h1 {
            color: var(--primary-dark);
        }

        article h2,
        article h3 {
            color: var(--primary-dark);
        }

        article pre {
            border: 1px solid transparent;
            background-color: transparent;
        }

        article pre:hover {
            border: 1px solid var(--primary);
            background-color: var(--light);
        }

        .bg-sl {
            background-color: var(--secondary-light);
        }

        .bg-sm {
            background-color: var(--secondary);
        }

        .bg-sd {
            background-color: var(--secondary-dark);
        }

        .bg-grey {
            background-color: var(--grey);
        }

        .bg-dark-grey {
            background-color: var(--dark-grey);
        }

        .bg-dark-grey h1,
        .bg-dark-grey h2,
        .bg-dark-grey h3 {
            color: var(--secondary-dark);
            text-shadow: 1px 2px 4px var(--dark);
        }

        .bg-dark-grey pre {
            color: var(--light);
        }

        article pre:hover {
            color: var(--dark-grey);
            border: 1px dashed var(--primary-light);
            background-color: var(--light);
        }

        .bdl-pm {
            border-left: 1px dashed var(--light);
        }

        @media (min-width:640px) {

            .bg-dark-grey h1,
            .bg-dark-grey h2,
            .bg-dark-grey h3 {
                color: var(--primary);
                text-shadow: 1px 2px 4px var(--dark);
            }
        }

        /* cyrillic-ext */
        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: local('Roboto Light'), local('Roboto-Light'), url(https://fonts.gstatic.com/s/roboto/v20/KFOlCnqEu92Fr1MmSU5fCRc4EsA.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }

        /* cyrillic */
        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: local('Roboto Light'), local('Roboto-Light'), url(https://fonts.gstatic.com/s/roboto/v20/KFOlCnqEu92Fr1MmSU5fABc4EsA.woff2) format('woff2');
            unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        /* greek-ext */
        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: local('Roboto Light'), local('Roboto-Light'), url(https://fonts.gstatic.com/s/roboto/v20/KFOlCnqEu92Fr1MmSU5fCBc4EsA.woff2) format('woff2');
            unicode-range: U+1F00-1FFF;
        }

        /* greek */
        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: local('Roboto Light'), local('Roboto-Light'), url(https://fonts.gstatic.com/s/roboto/v20/KFOlCnqEu92Fr1MmSU5fBxc4EsA.woff2) format('woff2');
            unicode-range: U+0370-03FF;
        }

        /* vietnamese */
        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: local('Roboto Light'), local('Roboto-Light'), url(https://fonts.gstatic.com/s/roboto/v20/KFOlCnqEu92Fr1MmSU5fCxc4EsA.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }

        /* latin-ext */
        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: local('Roboto Light'), local('Roboto-Light'), url(https://fonts.gstatic.com/s/roboto/v20/KFOlCnqEu92Fr1MmSU5fChc4EsA.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: local('Roboto Light'), local('Roboto-Light'), url(https://fonts.gstatic.com/s/roboto/v20/KFOlCnqEu92Fr1MmSU5fBBc4.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }
    </style>
    <script>
        let mypage = {};
        // web.dev test screen: 360x640
        mypage.width = screen.availWidth;
        mypage.height = screen.availHeight;
    </script>
</head>

<body>
    <div class="page">
        <header class="uk-section uk-padding-small" uk-sticky>
            <div class="uk-container">
                <div class="uk-flex uk-flex-between">
                    <picture>
                        <a href="/"><img class="logo" src="assets/img/xoomcoder.svg" alt="logo"></a>
                    </picture>
                    <div class="title"><a href="/" class="uk-link-heading">XoomCoder</a></div>
                    <div class="title uk-visible@s">Formation à Distance</div>
                    <div class="" href="#aside-panel" uk-toggle uk-icon="icon: menu; ratio: 1.6"></div>
                </div>
            </div>
        </header>
        <aside id="aside-panel" uk-offcanvas="flip: true; mode: push;">
            <div class="uk-offcanvas-bar bg-dark-grey bdl-pm">

                <div class="uk-offcanvas-close" type="button" uk-close></div>
                <nav>
                    <h3>Menu</h3>
                    <ul>
                        <li><a href="news">news</a></li>
                        <li><a href="tutoriels">tutoriels</a></li>
                        <li><a href="formation">formation</a></li>
                        <li><a href="emploi">offres d'emploi</a></li>
                        <li><a href="contact">contact</a></li>
                    </ul>
                    <h3>Votre compte</h3>
                    <ul>
                        <li><a href="inscription">inscription</a></li>
                        <li><a href="login">login</a></li>
                    </ul>
                </nav>
            </div>
        </aside>
        <main>
            <style>
                article img {
                    height:200px;
                    width:100%;
                    object-fit: cover;
                }
            </style>
            <section class="uk-section uk-padding-remove">
                <div class="uk-container">
                    <div class="uk-grid uk-child-width-1-2@s uk-child-width-1-3@l" uk-grid="masonry: true" uk-scrollspy="target: > article img; cls: uk-animation-scale-up; delay: 200; repeat: true;">
                        <article class="uk-width-1-1@s">
                            <h1>News</h1>
                            <a class="uk-button" href="inscription" title="REJOIGNEZ LA COMMUNAUTE XOOMCODER">Rejoignez la communauté XoomCoder&nbsp;!</a>
                            <nav class="w100">
                                <a class="uk-button" href="news">page 1</a>
                                <a class="uk-button" href="news-02">page 2</a>
                            </nav>
                        </article>

                        <?php Cms::showNews() ?>

                    </div>
            </section>

            <section class="uk-section uk-padding-remove">
                <div class="uk-container">
                    <div class="uk-grid uk-child-width-1-3@s" uk-grid="masonry: true" uk-scrollspy="target: > article img; cls: uk-animation-scale-up; delay: 200; repeat: true;">

                        <article>
                            <picture>
                                <source srcset="assets/img/vuejs-3.svg" media="(max-width: 360px)">
                                <img loading="lazy" src="assets/img/code-640.jpg" alt="team" class="h200 of-cv">
                            </picture>
                            <h1>Formation Dev FullStack</h1>
                            <pre>
Devenez en quelques mois un développeur fullstack en apprenant à coder une MarketPlace, en méthodologie Agile. 
Apprenez progressivement en travaillant sur des projets d'abord simples et puis de plus en plus complexes. 
Les techniques pour chaque projet vont, étape par étape, construire les outils dont vous avez besoin pour réaliser le projet final de MarketPlace.
                            </pre>
                        </article>

                        <article>
                            <picture class="h200">
                                <source srcset="assets/img/team-640.jpg" media="(max-width: 360px)">
                                <img loading="lazy" src="assets/img/team-640.jpg" alt="team" class="h200 of-cv">
                            </picture>
                            <h2>Formation à distance</h2>
                            <pre>
Vous êtes réunis en équipe suivant le niveau acquis. 
L'entraide entre les apprenants permet aussi de créer votre réseau professionnel. 
Une fois en entreprise, vous faites toujours partie de la communauté XoomCoder.com. 
La formation est découpée en modules. Vous composez votre parcours progressivement.

* Landing Page
* Site Vitrine
* Blog
* CMS
* Marketplace
                            </pre>
                        </article>

                        <article>
                            <picture class="h200">
                                <source srcset="assets/img/coding-girl-640.jpg" media="(max-width: 360px)">
                                <img loading="lazy" src="assets/img/coding-girl-640.jpg" alt="team" class="h200 of-cv">
                            </picture>
                            <h3>Qui est le formateur ?</h3>
                            <pre>
Long Hai est diplômé Ingénieur Logiciel (Ensimag) depuis plus de 20 ans. 
Et il a commencé à coder il y a plus de 35 ans! 
Long Hai a une grande expérience des formations intensives. 
Les groupes se composent autour de 10-20 apprenantes et apprenants. 
En effet, il est formateur depuis plus de 6 ans, dans les écoles labellisées Grande Ecole du Numérique.
Les formations "développeur web fullstack" durent de 3 à 6 mois, en présentiel en général.
En 2020, les organismes de formation sont passés, pour la plupart, en formation à distance.
                            </pre>
                        </article>

                        <article>
                            <picture class="h200">
                                <source srcset="assets/img/team-20.jpg" media="(max-width: 360px)">
                                <img loading="lazy" src="assets/img/team-20.jpg" alt="team" class="h200 of-cv">
                            </picture>
                            <h3>Est-ce que la formation est adaptée à votre projet professionnel ?</h3>
                            <pre>
Les apprenants sont souvent en situation de reconversion professionnelle, débutants ou avec une première expérience dans le domaine du web. Le profil d'origine de chaque personne est très varié. 
Et ce mélange inattendu crée toujours une richesse des cultures et des expériences, autant professionnelles comme personnelles. 

Il est naturellement important de rester bienveillant et solidaire, afin de participer à la création d'une communauté dynamique, active et positive.
                            </pre>
                        </article>

                        <article>
                            <picture class="h200">
                                <source srcset="assets/img/team-21.jpg" media="(max-width: 360px)">
                                <img loading="lazy" src="assets/img/team-21.jpg" alt="team" class="h200 of-cv">
                            </picture>
                            <h3>Quelle est la durée de la formation ?</h3>
                            <pre>
XoomCoder innove en proposant une formation organisée par projets.
Alors que la plupart des formations sont basées sur une durée fixe.
En réalité, la durée de formation dépend beaucoup des situations individuelles. 

Le cursus de formation complet est conçu pour environ 6 mois à temps plein.
Les groupes sont organisés par niveau de difficulté de projet.
Vous pourrez ainsi progresser à votre rythme individuel.

                            </pre>
                        </article>

                        <article>
                            <picture class="h200">
                                <source srcset="assets/img/team-22.jpg" media="(max-width: 360px)">
                                <img loading="lazy" src="assets/img/team-22.jpg" alt="team" class="h200 of-cv">
                            </picture>
                            <h3>Quel est le coût de la formation ?</h3>
                            <pre>
XoomCoder innove aussi en proposant des paiements par modules.
Suivant votre rythme de progression, vous payez le module sur lequel vous êtes en cours de formation. Alors que la plupart des formations fixent un prix global, pour une durée figée et limitée.

* Level 0: Gratuit / Hello L0.        
* Level 1: Gratuit / Landing page.

* Level 2: 100 euros / Site Vitrine.
* Level 3: 200 euros / Blog.
* Level 4: 300 euros / CMS.
* Level 5: 400 euros / MarketPlace.

Des modules supplémentaires sont aussi disponibles

* CMS WordPress NoCode. (100 euros).
* CMS WordPress FullStack. (200 euros).
* Framework Front VueJS. (300 euros).
* Framework Back Laravel. (400 euros).            
                            </pre>
                        </article>

                    </div>
                </div>
            </section>

        </main>
        <footer class="uk-section bg-dark-grey">
            <div class="uk-grid uk-flex-center uk-child-width-1-2@s uk-child-width-1-4@l">

                <article class="uk-width-1-2@s">
                    <h3 class="ta-cn">XoomCoder Formation à Distance</h3>
                    <pre>
Tous droits réservés ©2020

Ce site est géré et publié par Long Hai LH et le code est hébergé sur ionos.fr

Des informations statistiques sur les visites sont stockées par l'hébergement et aussi par Google Analytics.

Un grand merci à pexels.com                    
                        </pre>
                </article>

            </div>
        </footer>

        <div id="debug"></div>

        <script src="assets/uikit/js/uikit.min.js"></script>
        <script src="assets/uikit/js/uikit-icons.min.js"></script>

        <script src="assets/js/vue.global.prod.js"></script>
        <script>
            // debug.innerHTML = mypage.width + '/' + mypage.height;
        </script>
    </div>
</body>

</html>