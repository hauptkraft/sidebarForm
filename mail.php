<?php
// Файлы phpmailer
require 'libs/PHPMailer.php';
require 'libs/SMTP.php';
require 'libs/Exception.php';

$title = "Тема письма";

$c = true;

// Формирование письма
$title = "Заголовок";
foreach ($_POST as $key => $value) 
{
    if ($value != "") 
    {
        $body .= "
    " . (($c = !$c) ? '<tr>' : '<tr style="background-color: #ffffff;">') . "
      <td style='padding: 10px; border: #e9e9e9 1px solid;'><b>$key</b></td>
      <td style='padding: 10px; border: #e9e9e9 1px solid;'>$value</td>
    </tr>
    ";
    }
}

$body = "<table style='width: 100%;'>$body</table>";

//  PHPMailer
$mail = new PHPMailer\PHPMailer\PHPMailer();

try 
{
    $mail->isSMTP();
    $mail->CharSet = "UTF-8";
    $mail->SMTPAuth   = true;

    // привязка почты
    $mail->Host       = 'smtp.gmail.com'; // SMTP сервер почты
    $mail->Username   = 'salbiev.t99@gmail.com'; // Логин на почте
    $mail->Password   = 'epoowpdmhqlujknm'; // Пароль на почте
    $mail->SMTPSecure = 'ssl';
    $mail->Port       = 465;

    $mail->setFrom('salbiev.t99@gmail.com', 'Message from mika'); // Адрес почты и заголовок

    // Получатель письма
    $mail->addAddress('salbiev.t99@mail.ru');

    // Отправка сообщения
    $mail->isHTML(true);
    $mail->Subject = $title;
    $mail->Body = $body;

    $mail->send();
} catch (Exception $e) 
{
    $status = "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
}
