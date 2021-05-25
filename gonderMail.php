<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require "src/Exception.php";
require "src/PHPMailer.php";
require "src/SMTP.php";

$mail = new PHPMailer(true);


//server Ayarı
$mail->CharSet="UTF-8";
$mail->SMTPDebug=0;
$mail->isSMTP();
$mail->Host="smtp.gmail.com";
$mail->SMTPAuth=true;
$mail->Username="zorlutranslate@gmail.com";
$mail->Password="KendiSifreniYaz123";
$mail->SMTPSecure="tls";
$mail->Port=587;
$mail->SMTPOptions = array(
    'ssl' => array(
    'verify_peer' => false,
    'verify_peer_name' => false,
    'allow_self_signed' => true
    )
    );

//Alıcı Ayarı
$mail->setFrom("zorlutranslate@gmail.com", "Zorlu Translate İletişim Formu");
$mail->addAddress("zorlutranslate@gmail.com");
$mail->isHTML(true);
$mail->Subject=$_POST["konu"];
$mail->Body="<p> Gönderen: ".$_POST["isim"]." </p>"."<p> gönderen Mail: ".$_POST["email"]." </p>"."<p> Mesaj: ".$_POST["mesaj"]." </p>";
if($mail->send()){
    $alert=array(
        "message"=>"Mailiniz başarıyla iletildi",
        "type"=>"success"
    );
    $_SESSION["alert"]=$alert;
    header("location:contact.php");
}else{
    $alert=array(
        "message"=>"Mailiniz gönderilirken hata oluştu!!!".$mail->ErrorInfo,
        "type"=>"danger"
    );
    $_SESSION["alert"]=$alert;
    header("location:contact.php");
}


?>