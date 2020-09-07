<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>XoomCoder Studio</title>

    <style>
html, body {
    width:100%;
    padding:0;
    margin:0;
    font-size:12px;
    text-align: center;
}

* {
    box-sizing: border-box;
    width:100%;
    max-width:100%;
}

p, pre {
    white-space: pre-wrap;
}

section {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: stretch;
}

/* Small devices (landscape phones, 576px and up) */
@media (min-width: 576px) { 
    section article {
        margin: 0.25rem;
        width: calc(100% / 2 - 0.5rem); /* 2 columns and remove 2x margin */
    }
}

/* Medium devices (tablets, 768px and up) */
@media (min-width: 768px) { 

}

/* Large devices (desktops, 992px and up) */
@media (min-width: 992px) { 
    section article {
        margin: 0.25rem;
        width: calc(100% / 3 - 0.5rem); /* 3 columns and remove 2x margin */
    }

}

/* Extra large devices (large desktops, 1200px and up) */
@media (min-width: 1200px) { 
    section article {
        margin: 0.25rem;
        width: calc(100% / 4 - 0.5rem); /* 4 columns and remove 2x margin */
    }

}        
    </style>
</head>
<body>
    <div class="page">
        <header>
            <h1>SITE TITLE</h1>
        </header>
        <main>
            <section>
                <h1>TITLE1 SECTION</h1>
                <article>
                    <h2>title2 article1</h2>
                    <p>content article1</p>
                </article>
                <article>
                    <h2>title2 article2</h2>
                    <p>content article2</p>
                </article>
                <article>
                    <h2>title2 article3</h2>
                    <p>content article3</p>
                </article>
                <article>
                    <h2>title2 article4</h2>
                    <p>content article4</p>
                </article>
                <article>
                    <h2>title2 article5</h2>
                    <p>content article5</p>
                </article>
                <article>
                    <h2>title2 article6</h2>
                    <p>content article6</p>
                </article>
            </section>
        </main>
        <footer>
            <p>all rights reserved - © 2020 - {{ debug }}</p>
        </footer>
    </div>

    <script type="module">
// load Vue from module        
import * as Vue from 'https://cdn.jsdelivr.net/npm/vue@3.0.0-rc.1/dist/vue.esm-browser.js';

const appconf = {
  data() {
    return {
        debug: 'xoomcoder.com'
    }
  }
}

let app = Vue.createApp(appconf);

app.mount('.page');

    </script>
</body>
</html>