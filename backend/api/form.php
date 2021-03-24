<?php
require $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';
use Src\Mail;

Mail::SendMail("test","fanman45@gmail.com","test");
