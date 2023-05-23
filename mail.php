<?php
    function mail_OTP($kime,$baslik, $metin) {

        include_once "mail/class.phpmailer.php";
        $mail = new PHPMailer();

        $gonderen = "cornerstone@cornerstonecafebistro.com";
        $sifre = "Dc66YDJx";


        $mail->IsSMTP(true);
        // $mail->SMTPDebug = true; // 0'dı
        $mail->From     = $gonderen;//"admin@localhost"; //Gönderen kisminda yer alacak e-mail adresi
        $mail->Sender   = $gonderen;//"admin@localhost";//Gönderen Mail adresi
        $mail->AddReplyTo=$gonderen;//"admin@localhost";//Tekrar gönderimdeki mail adersi
        $mail->FromName = 'CornerStoneCafeBistro.com';//"PHP Mailer";//gönderenin ismi
        $mail->Host     = "smtp.cornerstonecafebistro.com";//"localhost"; //SMTP server adresi
        // $mail->Host     = "ms.guzel.net.tr";//"localhost"; //SMTP server adresi
        $mail->SMTPAuth = true; //SMTP server'a kullanici adi ile baglanilcagini belirtiyoruz
        $mail->Port     = 587; //Natro SMPT Mail Portu
        // $mail->SMTPSecure = 'tls'; // yeni ekledimm
        $mail->CharSet = 'UTF-8'; //Türkçe yazı karakterleri için CharSet  ayarını bu şekilde yapıyoruz.
        $mail->Username = $gonderen;//"admin@localhost"; //SMTP kullanici adi
        $mail->Password = $sifre;//""; //SMTP mailinizin sifresi
        $mail->WordWrap = 50;
        $mail->IsHTML(true); //Mailimizin HTML formatinda hazirlanacagini bildiriyoruz.
        $mail->Subject  = 'Rezervasyon Talebi | '.$baslik; // Mailin Konusu Konu

        $metx = $metin."<br><br>--------------------------------------------------------------------<br><br>";
        $metx = $metx."Bu e-posta <a href=\"http://cornerstonecafebistro.com\">cornerstonecafebistro.com</a> üzerinden gönderilmiştir. Lütfen yanıtlamayınız.";

        $mail->Body = $metx;
        $mail->Send();
        $mail->ClearAddresses();
        $mail->ClearAttachments();
        $mail->AddAddress($kime); // Mail gönderilecek adresleri ekliyoruz. Birden fazla ekleme yapılabilir.
        if ($mail->Send()) { return true; } else { return false; }
        $mail->ClearAddresses();
        $mail->ClearAttachments();


    }

    


?>
