<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="UIKIT AND VUEJS">
    <title>UIKIT AND VUEJS</title>

    <link rel="stylesheet" href="assets/uikit/css/uikit.min.css">
    <style>
    </style>
</head>

<body>
    <div id="app">
        <header class="uk-container">
            <h1>UIKIT AND VUEJS</h1>
            <a class="uk-button uk-button-primary" href="#my-id" uk-toggle uk-icon="icon: cog"></a>
            <a class="uk-button uk-button-primary" href="#modal-sections" uk-toggle><span uk-icon="icon: file-edit"></span></a>
        </header>
        <main>
            <section class="uk-section">
                <div class="uk-container">
                    <h2>sortable list</h2>
                    <div class="uk-child-width-1-2@s uk-child-width-1-3@m uk-grid-small" uk-grid uk-sortable uk-lightbox>
                        <article class="uk-card" v-for="(item, index) in items" :key="item.id">
                            <div class="uk-card-header">
                                <h3>{{ item.title }}</h3>
                            </div>
                            <div class="uk-card-body">
                                <a :href="item.image" :data-caption="'<h3>' + item.title + '</h3>' + item.code">
                                    <img loading="lazy" :src="item.image" alt="team">
                                </a>
                                <p>{{ item.code }}</p>
                            </div>
                        </article>
                    </div>
                    <button class="uk-button uk-button-primary" @click="actAddArticle">Ajouter Article</button>

                </div>
            </section>

            <!-- This is the off-canvas -->
            <section id="my-id" uk-offcanvas>
                <div class="uk-offcanvas-bar">
                    <h3>{{ items.length }} articles</h3>
                    <button class="uk-button uk-button-primary" @click="actAddArticle">Ajouter Article</button>

                    <ol>
                        <li v-for="item in items">
                            <h3>{{ item.title }}</h3>
                        </li>
                    </ol>
                    <button class="uk-offcanvas-close" type="button" uk-close></button>

                </div>
            </section>


            <section id="modal-sections" uk-modal>
                <div class="uk-modal-dialog">
                    <button class="uk-modal-close-default" type="button" uk-close></button>
                    <div class="uk-modal-header">
                        <h2 class="uk-modal-title">Modifier Articles</h2>
                    </div>
                    <div class="uk-modal-body">
                        <h3>{{ items.length }} articles</h3>
                        <button class="uk-button uk-button-primary" @click="actAddArticle">Ajouter Article</button>

                        <ol>
                            <li v-for="item in items">
                                <form>
                                    <input class="uk-input" v-model="item.title">
                                    <input class="uk-input" v-model="item.image">
                                    <textarea class="uk-textarea" v-model="item.code" rows="5"></textarea>
                                </form>
                            </li>
                        </ol>
                    </div>
                    <div class="uk-modal-footer uk-text-right">
                        <button class="uk-button uk-button-primary" @click="actAddArticle">Ajouter Article</button>
                        <button class="uk-button uk-button-default uk-modal-close" type="button">Fermer</button>
                    </div>
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
                actAddArticle() {
                    let nextItem = {};
                    nextItem.id = 1 + 1 * this.items.length;
                    nextItem.title = 'title ' + nextItem.id;
                    nextItem.image = 'assets/square/team-' + nextItem.id + '.jpg';
                    nextItem.code = this.lorem;
                    this.items.push(nextItem);
                }
            },
            data() {
                return {
                    lorem: 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis, doloribus recusandae alias nemo ducimus ratione doloremque necessitatibus eligendi quis. Omnis unde sapiente corrupti perferendis eius cum repellat odit deleniti illo.',
                    items: [{
                            id: 1,
                            title: 'title 1',
                            image: 'assets/square/team-1.jpg',
                            code: 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veritatis commodi maxime, accusantium unde necessitatibus aperiam ipsa ut voluptatem fugit. Cum exercitationem dolorem inventore nisi modi unde quaerat obcaecati minus animi.'
                        },
                        {
                            id: 2,
                            title: 'title 2',
                            image: 'assets/square/team-2.jpg',
                            code: 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veritatis commodi maxime, accusantium unde necessitatibus aperiam ipsa ut voluptatem fugit. Cum exercitationem dolorem inventore nisi modi unde quaerat obcaecati minus animi.'
                        },
                        {
                            id: 3,
                            title: 'title 3',
                            image: 'assets/square/team-3.jpg',
                            code: 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veritatis commodi maxime, accusantium unde necessitatibus aperiam ipsa ut voluptatem fugit. Cum exercitationem dolorem inventore nisi modi unde quaerat obcaecati minus animi.'
                        },
                        {
                            id: 4,
                            title: 'title 4',
                            image: 'assets/square/team-4.jpg',
                            code: 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veritatis commodi maxime, accusantium unde necessitatibus aperiam ipsa ut voluptatem fugit. Cum exercitationem dolorem inventore nisi modi unde quaerat obcaecati minus animi.'
                        },
                        {
                            id: 5,
                            title: 'title 5',
                            image: 'assets/square/team-5.jpg',
                            code: 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veritatis commodi maxime, accusantium unde necessitatibus aperiam ipsa ut voluptatem fugit. Cum exercitationem dolorem inventore nisi modi unde quaerat obcaecati minus animi.'
                        },
                        {
                            id: 6,
                            title: 'title 6',
                            image: 'assets/square/team-6.jpg',
                            code: 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veritatis commodi maxime, accusantium unde necessitatibus aperiam ipsa ut voluptatem fugit. Cum exercitationem dolorem inventore nisi modi unde quaerat obcaecati minus animi.'
                        },
                        {
                            id: 7,
                            title: 'title 7',
                            image: 'assets/square/team-7.jpg',
                            code: 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veritatis commodi maxime, accusantium unde necessitatibus aperiam ipsa ut voluptatem fugit. Cum exercitationem dolorem inventore nisi modi unde quaerat obcaecati minus animi.'
                        },
                        {
                            id: 8,
                            title: 'title 8',
                            image: 'assets/square/team-8.jpg',
                            code: 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veritatis commodi maxime, accusantium unde necessitatibus aperiam ipsa ut voluptatem fugit. Cum exercitationem dolorem inventore nisi modi unde quaerat obcaecati minus animi.'
                        },
                        {
                            id: 9,
                            title: 'title 9',
                            image: 'assets/square/team-9.jpg',
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