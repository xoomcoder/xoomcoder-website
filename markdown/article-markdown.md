@bloc meta
{ 
    "class" : "w67" 
}
@bloc

@bloc markdown

![time # cover](/assets/img/time.jpg)

## MarkDown en PHP avec ParseDown et CommonMark

Le format MarkDown est devenu vraiment populaire et incontournable. Plus simple que le code HTML, il permet aux rédacteurs d'écrire un texte lisible.
En effet, il n'y a pas les balises HTML qui défigurent le contenu. Et pour faire de la mise en page, le code à rajouter reste discret.
 
On peut ainsi facilement insérer une image avec le texte.

![php](/assets/img/php.svg)

Il y a plusieurs bibliothèques disponibles:
* ParseDown
* CommonMark
* PHP Markdown
* ...

https://github.com/erusev/parsedown

https://github.com/thephpleague/commonmark

ParseDown concentre tout le code dans une seule classe.
CommonMark va ajouter plus de 200 fichiers avec composer.

Exemple de code PHP pour ParseDown:

```php
$Parsedown = new Parsedown();

echo $Parsedown
->text('Hello _Parsedown_!'); 
// prints: 
// <p>Hello <em>Parsedown</em>!</p>

```

@bloc