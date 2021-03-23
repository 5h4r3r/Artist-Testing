<?php
require $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';

use Http\Http;

$data = [
    "links" => [
        "main"=>"http://" . $_SERVER['HTTP_HOST'] . "/api",
        "data" => "http://" . $_SERVER['HTTP_HOST'] . "/data.php",
        "form" => "http://" . $_SERVER['HTTP_HOST'] . "/form.php"
    ]
];
http: //'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']
Http::response(500, $data);
