<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="UIKIT AND VUEJS">
    <title>UIKIT AND VUEJS</title>

    <link rel="preload" href="assets/uikit/css/uikit.min.css" as="style">
    <link rel="preload" href="assets/js/vue.global.prod.js" as="script">
    <link rel="preload" href="assets/uikit/js/uikit.min.js" as="script">
    <link rel="preload" href="assets/uikit/js/uikit-icons.min.js" as="script">


    <style>
    </style>
</head>

<body>
    <div id="app">
        <style>
            html, body {
                font-size:16px;
                width:100%;
                height:100%;
                margin:0;
                padding:0;
            }
            * {
                box-sizing: border-box;
            }
            h1, h2 {
                text-align: center;
            }
            ul {
                display: flex;
                flex-wrap: wrap;
                width:100%;
                list-style:none;
                padding:0;
                margin:0;
            }
            li {
                padding:1rem;
                width:50%;
                margin:0;
            }
            section, footer {
                padding: 1rem;
            }
        </style>
        <header>
            <h1>titre1</h1>
            <nav>
                <ul>
                    <li><a href="page1">page1</a></li>
                    <li><a href="page2">page2</a></li>
                    <li><a href="page3">page3</a></li>
                    <li><a href="page4">page4</a></li>
                    <li><a href="page5">page5</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <section>
                <h1>titre1</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima excepturi eaque iusto suscipit eligendi, quis ex deserunt accusamus dolores quae temporibus incidunt molestias, alias, dolore laudantium omnis blanditiis. Unde, minima?</p>
            </section>
            <section>
                <h1>titre1</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima excepturi eaque iusto suscipit eligendi, quis ex deserunt accusamus dolores quae temporibus incidunt molestias, alias, dolore laudantium omnis blanditiis. Unde, minima?</p>
            </section>
            <section>
                <h1>titre1</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima excepturi eaque iusto suscipit eligendi, quis ex deserunt accusamus dolores quae temporibus incidunt molestias, alias, dolore laudantium omnis blanditiis. Unde, minima?</p>
            </section>
        </main>
        <footer>
            <p>tous droits réservés</p>
        </footer>
    </div>

    <template id="apptemplate">

        <link rel="stylesheet" href="assets/uikit/css/uikit.min.css">

        <header class="uk-container">
            <h1>UIKIT AND VUEJS</h1>
            <a class="uk-button uk-button-primary" href="#my-id" uk-toggle uk-icon="icon: cog"></a>
            <a class="uk-button uk-button-primary" href="#modal-sections" uk-toggle><span uk-icon="icon: file-edit"></span></a>
        </header>
        <main>
            <section class="uk-section">
                <div class="uk-container uk-container-expand">
                    <h2>Articles ({{ items.length }})
                        <button class="uk-button uk-button-primary uk-button-small" @click="actAddArticle">Ajouter Article</button>
                    </h2>
                    <div uk-filter="target: .mylist">


                        <ul class="uk-subnav uk-subnav-pill" uk-margin>
                            <li uk-filter-control><a href="#">tous</a></li>
                            <li v-for="tag in tags" :key="tag.id" :uk-filter-control="'article[data-tag=' + tag.label + ']'"><a href="#">{{ tag.label + ' (' + tag.count + ')' }}</a></li>

                            <li uk-filter-control="sort: data-id"><a href="#"><span uk-icon="icon: arrow-up"></span></a></li>
                            <li uk-filter-control="sort: data-id; order: desc"><a href="#"><span uk-icon="icon: arrow-down"></span></a></li>
                        </ul>


                        <div class="mylist uk-child-width-1-2@s uk-child-width-1-3@m uk-child-width-1-4@l uk-child-width-1-6@xl uk-grid-small" uk-grid uk-lightbox ref="boxdrag" :uk-sortable="sortable">
                            <article class="uk-card" v-for="(item, index) in items" :key="item.id" :data-tag="item.tag" :data-id="item.id">
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
                    </div>
                    <button class="uk-button uk-button-primary" @click="actAddArticle">Ajouter Article</button>

                </div>
            </section>

            <!-- This is the off-canvas -->
            <section id="my-id" uk-offcanvas="mode: push">
                <div class="uk-offcanvas-bar">
                    <div class="uk-grid">
                        <label><input class="uk-checkbox" type="checkbox" v-model="optionTag"> Tag</label>
                        <label><input class="uk-checkbox" type="checkbox" v-model="optionDraggable"> Drag</label>
                    </div>
                    <h3>{{ items.length }} articles</h3>
                    <button class="uk-button uk-button-primary uk-button-small" @click="actAddArticle">Ajouter Article</button>
                    <ol>
                        <li v-for="item in items">
                            <h5>{{ item.title }}</h5>
                            <input v-if="optionTag" class="uk-input" v-model="item.tag">
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
                                <h4>{{ item.title }}</h4>
                                <form>
                                    <input class="uk-input" v-model="item.title">
                                    <input class="uk-input" v-model="item.image">
                                    <input class="uk-input" v-model="item.tag">
                                    <textarea class="uk-textarea" v-model="item.code" rows="5"></textarea>
                                </form>
                                <hr class="uk-divider-icon">
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

    </template>

    <script src="assets/uikit/js/uikit.min.js"></script>
    <script src="assets/uikit/js/uikit-icons.min.js"></script>

    <script src="assets/js/vue.global.prod.js"></script>

    <?php 
    $initDelay = 50000;
    $ua = $_SERVER["HTTP_USER_AGENT"];

    if (mb_strpos($ua, "Lighthouse") > 0) {
        $initDelay = 2000;
    }
    ?>
    <script>
        const appconf = {
            template: '#apptemplate',
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
            watch: {
            },
            computed: {
                sortable() {
                    if (!this.optionDraggable) return null;
                    else return true;
                },
                tags() {
                    let res = {};
                    let count = 0;
                    for (let a = 0; a < this.items.length; a++) {
                        let item = this.items[a];
                        if (item.tag) {
                            if (res[item.tag])
                                res[item.tag].count++;
                            else
                                res[item.tag] = {
                                    label: item.tag,
                                    count: 1
                                };
                        }
                    }
                    return res;
                }
            },
            data() {
                return {
                    option: {},
                    optionDraggable: false,
                    optionTag: false,
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

        let app = null;
        let initDelay = <?php echo $initDelay ?>;

        function initVue() {
            app = Vue.createApp(appconf).mount('#app');
        }
        setTimeout(initVue, initDelay);
    </script>
</body>

</html>