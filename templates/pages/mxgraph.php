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
            width:100%;
            padding:0;
            margin:0;
        }
        section.artbox {
            display: flex;
            flex-wrap:wrap;
        }
        section.artbox > article {
            margin: 0.5rem;
            width: calc(100% / 4 - 1rem);
            min-width:200px;
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
            min-width:40px;
            min-height:40px;
        }

        article {
            padding: 1rem;
            background-color: #dddddd;
        }
        input, textarea, button {
            padding:0.5rem !important;
            display: inline-block;
            width:100%;
            margin-top: 0.5rem;
        } 

        div.mxWindow {
            box-shadow: 3px 3px 12px rgba(0,0,0,0.5) !important;
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

        <section class="artbox">
            <article v-for="article in articles" :class="'a' + article.id">
                <input type="text" v-model="article.title">
                <textarea name="" id="" cols="30" rows="10"></textarea>
                <button v-if="!article.isWindow" @click="addWindow(article)">window me</button>
            </article>
        </section>

        <section class="dashboard">
            <article title="dashboard 1" class="ct2 window">
                <h1 @click="count1++">CONTENU2 {{ test }} {{ count1 }}</h1>
            </article>

            <article title="dashboard 2" class="ct3 window">
                <h1 @click="count1++">CONTENU2 {{ test }} {{ count1 }}</h1>
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
                }
            },
            methods: {
                doEx1() {
                    // we can manipulate properties here
                    this.count1++;
                },
                actFab() {
                    this.count1++;
                    let newArticle = {
                        id: this.count1,
                        title: 'article ' + this.count1,
                    };
                    this.articles.push(newArticle);
                },
                addWindow(article) {
                    article.isWindow = true;
                    let art = document.querySelector('article.a' + article.id);
                    let wnd = new mxWindow(article.title, art, 20 * article.id, 20 * article.id, 300, null, true, true);
                    wnd.setMaximizable(true);
                    wnd.setScrollable(true);
                    wnd.setResizable(true);
                    wnd.setClosable(true);
                    wnd.setVisible(true);

                }
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
                    let special = null;
                    // force height as graph is empty
                    if (article.id == 'graphbox') special = 200;
                    let wnd = new mxWindow(article.title, article, 100 + screen.availWidth * percent / 300 , 100 * (a +1), screen.availWidth / 2, special, true, true);
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