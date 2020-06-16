<?php 
	$company = $_POST['company'];
	$person = $_POST['person'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$recipient = "info@chat-mado.com";
	$recipient2 = "itoshun14@gmail.com";
	$recipient3 = "uketsuke@012grp.co.jp";
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

	if($company && $person && $email) {
		$mail = new PHPMailer(true);
		$mail->CharSet = 'UTF-8';
		$mail->Encoding = 'base64';
		$mail->setFrom('no-reply@cebushun.sakura.ne.jp', 'お問い合わせ');
	    $mail->addAddress($recipient);
	    $mail->addAddress($recipient2);
	    $mail->addAddress($recipient3);
	    $mail->Subject = $subject_admin;
		$mail->Body    = $content_admin;
		$mail->send();

		$mail2 = new PHPMailer(true);
		$mail2->CharSet = 'UTF-8';
		$mail2->Encoding = 'base64';
		$mail2->setFrom('no-reply@cebushun.sakura.ne.jp', 'お問い合わせ');
	    $mail2->addAddress($sender);
		$mail2->Subject = $subject_sender;
		$mail2->Body    = $content_sender;
		$mail2->send();
	}
?>