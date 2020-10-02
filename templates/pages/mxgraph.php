<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Studio</title>

    <style>
        html,
        body {
            width: 100%;
            height: 100%;
            padding: 0;
            margin: 0;
            font-size: 12px;
            background-color: #004D40;
            box-sizing: border-box;
        }

        * {
            box-sizing: border-box;
        }

        section {
            width: 100%;
            padding: 0;
            margin: 0;
            display: flex;
            flex-wrap: wrap;
        }

        section>article {
            margin: 0.5rem;
            width: calc(100% / 4 - 1rem);
            min-width: 200px;
        }

        section.dashboard {
            display: none;
        }

        #graphbox {
            overflow: auto;
            position: absolute;
            width: 100%;
            height: 100%;
            background: lightyellow;
            cursor: default;
        }

        .fab {
            position: fixed;
            top: 5vmin;
            right: 5vmin;
            width: 4vmin;
            height: 4vmin;
            border: 1px solid #aaffaa;
            border-radius: 50%;
            font-size: 2vmin;
            text-align: center;
            display: grid;
            align-items: center;
            justify-content: center;
            background-color: #66aa66;
            cursor: pointer;
            min-width: 40px;
            min-height: 40px;
        }

        article {
            padding: 1rem;
            background-color: #dddddd;
        }

        form {
            display: flex;
        }

        input,
        textarea,
        button {
            padding: 0.5rem !important;
            display: inline-block;
            width: 100%;
            margin-top: 0.5rem;
        }

        div.mxWindow {
            box-shadow: 3px 3px 12px rgba(0, 0, 0, 0.5) !important;
        }

        .mxWindowTitle {
            display: none;
        }

        .mxWindow:hover .mxWindowTitle,
        .mxWindow:focus .mxWindowTitle {
            display: block;
            box-sizing: content-box;
        }
    </style>
</head>

<body>

    <div id="app">

        <section v-for="section in sections">
            <template v-for="article in articles">
                <article v-if="article.section==section.name">
                    <h3>{{ article.title }}</h3>
                    <pre>{{ article.code }}</pre>
                </article>
            </template>
        </section>

        <section class="artbox">
            <article v-for="article in articles" :class="'a' + article.id">
                <input type="text" v-model="article.title">
                <input type="text" v-model="article.section">
                <textarea name="" id="" cols="30" rows="10" v-model="article.code"></textarea>
                <button v-if="!article.isWindow" @click="addWindow(article)">window me</button>
            </article>
        </section>

        <section class="dashboard">
            <article title="Sections" class="ct2 window">
                <form @submit.prevent="actAddSection">
                    <input ref="inSection" type="text" name="section">
                    <button>➕</button>
                </form>
                <ol>
                    <li v-for="section in sections">
                        <input v-model="section.name">
                    </li>
                </ol>
            </article>

            <article title="Articles" class="ct3 window">
                <form @submit.prevent="actAddArticle">
                    <input ref="inArticle" type="text" name="article">
                    <button>➕</button>
                </form>
                <ol>
                    <li v-for="article in articles">
                        <input v-model="article.title">
                    </li>
                </ol>
            </article>

            <div title="Graph" id="graphbox" class="window">
            </div>
        </section>

        <div class="fab" @click="actFab">😇</div>
    </div>


    <script src="https://unpkg.com/vue@next"></script>

    <!-- Sets the basepath for the library if not in same directory -->
    <script type="text/javascript">
        mxBasePath = 'assets/mxgraph';
    </script>

    <!-- Loads and initializes the library -->
    <script type="text/javascript" src="assets/mxgraph/mxClient.js"></script>

    <script type="text/javascript">
        //https://jgraph.github.io/mxgraph/docs/js-api/files/util/mxWindow-js.html

        // https://v3.vuejs.org/guide/introduction.html#getting-started
        const appConfig = {
            data() {
                return {
                    // add Here your JS properties to sync with HTML
                    count1: 0,
                    test: 'XoomCoder',
                    articles: [],
                    sections: []
                }
            },
            methods: {
                doEx1() {
                    // we can manipulate properties here
                    this.count1++;
                },
                actFab() {
                    this.actAddArticle();
                },
                addWindow(article) {
                    article.isWindow = true;
                    let art = document.querySelector('article.a' + article.id);
                    let width = Math.min(300, screen.availWidth / 2);
                    let wnd = new mxWindow(article.title, art, 20 * article.id, 20 * article.id, width, null, true, true);
                    wnd.setMaximizable(true);
                    wnd.setScrollable(true);
                    wnd.setResizable(true);
                    wnd.setClosable(true);
                    wnd.setVisible(true);

                },
                actAddSection(event) {
                    let sectionName = this.$refs.inSection.value;
                    this.sections.push({
                        name: sectionName
                    })
                },
                actAddArticle() {
                    this.count1++;
                    let sectionName = '';
                    if (this.sections.length > 0)
                        sectionName = this.sections[this.sections.length - 1].name;

                    let newArticle = {
                        id: this.count1,
                        title: 'article ' + this.count1,
                        code: '',
                        section: sectionName
                    };
                    this.articles.push(newArticle);
                },

            },
            mounted() {
                let graphbox = document.querySelector('#graphbox');
                main(graphbox);

                let articles = document.querySelectorAll('.window');
                for (let a = 0; a < articles.length; a++) {
                    let percent = Math.round(100 * a / articles.length);
                    let article = articles[a];
                    if (!article.title) article.title = 'window';
                    article.id2 = a;
                    // force height as graph is empty
                    let height = Math.min(400, screen.availWidth / 2);;
                    let width = Math.min(300, screen.availWidth / 2);
                    let wnd = new mxWindow(article.title, article, 100 + screen.availWidth * percent / 300, 100 * (a + 1), width, height, true, true);
                    wnd.setMaximizable(true);
                    wnd.setScrollable(true);
                    wnd.setResizable(true);
                    wnd.setClosable(true);
                    wnd.setVisible(true);

                }
            }
        };

        var app = Vue.createApp(appConfig).mount('#app');

        function main(container) {
            // Checks if the browser is supported
            if (!mxClient.isBrowserSupported()) {
                // Displays an error message if the browser is not supported.
                mxUtils.error('Browser is not supported!', 200, false);
            } else {

                // Creates the graph inside the given container
                var graph = new mxGraph(container);

                // Adds rubberband selection and keystrokes
                graph.setTooltips(true);
                graph.setPanning(true);
                var rubberband = new mxRubberband(graph);
                new mxKeyHandler(graph);

                mxEvent.disableContextMenu(container);

                // Gets the default parent for inserting new cells. This
                // is normally the first child of the root (ie. layer 0).
                var parent = graph.getDefaultParent();

                // Adds cells to the model in a single step
                graph.getModel().beginUpdate();
                try {
                    var v1 = graph.insertVertex(parent, null, 'Hello,', 20, 20, 80, 30);
                    var v2 = graph.insertVertex(parent, null, 'World!', 200, 150, 80, 30);
                    var e1 = graph.insertEdge(parent, null, '', v1, v2);
                } finally {
                    // Updates the display
                    graph.getModel().endUpdate();
                }

                // mxLog.show();
            }
        };
    </script>

</body>

</html>