<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>UIKIT AND VUEJS</title>

    <link rel="stylesheet" href="assets/uikit/css/uikit.css">
</head>

<body>
    <div id="app">
        <header class="uk-container">
            <h1>UIKIT AND VUEJS</h1>
        </header>
        <main>
            <section class="uk-section">
                <div class="uk-container">
                    <h2>sortable list</h2>
                    <div uk-sortable>
                        <div v-for="item in items" :key="item.id">{{ item.title }}</div>
                    </div>
                </div>
            </section>

        </main>
        <footer class="uk-container">
            <p>tous droits réservés</p>
        </footer>
    </div>

    <script src="assets/js/vue.global.js"></script>
    <script src="assets/uikit/js/uikit.js"></script>
    <script src="assets/uikit/js/uikit-icons.js"></script>
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