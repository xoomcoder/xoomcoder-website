<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, , maximum-scale=1.0, user-scalable=no, shrink-to-fit=no">
    <!-- IMPORTANT: NO INDEX -->
    <meta name="robots" content="noindex">
    <!-- favicon -->
    <link rel="icon" href="assets/img/xoomcoder.svg">

    <title>XoomCoder Studio</title>
    <style>
html, body {
    width:100%;
    padding:0;
    margin:0;
    font-size:12px;
    text-align: center;
}

* {
    box-sizing: border-box;
    width:100%;
    /* transition: all 0.5s ease-out; */ /* TOO BIG */
}

    </style>
</head>
<body>
    <div class="page">
        {{ h1 }}
        <button @click="addTest()">add</button>
        <button @click="removeTest()">remove</button>
        <button v-if="extra.test" @click="extra.test.count++">{{ extra.test.title}} {{ extra.test.count }}</button>

        <input type="text" v-model="user">
        <button-counter></button-counter>
    </div>

    <script type="module">
// load Vue from module        
import * as Vue from 'https://cdn.jsdelivr.net/npm/vue@3.0.0-rc.1/dist/vue.esm-browser.js';

let mydata = {
    user: 'jonnn',
    h1: 'Studio',
    extra: {}
};

let appconf = {
    provide(){
        return {
            // user: Vue.ref(this.user) // NOT WORKING
            user: Vue.computed(() => this.user) // OK BUT USE inject WITH .value
        };
    },
    methods: {
        removeTest() {
            delete this.extra.test;
        },
        addTest() {
            this.extra.test = test;
        }
    },
    data () {
        return mydata;
    }
};


const app = Vue.createApp(appconf);

app.component('button-counter', {
    inject: [ 'user' ],
    data() {
        return {
            count: 0
        }
    },
    template: `
        <button @click="count++;">
            {{ user.value }} clicked me {{ count }} times.
        </button>`
})

app.mount('.page');

const test = Vue.ref({
    title: 'coucou',
    count:    0
});


    </script>
</body>
</html>