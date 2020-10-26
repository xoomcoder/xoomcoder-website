<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="test web dev">

    <title>XoomCoder.com Formation Dev FullStack</title>
    <link rel="icon" href="assets/img/xoomcoder.svg">

    <link rel="stylesheet" href="assets/uikit/css/uikit.min.css">
    <style>
        /* variables */
        :root {
            --primary: #f44336;
            --primary-dark: #ba000d;
            --primary-light: #ff7961;
            --secondary: #ffeb3b;
            --secondary-dark: #c8b900;
            --secondary-light: #ffff72;
            --light: #ffffff;
            --dark: #000000;
            --grey: #aaaaaa;
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
        <header class="uk-section">
            <div class="uk-container">
                <div uk-grid class="uk-grid-large uk-flex-between">
                    <picture>
                        <img class="logo" src="assets/img/xoomcoder.svg" alt="logo">
                    </picture>
                    <div class="title"><a href="#" class="uk-link-heading">XoomCoder</a></div>
                    <div class="" uk-navbar-toggle-icon href="#aside-panel" uk-toggle></div>
                </div>
            </div>
        </header>
        <aside id="aside-panel" uk-offcanvas="flip: true; mode: push;">
            <div class="uk-offcanvas-bar">

                <div class="uk-offcanvas-close" type="button" uk-close></div>
                <nav>
                    <h3>Menu</h3>
                    <ul>
                        <li><a href="#">news</a></li>
                        <li><a href="#">tutoriels</a></li>
                        <li><a href="#">formation</a></li>
                        <li><a href="#">offres d'emploi</a></li>
                        <li><a href="#">contact</a></li>
                    </ul>
                </nav>
            </div>
        </aside>
        <main>
            <section class="uk-section">
                <div class="uk-container">
                    <div class="uk-grid uk-child-width-1-2@s" uk-grid>
                        <article>
                            <img loading="lazy" src="assets/img/team-640.jpg" alt="team" class="h100">
                            <h1>Formation Dev FullStack</h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore quo laboriosam obcaecati sint iure illo, nisi facilis nulla odit in error dicta sequi doloremque voluptas aliquam officia animi debitis reiciendis?</p>
                        </article>
                        <article>
                            <img loading="lazy" src="assets/img/team-640.jpg" alt="team" class="h100">
                            <h2>Formation à distance</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore quo laboriosam obcaecati sint iure illo, nisi facilis nulla odit in error dicta sequi doloremque voluptas aliquam officia animi debitis reiciendis?</p>
                        </article>
                    </div>
                </div>
            </section>
            <section class="uk-section">
                <div class="uk-container">
                    <div class="uk-grid uk-child-width-1-2@s" uk-grid>
                        <article class="uk-card uk-card-default">
                            <div class="uk-card-media-top">
                                <img loading="lazy" src="assets/img/team-640.jpg" alt="team" class="h300">
                            </div>
                            <div class="uk-card-body">
                                <h1 class="uk-heading-small"><a href="#">Formation Dev FullStack</a></h1>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore quo laboriosam obcaecati sint iure illo, nisi facilis nulla odit in error dicta sequi doloremque voluptas aliquam officia animi debitis reiciendis?</p>
                            </div>
                        </article>
                        <article class="uk-card uk-card-default">
                            <div class="uk-card-media-top">
                                <img loading="lazy" src="assets/img/team-640.jpg" alt="team" class="h300">
                            </div>
                            <div class="uk-card-body">
                                <h2 class="uk-heading-small"><a href="#">Formation à distance</a></h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore quo laboriosam obcaecati sint iure illo, nisi facilis nulla odit in error dicta sequi doloremque voluptas aliquam officia animi debitis reiciendis?</p>
                            </div>
                        </article>
                    </div>
                </div>
            </section>
            <section class="uk-section">
                <article class="uk-container">
                    <h2><a href="#">Développeur Web FullStack</a></h2>
                    <img loading="lazy" src="assets/img/team-640.jpg" alt="team">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore quo laboriosam obcaecati sint iure illo, nisi facilis nulla odit in error dicta sequi doloremque voluptas aliquam officia animi debitis reiciendis?</p>
                </article>
                <article class="uk-container">
                    <h3><a href="#">Front</a></h3>
                    <img loading="lazy" src="assets/img/code-640.jpg" alt="team">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore quo laboriosam obcaecati sint iure illo, nisi facilis nulla odit in error dicta sequi doloremque voluptas aliquam officia animi debitis reiciendis?</p>
                </article>
                <article class="uk-container">
                    <h3><a href="#">Back</a></h3>
                    <img loading="lazy" src="assets/img/code-640.jpg" alt="team">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore quo laboriosam obcaecati sint iure illo, nisi facilis nulla odit in error dicta sequi doloremque voluptas aliquam officia animi debitis reiciendis?</p>
                </article>
            </section>
            <section class="uk-section">
                <article class="uk-container">
                    <h2><a href="#">Développeur Web FullStack</a></h2>
                    <img loading="lazy" src="assets/img/team-640.jpg" alt="team">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore quo laboriosam obcaecati sint iure illo, nisi facilis nulla odit in error dicta sequi doloremque voluptas aliquam officia animi debitis reiciendis?</p>
                </article>
                <article class="uk-container">
                    <h3><a href="#">test web dev</a></h3>
                    <img loading="lazy" src="assets/img/code-640.jpg" alt="team">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore quo laboriosam obcaecati sint iure illo, nisi facilis nulla odit in error dicta sequi doloremque voluptas aliquam officia animi debitis reiciendis?</p>
                </article>
            </section>
        </main>
        <footer class="uk-section">
            <div class="uk-container">
                <p>tous droits réservés</p>
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