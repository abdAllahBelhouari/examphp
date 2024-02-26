<?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require_once "phpmailer/PHPMailer.php";
    require_once "phpmailer/SMTP.php";
    require_once "phpmailer/Exception.php";
    
    function sendEmail ( $Sujet, $Message, $Destinataire, $Reply = false ) {

		$mail = new PHPMailer();
		$mail->CharSet = "UTF-8";
		$mail->isSMTP();
		$mail->Host = "dwwm2324.fr";
		$mail->SMTPAuth = true;
		$mail->Username = "contact@dwwm2324.fr";
		$mail->Password = 'm%]E5p2%o]yc';
		$mail->Port = 465;
		$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
		
		$mail->From = "DWWM 23-24"; 
		$mail->FromName = "Exam PHP";

		if ( $Reply ) {
			$mail->AddReplyTo($Reply); 
		}

		$mail->addAddress($Destinataire);
		$mail->isHTML(true);
				
		$mail->Subject = $Sujet;
		$mail->Body = $Message;

		return $mail->send() ? true : false;
	}
?>