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
                <div class="uk-container">
                    <h2>sortable list</h2>
                    <div class="uk-child-width-1-2@s uk-child-width-1-3@m uk-grid-small uk-grid-match" uk-grid uk-sortable uk-lightbox>
                        <article class="uk-card" v-for="(item, index) in items" :key="item.id">
                            <div class="uk-card-header">
                                <h3>{{ item.title }}</h3>
                            </div>
                            <div class="uk-card-body">
                                <a :href="'assets/square/team-' + index + '.jpg'" :data-caption="item.title">
                                    <img loading="lazy" :src="'assets/square/team-' + index + '.jpg'" alt="team">
                                </a>
                                <p>{{ item.code }}</p>
                            </div>
                        </article>
                    </div>
                    <button class="uk-button uk-button-primary" @click="actAddArticle">Ajouter Article</button>

                </div>
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
            methods: {
                actAddArticle () {
                    let nextItem = {};
                    nextItem.id = 1 + 1 * this.items.length;
                    nextItem.title = 'title ' + nextItem.id;
                    nextItem.code  = this.lorem;
                    this.items.push(nextItem);
                }
            },
            data() {
                return {
                    lorem: 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis, doloribus recusandae alias nemo ducimus ratione doloremque necessitatibus eligendi quis. Omnis unde sapiente corrupti perferendis eius cum repellat odit deleniti illo.',
                    items: [
                        {
                            id: 1,
                            title: 'title 1',
                            code: 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veritatis commodi maxime, accusantium unde necessitatibus aperiam ipsa ut voluptatem fugit. Cum exercitationem dolorem inventore nisi modi unde quaerat obcaecati minus animi.'
                        },
                        {
                            id: 2,
                            title: 'title 2',
                            code: 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veritatis commodi maxime, accusantium unde necessitatibus aperiam ipsa ut voluptatem fugit. Cum exercitationem dolorem inventore nisi modi unde quaerat obcaecati minus animi.'
                        },
                        {
                            id: 3,
                            title: 'title 3',
                            code: 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veritatis commodi maxime, accusantium unde necessitatibus aperiam ipsa ut voluptatem fugit. Cum exercitationem dolorem inventore nisi modi unde quaerat obcaecati minus animi.'
                        },
                        {
                            id: 4,
                            title: 'title 4',
                            code: 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veritatis commodi maxime, accusantium unde necessitatibus aperiam ipsa ut voluptatem fugit. Cum exercitationem dolorem inventore nisi modi unde quaerat obcaecati minus animi.'
                        },
                        {
                            id: 5,
                            title: 'title 5',
                            code: 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veritatis commodi maxime, accusantium unde necessitatibus aperiam ipsa ut voluptatem fugit. Cum exercitationem dolorem inventore nisi modi unde quaerat obcaecati minus animi.'
                        },
                        {
                            id: 6,
                            title: 'title 6',
                            code: 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veritatis commodi maxime, accusantium unde necessitatibus aperiam ipsa ut voluptatem fugit. Cum exercitationem dolorem inventore nisi modi unde quaerat obcaecati minus animi.'
                        },
                        {
                            id: 7,
                            title: 'title 7',
                            code: 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veritatis commodi maxime, accusantium unde necessitatibus aperiam ipsa ut voluptatem fugit. Cum exercitationem dolorem inventore nisi modi unde quaerat obcaecati minus animi.'
                        },
                        {
                            id: 8,
                            title: 'title 8',
                            code: 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veritatis commodi maxime, accusantium unde necessitatibus aperiam ipsa ut voluptatem fugit. Cum exercitationem dolorem inventore nisi modi unde quaerat obcaecati minus animi.'
                        },
                        {
                            id: 9,
                            title: 'title 9',
                            code: 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veritatis commodi maxime, accusantium unde necessitatibus aperiam ipsa ut voluptatem fugit. Cum exercitationem dolorem inventore nisi modi unde quaerat obcaecati minus animi.'
                        },
                    ]
                }
            }
        }

        let app = Vue.createApp(appconf).mount('#app');
    </script>
</body>

</html>