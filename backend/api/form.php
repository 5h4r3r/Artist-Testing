<?php
require $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';
use Http\Http;

if(isset($_POST['submit'])){

}else{
    $data = ["error" => "Серверу не удалось обработать ваш запрос"];
    Http::response(500,$data);
}

