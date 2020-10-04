<?php

// echo date("H:i:s");
$times = [];
$times[] = microtime(true);

$htmlBase =
<<<x
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    </head>
    <body>
        <header>
        </header>
        <main>
            <section>
                <h2>Ceci est le titre l'élévateur déjà où l'arbre</h2>
            </section>
        </main>
        <footer>
        </footer>
    </body>
</html>
x;

// https://www.php.net/manual/fr/domdocument.loadhtml.php

$doc = new DOMDocument();
$doc->preserveWhiteSpace = false;
$doc->formatOutput = true;
$doc->substituteEntities  = false;
$doc->loadHTML($htmlBase);

// https://www.php.net/manual/fr/domdocument.getelementsbytagname.php
$header = $doc->getElementsByTagName('header')[0];
$main   = $doc->getElementsByTagName('main')[0];
$footer = $doc->getElementsByTagName('footer')[0];

$h1 = $doc->createElement("h1");
$text = $doc->createTextNode("Ceci est le titre l'élévateur déjà où l'arbre");

$h1->appendChild($text);
$header->appendChild($h1->cloneNode(true));
$main->appendChild($h1->cloneNode(true));
$footer->appendChild($h1->cloneNode(true));

$enc = $doc->encoding;

// les entités html sont utilisées au lieu du caractère utf-8
echo $doc->saveHTML();

$times[] = microtime(true);
$delta = number_format(1000 * ($times[1] - $times[0]), 2);
echo "<!-- $delta ms $enc -->";