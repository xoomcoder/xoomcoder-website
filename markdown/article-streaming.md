@bloc meta
{ 
    "class" : "w67" 
}
@bloc

@bloc markdown

![time # cover](/assets/square/streaming.jpg)

## Streaming Applicatif (Divide and Conquer)

Divide and Conquer. Cette devise est souvent traduite en français par "Diviser pour Régner", dans le contexte des traductions de Zun Tzu dans l'Art de la guerre. Le principe est simple: si vous êtes moins fort que votre ennemi, divisez-le en groupes moins fort que vous. Et ensuite vous pourrez vaincre et conquérir chaque groupe séparément. Hors du contexte guerrier, je préfère comme traduction "Diviser et ensuite rassembler". Dans le monde moderne, notre vie quotidienne suit ce principe. Voyez-vous des exemples ?

Dans le monde d'internet, il se retrouve dans le terme de "streaming" en opposition avec le "download". Le téléchargement est utile quand le volume de données est assez petit, comparé au débit de la connexion internet. Le temps d'attente pour l'internaute est alors en dessous de la seconde, ce que l'internaue va accepter facilement. Mais si le fichier est très long à charger, l'expérience sera alors pénible. On se souvient du début de la vidéo sur internet, où il fallait attendre longtemps de télécharger tout le fichier avant de pouvoir commencer à regarder la première minute.
Le "streaming" a alors fourni une solution pratique: on divise la vidéo par petites tranches, par exemple une minute. Et au lieu de faire un seul énorme téléchargement, le navigateur va faire plein de multiples téléchargements et rassembler les bouts ensemble. L'utilisateur peut regarder rapidement la première minute de la video et pendant ce temps, le navigateur télécharge la 2è minute. Et ainsi de suite... Divide and Conquer.

Avant que la video ne devienne très populaire sur internet, les sites internet eux mêmes sont construits sur ce même principe. L'internaute visite un site page par page. Le navigateur propose ainsi un streaming du contenu d'un site, en divisant le site en plein de pages.
Et même une page HTML est composée aussi de plusieurs fichiers (css, js, images, etc...).

![animation # cover](/assets/square/animation.jpg)

### WebApp (Web Application)

Avec l'augmentation progressive de la puissance des processeurs, notamment sur smartphones, les sites internautes deviennent de plus en plus interactifs et animés. C'est le langage Javascript qui permet de coder ces interactions et animations. Javascript a beaucoup évolué et est devenu un langage incontournable pour les développeurs front. Un site internet se transforme alors en application, on parle de WebApp. 

Souvent on met en opposition les WebApps contre les applications mobiles "natives", qu'on télécharge des AppStores ou GooglePlay et qu'on installe sur notre smartphone. Mais en réalité, plus d'un tiers des applications mobiles ne sont que des coquilles "hybrides" qui affichent une WebApp ! (En utilisant un module WebView, qui propose un navigateur simplifié). Les développeurs web sont aussi des développeurs mobiles.

Dans un navigateur, les WebApps sont souvent construites en SPA (Single Page Application) et PWA (Progressive Web App). Single Page Application met en avant que le navigateur n'aura qu'une URL unique pour toute l'application, par exemple: https://monsite.com/app ou en sous-domaine https://app.monsite.com
Evidemment, si on ne propose qu'une seule URL pour la Web App, comment garder un temps de téléchargement acceptable si on veut créer une application complexe, avec beaucoup de code ?
Divide and Conquer.
Les smarphones et tablettes ne proposent qu'une surface d'affichage limitée pour les utilisateurs. Il est inutile de tout télécharger d'un coup. Une application se divise souvent en plusieurs écrans. Pendant que l'utilisateur interagit avec un écran, on peut profiter de ce temps pour télécharger les écrans suivants. C'est la technique de Progressive Web App (PWA): on fait du streaming applicatif.

Avec un site internet qui se décompose en pages, on parle de streaming de contenu.
Avec une WebApp, qui se décompose en écrans, on parle de streaming applicatif, car on va télécharger progressivement du code JS pour chaque écran.
En pratique, ce sera la technologie AJAX (Asynchronous Javascript And XML) qui permet au navigateur d'envoyer des requêtes à un serveur web, sans changer de page. On a parlé de Web2.0 quand cette technologie est devenue populaire. Le monde JS évolue rapidement et on n'utilise plus XML maintenant, mais le format JSON est devenu très populaire.

![team # cover](/assets/square/team.jpg)

### Framework Front (React, Angular, Vue)

Des frameworks front ont été développés pour aider à construire ces WebApps. En 2020, Les 3 frameworks front les plus populaires sont React, Angular et Vue. React est mis en avant par Facebook avec le langage JSX, Angular est mis en avant par Google avec le langage TypeScript (développé par Microsoft). VueJS propose une variante très proche du JS "classique".

* https://fr.reactjs.org/
* https://angular.io/
* https://vuejs.org/

Si vous débutez avec les frameworks front, Vue est le choix le plus simple et rapide. En effet, VueJS propose une version en un seul fichier, qui contient en plus un compilateur. Vous pouvez donc créer une WebApp très rapidement en ajoutant un seul fichier JS dans votre page web.
Ce qui est très impressionnant, c'est que ce fichier avec compilateur fait environ 100Ko (minifié). Ce qui est comparable au code de jQuery (un peu moins de 90Ko). Et la version Vue "runtime", sans le compilateur, pèse autour de 65Ko. Prendre la version "global" avec le compilateur est donc tout à fait acceptable, si on se souvient que beaucoup de sites depuis 10 ans chargent le code de jQuery. VueJS est un véritable successeur de jQuery, qui est maintenant à la retraite.

Si vous voulez vous lancer dans des applications plus complexes, votre code Vue devra aussi se diviser en composants. Et VueJS v3 propose un chargement asynchrone de ces composants. Si vous combinez ce streaming applicatif de composants avec le compilateur en front, on obtient un environnement simplifié qui permet de coder une WebApp très rapidement. Et il est possible de mettre en oeuvre PHP côté serveur pour aider à gérer le code JS des composants Vue.

Documentation de Vue.defineAsyncComponent:
https://v3.vuejs.org/guide/component-dynamic-async.html

Techniquement, les composants VueJS sont des objets complexes, avec beaucoup de méthodes. Le format JSON ne permet de transférer, du serveur web, seulement des propriétés et aucune méthode. Il faut contourner le problème en utilisant le format JSON pour transporter du code JS, comme un simple texte d'une propriété. Et c'est dans le navigateur que ce code JS sera finalement transformé en objet JS proposant des méthodes, en passant par "eval" ou bien "new Function" (utilisé par VueJS).

Naturellement, VueJS propose aussi de nombreux environnements de développements similaires à React ou Angular. Vous pouvez mettre en oeuvre côté serveur des modules npm pour compiler le code de votre WebApp. Vos composants Vue seront séparés dans des fichiers .vue, appelés Single File Component (SFC).
Chaque fichier SFC .vue peut contenir le code HTML, JS et CSS d'un composant.

Comme React, Angular et Vue sont des communautés très actives et en concurrence, n'hésitez pas à comparer les différentes possibilités. Souvent Vue proposera la technique la plus simple et efficace.

@bloc












