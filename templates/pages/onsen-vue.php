<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- <link rel="stylesheet" href="https://unpkg.com/onsenui/css/onsenui-core.min.css"> -->
    <link rel="stylesheet" href="https://unpkg.com/onsenui/css/onsenui.min.css">
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
                <div class="c3">
                    <h1 class="center">TAB1</h1>
                </div>
            </ons-page>
        </template>

        <template id="tab2.html">
            <ons-page id="tab2">
                <div class="c4">
                    <h1 class="center">TAB2</h1>
                </div>
            </ons-page>
        </template>

        <template id="tab3.html">
            <ons-page id="tab3">
                <div class="c5">
                    <h1 class="center">TAB3</h1>
                </div>
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

            <ons-carousel fullscreen swipeable auto-scroll overscrollable id="carousel">
                <ons-carousel-item style="background-color: #085078;">
                    <div style="text-align: center; font-size: 30px; margin-top: 20px; color: #fff;">
                        BLUE
                    </div>
                </ons-carousel-item>
                <ons-carousel-item style="background-color: #373B44;">
                    <div style="text-align: center; font-size: 30px; margin-top: 20px; color: #fff;">
                        DARK
                    </div>
                </ons-carousel-item>
                <ons-carousel-item style="background-color: #D38312;">
                    <div style="text-align: center; font-size: 30px; margin-top: 20px; color: #fff;">
                        ORANGE
                    </div>
                </ons-carousel-item>
            </ons-carousel>

            <ons-card>
                <img src="https://monaca.io/img/logos/download_image_onsenui_01.png" alt="Onsen UI" style="width: 100%">
                <div class="title">
                    Awesome framework
                </div>
                <div class="content">
                    <div>
                        <ons-button>
                            <ons-icon icon="ion-thumbsup"></ons-icon>
                        </ons-button>
                        <ons-button>
                            <ons-icon icon="ion-share"></ons-icon>
                        </ons-button>
                    </div>
                    <ons-list>
                        <ons-list-header>Bindings</ons-list-header>
                        <ons-list-item>Vue</ons-list-item>
                        <ons-list-item>Angular</ons-list-item>
                        <ons-list-item>React</ons-list-item>
                    </ons-list>
                </div>
            </ons-card>

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
            <ons-speed-dial position="bottom right" direction="up">
                <ons-fab>
                    <ons-icon icon="md-share"></ons-icon>
                </ons-fab>
                <ons-speed-dial-item>
                    <ons-icon icon="md-twitter"></ons-icon>
                </ons-speed-dial-item>
                <ons-speed-dial-item>
                    <ons-icon icon="md-facebook"></ons-icon>
                </ons-speed-dial-item>
                <ons-speed-dial-item>
                    <ons-icon icon="md-google-plus"></ons-icon>
                </ons-speed-dial-item>
            </ons-speed-dial>
        </teleport>

        <teleport v-if="curPage == 'page2'" to=".c2">
            <ons-splitter>
                <ons-splitter-side id="menu" side="left" width="220px" collapse swipeable>
                    <ons-page>
                        <ons-list>
                            <ons-list-item @click="actLoad('tab1.html')" tappable>
                                Home
                            </ons-list-item>
                            <ons-list-item @click="actLoad('tab2.html')" tappable>
                                Settings
                            </ons-list-item>
                            <ons-list-item @click="actLoad('tab3.html')" tappable>
                                About
                            </ons-list-item>
                        </ons-list>
                    </ons-page>
                </ons-splitter-side>
                <ons-splitter-content id="content" page="tab1.html"></ons-splitter-content>
            </ons-splitter>

            <div class="bottom-bar">

                <ons-toolbar>
                    <div class="left">
                        <ons-back-button>Page 1</ons-back-button>
                        <ons-toolbar-button icon="md-face" @click="actMenu"></ons-toolbar-button>
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
                },
                actMenu() {
                    if (menu.isOpen)
                        menu.close();
                    else
                        menu.open()
                },
                actLoad(target) {
                    content.load(target);
                    menu.close();

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