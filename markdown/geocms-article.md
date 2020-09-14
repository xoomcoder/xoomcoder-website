@bloc meta
{ 
    "class" : "" 
}
@bloc

@bloc markdown

![news # cover](/assets/square/earth.jpg)

## Ajout des articles en database

Les articles sont maintenant gérés en base de données.
Pour pouvoir publier des articles dans la page "news", il faut être un user avec un level=100.
Et pour être plus libre sur le code, le traitement de formulaire ne filtre pas le contenu reçu si l'utilisateur est identifié avec un level=100.
Un bon côté de garder le contenu en BDD est que le code dangereux est plus difficilement activable par un hacker depuis l'extérieur.
Et si on passe par VueJS pour afficher ce contenu, le code JS est aussi désactivé.

@bloc