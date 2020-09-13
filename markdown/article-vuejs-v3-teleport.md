@bloc meta
{ 
    "class" : "" 
}
@bloc

@bloc markdown

![time # cover](/assets/square/travel.jpg)

## VueJS v3: teleport

VueJS v3 propose un composant teleport qui permet de déplacer le code HTML inséré, dans une autre balise container. Ce qui est très intéressant, c'est que cette balise peut être en dehors du container racine #app. VueJS v3 peut ainsi agir sur l'ensemble de la page HTML.

https://v3.vuejs.org/guide/teleport.html#teleport

Par exemple, si vous avez déjà une page existante sans VueJS et qui contient beaucoup de contenu pour gagner un bon référencement SEO. Et que vous avez envie de rajouter quelques composants VueJS sur certaines parties de cette page. Avant la version v3, il fallait soit créer plusieurs instances Vue pour chaque partie ou bien créer un container pour toute la page et ajouter une seule instance de Vue, qui se retrouve à manipuler beaucoup de balises HTML.
Avec la version 3 de VueJS, vous pouvez créer une seule instance de VueJS, relié à une balise HTML à part. Mais en plus, cette instance pourra téléporter du HTML vers d'autres containers dans le reste de la page, même si ces containers ne sont pas dans l'instance #app.

Par défaut, le code téléporté se rajoute à la fin du container.
Il faut rajouter du code JS si on veut enlever le code HTML déjà présent dans le container.

La migration de pages, publiées initialement sans VueJS, et qui veulent ajouter des composants VueJS est ainsi beaucoup plus facile et rapide. Car on peut faire cohabiter les 2 codes et les faire interagir. Pour le SEO, c'est un grand avantage de pouvoir conserver à part une version HTML sans JS.

![wordpress # cover](/assets/square/wordpress.jpg)

Dans un CMS comme WordPress, cela ouvre la possibilité d'ajouter une extension avec VueJS et d'agir sur le contenu du site déjà existant. Les risques de conflits sont très réduits, car VueJS n'agirait que sur certaines parties bien délimitées.

@bloc












