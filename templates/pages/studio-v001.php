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

    <link rel="stylesheet" href="assets/leaflet/leaflet.css">
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
a {
    text-decoration: none;
    color: #aaaaaa;
}
p, pre {
    white-space: pre-wrap;
}

section {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: stretch;
}

label {
    padding:0.5rem;
}
label > span {
    width:200px;
    display:inline-block;
    padding:0.5rem;
}
input[type=checkbox] {
    width:2rem;
}
input {
    padding:0.5rem;
}
button {
    padding:0.5rem;
}

/* Small devices (landscape phones, 576px and up) */
@media (min-width: 576px) { 
    section article {
        margin: 0.25rem;
        width: calc(100% / 2 - 0.5rem); /* 2 columns and remove 2x margin */
    }
}

/* Medium devices (tablets, 768px and up) */
@media (min-width: 768px) { 
    main {
        font-size: 14px;
    }
}

/* Large devices (desktops, 992px and up) */
@media (min-width: 992px) { 
    section article {
        margin: 0.25rem;
        width: calc(100% / 3 - 0.5rem); /* 3 columns and remove 2x margin */
    }

}

/* Extra large devices (large desktops, 1200px and up) */
@media (min-width: 1200px) { 
    section article {
        margin: 0.25rem;
        width: calc(100% / 4 - 0.5rem); /* 4 columns and remove 2x margin */
    }

}     

/* toolbar */
img.action {
    width:2rem;
    height:2rem;
    cursor:pointer;
}
.action.settings {
    position:fixed;
    top:2rem;
    right:2rem;
    z-index:99999;
}
.options {
    position:fixed;
    top:100%;
    right:0;
    background-color: rgba(0,0,0,.9);
    height:100%;
    padding:1rem;
    z-index:9999;
}
.options.active {
    top:0;
}
.options .panel {
    background-color: #dddddd;
    padding:1rem;
}

.s1, .s3 {
    background-color: #dddddd;
}

.xmap {
    min-height:80vmin;
}

.xmap * {
    width: auto;
    transition:none;
}

#mapid {
    width:100%;
    height:100%;
    min-height:80vmin;
}

.xlist .note {
    border: 1px solid #666666;
    text-align: left;
    padding: 0 1rem;
    margin: 0.5rem 0;
}

.xmap button img {
    height: 1rem;
}

.w20 {
    width:calc(20% - 0.5rem);
}
.w50 {
    width:calc(50% - 0.5rem);
}
.w80 {
    width:calc(80% - 0.5rem);
}
.w100 {
    width:100%;
}

ul, ol {
    text-align:left;
}
ul li, ol li {
    cursor: pointer;
}
@media (min-width: 640px)
{
    section h2 {
        grid-area: title;
    }
    .s3 {
        padding: 1rem;
        display: grid;
        align-items: stretch;
        justify-items: stretch;
        justify-content: stretch;
        row-gap: 0.5rem;;
        grid-template-rows: 4rem 80vmin 2rem;
        grid-template-columns: 70% 30%;
        grid-template-areas: 
            "title  title"
            "xmonaco xfiles"
            ".  ."
            ;
        min-height:50vmax;
    }

    .xfiles {
        grid-area: xfiles;
        width:100%;
    }
    .xmonaco {
        grid-area: xmonaco;
        width:100%;
    }
    .xmap button {
        margin:1rem;
    }
    .s5 {
        padding: 1rem;
        display: grid;
        align-items: stretch;
        justify-items: stretch;
        justify-content: stretch;
        row-gap: 0.5rem;;
        grid-template-rows: 2vmin 30rem 55vmin;
        grid-template-columns: 2fr 2fr;
        grid-template-areas: 
            "title  title"
            "xform  xmap"
            "xlist  xmap"
            ;
        min-height:100vmax;
    }
    .s5 h2 {
        grid-area: title;
    }
    .s5 article {
        width:100%;
        padding:1rem;
    }
    .s5 .xform {
        grid-area: xform;
        padding:0;
    }
    .s5 .xlist {
        grid-area: xlist;
        overflow-y:auto;
    }
    .s5 .xmap {
        grid-area: xmap;
    }

}

/* MONACO EDITOR */
.editor {
    height: 50vmin;
}
.editor * {
    text-align: left;
    transition: all none;
}
    </style>
</head>
<body>
    <div class="page">
        <header>
            <h1><a href="">XoomCoder Studio</a></h1>
            <h2>bienvenue {{ username }} <small><a href="#logout" @click.prevent="actLogout">(logout)</a></small></h2>
            <h6><a href="./">revenir sur le site</a></h6>
        </header>
        <main>
            <template v-for="section in sections" :key="section.id">
                <section :class="section.class" v-if="!hide[section.class]">
                    <h2>{{ section.title }}</h2>
                    <article :class="article.class || article.compo" v-for="article in section.articles">
                        <h3 v-if="article.title">{{ article.title }}</h3>
                        <p v-if="article.content">{{ article.content }}</p>
                        <template v-if="article.compo == 'xlist'">
                            <component v-on:delete-bn="deleteBn" :is="article.compo" :name="article.name" v-model="model"></component>
                        </template>
                        <template v-else-if="article.compo == 'xmap'">
                            <component :params="xmapparams" :is="article.compo" :name="article.name"></component>
                        </template>
                        <template v-else-if="article.compo == 'xmonaco'">
                            <component :is="article.compo" :class="article.class"></component>
                        </template>
                        <template v-else-if="article.compo == 'xfiles'">
                            <component :is="article.compo"></component>
                        </template>
                        <template v-else>
                            <component v-on:signal1="doSignal1" :is="article.compo" :name="article.name" v-model="forms[article.name]"></component>
                        </template>
                    </article>
                </section>
            </template>
        </main>
        <div :class="{ 'options': true, 'active': !hide.options }">
            <div class="panel">
                <h2>options</h2>
                <h2>sections</h2>
                <label  v-for="section in sections">
                    <span>{{ section.title }}</span>
                    <input type="checkbox" checked @click="hide[section.class] = !hide[section.class]">
                </label>
                <h2>forms</h2>
                <label>
                    <span>reset form</span>
                    <input type="checkbox" checked @click="hide.resetForm = !hide.resetForm">
                </label>
                <h2>maps</h2>
                <label>
                    <span>move position after new note</span>
                    <input type="checkbox" checked @click="hide.movePos = !hide.movePos">
                </label>
            </div>
        </div>
        <footer>
            <div class="toolbar">
                <img @click="switchOptions" class="action settings" src="assets/img/settings.svg" alt="settings">
            </div>
            <p>tous droits réservés - © 2020 - {{ debug }}</p>
        </footer>

    </div><!--/.page-->

    <!-- FIXME: load only if needed -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/monaco-editor/0.20.0/min/vs/loader.js"></script>

    <script type="module">
// load Vue from module        
import * as Vue from 'https://cdn.jsdelivr.net/npm/vue@3.0.0-rc.1/dist/vue.esm-browser.js';
import * as L from './assets/leaflet/leaflet-src.esm.js';

const mymethods = {
    actLogout() {
            sessionStorage.setItem('loginToken', '');
            location.replace('login');   
    },
    async deleteBn (id) {
        console.log(id);
        let event = {};
        event.extrafd = { note2: `DbDelete?table=blocnote&id=${id}` };
        let json = await sendAjaxForm(event, this);
    },
    async doSignal1 (event) {
        let json = await sendAjaxForm(event, this);
        // UX
        if (this.hide.resetForm)
            event.target.reset();
    },
    setModel (model) {
        // console.log(model);
    },
    switchOptions () {
        this.hide.options = !this.hide.options;
    }
};

const mydata = {
            xmapparams: {maxrange: 0},
            logs: [ "test1" ],
            model: {}, 
            loginToken: '',
            username: '',
            forms: {
                test: {
                    title: 'ajouter un bloc-note',
                    fields: [
                        { label: 'titre', name: 'title' },
                        { label: 'contenu', name: 'note', type: 'textarea' },
                    ],
                }
            },
            hide: { options: true, resetForm: true, movePos: true },
            sections: [
                { title: 'Projets', class: 's1', articles: [
                    { title: 'landing page', content: 'level 1' },
                    { title: 'site vitrine', content: 'level 2' },
                    { title: 'blog', content: 'level 3' },
                    { title: 'cms', content: 'level 4' },
                    { title: 'marketplace', content: 'level 5' },
                    { title: 'projet en équipe', content: 'teamwork' },
                ] },
                { title: 'Formation', class: 's2', articles: [
                    { title: 'HTML' },
                    { title: 'CSS' },
                    { title: 'JS' },
                    { title: 'PHP' },
                    { title: 'SQL' },
                    { title: 'VueJs' },
                    { title: 'Laravel' },
                    { title: 'WordPress' },
                ]},
                { title: 'Code Editor', class: 's3', articles: [
                    { compo: 'xmonaco', name: 'editor' },
                    { compo: 'xfiles', name: 'files' },
                ]},
                { title: 'Bloc-Notes', class: 's4', articles: [
                    { title: 'city 1' },
                    { title: 'city 2' },
                    { title: 'city 3' },
                ]},
                { title: 'CodeMap', class: 's5', articles: [
                    { compo: 'xform', name: 'test' },
                    { compo: 'xlist' },
                    { compo: 'xmap'},
                ]},
            ],
            debug: 'xoomcoder.com'
        };

const appconf = {
    mounted () {
        let loginToken = sessionStorage.getItem('loginToken');
        if (loginToken) {
            let infos = loginToken.split(',');
            // console.log(infos);
            this.loginToken = loginToken;
            this.username = infos[0];
        }
        else {
            // location.replace('login');
        }
        sendAjaxForm({}, this);
    },
    methods: mymethods,
    data() {
        return mydata;
    }
}

const app = Vue.createApp(appconf);


app.component('xfiles', {
    methods: {
        actSaveFile() {
            console.log('savefile');
        }
    },
    template: `
    <h3>vos fichiers</h3>
    <ol>
        <li>readme.md</li>
        <li>index.html</li>
        <li>page.css</li>
        <li>page.js</li>
    </ol>
    <form>
        <input type="text" name="filename" value="readme.md"> 
        <button @click.prevent="actSaveFile()">enregistrer</button>  
    </form>
    `
});

app.component('xmonaco', {
    mounted () {
        // https://github.com/Microsoft/monaco-editor-samples/blob/master/sample-editor/index.html
        require.config({ paths: { 'vs': 'https://cdnjs.cloudflare.com/ajax/libs/monaco-editor/0.20.0/min/vs' }});
        // Before loading vs/editor/editor.main, define a global MonacoEnvironment that overwrites
        // the default worker url location (used when creating WebWorkers). The problem here is that
        // HTML5 does not allow cross-domain web workers, so we need to proxy the instantiation of
        // a web worker through a same-domain script
        window.MonacoEnvironment = {
            getWorkerUrl: function(workerId, label) {
                return '/monaco-editor-worker-loader-proxy';
            }
        };

        require(['vs/editor/editor.main'], function() {
            let htmleditor = document.querySelector(".editor");
            let editor = monaco.editor.create(htmleditor, {
                theme: "vs-dark"
            });
            
            let htmlModel = monaco.editor.createModel("", "html");
            let mdModel   = monaco.editor.createModel("", "markdown");
            editor.setModel(mdModel);
            editor.setModelLanguage(mdModel, "markdown");

            // resize
            window.addEventListener('resize', function(){
            editor.layout(); 
            });
        });

    },
    template: `
    <h3>readme.md</h3>
    <div class="editor"></div>
    `
});

/* maps */
let mymap = null;
let userpos = null;
let usermarker = null;
let usercircle = null;
let markernotes = [];


function userMove (e) {
    if (e != null) {
        // console.log(e);
        userpos = e;
        if(e.latlng) {
            usermarker
            .bindPopup('<pre>lat: ' + e.latlng.lat + '\nlng: ' +e.latlng.lng + '</pre>' )
            .openPopup();
        }
    }
}



app.component('xmap', {
    destroyed () {
        mymap = null;
        userpos = null;
        usermarker = null;
        usercircle = null;
    },
    mounted () {
        mymap = L.map('mapid').setView([46, 3], 5);

        L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
            maxZoom: 10,
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
                '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            id: 'mapbox/streets-v11',
            tileSize: 512,
            zoomOffset: -1
        }).addTo(mymap);

        function onLocationFound(e) {

            var radius = e.accuracy / 2;

            if (usermarker == null) {
                usermarker = L.marker(e.latlng, { draggable: true })
                .on('move', userMove)
                .addTo(mymap)
                .bindPopup("estimation de " + radius + " metres autour du centre.").openPopup();
                usercircle = L.circle(e.latlng, radius).addTo(mymap);
            }
            else {
                usermarker.remove();
                usercircle.remove();

                usermarker.bindPopup("estimation de " + radius + " metres autour du centre.").openPopup();
                usermarker.setLatLng(e.latlng);
                usercircle.setLatLng(e.latlng);

                usermarker.addTo(mymap);
                usercircle.addTo(mymap);
            }
            userpos = e;
            mymap.flyTo(userpos.latlng, 10);
        }

        function onLocationError(e) {
            console.log(e.message);
            onLocationFound({ accuracy : 10000, latlng : { lat: 46, lng: 3 }});
        }

        mymap.on('locationfound', onLocationFound);
        mymap.on('locationerror', onLocationError);

        // geolocate
        mymap.locate();

    
    },
    data() {
        return {
            notetitle: '',
            index:1,
        }
    },
    methods: {
        cursorText () {
            if (this.params.maxrange < this.index) {
                this.index = this.params.maxrange;  // warning: not updated now ?!
            }
            let res = this.index + ' / ' + this.params.maxrange;
            return res;
        },
        centerUserMarker () {
            if (usermarker) {
                mymap.flyTo(usermarker.getLatLng(), 10);
            }
        },
        changeMarker() {
            if (this.index > markernotes.length) this.index = 1;
            if (this.index <1) this.index=1;

            let marker = markernotes[this.index-1];
            if (marker) {
                mymap.flyTo(marker.getLatLng(), 10);
                marker.openPopup();
                this.notetitle = marker.mynote.title;
            } 
        },
        actGeolocate() {
            // console.log('geolocate');
            mymap.locate();
        }
    },
    props: [ 'params' ],
    template: `
    <div class="xmap">
        <button @click="actGeolocate">me geolocaliser</button>
        <button @click="centerUserMarker()"><img src="assets/leaflet/images/marker-icon.png"></button>
        <template v-if="params.maxrange > 0">
            <button :title="notetitle" @click="changeMarker(++index)">{{ cursorText() }}</button>
            <input @change="changeMarker" type="range" min="1" :max="params.maxrange" v-model="index">
        </template>
        <div id="mapid"></div>
    </div>
    `
});

app.component('xform', {
    emits: ['signal1'],
    methods: {
        doSubmit (event) {
            // UX set the focus on first input
            event.target.querySelector('[required]').focus();
            this.$emit('signal1', event);
        }
    },
    data() {
        return {
            count: 0
        }
    },
    props: [ 'name', 'modelValue' ],
    template: `
    <form @submit.prevent="doSubmit"> 
        <h4>{{ modelValue.title }}</h4>
        <template v-for="field in modelValue.fields">
            <label>
                <span>{{ field.label }}</span>
                <textarea v-if="field.type=='textarea'" :name="field.name" required cols="60" rows="10"></textarea>
                <input v-else type="text" :name="field.name" required>
            </label>
        </template>   
        <input type="hidden" name="classApi" value="Member">
        <input type="hidden" name="methodApi" value="run">
        <button type="submit">publier</button>
    </form>
    `
});
app.component('xlist', {
    emits: ['delete-bn'],
    methods: {
        doDelete (id) {
            this.$emit('delete-bn', id);
        },
        debug() {
            // console.log(this.modelValue);
        }
    },
    data() {
        return {
            count: 0
        }
    },
    props: [ 'name', 'modelValue' ],
    template: `
    <template v-if="modelValue.blocnote != null">
        <h3>bloc-notes ({{ modelValue.blocnote.length }})</h3> 
        <div class="note" v-for="bn in modelValue.blocnote" :key="bn.id">
            <h4>{{ bn.title }}</h4>
            <pre>{{ bn.code}}</pre>
            <h6>({{ bn.id }}) {{ bn.dateLastRun }}</h6>
            <h6>{{ bn.json }}</h6>
            <button @click="doDelete(bn.id)">supprimer</button>  
        </div> 
    </template>
    <h3 v-else>la liste est vide</h3>
    `
});

app.mount('.page');


// custom functions
async function sendAjaxForm(event, theapp)
{
    let fd = null;
    if (event.target) {
        fd          = new FormData(event.target);
    }
    else {
        fd = new FormData;
        fd.append('classApi', 'Member');
        fd.append('methodApi', 'run');
        if (event.extrafd) {
            for(let k in event.extrafd) {
                fd.append(k, event.extrafd[k]);
            }
        }
    }

    // add geoloc
    if (userpos) {
        fd.append('lat', userpos.latlng.lat);
        fd.append('lng', userpos.latlng.lng);
    }
    let loginToken  = sessionStorage.getItem('loginToken');
    fd.append('loginToken', loginToken);

    let movePos = false;
    if (fd.get('note') && theapp.hide.movePos) {
        movePos = true;
    }

    let response = await fetch('api', {
        method: 'POST',
        body: fd
    });
    let json     = await response.json();

    console.log(json);
    if (json.data && theapp) {
        // app.setModel(json.data);
        // warning: keep data for vuejs components...
        if ('blocnote' in json.data) {
            theapp.model.blocnote = json.data.blocnote;

            maprefresh(mymap, json.data.blocnote, movePos);
            // update the number of markers
            theapp.xmapparams.maxrange = markernotes.length;
        }
    } 
}

function maprefresh (map, bnotes, movePos)
{
    // reset
    for(let m=0; m<markernotes.length; m++) {
        let marker = markernotes[m];
        map.removeLayer(marker);
    }
    markernotes = [];
    for(let n=0; n<bnotes.length; n++) {
        let note = bnotes[n];
        if (note.json) {
            let info = JSON.parse(note.json);
            if ((info != null) && ('lat' in info) && ('lng' in info)) {
                
                let iIcon = (n == 0) ? redIcon : orangeIcon;

                // console.log(info.lat + '/' + info.lng);
                let nmark = L.marker({ 'lat': info.lat, 'lng': info.lng },{icon: iIcon, draggable: true});
                let nhtml = `
                <h3>${note.title}</h3>
                <pre>${note.code}</pre> 
                <h6>(${note.id}) ${note.dateLastRun}</h6>  
                `;
                nmark
                    .addTo(map)
                    .bindPopup(nhtml);

                markernotes.push(nmark);
                // hack to link marker with note
                nmark.mynote = note;
            }
        }
    }
    if (usermarker) {
        map.removeLayer(usermarker);

        // move the marker
        if (movePos) {
            let curpos = usermarker.getLatLng();
            // console.log(curpos);
            let lat2 = curpos.lat + (Math.random() -0.5);
            let lng2 = curpos.lng + (Math.random() -0.5);
            usermarker.setLatLng({ 'lat': lat2, 'lng': lng2});
        }

        // bring to front ?!
        usermarker.addTo(map);        
    }
    if (markernotes.length >0) {
        markernotes[0].openPopup();

        if (usermarker) {
            let bounds = L.latLngBounds(markernotes[0].getLatLng(), usermarker.getLatLng());
            map.fitBounds(bounds, { animate: true, padding: [ 100, 100 ]});
        }
        else {
            map.flyTo(markernotes[0].getLatLng(), 10);
        }

    }

}

let greenIcon = L.icon({
    iconUrl: 'assets/img/leaf-green.png',
    shadowUrl: 'assets/img/leaf-shadow.png',

    iconSize:     [20, 50], // size of the icon
    shadowSize:   [20, 30], // size of the shadow
    iconAnchor:   [10, 50], // point of the icon which will correspond to marker's location
    shadowAnchor: [2, 30],  // the same for the shadow
    popupAnchor:  [0, -30] // point from which the popup should open relative to the iconAnchor
});
let orangeIcon = L.icon({
    iconUrl: 'assets/img/leaf-orange.png',
    shadowUrl: 'assets/img/leaf-shadow.png',

    iconSize:     [20, 50], // size of the icon
    shadowSize:   [20, 30], // size of the shadow
    iconAnchor:   [10, 50], // point of the icon which will correspond to marker's location
    shadowAnchor: [2, 30],  // the same for the shadow
    popupAnchor:  [0, -30] // point from which the popup should open relative to the iconAnchor
});
let redIcon = L.icon({
    iconUrl: 'assets/img/leaf-red.png',
    shadowUrl: 'assets/img/leaf-shadow.png',

    iconSize:     [20, 50], // size of the icon
    shadowSize:   [20, 30], // size of the shadow
    iconAnchor:   [10, 50], // point of the icon which will correspond to marker's location
    shadowAnchor: [2, 30],  // the same for the shadow
    popupAnchor:  [0, -30] // point from which the popup should open relative to the iconAnchor
});

    </script>
</body>
</html>