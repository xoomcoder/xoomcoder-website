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
        <header>
            <img class="logo" src="assets/img/xoomcoder.svg" alt="logo">
            <div class="title"><a href="#">XoomCoder</a></div>
        </header>
        <nav>
            <a href="#">news</a>
            <a href="#">tutoriels</a>
            <a href="#">formation</a>
            <a href="#">offres d'emploi</a>
            <a href="#">contact</a>
        </nav>
        <main>
            <section>
                <h1><a href="#">Formation Dev FullStack</a></h1>
                <img loading="lazy" src="assets/img/team-640.jpg" alt="team">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore quo laboriosam obcaecati sint iure illo, nisi facilis nulla odit in error dicta sequi doloremque voluptas aliquam officia animi debitis reiciendis?</p>
                <article>
                    <h2><a href="#">Formation à Distance</a></h2>
                    <img loading="lazy" src="assets/img/code-640.jpg" alt="team">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore quo laboriosam obcaecati sint iure illo, nisi facilis nulla odit in error dicta sequi doloremque voluptas aliquam officia animi debitis reiciendis?</p>
                </article>
            </section>
            <section>
                <h2><a href="#">Développeur Web FullStack</a></h2>
                <img loading="lazy" src="assets/img/team-640.jpg" alt="team">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore quo laboriosam obcaecati sint iure illo, nisi facilis nulla odit in error dicta sequi doloremque voluptas aliquam officia animi debitis reiciendis?</p>
                <article>
                    <h3><a href="#">Front</a></h3>
                    <img loading="lazy" src="assets/img/code-640.jpg" alt="team">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore quo laboriosam obcaecati sint iure illo, nisi facilis nulla odit in error dicta sequi doloremque voluptas aliquam officia animi debitis reiciendis?</p>
                </article>
                <article>
                    <h3><a href="#">Back</a></h3>
                    <img loading="lazy" src="assets/img/code-640.jpg" alt="team">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore quo laboriosam obcaecati sint iure illo, nisi facilis nulla odit in error dicta sequi doloremque voluptas aliquam officia animi debitis reiciendis?</p>
                </article>
            </section>
            <section>
                <h2><a href="#">test web dev</a></h2>
                <img loading="lazy" src="assets/img/team-640.jpg" alt="team">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore quo laboriosam obcaecati sint iure illo, nisi facilis nulla odit in error dicta sequi doloremque voluptas aliquam officia animi debitis reiciendis?</p>
                <article>
                    <h3><a href="#">test web dev</a></h3>
                    <img loading="lazy" src="assets/img/code-640.jpg" alt="team">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore quo laboriosam obcaecati sint iure illo, nisi facilis nulla odit in error dicta sequi doloremque voluptas aliquam officia animi debitis reiciendis?</p>
                </article>
            </section>
        </main>
        <footer>
            <p>tous droits réservés</p>
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