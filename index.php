<?php

$uri = $_SERVER["REQUEST_URI"];

// log
if (!empty($_REQUEST)) {
    $today = date("Y-m-d");
    $logdata = json_encode($_REQUEST, JSON_PRETTY_PRINT);
    file_put_contents(__DIR__ . "/log/request-$today.log", "$logdata\n", FILE_APPEND);    
}

$pageas = [
    "/gitpull"  => "gitpull",
    "/info"     => "info",
];
$template = $pageas[$uri] ?? false;

if ($template) {
    require "templates/$template.php";
}
else {
    echo "($uri)";
}