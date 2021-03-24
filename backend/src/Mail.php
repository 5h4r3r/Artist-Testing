<?php

namespace Src;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

class Mail
{
    public static function SendMail($name,$email,$text,$file = 'Пусто')
    {
        // Переменные, которые отправляет пользователь
        //$name = $_POST['name'];
        //$email = $_POST['email'];
        //$text = $_POST['text'];
        //$file = $_FILES['myfile'];
        
        // Формирование самого письма
        $title = "Заголовок письма";
        $body = "
        <h2>Новое письмо</h2>
        <b>Имя:</b> $name<br>
        <b>Почта:</b> $email<br><br>
        <b>Сообщение:</b><br>$text
        ";
        
        // Настройки PHPMailer
        $mail = new PHPMailer();
        try {
            $mail->isSMTP();   
            $mail->CharSet = "UTF-8";
            $mail->SMTPAuth   = true;
            //$mail->SMTPDebug = 2;
            $mail->Debugoutput = function($str, $level) {$GLOBALS['status'][] = $str;};
        
            // Настройки вашей почты
            $mail->Host       = 'smtp.gmail.com'; // SMTP сервера вашей почты
            $mail->Username   = 'fanman45@gmail.com'; // Логин на почте
            $mail->Password   = 'aeukasdqpemlmvfz'; // Пароль на почте
            $mail->SMTPSecure = PHPMailer :: ENCRYPTION_STARTTLS ; 
            $mail->Port       = 587;
            $mail->setFrom('fanman45@gmail.com', 'Имя отправителя'); // Адрес самой почты и имя отправителя
        
            // Получатель письма
            $mail->addAddress('ryazanovhomebackup@gmail.com');  
        
            // Прикрипление файлов к письму
        if (!empty($file['name'][0])) {
            for ($ct = 0; $ct < count($file['tmp_name']); $ct++) {
                $uploadfile = tempnam(sys_get_temp_dir(), sha1($file['name'][$ct]));
                $filename = $file['name'][$ct];
                if (move_uploaded_file($file['tmp_name'][$ct], $uploadfile)) {
                    $mail->addAttachment($uploadfile, $filename);
                    $rfile[] = "Файл $filename прикреплён";
                } else {
                    $rfile[] = "Не удалось прикрепить файл $filename";
                }
            }   
        }
        // Отправка сообщения
        $mail->isHTML(true);
        $mail->Subject = $title;
        $mail->Body = $body;    
        
        // Проверяем отравленность сообщения
        if ($mail->send()) {$result = "success";} 
        else {$result = "error";}
        
        } catch (Exception $e) {
            $result = "error";
            $status = "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
        }
        
        // Отображение результата
        echo json_encode(["result" => $result, "resultfile" => $rfile, "status" => $status]);
    }
}