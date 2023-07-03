<?php
include  "PHPMailer/src/PHPMailer.php";
include  "PHPMailer/src/Exception.php";
include  "PHPMailer/src/OAuth.php";
include  "PHPMailer/src/POP3.php";
include  "PHPMailer/src/SMTP.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Mailer
{
    public function dat_hang($tieu_de, $noi_dung, $mail_dat_hang)
    {
        $mail = new PHPMailer(true);
        $mail->CharSet = 'UTF-8';
        // print_r($mail);
        try {
            //Server settings
            $mail->SMTPDebug = 0;                                 
            $mail->isSMTP();                                      
            $mail->Host = 'smtp.gmail.com';  
            $mail->SMTPAuth = true;                              
            $mail->Username = 'nguyenvatinh2310.03.com';               
            $mail->Password = 'aqlpnbgzrznzzioa';                         
            $mail->SMTPSecure = 'tls';                            
            $mail->Port = 587;                                  
            //Recipients
            $mail->setFrom('nguyenvatinh2310.03.com', 'Beeta-Store');
            $mail->addAddress($mail_dat_hang, '');   


            $mail->addCC('nguyenvatinh2310.03.com');


            //Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = $tieu_de;
            $mail->Body    = $noi_dung;

            $mail->send();

        } catch (Exception $e) {
            echo '<script>alert("Không thể gửi email. Lỗi người gửi thư: "' . $mail->ErrorInfo . ')</script>';
        }
    }
}
