<?php
require $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';

use Src\Http;
use Src\Mail;
$data = [
    'nav' => [   
    'test' => "test2"]
];
$headers = ['Access-Control-Allow-Methods' => 'GET,POST,PUT,DELETE,OPTIONS',
];

$error = ['error' => "Запись отсутствует"];
if ($_GET['key'] == 1) {
    Http::response(200, $data,$headers);
} else {
    Http::response(500, $error, $headers);
}
