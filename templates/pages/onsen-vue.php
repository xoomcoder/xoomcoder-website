<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://unpkg.com/onsenui/css/onsenui.css">
    <link rel="stylesheet" href="https://unpkg.com/onsenui/css/onsen-css-components.min.css">

</head>

<body>
    <ons-navigator swipeable id="myNavigator"></ons-navigator>
    <div class="templates">
        <template id="page1.html">
            <ons-page id="page1">
                <div class="c1"></div>
            </ons-page>
        </template>

        <template id="page2.html">
            <ons-page id="page2">
                <div class="c2"></div>
            </ons-page>
        </template>

        <template id="tab1.html">
            <ons-page id="tab1">
                <div class="c2">TAB1</div>
            </ons-page>
        </template>

        <template id="tab2.html">
            <ons-page id="tab2">
                <div class="c2">TAB1</div>
            </ons-page>
        </template>

    </div>

    <div id="app">
        <teleport to=".templates">

        </teleport>

        <teleport v-if="curPage == 'page1'" to=".c1">
            <ons-button @click="counter++">This is page1.{{ counter }}</ons-button>
            <ons-button @click="act1">
                Goto Page2
            </ons-button>
            <ons-list-item expandable v-for="article in articles" :key="article.id">
                {{ article.title }}
                <div class="expandable-content">
                    Expandable content
                    <ons-row style="margin-top: 20px;">
                        <ons-col width="40px" style="text-align: center; line-height: 31px;">
                            <ons-icon icon="md-brightness-low"></ons-icon>
                        </ons-col>
                        <ons-col>
                            <ons-range style="width: 100%;" value="50"></ons-range>
                        </ons-col>
                        <ons-col width="40px" style="text-align: center; line-height: 31px;">
                            <ons-icon icon="md-brightness-high"></ons-icon>
                        </ons-col>
                    </ons-row>
                    <label class="switch switch--material">
                        <input type="checkbox" class="switch__input switch--material__input" checked>
                        <div class="switch__toggle switch--material__toggle">
                            <div class="switch__handle switch--material__handle">
                            </div>
                        </div>
                    </label>
                </div>
            </ons-list-item>
        </teleport>

        <teleport v-if="curPage == 'page2'" to=".c2">
            <div class="bottom-bar">

                <ons-toolbar>
                    <div class="left">
                        <ons-back-button>Page 1</ons-back-button>
                        <ons-toolbar-button icon="md-face"></ons-toolbar-button>
                    </div>

                    <div class="center">Title</div>

                    <div class="right">
                        <ons-toolbar-button>-</ons-toolbar-button>
                        <ons-toolbar-button>+</ons-toolbar-button>
                    </div>
                </ons-toolbar>
            </div>

            <p style="text-align: center">Some content.</p>
        </teleport>

    </div>


    <template id="t1">
        <ons-page>
            <v-ons-toolbar>
                <div class="center">Title</div>
            </v-ons-toolbar>

            <p style="text-align: center">
                <h1>titre1</h1>
                <h2>titre2</h2>
                <ons-button @click="act1">
                    Click me!
                </ons-button>
            </p>

            <ons-list>
                <ons-list-item tappable>
                    <label class="left">
                        <ons-checkbox input-id="check-1"></ons-checkbox>
                    </label>
                    <label for="check-1" class="center">
                        Apple
                    </label>
                </ons-list-item>
                <ons-list-item tappable>
                    <label class="left">
                        <ons-checkbox input-id="check-2"></ons-checkbox>
                    </label>
                    <label for="check-2" class="center">
                        Banana
                    </label>
                </ons-list-item>
            </ons-list>
            <ons-button modifier="cta" style="margin: 6px 0">Call to action</ons-button>
            <ons-fab position="right bottom" component="button/new-task">
                <ons-icon icon="md-edit"></ons-icon>
            </ons-fab>
        </ons-page>
    </template>



    <script src="https://unpkg.com/vue@next"></script>
    <script src="https://unpkg.com/onsenui/js/onsenui.min.js"></script>

    <script>
    </script>
    <script>
        const appConfig = {
            // template: '#t1',
            data() {
                return {
                    counter: 0,
                    do1: false,
                    nav: null,
                    curPage: '',
                    articles: [{
                            id: '1',
                            title: 'item1'
                        },
                        {
                            id: '2',
                            title: 'item2'
                        },
                        {
                            id: '3',
                            title: 'item3'
                        },
                        {
                            id: '4',
                            title: 'item4'
                        },
                    ]
                }
            },
            methods: {
                act1() {
                    ons.notification.alert('hello');
                    document.querySelector('#myNavigator').pushPage('page2.html', {
                        data: {
                            title: 'Page 2'
                        }
                    });
                }
            },
            created() {
                this.nav = document.querySelector('#myNavigator');
                this.nav.addEventListener('postpush', (event) => {
                    console.log(event.enterPage.id);
                    this.curPage = event.enterPage.id;
                });
                this.nav.addEventListener('postpop', (event) => {
                    console.log(event.enterPage.id);
                    this.curPage = event.enterPage.id;
                });
            },
            async mounted() {
                let push1 = this.nav.resetToPage("page1.html");

            }
        }

        Vue.createApp(appConfig).mount('#app');
    </script>
</body>

</html>