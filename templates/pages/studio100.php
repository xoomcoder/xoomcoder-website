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
        <header>
            <h1>{{ h1 }}</h1>
        </header>
        <main>
            <mycompo1></mycompo1>
            <mycompo2></mycompo2>
            <mycompo3></mycompo3>
        </main>
    </div>

    <script type="module">
// load Vue from module        
import * as Vue from 'https://cdn.jsdelivr.net/npm/vue@3.0.0-rc.1/dist/vue.esm-browser.js';

let mydata = {
    h1: 'Studio',
};

let appconf = {
    data () {
        return mydata;
    }
};

let mycompo = {
    mycompo1 : './vue-mycompo1.vjs', 
    mycompo2 : './vue-mycompo2.vjs', 
    mycompo3 : './vue-mycompo3.vjs', 
};

const app = Vue.createApp(appconf);

// dynamic loading of components
// https://v3.vuejs.org/guide/component-dynamic-async.html#async-components
let myloader = function (name, url)
{
    let interload = async function (resolve, reject) {
        let fd = new FormData;
        fd.append('loginToken', sessionStorage.getItem('loginToken')); 
        let response    = await fetch(url, {
            method: 'POST',
            body: fd
        }); 
        // json can't have methods so we keep js code 
        // and eval this code...
        let text = await response.text();
        let code = `
            Object.assign({}, 
            ${text}
            );
        `;
        let json = eval(code);
        
        // server debug
        if (json.debug) console.log(json.debug);

        resolve(json);
    }
    let asyncComp = Vue.defineAsyncComponent(() => new Promise(interload));
    app.component(name, asyncComp);
}
// load the components
for(let c in mycompo) {
    myloader(c, mycompo[c]);
}

app.mount('.page');

    </script>
</body>
</html>