<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="test web dev">

    <title>XoomCoder.com Formation Dev FullStack</title>
    <link rel="icon" href="assets/img/xoomcoder.svg">

    <!-- preload -->
    <!-- <link rel="preload" href="assets/uikit/css/uikit.min.css" as="style"> -->
    <link rel="preload" href="assets/js/vue.global.prod.js" as="script">
    <link rel="preload" href="assets/uikit/js/uikit.min.js" as="script">
    <link rel="preload" href="assets/uikit/js/uikit-icons.min.js" as="script">

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

        /* html,
        body {
            font-size: 16px;
            margin: 0;
            padding: 0;
        }

        * {
            box-sizing: border-box;
        } */

        header {
            position: relative;
        }

        header .title {
            font-size: 2rem;
            text-align: center;
            padding: 1rem;
            font-weight: 900;
        }

        /* h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        footer {
            text-align: center;
            margin: 0;
            padding: 1rem;
        } */

        /* a {
            text-decoration: none;
            color: #333333;
        } */

        nav {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            position: sticky;
            top: 0;
            left: 0;
        }

        nav a {
            max-width: 160px;
            padding: 1rem;
        }

        /* p {
            padding: 1rem;
        } */

        img.h30 {
            object-fit: cover;
            width: 100%;
            height: 30vmax;
            background-color: #666666;
        }

        .logo {
            width: 4rem;
            height: 4rem;
            object-fit: contain;
            /* position: absolute; */
            padding: 1rem;
            background-color: transparent;
        }

        /* colors */
        /* header .title {
            background-color: var(--primary);
        } */

        nav {
            background-color: var(--light);
            box-shadow: 2px 4px 8px var(--grey);
        }

        /* h2 {
            background-color: var(--secondary);
        }

        h3 {
            background-color: var(--secondary-light);
        } */

        nav a {
            color: var(--primary-dark);
        }

        #debug {
            position: fixed;
            bottom: 0;
            left: 0;
        }
    </style>

    <link rel="stylesheet" href="assets/uikit/css/uikit-1.css">

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
            <a class="title" href="#">XoomCoder</a>
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
                <img class="h30" loading="lazy" src="assets/img/team-640.jpg" alt="team">
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

        <!-- <script src="assets/js/vue.global.prod.js"></script> -->

        <script src="assets/uikit/js/uikit.min.js"></script>
        <script src="assets/uikit/js/uikit-icons.min.js"></script>


        <script>
            // debug.innerHTML = mypage.width + '/' + mypage.height;
        </script>
    </div>
</body>

</html>