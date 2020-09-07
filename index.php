<?php

$uri = $_SERVER["REQUEST_URI"];
echo "($uri)";

// log
if (!empty($_REQUEST)) {
    $today = date("Y-m-d");
    $logdata = json_encode($_REQUEST, JSON_PRETTY_PRINT);
    file_put_contents(__DIR__ . "/log/request-$today.log", "$logdata\n", FILE_APPEND);    
}

// git pull
if ($uri == "/gitpull") {
    $commande = "git pull";
    passthru($commande);
}
