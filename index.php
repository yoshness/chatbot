<!DOCTYPE html>
<html lang="ja">
<head>

<?php 
	$request = $_SERVER['REQUEST_URI'];
	if($request == '/company') { ?>
	<title>会社概要｜あなたに最適なチャットボットサービスをマッチング｜チャットの窓口</title>

	<meta property="og:title" content="チャットボット探すならチャットの窓口">
	<meta name="description" content="チャットボットの窓口を運営している会社概要をご紹介いたします。チャットボットシステムの導入のことならおまかせください！数あるチャットボットシステムからご希望の条件にピッタリのチャットボットシステムを無料でご紹介いたします。チャットボットシステムの知識・導入経験豊富な専任のコンシェルジュがチャットボットシステム導入までしっかりサポートいたしますので、お気軽にお問い合わせください。"/>
	<meta property="og:image" content="">
	<meta property="og:url" content="https://chat-mado.com/company" />
<?php } else { ?>
	<title>あなたに最適なチャットボットサービスをマッチング｜チャットの窓口</title>

	<meta property="og:title" content="チャットボット探すならチャットの窓口">
	<meta name="description" content="チャットボットの窓口は、数あるチャットボットシステムからご希望の条件にピッタリのチャットボットシステムを無料でご紹介いたします。チャットボットシステムの知識・導入経験豊富な専任のコンシェルジュがチャットボットシステム導入までしっかりサポートいたしますので、お気軽にお問い合わせください。"/>
	<meta property="og:image" content="">
	<meta property="og:url" content="https://chat-mado.com" />
<?php } ?>

	<meta charset="UTF-8">
	<meta property="og:type" content="website" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0" >
	<meta property="og:description" content="チャットボットの窓口は、数あるチャットボットシステムからご希望の条件にピッタリのチャットボットシステムを無料でご紹介いたします。チャットボットシステムの知識・導入経験豊富な専任のコンシェルジュがチャットボットシステム導入までしっかりサポートいたしますので、お気軽にお問い合わせください。"/>
	<meta property="og:site_name" content="チャットの窓口" />

	<link rel="stylesheet" href="public/css/style.css">
	<link rel="shortcut icon" type="image/png" href="public/images/favicon.png"/>
</head>
<body>
	<?php 
		$company = $_POST['company'];
		$person = $_POST['person'];
		$address = $_POST['address'];
		$message = $_POST['message'];
		$formcontent="会社名: $company \n担当名: $person \nメールアドレス: $address \n備考・ご要望: $message";
		$recipient = "josiah.dabuet@gmail.com, itoshun14@gmail.com";
		$subject = "Contact Form";
		$mailheader = "From: admin@cebushun.sakura.ne.jp \r\n";

		if($company && $person && $address) {
			mail($recipient, $subject, $formcontent, $mailheader);
		}
	?>
	<?php 
		if($request == '/company') {
			$header_modifier = 'header--gray';
		}

		include 'partials/header.php';
	?>
	<main>
	<?php
		switch ($request) {
		    case '/company' :
		        require __DIR__ . '/views/company.php';
		        break;
		    default:
	        	require __DIR__ . '/views/index.php';
		        break;
	    }
    ?>
	</main>
	<?php include 'partials/footer.php'; ?>
	<script type="text/javascript" src="public/js/app.js"></script>
</body>
</html>