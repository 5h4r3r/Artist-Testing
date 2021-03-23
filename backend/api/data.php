<?php
require $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';

use Http\Http;

$data2 = ['error' => "Запись отсутствует"];
$data = ['test' => "test2"];
if ($_GET['key'] == 1) {
    Http::response(200, $data,);
} else {
    Http::response(500, $data2);
}
