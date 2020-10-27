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

        .ob-cv {
            object-fit: cover;
        }

        .ta-cn {
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
            text-shadow: 1px 2px 4px var(--dark);
        }
        article h1 {
            color: var(--primary-dark);
            font-size: 2rem;
            line-height: 1.3;
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
            <section class="uk-section uk-padding-remove bg-dark-grey">
                <div class="uk-container">
                    <div class="uk-grid uk-child-width-1-2@s" uk-grid="masonry: true" uk-scrollspy="target: > article pre; cls: uk-animation-scale-up; delay: 200; repeat: true;">

                        <article>
                            <picture>
                                <source srcset="assets/img/xoomcoder.svg" media="(max-width: 360px)">
                                <img loading="lazy" src="assets/img/code-640.jpg" alt="team" class="h200">
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
                                <source srcset="assets/img/xoomcoder.svg" media="(max-width: 360px)">
                                <img loading="lazy" src="assets/img/team-640.jpg" alt="team" class="h200">
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
                                <source srcset="assets/img/xoomcoder.svg" media="(max-width: 360px)">
                                <img loading="lazy" src="assets/img/coding-girl-640.jpg" alt="team" class="h200">
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
                                <source srcset="assets/img/xoomcoder.svg" media="(max-width: 360px)">
                                <img loading="lazy" src="assets/img/team-20.jpg" alt="team" class="h200">
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
                                <source srcset="assets/img/xoomcoder.svg" media="(max-width: 360px)">
                                <img loading="lazy" src="assets/img/team-21.jpg" alt="team" class="h200">
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
                                <source srcset="assets/img/xoomcoder.svg" media="(max-width: 360px)">
                                <img loading="lazy" src="assets/img/team-22.jpg" alt="team" class="h200">
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

            <section class="uk-section bg-sl">
                <div class="uk-container">
                    <div class="uk-grid uk-child-width-1-2@s uk-child-width-1-4@l" uk-scrollspy="target: > article; cls: uk-animation-slide-top; delay: 200; repeat: true;">

                        <article class="uk-width-1-2@s">
                            <picture class="h100">
                                <source srcset="assets/img/xoomcoder.svg" media="(max-width: 360px)">
                                <img loading="lazy" src="assets/img/team-23.jpg" alt="team" class="h100">
                            </picture>
                            <h3>Formation Progressive et Agile</h3>
                            <pre>
Suivez une formation axée sur des projets, de plus en plus complexes. Avancez comme une startup qui va créer une MarketPlace.
                            </pre>
                        </article>

                        <article class="uk-width-1-2@s">
                            <picture class="h100">
                                <source srcset="assets/img/xoomcoder.svg" media="(max-width: 360px)">
                                <img loading="lazy" src="assets/img/team-24.jpg" alt="team" class="h100">
                            </picture>
                            <h3>Marketplace</h3>
                            <pre>
Depuis une quinzaine d'années, les sites les plus populaires sont basés sur une plateforme MarketPlace. La plateforme propose un hébergement et des fonctionnalités pour publier du contenu. La communauté d'internautes va créer du contenu et le publier sur la plateforme. On peut donner comme exemple: Gmail, YouTube, Facebook, Airbnb, LeBonCoin, Instagram, Twitter, TikTok, etc... De nombreuses startups surfent sur ce business plan et recherchent des développeurs fullstack qui pourront les aider à développer une plateforme MarketPlace.
                            </pre>
                        </article>

                        <article>
                            <h3>Landing Page</h3>
                            <pre>
Une fois le nom de domaine réservé. On peut commencer à publier une Landing Page, pour démarrer le référencement avec les moteurs de recherche et aussi commencer à créer une communauté avec des early-adopters.
                            </pre>
                        </article>

                        <article>
                            <h3>Site Vitrine</h3>
                            <pre>
On a plus de contenus à publier et tout ce contenu ne tiendra pas sur une seule page. On répartit le contenu sur différentes pages.
                            </pre>
                        </article>

                        <article>
                            <h3>Blog</h3>
                            <pre>
La création de contenus prend du temps, mais il faut communiquer régulièrement pour construire sa communauté. Et les moteurs de recherche doivent référencer en priorité les sites d'actualités. Le Blog apporte ces bénéfices à votre projet web.                        
                            </pre>
                        </article>

                        <article>
                            <h3>CMS</h3>
                            <pre>
Content Management System ou Système de Gestion de Contenus. Avant d'ouvrir votre site aux contributeurs de votre communauté, c'est important de pouvoir disposer d'outils pour gérer efficacement le contenu de votre site.
                            </pre>
                        </article>

                    </div>
                </div>
            </section>

            <section class="uk-section bg-grey">
                <div class="uk-container">
                    <div class="uk-grid uk-flex-center uk-child-width-1-2@s uk-child-width-1-4@l" uk-scrollspy="target: > article; cls: uk-animation-slide-top; delay: 200; repeat: true;">

                        <article class="uk-width-1-3@s">
                            <picture class="h200">
                                <source srcset="assets/img/youtube.svg" media="(max-width: 360px)">
                                <img loading="lazy" src="assets/img/youtube.svg" alt="team" class="h200 of-cn">
                            </picture>
                            <h3 class="ta-cn">VIDEOS YOUTUBE</h3>
                            <pre>
Les Vidéos seront disponibles sur la chaine YouTube:
<a href="https://www.youtube.com/channel/UCUDm9QajR-bh7I8NdSScR5A">Visitez la chaine YouTube pour XoomCoder</a>
                            </pre>
                        </article>

                        <article class="uk-width-1-3@s">
                            <picture class="h200">
                                <source srcset="assets/img/github.svg" media="(max-width: 360px)">
                                <img loading="lazy" src="assets/img/github.svg" alt="team" class="h200 of-cn">
                            </picture>
                            <h3 class="ta-cn">CODE GITHUB</h3>
                            <pre>
Les codes seront accessibles sur GitHub.com:
<a href="https://github.com/xoomcoder">Explorez le Repository GitHub pour XoomCoder</a>
                            </pre>
                        </article>

                    </div>
                </div>
            </section>

            <section class="uk-section bg-sl">
                <div class="uk-container">
                    <div class="uk-grid uk-child-width-1-2@s uk-child-width-1-4@l" uk-scrollspy="target: > article; cls: uk-animation-slide-top; delay: 200; repeat: true;">

                        <article class="uk-width-1-1@s">
                            <h3 class="ta-cn">Techniques de programmation</h3>
                        </article>

                        <article>
                            <h3 class="ta-cn">Programmation Fonctionnelle</h3>
                            <pre>
Technique historique et fondamentale pour gérer des milliers de lignes de code.
                            </pre>
                        </article>

                        <article>
                            <h3 class="ta-cn">Programmation Orienté-Objet</h3>
                            <pre>
Devenue standard depuis les années 90 pour gérer des projets, en équipe et avec des millions de lignes de code.
                            </pre>
                        </article>

                        <article class="ta-cn">
                            <h3>Model View Controller (MVC)</h3>
                            <pre>
Cette organisation populaire du code aboutit à un framework qui sépare le code en 3 grandes parties: Model, View et Controller.
                            </pre>
                        </article>

                        <article>
                            <h3 class="ta-cn">Design Patterns</h3>
                            <pre>
Pourquoi ré-inventer la roue ? Les retours d'expérience depuis des décennies vous proposent des solutions robustes à la plupart des problèmes en programmation.
                            </pre>
                        </article>

                    </div>
                </div>
            </section>

            <section class="uk-section bg-grey">
                <div class="uk-container">
                    <div class="uk-grid uk-child-width-1-2@s uk-child-width-1-4@l" uk-scrollspy="target: > article; cls: uk-animation-slide-top; delay: 200; repeat: true;">

                        <article class="uk-width-1-1@s">
                            <h3 class="ta-cn">Technologies Web (Front)</h3>
                        </article>

                        <article>
                            <picture class="h100">
                                <source srcset="assets/img/html5.svg" media="(max-width: 360px)">
                                <img loading="lazy" src="assets/img/html5.svg" alt="team" class="h100 of-cn">
                            </picture>
                            <h3 class="ta-cn">HTML</h3>
                            <pre>
Hyper Text Markup Language
                            </pre>
                        </article>

                        <article>
                            <picture class="h100">
                                <source srcset="assets/img/css3.svg" media="(max-width: 360px)">
                                <img loading="lazy" src="assets/img/css3.svg" alt="team" class="h100 of-cn">
                            </picture>
                            <h3 class="ta-cn">CSS</h3>
                            <pre>
Cascading Style Sheets
                            </pre>
                        </article>

                        <article class="ta-cn">
                            <picture class="h100">
                                <source srcset="assets/img/javascript-2.svg" media="(max-width: 360px)">
                                <img loading="lazy" src="assets/img/javascript-2.svg" alt="team" class="h100 of-cn">
                            </picture>
                            <h3>JS</h3>
                            <pre>
JavaScript
                            </pre>
                        </article>

                        <article>
                            <picture class="h100">
                                <source srcset="assets/img/vuejs-3.svg" media="(max-width: 360px)">
                                <img loading="lazy" src="assets/img/vuejs-3.svg" alt="team" class="h100 of-cn">
                            </picture>
                            <h3 class="ta-cn">VueJS</h3>
                            <pre>
Vue est le meilleur framework Front pour démarrer et progresser rapidement.
                            </pre>
                        </article>

                    </div>
                </div>
            </section>

            <section class="uk-section bg-sl">
                <div class="uk-container">
                    <div class="uk-grid uk-child-width-1-2@s uk-child-width-1-4@l" uk-scrollspy="target: > article; cls: uk-animation-slide-top; delay: 200; repeat: true;">

                        <article class="uk-width-1-1@s">
                            <h3 class="ta-cn">Technologies Web (Back)</h3>
                        </article>

                        <article>
                            <picture class="h100">
                                <source srcset="assets/img/php.svg" media="(max-width: 360px)">
                                <img loading="lazy" src="assets/img/php.svg" alt="team" class="h100 of-cn">
                            </picture>
                            <h3 class="ta-cn">PHP</h3>
                            <pre>
PHP is a HyperText PreProcessor.
                            </pre>
                        </article>

                        <article>
                            <picture class="h100">
                                <source srcset="assets/img/mysql.svg" media="(max-width: 360px)">
                                <img loading="lazy" src="assets/img/mysql.svg" alt="team" class="h100 of-cn">
                            </picture>
                            <h3 class="ta-cn">SQL</h3>
                            <pre>
Structured Query Language.
                            </pre>
                        </article>

                        <article class="ta-cn">
                            <picture class="h100">
                                <source srcset="assets/img/laravel-2.svg" media="(max-width: 360px)">
                                <img loading="lazy" src="assets/img/laravel-2.svg" alt="team" class="h100 of-cn">
                            </picture>
                            <h3>Laravel</h3>
                            <pre>
Laravel est le Framework Back PHP le plus populaire.
                            </pre>
                        </article>

                        <article>
                            <picture class="h100">
                                <source srcset="assets/img/wordpress.svg" media="(max-width: 360px)">
                                <img loading="lazy" src="assets/img/wordpress.svg" alt="team" class="h100 of-cn">
                            </picture>
                            <h3 class="ta-cn">WordPress</h3>
                            <pre>
WordPress est le CMS le plus populaire.
                            </pre>
                        </article>

                    </div>
                </div>
            </section>

            <section class="uk-section bg-sm">
                <div class="uk-container">
                    <div class="uk-grid uk-child-width-1-2@s uk-child-width-1-4@l" uk-scrollspy="target: > article; cls: uk-animation-slide-top; delay: 200; repeat: true;">

                        <article class="uk-width-1-1@s">
                            <h3 class="ta-cn">Serveur Web LAMP</h3>
                        </article>

                        <article>
                            <picture class="h100">
                                <source srcset="assets/img/linux-tux.svg" media="(max-width: 360px)">
                                <img loading="lazy" src="assets/img/linux-tux.svg" alt="team" class="h100 of-cn">
                            </picture>
                            <h3 class="ta-cn">Linux</h3>
                            <pre>
Linux est le Système d'exploitation (OS) libre et robuste préféré pour les serveurs web.
                            </pre>
                        </article>

                        <article>
                            <picture class="h100">
                                <source srcset="assets/img/apache-feather.svg" media="(max-width: 360px)">
                                <img loading="lazy" src="assets/img/apache-feather.svg" alt="team" class="h100 of-cn">
                            </picture>
                            <h3 class="ta-cn">Apache (ou Nginx)</h3>
                            <pre>
Apache reste populaire pour les hébergements mutualisés, même si Nginx devient leader pour les serveurs web.
                            </pre>
                        </article>

                        <article class="ta-cn">
                            <picture class="h100">
                                <source srcset="assets/img/mysql.svg" media="(max-width: 360px)">
                                <img loading="lazy" src="assets/img/mysql.svg" alt="team" class="h100 of-cn">
                            </picture>
                            <h3>MySQL (ou MariaDB)</h3>
                            <pre>
Les Bases De Données (BDD) sont des outils très puissants et donc toujours très utilisés. La Base De Données MySQL, racheté par Oracle, a aussi comme alternative communautaire MariaDB.
                            </pre>
                        </article>

                        <article>
                            <picture class="h100">
                                <source srcset="assets/img/php.svg" media="(max-width: 360px)">
                                <img loading="lazy" src="assets/img/php.svg" alt="team" class="h100 of-cn">
                            </picture>
                            <h3 class="ta-cn">PHP</h3>
                            <pre>
PHP reste le langage serveur le plus populaire pour les projets web.
                            </pre>
                        </article>

                    </div>
                </div>
            </section>

        </main>
        <footer class="uk-section bg-grey">
            <div class="uk-container">
                <div class="uk-grid uk-flex-center uk-child-width-1-2@s uk-child-width-1-4@l" uk-scrollspy="target: > article; cls: uk-animation-slide-top; delay: 200; repeat: true;">

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