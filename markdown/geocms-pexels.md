@bloc meta
{ 
    "class" : "" 
}
@bloc

@bloc markdown

![time # cover](/assets/square/happy.jpg)

## CMS, Router et API Pexels gratuite

Pexels.com est un site qui propose de nombreuses photos de qualité et sous licence CC0.
Il y a une API si vous ne voulez pas chercher des photos manuellement pour chaque article.
Il est ainsi possible de chercher des photos par mot-clé.

Dans XoomCoder, il y a une commande qui permet de lancer une requête vers l'API de Pexels et de récupérer une photo suivant un mot-clé.

Et si l'image n'est pas satisfaisante, il y aussi une API publique qui permet de supprimer l'image...

Dans le cadre d'un CMS, on à beaucoup de contenu texte à publier.
Mais il est plus difficile de produire des photos d'illustration de bonne qualité rapidement.
Les services comme Pexels, permettent d'illustrer les articles avec de belles photos. Et ensuite si le projet peut proposer de meilleures photos, de remplacer les fichiers.

En pratique, le plus facile est de pouvoir donner l'URL d'une photo a afficher avec le contenu.
Et c'est le navigateur qui va charger l'image et déclencher une requête vers le site Pexels pour copier l'image sur le serveur. Une fois l'image sur notre serveur web, l'URL demandée par le navigateur correspond au fichier sur le serveur et donc ne déclenche plus de requête PHP.

Pour activer cette possibilité avec PHP, il devient très vite incontournable d'ajouter un code Routeur dans le code PHP pour un CMS. Ce code prend en charge les URLs qui correspondent à des images non présentes sur le serveur web.

@bloc