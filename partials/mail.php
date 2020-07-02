<?php 
	$company = $_POST['company'];
	$person = $_POST['person'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$recipient = "info@chat-mado.com";
	$recipient2 = "uketsuke@012grp.co.jp";
	$sender = $_POST['email'];

	$subject_admin = "【チャットの窓口】お問い合わせがありました。";
	$content_admin ="下記の内容でチャットの窓口より問い合わせがありました。\n折り返しの対応をお願いいたします。\n\n-----\n会社名:\n $company \n\n担当者名:\n $person \n\nメールアドレス:\n $email \n\n備考・要望:\n $message\n-----";

	$subject_sender = "【チャットの窓口】お問い合わせありがとうございます。";
	$content_sender ="$person 様\n\nチャットの窓口にお問い合わせいただきありがとうございます。\n下記の内容でお問い合わせをうけたまわりました。\n弊社で内容を確認の上、折り返しご連絡いたしますのでいましばらくお待ち下さい。\n\n-----\n会社名:\n $company \n\n担当者名:\n $person \n\nメールアドレス:\n $email \n\n備考・要望:\n $message\n-----\n\nこちらのメールは チャットの窓口(https://chat-mado.com) の無料相談フォームから送信されました。\nなお、こちらのメールは自動返信メールとなっております。";

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	require './PHPMailer/src/Exception.php';
	require './PHPMailer/src/PHPMailer.php';
	require './PHPMailer/src/SMTP.php';

	if(isset($_POST['submit'])) {
		$full_url = $_SERVER['REQUEST_SCHEME'] .'://'. $_SERVER['HTTP_HOST'] . explode('?', $_SERVER['REQUEST_URI'], 2)[0];

		if(!$company && !$person && !$email) {
			header("Location:".$full_url."?message=req");
	      	exit;
		}
		else if(!$company && !$person) {
			header("Location:".$full_url."?message=reqcp");
	      	exit;
		}
		else if(!$person && !$email) {
			header("Location:".$full_url."?message=reqpe");
	      	exit;
		}
		else if(!$company && !$email) {
			header("Location:".$full_url."?message=reqce");
	      	exit;
		}
		else if(!$company) {
			header("Location:".$full_url."?message=reqc");
	      	exit;
		}
		else if(!$person) {
			header("Location:".$full_url."?message=reqp");
	      	exit;
		}
		else if(!$email) {
			header("Location:".$full_url."?message=reqe");
	      	exit;
		}
		else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			header("Location:".$full_url."?message=invalid");
	      	exit;
		}
		else {
			$mail = new PHPMailer(true);
			$mail->CharSet = 'UTF-8';
			$mail->Encoding = 'base64';
			$mail->setFrom('no-reply@chat-mado.com', 'お問い合わせ');
		    $mail->addAddress($recipient);
		    $mail->addAddress($recipient2);
		    $mail->Subject = $subject_admin;
			$mail->Body    = $content_admin;
			$mail->send();

			$mail2 = new PHPMailer(true);
			$mail2->CharSet = 'UTF-8';
			$mail2->Encoding = 'base64';
			$mail2->setFrom('no-reply@chat-mado.com', 'お問い合わせ');
		    $mail2->addAddress($sender);
			$mail2->Subject = $subject_sender;
			$mail2->Body    = $content_sender;
			$mail2->send();
		}
	}
?>