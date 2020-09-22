<?php

$data = Form::filterText("data");
if ($data) {
    $server = "http://www.plantuml.com/plantuml/svg";
    $image = file_get_contents("$server/$data");
    if ($image !== false) {
        header("Content-Type: image/svg+xml");
        echo $image;
    }
}