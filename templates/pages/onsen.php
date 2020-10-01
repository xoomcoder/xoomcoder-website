<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://unpkg.com/onsenui/css/onsenui.css">
    <link rel="stylesheet" href="https://unpkg.com/onsenui/css/onsen-css-components.min.css">
    <script src="https://unpkg.com/onsenui/js/onsenui.min.js"></script>
</head>

<body>
    <ons-navigator swipeable id="myNavigator" page="page1.html"></ons-navigator>

    <template id="page1.html">
        <ons-page id="page1">
            <ons-toolbar>
                <div class="center">Page 1</div>
            </ons-toolbar>

            <ons-tabbar id="myTabbar" position="auto">
                <ons-tab page="page3.html" label="Pending" active>
                </ons-tab>
                <ons-tab page="page4.html" label="Completed">
                </ons-tab>
            </ons-tabbar>

            <ons-fab position="right bottom" component="button/new-task">
                <ons-icon icon="md-edit"></ons-icon>
            </ons-fab>
        </ons-page>
    </template>

    <template id="page2.html">
        <ons-page id="page2">
            <ons-toolbar>
                <div class="left">
                    <ons-back-button>Page 1</ons-back-button>
                </div>
                <div class="center"></div>
            </ons-toolbar>

            <p>This is the second page.</p>
        </ons-page>
    </template>

    <template id="page3.html">
        <ons-page id="page3">
            <h1>page 3</h1>
            <p>This is the first page.</p>
        </ons-page>
    </template>

    <template id="page4.html">
        <ons-page id="page4">
            <h1>page 4</h1>
            <ons-button id="push-button">Push page</ons-button>
        </ons-page>
    </template>

    <script>
        document.addEventListener('init', function(event) {
            var page = event.target;

            if (page.id === 'page4') {
                console.log('init4');
                page.querySelector('#push-button').onclick = function() {
                    document.querySelector('#myNavigator').pushPage('page2.html', {
                        data: {
                            title: 'Page 2'
                        }
                    });
                };
            } else if (page.id === 'page2') {
                // appelée à chaque push => why ?!
                console.log('init2');
                page.querySelector('ons-toolbar .center').innerHTML = page.data.title;
            }
        });
    </script>
</body>

</html>