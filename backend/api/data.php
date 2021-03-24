<?php
require $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';

use Src\Http;
use Src\Mail;
$data = [
    'nav' => [   
    'test' => "test2"]
];

$error = ['error' => "Запись отсутствует"];
if ($_GET['key'] == 1) {
    Http::response(200, $data,);
} else {
    Http::response(500, $error);
}
