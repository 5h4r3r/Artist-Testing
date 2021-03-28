<?php

namespace Src;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

class Mail
{
    public static function SendMail($name, $tel)
    {
        // Переменные, которые отправляет пользователь
        //$name = $_POST['name'];
        //$email = $_POST['email'];
        //$text = $_POST['text'];
        //$file = $_FILES['myfile'];

        // Формирование самого письма
        $title = "Оповещение";
        $body = "
        Клиент оставил свои данные!<br>
        <b>Имя:</b> $name<br>
        <b>Номер телефона:</b>$tel<br>
        ";

        // Настройки PHPMailer
        $mail = new PHPMailer();
        try {
            $mail->isSMTP();
            $mail->CharSet = "UTF-8";
            $mail->SMTPAuth   = true;
            //$mail->SMTPDebug = 2;
            $mail->Debugoutput = function ($str, $level) {
                $GLOBALS['status'][] = $str;
            };

            // Настройки вашей почты
            $mail->Host       = 'smtp.gmail.com'; // SMTP сервера вашей почты
            $mail->Username   = 'fanman45@gmail.com'; // Логин на почте
            $mail->Password   = 'aeukasdqpemlmvfz'; // Пароль на почте
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port       = 587;
            $mail->setFrom('fanman45@gmail.com', 'Заявка на сайте!'); // Адрес самой почты и имя отправителя

            // Получатель письма
            $mail->addAddress('ryazanovhomebackup@gmail.com');

            // Прикрипление файлов к письму
            // Отправка сообщения
            $mail->isHTML(true);
            $mail->Subject = $title;
            $mail->Body = $body;

            // Проверяем отравленность сообщения
            if ($mail->send()) {
                $result = "success";
                $status = "Сообщение отправлено!";
            } else {
                $result = "error";
            }
        } catch (Exception $e) {
            $result = "error";
            $status = "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
        }

        // Отображение результата
        //echo json_encode(["result" => $result, "status" => $status]);
        return ["result" => $result, "status" => $status];
    }
}
