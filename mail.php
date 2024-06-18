<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'src/PHPMailer/Exception.php';
require 'src/PHPMailer/PHPMailer.php';
require 'src/PHPMailer/SMTP.php';

if (isset($_POST['submit'])) {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
}
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <?php include('head.php'); ?>
    <title>DANKE</title>
</head>
<body>
    <?php
    if (isset($_POST['submit'])) {
        $mail = new PHPMailer(true);
        $mail->CharSet = 'utf-8';
        $mail->setLanguage('de');
        $mail->isSMTP();
        $mail->Host = "securemail-wda-innsbruck-at.prossl.de";
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = "tls";
        $mail->Port = 587;
        $mail->Username = "wiastud-newsletter";
        $mail->Password = "45YerkaidaAsaef5Kiap";
        $mail->From = "stud-newsletter@wda-innsbruck.at";
        $mail->FromName = "BACIO";

        // $mail->addAddress($email, $name);
        $mail->addAddress('ngocfrankl@gmail.com', "Ngoc Frankl");

        $mail->isHTML(true);
        $mail->Subject = "Wir haben neues Rezept von $name bekommen!";

        $mail->Body = "
            <h1 style='color:#fff5e8; background-color:#d44000; padding: 5px 10px;'>Wir haben neues Rezept bekommen!</h1>
            <p style='font-size: 18px;'>Neues Rezept von $name,</p>
            <div>Name: $name</div><br>
            <div>Email: $email</div><br>
            <div>Rezept: $message</div>
        ";

        try {
            $mail->send();
            echo '<h1>Dankeschön!</h1><h2>Wir melden uns bei dir falls erforderlich! ' . htmlspecialchars($name) . '</h2>';
            echo '<script>window.location.replace("danke.php");</script>';
        } catch (Exception $ex) {
            echo 'Es ist ein Fehler passiert! ' . $mail->ErrorInfo;
        }
    }
    ?>
</body>
</html>
