<?php
require $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';

use Src\Mail;
use Src\Http;

$error = ['error' => 'Валидацния не пройдена'];


if (isset($_POST['name']) and isset($_POST['number'])) {
    $data =  Mail::SendMail($_POST['name'], "fanman45@gmail.com", $_POST['number']);
    Http::response(201, $data);
} else {
    Http::response(400, $error);
}
