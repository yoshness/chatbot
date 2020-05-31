<!DOCTYPE html>
<html lang="ja">
<head>
	<title>Chatbot</title>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0" >
	<meta property="og:title" content="Chatbot">
	<meta property="og:type" content="website" />
	<meta property="og:url" content="" />
	<meta name="description" content="description"/>
    <meta property="og:description" content="description"/>
	<meta property="og:image" content="">

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
		$recipient = "josiah.dabuet@gmail.com";
		$subject = "Contact Form";
		$mailheader = "From: admin@cebushun.sakura.ne.jp \r\n";

		if($company && $person && $address) {
			mail($recipient, $subject, $formcontent, $mailheader);
		}
	?>
	<?php 
		$request = $_SERVER['REQUEST_URI'];
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