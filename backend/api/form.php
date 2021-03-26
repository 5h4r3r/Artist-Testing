<?php
require $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';

use Src\Mail;
use Src\Http;
// преобразование полученной строки в $_Post для возможности сохранения работы с обычными формами необходимо добавить проверку заголовка
$_POST = json_decode(file_get_contents("php://input"), true);
$headers = [
    'Access-Control-Allow-Origin: *',
    'Content-type: application/json',
    'Access-Control-Allow-Headers: Content-Type',
    'Access-Control-Allow-Methods: GET,POST,PUT,DELETE,OPTIONS',
];
$error = ['error' => 'Валидацния не пройдена'];
$error2 = ['error' => 'Нет данных'];

//Http::response(200, $data,$headers);


if (isset($_POST['name']) and isset($_POST['tel'])){ 
    if(!empty($_POST['name']) and !empty($_POST['tel'])){
        // Отправка почты
        //$data =  Mail::SendMail($_POST['name'], "fanman45@gmail.com", $_POST['number']);
        $data = ['Данные получены' => $_POST['name'] . " " . $_POST['tel']];
        Http::response(201, $data, $headers);
    } else {
        Http::response(400, $error, $headers);
    }
}else{
    Http::response(200, $error2, $headers);
}
