@bloc meta
{ 
    "class" : "w67" 
}
@bloc

@bloc markdown

![teleport # cover](/assets/square/race.jpg)

## VueJS v3: teleport et composition API

Dans les nouveautés de VueJS v3, les API permettent d'aller plus loin dans les composants dynamiques.
Et VueJS v3 peut agir sur l'ensemble de la page HTML, tout en gardant son code séparé, ce qui améliore le SEO, car le contenu à référencer reste bien structuré.

### teleport

VueJS v3 propose un composant teleport qui permet de déplacer le code HTML inséré, dans une autre balise container. Ce qui est très intéressant, c'est que cette balise peut être en dehors du container racine #app. VueJS v3 peut ainsi agir sur l'ensemble de la page HTML.

https://v3.vuejs.org/guide/teleport.html#teleport

Par exemple, si vous avez déjà une page existante sans VueJS et qui contient beaucoup de contenu pour gagner un bon référencement SEO. Et que vous avez envie de rajouter quelques composants VueJS sur certaines parties de cette page. Avant la version v3, il fallait soit créer plusieurs instances Vue pour chaque partie ou bien créer un container pour toute la page et ajouter une seule instance de Vue, qui se retrouve à manipuler beaucoup de balises HTML.
Avec la version 3 de VueJS, vous pouvez créer une seule instance de VueJS, relié à une balise HTML à part. Mais en plus, cette instance pourra téléporter du HTML vers d'autres containers dans le reste de la page, même si ces containers ne sont pas dans l'instance #app.

Par défaut, le code téléporté se rajoute à la fin du container. Il faut rajouter du code JS si on veut enlever le code HTML déjà présent dans le container.

La migration de pages, publiées initialement sans VueJS, et qui veulent ajouter des composants VueJS est ainsi beaucoup plus facile et rapide. Car on peut faire cohabiter les 2 codes et les faire interagir. Pour le SEO, c'est un grand avantage de pouvoir conserver à part une version HTML sans JS.

### teleport et composition API

https://v3.vuejs.org/guide/composition-api-introduction.html#basics-of-composition-api

En pratique, on pourrait créer des composants dynamiquement en reprenant une structure HTML en dehors de VueJS. La composition API permet de créer une méthode setup, mais ne permet pas de renvoyer dynamiquement le code du template. Comme workaround, Il faut créer un template qui va utiliser la directive v-html qui va activer une méthode du composant. Cette méthode pourra être produite par la méthode setup. Cela impose d'avoir une balise container HTML pour cette directive v-html.

![wordpress # cover](/assets/square/sky.jpg)

Dans un CMS comme WordPress, cela ouvre la possibilité d'ajouter une extension avec VueJS et d'agir sur le contenu du site déjà existant. Les risques de conflits sont très réduits, car VueJS n'agirait que sur certaines parties bien délimitées.

### Exemple 1: avec composition API setup et teleport


```js
app.component('myset', {
    template: `
        <teleport to=".container">
            <div v-html="build()"></div>
        </teleport>
    `,
    setup() {
        function build() {
            // retrieve innerHTML from .container
            // and embed in component template
            let ct = document.querySelector('.container');
            return `
                <h1>YES IT WORKS</h1>
                <ul>
                    <li>${ct.innerHTML}</li>
                </ul>
                `;
        }
        return { build };
    }
})
```

### Exemple 2: avec composition API setup, teleport et propriétés


```js
app.component('myset', {
    template: `
        <teleport to=".container">
            <h1 @click="count++">YES IT WORKS {{ count }}</h1>
            <div v-html="build()"></div>
        </teleport>
    `,
    data() {
        return {
            html: null,
            count: 0
        }
    },
    setup() {
        function build() {
            if (this.html == null) {
                // get innerHTML from container
                let ct = document.querySelector('.container');
                this.html = ct.innerHTML;
            }
            return `
                <ul>
                    <li>${this.html}</li>
                </ul>
                `;
        }
        return { build };
    }
})
```


@bloc
