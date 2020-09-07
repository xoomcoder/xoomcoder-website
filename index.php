<?php

$uri = $_SERVER["REQUEST_URI"];

// log
if (!empty($_REQUEST)) {
    $today = date("Y-m-d");
    $logdata = json_encode($_REQUEST, JSON_PRETTY_PRINT);
    file_put_contents(__DIR__ . "/log/request-$today.log", "$logdata\n", FILE_APPEND);    
}

function buildPages ($root) 
{
    $results = [];
    $files = glob("$root/templates/pages/*.php");
    foreach($files as $file) {
        extract($pathinfo($file));
        $results["/$filename"] = $filename;
    }
    return $results;
}

$pageas     = buildPages(__DIR__);
$template   = $pageas[$uri] ?? false;

if ($template) {
    require "templates/pages/$template.php";
}
else {
    echo "($uri)";
}