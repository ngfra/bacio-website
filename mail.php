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

$date = date('d/m/Y H:i:s');
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
        $mail->FromName = "Pizza BACIO";

        // $mail->addAddress($email, $name);
        $mail->addAddress($email, $name);
        $mail->addCC('ngocfrankl@gmail.com', "Ngoc Frankl");
        
        $mail->isHTML(true);
        $mail->Subject = "Neue Nachricht";

        $mail->Body = "
        <div style='font-family: Helvetica, sans-serif; padding: 20px; background-color: #f4f4f4;'>
            <h1 style='color: #d44000;'>BACIO freut sich auf deine Nachricht!</h1>
            <p style='font-size: 18px;'>Wir haben deine Nachricht erhalten und möchten dir hier eine Zusammenfassung deiner Angaben geben:</p>
            <table style='width: 100%; max-width: 600px; margin: 20px 0; border-collapse: collapse;'>
                <tr>
                    <td style='padding: 10px; border: 1px solid #ddd; background-color: #fff;'>Name</td>
                    <td style='padding: 10px; border: 1px solid #ddd; background-color: #fff;'>$name</td>
                </tr>
                <tr>
                    <td style='padding: 10px; border: 1px solid #ddd; background-color: #fff;'>Email</td>
                    <td style='padding: 10px; border: 1px solid #ddd; background-color: #fff;'>$email</td>
                </tr>
                <tr>
                    <td style='padding: 10px; border: 1px solid #ddd; background-color: #fff;'>Nachricht</td>
                    <td style='padding: 10px; border: 1px solid #ddd; background-color: #fff;'>$message</td>
                </tr>
                <tr>
                <td style='padding: 10px; border: 1px solid #ddd; background-color: #fff;'>Datum und Uhrzeit</td>
                <td style='padding: 10px; border: 1px solid #ddd; background-color: #fff;'>$date</td>
            </tr>
            </table>
             <p style='font-size: 18px;'>Falls erforderlich, werden wir uns bei dir melden!</p>
             <p style='font-size: 18px;'>Liebe Grüße,</p>
             <p style='font-size: 18px;'>BACIO</p>
        </div>
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
