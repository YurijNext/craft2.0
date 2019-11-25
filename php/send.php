<?php

require_once('../lib/phpmailer/PHPMailerAutoload.php');

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$comment = $_POST['comment'];
$color = $_POST['color'];
$count = $_POST['count'];
$price = $_POST['price'];

$mail = new PHPMailer;
$mail->CharSet = 'utf-8';
$mail->setFrom('3dcrafter@info.ru', '3Dcrafter');
$mail->addAddress('sale@3dcrafter.ru', 'admin'); 
$mail->Subject  = 'Письмо с сайта 3Dcrafter.ru';
$mail->isHTML(true);
$mail->Body     = "<table>"
						 .($name ? "<tr><td>Имя:</td><td>".$name."</td></tr>":"")
						 .($email ? "<tr><td>Email:</td><td>".$email."</td></tr>":"")
						 .($phone ? "<tr><td>Телефон:</td><td>".$phone."</td></tr>":"")
						 .($comment ? "<tr><td>Сообщение:</td><td>".$comment."</td></tr>":"")
						 .($color ? "<tr><td>Цвет:</td><td>".$color."</td></tr>":"")
						 .($count ? "<tr><td>Количество:</td><td>".$count."</td></tr>":"")
						 .($price ? "<tr><td>Цена:</td><td>".$price." руб.</td></tr>":"")
						 ."</table>";
if (isset($_FILES['file']) &&
    $_FILES['file']['error'] == UPLOAD_ERR_OK) {
    $mail->AddAttachment($_FILES['file']['tmp_name'],
                         $_FILES['file']['name']);
}

if(!$mail->send()) {
  echo json_encode(array('text'=>"При отправке сообщения произошла ошибка", 'type'=>'error'));
  echo 'Mailer error: ' . $mail->ErrorInfo;
} else {
  echo json_encode(array('text'=>"Сообщение успешно отправлено", 'type'=>'success'));
}


?>
