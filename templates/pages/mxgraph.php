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
            justify-content: space-evenly;
        }

        h2,
        h3 {
            text-align: center;
            width: 100%;
        }

        section>article {
            margin: 0.5rem;
            width: calc(100% / 4 - 1rem);
            min-width: 80px;
        }

        section.colx1>article {
            width: calc(100% - 1rem);
        }

        section.colx2>article {
            width: calc(100% / 2 - 1rem);
        }

        section.colx3>article {
            width: calc(100% / 3 - 1rem);
        }

        section.colx4>article {
            width: calc(100% / 4 - 1rem);
        }

        section.colx5>article {
            width: calc(100% / 5 - 1rem);
        }

        section.colx6>article {
            width: calc(100% / 6 - 1rem);
        }

        section.colx7>article {
            width: calc(100% / 7 - 1rem);
        }

        section.colx8>article {
            width: calc(100% / 8 - 1rem);
        }

        section.colx9>article {
            width: calc(100% / 9 - 1rem);
        }

        section.colx10>article {
            width: calc(100% / 10 - 1rem);
        }

        section.colx11>article {
            width: calc(100% / 11 - 1rem);
        }

        section.colx12>article {
            width: calc(100% / 12 - 1rem);
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

        .row {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
        }

        article {
            padding: 1rem;
            background-color: #eeeeee;
        }

        .page article {
            background-color: #ffffff;
        }

        pre {
            white-space: pre-wrap;
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

        input[type=checkbox] {
            width: 2rem;
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

        ol li input {
            width: 80px;
            height: 2rem;
        }

        .page section .w100 {
            width: calc(100% - 1rem);
        }

        .page section .w90 {
            width: calc(90% - 1rem);
        }

        .page section .w80 {
            width: calc(80% - 1rem);
        }

        .page section .w75 {
            width: calc(75% - 1rem);
        }

        .page section .w70 {
            width: calc(70% - 1rem);
        }

        .page section .w60 {
            width: calc(60% - 1rem);
        }

        .page section .w50 {
            width: calc(50% - 1rem);
        }

        .page section .w40 {
            width: calc(40% - 1rem);
        }

        .page section .w30 {
            width: calc(30% - 1rem);
        }

        .page section .w25 {
            width: calc(25% - 1rem);
        }

        .page section .w20 {
            width: calc(20% - 1rem);
        }

        .page section .w10 {
            width: calc(10% - 1rem);
        }

        .page section .w0 {
            width: 0%;
        }

        .page section .w1o3 {
            width: calc(1 * 100% / 3 - 1rem);
        }

        .page section .w2o3 {
            width: calc(2 * 100% / 3 - 1rem);
        }

        .page section article {
            min-width: 300px;
        }

        article img {
            width: 100%;
            object-fit: cover;
        }

        article img {
            height: 15vmin;
        }

        .dropok {
            /* border: 2px dashed yellow; */
        }

        .bounce-enter-active {
            animation: bounce-in 1s;
        }

        .bounce-leave-active {
            animation: bounce-in 0.2s reverse;
        }

        @keyframes bounce-in {
            0% {
                transform: scale(0);
            }

            50% {
                transform: scale(1.25);
            }

            100% {
                transform: scale(1);
            }
        }

        .drop2 {
            width: 1rem;
            background-color: white;
        }

        .drop2:hover {
            background-color: lightgreen;
        }
    </style>
</head>

<body>
    <style class="cssInline">
    </style>

    <div id="app">
        <teleport to=".cssInline">
            {{ cssCode }}
        </teleport>
        <section>
            <div class="page" :style="pageStyle">
                <template v-for="section in sections">
                    <template v-if="!hasArticles(section)">
                        <section :style="sectionStyle(section)" :class="sectionClass(section)" @drop="actDragDrop($event, section)" @dragover.self.prevent="actDragOver($event,section)" @dragenter.self.prevent="actDragEnter($event,section)" @dragleave.self="actDragLeave($event,section)">
                            <h2 v-if="section.title">{{ section.title }}</h2>
                        </section>
                    </template>
                    <template v-else>
                        <section :style="sectionStyle(section)" :class="sectionClass(section)" @dragenter.prevent="actDragEnter($event,section)" @dragleave="actDragLeave($event,section)">
                            <h2 v-if="section.title">{{ section.title }}</h2>
                            <template v-for="(article, index) in articles">
                                <div v-if="section.isDropTarget && article.section==section.name" class="drop2" @dragover.prevent @dragenter.prevent @drop="actDrop2($event, section)"></div>
                                    <template v-if="article.noArticle && article.section==section.name">
                                        <h3>{{ article.title }}</h3>
                                        <img :src="'assets/square/happy-' + index + '.jpg'" alt="">
                                        <pre>{{ article.code }}</pre>
                                    </template>
                                    <template v-else>
                                        <transition name="bounce">
                                            <article v-if="article.section==section.name" :class="articleClass(article)" draggable="true" @dragstart="actDragStart($event,article)">
                                                <h3>{{ article.title }}</h3>
                                                <img :src="'assets/square/happy-' + index + '.jpg'" alt="">
                                                <pre>{{ article.code }}</pre>
                                            </article>
                                        </transition>
                                    </template>
                            </template>
                            <div v-if="section.isDropTarget" class="drop2" @dragover.prevent @dragenter.prevent @drop="actDrop2($event, section)"></div>
                        </section>

                    </template>

                </template>
            </div>
        </section>


        <section class="dashboard">
            <article title="Sections" class="ct2 window">
                <h3>page</h3>
                <input type="number" step="100" v-model="pageWidth">
                <input type="range" step="100" v-model="pageWidth" min="300" max="2000">
                <h3>ajouter une section</h3>
                <form @submit.prevent="actAddSection">
                    <input ref="inSection" type="text" name="section" value="s1" placeholder="section name">
                    <button>➕</button>
                </form>
                <h3>liste des sections ({{ sections.length }})</h3>
                <ol>
                    <li v-for="section in sections">
                        <div class="row">
                            <input type="text" title="name" v-model="section.name">
                            <input type="text" title="title" v-model="section.title">
                            <input type="number" title="colx" min="1" max="20" v-model="section.colx">
                            <input type="color" v-model="section.bgcolor">
                        </div>
                    </li>
                </ol>
            </article>

            <article title="Articles" class="ct3 window">
                <h3>ajouter un article</h3>
                <form @submit.prevent="actAddArticle">
                    <input ref="inArticleSection" type="text" placeholder="section" name="article">
                    <button>➕</button>
                </form>
                <h3>liste des articles ({{ articles.length }})</h3>
                <ol>
                    <li v-for="article in articles">
                        <div class="row">
                            <input type="checkbox" title="selected" v-model="article.selected">
                            <input type="text" title="title" v-model="article.title">
                            <input type="text" title="section" v-model="article.section">
                            <input type="text" title="cssClass" v-model="article.cssClass">
                            <input type="checkbox" title="isArticle" v-model="article.noArticle">
                        </div>
                    </li>
                </ol>
            </article>

            <section title="Articles Editor" class="artbox window">
                <template v-for="article in articles">
                    <article v-if="article.selected" :class="'a' + article.id">
                        <div class="row">
                            <input type="text" title="title" v-model="article.title">
                            <input type="text" title="section" v-model="article.section">
                            <input type="text" title="cssClass" v-model="article.cssClass">
                            <textarea name="" id="" cols="30" rows="10" v-model="article.code"></textarea>
                            <button v-if="!article.isWindow" @click="addWindow(article)">window me</button>
                        </div>
                    </article>
                </template>
            </section>

            <div title="Bloc Notes" id="" class="window">
                <h3>Bloc Notes</h3>
                <textarea name="" id="" cols="30" rows="10"></textarea>
                <h3>Code CSS</h3>
                <textarea name="css" id="" cols="30" rows="10" v-model="cssCode"></textarea>
            </div>

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
        // UTILS
        // https://css-tricks.com/converting-color-spaces-in-javascript/
        function hsl2hex(h, s, l) {
            s /= 100;
            l /= 100;

            let c = (1 - Math.abs(2 * l - 1)) * s,
                x = c * (1 - Math.abs((h / 60) % 2 - 1)),
                m = l - c / 2,
                r = 0,
                g = 0,
                b = 0;

            if (0 <= h && h < 60) {
                r = c;
                g = x;
                b = 0;
            } else if (60 <= h && h < 120) {
                r = x;
                g = c;
                b = 0;
            } else if (120 <= h && h < 180) {
                r = 0;
                g = c;
                b = x;
            } else if (180 <= h && h < 240) {
                r = 0;
                g = x;
                b = c;
            } else if (240 <= h && h < 300) {
                r = x;
                g = 0;
                b = c;
            } else if (300 <= h && h < 360) {
                r = c;
                g = 0;
                b = x;
            }
            // Having obtained RGB, convert channels to hex
            r = Math.round((r + m) * 255).toString(16);
            g = Math.round((g + m) * 255).toString(16);
            b = Math.round((b + m) * 255).toString(16);

            // Prepend 0s, if necessary
            if (r.length == 1)
                r = "0" + r;
            if (g.length == 1)
                g = "0" + g;
            if (b.length == 1)
                b = "0" + b;

            return "#" + r + g + b;
        }

        //https://jgraph.github.io/mxgraph/docs/js-api/files/util/mxWindow-js.html

        // https://v3.vuejs.org/guide/introduction.html#getting-started
        const appConfig = {
            data() {
                return {
                    // add Here your JS properties to sync with HTML
                    count1: 0,
                    test: 'XoomCoder',
                    articles: [],
                    sections: [],
                    pageStyle: {
                        'width': '1366' + 'px',
                        'background-color': '#ffffff',
                        'border': '1px solid #ffffff'
                    },
                    page: {
                        width: 1366
                    },
                    cssCode: '',
                    curDrag: null,
                    curDragSection: null,
                }
            },
            computed: {
                pageWidth: {
                    get() {
                        return this.page.width;
                    },
                    set(v) {
                        this.page.width = v;
                        this.pageStyle.width = v + 'px';
                    }
                }
            },
            methods: {
                hasArticles(section) {
                    let res = 0;
                    for (let a = 0; a < this.articles.length; a++) {
                        let article = this.articles[a];
                        if (article.section == section.name) res++;
                    }
                    return res;
                },
                actDrop2(event, section) {
                    console.log('DROP2');
                    if (this.curDrag) {
                        this.curDrag.section = section.name;
                    }
                    this.curDrag = null;
                    section.isDropTarget = false;
                },
                actDragDrop(event, section) {
                    console.log(event);
                    console.log(section);
                    // if no article
                    if (this.curDrag) {
                        this.curDrag.section = section.name;
                    }
                    this.curDrag = null;

                    event.target.classList.remove("dropok");
                    section.isDropTarget = false;
                },
                actDragOver(event, section) {
                    event.dataTransfer.dropEffect = "move";
                    section.isDropTarget = true;
                },
                actDragLeave(event, section) {
                    console.log('LEAVE');
                    //event.target.classList.remove("dropok");
                    //section.isDropTarget = false;
                },
                actDragEnter(event, section) {
                    if (this.curDragSection) {
                        console.log('leave');
                        console.log(this.curDragSection);
                        this.curDragSection.isDropTarget = false;
                    }
                    this.curDragSection = section;
                    if(this.curDrag) {
                        event.target.classList.add("dropok");
                        section.isDropTarget = true;
                    }
                },
                actDragStart(event, article) {
                    event.dataTransfer.dropEffect = "copy";
                    this.curDrag = article;
                },
                lorem() {
                    let l = `Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi ipsum quaerat unde fuga neque nam odit repellat placeat ex tempora nobis culpa repudiandae, architecto dolore in cum! A, tempora tempore.`;
                    return l + ' ' + l + ' ' + l;
                },
                articleClass(article) {
                    let cssclass = {};
                    let cname = article.cssClass;
                    cssclass[cname] = true;
                    return cssclass;
                },
                sectionClass(section) {
                    let cssclass = {};
                    let cname = 'colx' + section.colx;
                    cssclass[cname] = true;
                    return cssclass;
                },
                sectionStyle(section) {
                    return {
                        'background-color': section.bgcolor,
                    };
                },
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
                    let c = 10 * Math.round(Math.random() * 36);
                    // let bgcolor = `hsl(${c}, 100%, 50%)`;
                    let bgcolor = hsl2hex(c, 100, 50);
                    console.log(bgcolor);
                    this.sections.push({
                        name: sectionName,
                        title: sectionName,
                        bgcolor: bgcolor,
                        colx: '4'
                    });
                    // set the next section name
                    this.$refs.inSection.value = 's' + (this.sections.length + 1);
                },
                actAddArticle() {
                    this.count1++;
                    let sectionName = '';
                    if (this.$refs.inArticleSection.value)
                        sectionName = this.$refs.inArticleSection.value;
                    else if (this.sections.length > 0)
                        sectionName = this.sections[this.sections.length - 1].name;

                    let newArticle = {
                        id: this.count1,
                        title: 'article ' + this.count1,
                        code: this.lorem(),
                        section: sectionName,
                        selected: true,
                        cssClass: ''
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
                    let width = Math.min(400, screen.availWidth / 2);
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