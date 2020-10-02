<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Studio</title>

    <style>
        html,
        body {
            width: 100%;
            height: 100%;
            padding: 0;
            margin: 0;
            font-size: 12px;
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
            bottom: 5vmin;
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
        }

        article {
            padding:1rem;
        }
    </style>
</head>

<!-- Page passes the container for the graph to the program -->

<body>

    <div id="app">
        <div id="graphbox">
        </div>

        <article v-for="article in articles" :class="'a' + article.id">
            <h3>{{ article.title }}</h3>
            <button v-if="!article.isWindow" @click="addWindow(article)">window me</button>
        </article>

        <div class="ct2">
            <h1 @click="count1++">CONTENU2 {{ test }} {{ count1 }}</h1>
        </div>

        <div class="ct3">
            <h1 @click="count1++">CONTENU2 {{ test }} {{ count1 }}</h1>
        </div>

        <div class="fab" @click="actFab">😇</div>
    </div>


    <script src="https://unpkg.com/vue@next"></script>

    <!-- Sets the basepath for the library if not in same directory -->
    <script type="text/javascript">
        mxBasePath = 'assets/mxgraph';
    </script>

    <!-- Loads and initializes the library -->
    <script type="text/javascript" src="assets/mxgraph/mxClient.js"></script>


    <!-- Example code -->
    <script type="text/javascript">
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
                addWindow(article, event) {
                    article.isWindow = true; 
                    let art = document.querySelector('article.a' + article.id);
                    let wnd = new mxWindow(article.title, art, 20 * article.id, 20 * article.id, 300, null, true, true);
                    wnd.setMaximizable(true);
                    wnd.setScrollable(true);
                    wnd.setResizable(true);
                    wnd.setVisible(true);

                }
            },
            mounted() {
                let graphbox = document.querySelector('#graphbox');
                main(graphbox);
            }
        };

        var app = Vue.createApp(appConfig).mount('#app');

        // Program starts here. Creates a sample graph in the
        // DOM node with the specified ID. This function is invoked
        // from the onLoad event handler of the document (see below).
        function main(container) {
            // Checks if the browser is supported
            if (!mxClient.isBrowserSupported()) {
                // Displays an error message if the browser is not supported.
                mxUtils.error('Browser is not supported!', 200, false);
            } else {
                // Note that we're using the container scrollbars for the graph so that the
                // container extends to the parent div inside the window
                var wnd = new mxWindow('Scrollable, resizable, given height', container, 50, 50, 220, 224, true, true);

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

                wnd.setMaximizable(true);
                wnd.setResizable(true);
                wnd.setVisible(true);

                // var lorem = 'Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquid ex ea commodi consequat. Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. ';
                // var content = document.createElement('div');
                // mxUtils.write(content, lorem + lorem + lorem);

                let ct2 = document.querySelector('.ct2');
                wnd = new mxWindow('Scrollable, resizable, auto height', ct2, 300, 50, 200, null, true, true);
                wnd.setMaximizable(true);
                wnd.setScrollable(true);
                wnd.setResizable(true);
                wnd.setVisible(true);

                // content = content.cloneNode(true)
                // content.style.width = '400px';

                let ct3 = document.querySelector('.ct3');
                wnd = new mxWindow('Scrollable, resizable, fixed content', ct3, 520, 50, 220, 200, true, true);
                wnd.setMaximizable(true);
                wnd.setScrollable(true);
                wnd.setResizable(true);
                wnd.setVisible(true);

                // mxLog.show();
            }
        };
    </script>

</body>

</html>