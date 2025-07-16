<?php 

function dd($value){
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
}
// parse_url() will separate uri as path and query string  as query then check
function urlIs($value){
    return parse_url($_SERVER['REQUEST_URI'])['path'] === $value; 
}


