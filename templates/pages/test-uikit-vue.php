<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="UIKIT AND VUEJS">
    <title>UIKIT AND VUEJS</title>

    <link rel="stylesheet" href="assets/uikit/css/uikit.min.css">
</head>

<body>
    <div id="app">
        <header class="uk-container">
            <h1>UIKIT AND VUEJS</h1>
        </header>
        <main>
            <section class="uk-section">
                <article class="uk-container">
                    <h2>sortable list</h2>
                    <div class="uk-child-width-1-3" uk-grid uk-sortable>
                        <div class="uk-card" v-for="item in items" :key="item.id">
                            <div class="uk-card-header">
                                <h3>{{ item.title }}</h3>
                            </div>
                            <div class="uk-card-body">
                                <img src="assets/square/team.jpg" alt="team">
                            </div>
                        </div>
                    </div>
                </article>
            </section>

        </main>
        <footer class="uk-container">
            <p>tous droits réservés</p>
        </footer>
    </div>

    <script src="assets/js/vue.global.prod.js"></script>
    <script src="assets/uikit/js/uikit.min.js"></script>
    <script src="assets/uikit/js/uikit-icons.min.js"></script>
    <script>
        const appconf = {
            data() {
                return {
                    items: [{
                            id: 1,
                            title: 'title 1'
                        },
                        {
                            id: 2,
                            title: 'title 2'
                        },
                        {
                            id: 3,
                            title: 'title 3'
                        },
                    ]
                }
            }
        }

        Vue.createApp(appconf).mount('#app')
    </script>
</body>

</html>