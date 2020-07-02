<!DOCTYPE html>
<html lang="ja">
<head>

<?php 
	$request = $_SERVER['REQUEST_URI'];
	if($request == '/company') { ?>
	<title>会社概要｜あなたに最適なチャットボットサービスをマッチング｜チャットの窓口</title>

	<meta property="og:title" content="チャットボット探すならチャットの窓口">
	<meta name="description" content="チャットボットの窓口を運営している会社概要をご紹介いたします。チャットボットシステムの導入のことならおまかせください！数あるチャットボットシステムからご希望の条件にピッタリのチャットボットシステムを無料でご紹介いたします。チャットボットシステムの知識・導入経験豊富な専任のコンシェルジュがチャットボットシステム導入までしっかりサポートいたしますので、お気軽にお問い合わせください。"/>
	<meta property="og:url" content="https://chat-mado.com/company" />
<?php } else { ?>
	<title>あなたに最適なチャットボットサービスをマッチング｜チャットの窓口</title>

	<meta property="og:title" content="チャットボット探すならチャットの窓口">
	<meta name="description" content="チャットボットの窓口は、数あるチャットボットシステムからご希望の条件にピッタリのチャットボットシステムを無料でご紹介いたします。チャットボットシステムの知識・導入経験豊富な専任のコンシェルジュがチャットボットシステム導入までしっかりサポートいたしますので、お気軽にお問い合わせください。"/>
	<meta property="og:url" content="https://chat-mado.com/" />
<?php } ?>

	<meta charset="UTF-8">
	<meta property="og:type" content="website" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0" >
	<meta property="og:description" content="チャットボットの窓口は、数あるチャットボットシステムからご希望の条件にピッタリのチャットボットシステムを無料でご紹介いたします。チャットボットシステムの知識・導入経験豊富な専任のコンシェルジュがチャットボットシステム導入までしっかりサポートいたしますので、お気軽にお問い合わせください。"/>
	<meta property="og:site_name" content="チャットの窓口" />
	<meta property="og:image" content="https://chat-mado.com/public/images/ogp.jpg">

	<link rel="stylesheet" href="public/css/style.css">
	<link rel="shortcut icon" type="image/png" href="https://chat-mado.com/public/images/favicon.png"/>
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@500;700&display=swap" rel="stylesheet">

	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-WW88HLF');</script>
	<!-- End Google Tag Manager -->
</head>
<body>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WW88HLF"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	
	<?php include 'partials/mail.php'; ?>
	
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