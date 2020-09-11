<?php

$tajson = [];
$tajson["template"] = 
<<<x
    <footer>
        <h1>FOOTER</h1>
    </footer>  
x;

echo json_encode($tajson);