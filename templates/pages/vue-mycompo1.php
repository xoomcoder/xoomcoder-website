<?php

$tajson = [];
$tajson["template"] = 
<<<x
    <header>
        <h1>HEADER</h1>
    </header>  
x;
$tajson["data"] = [];
 
echo json_encode($tajson);