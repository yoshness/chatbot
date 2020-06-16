<section class="l-contact" id="js-contact-section">
	<div class="l-container">
		<h2 class="section-title">
			<span class="section-title-en">FORM</span>
			<span class="section-title-ja">無料相談フォーム</span>
		</h2>
		<?php if ($_SERVER['REQUEST_METHOD'] != 'POST') { ?>
		<p class="l-contact__description">下記フォームの必須事項をご入力の上、「無料相談する」ボタンをクリックしてください。</p>
		<?php } ?>
		<form class="contact" action="/?message=sent" method="POST" id="js-contact-form">
			<?php if ($_SERVER['REQUEST_METHOD'] == 'POST') { ?>
				<p class="contact__success" id="js-success-message">無料相談のご依頼ありがとうございます。<br class="u-show-pc">弊社にて内容を確認の上折り返しご連絡いたします。</p>
			<?php } else { ?>
				<ul class="contact__list">
					<li class="contact__item contact__item--required">
						<label for="">会社名</label>
						<input name="company" type="text" placeholder="例）株式会社チャットボットの窓口" class="js-required-input">
					</li>
					<li class="contact__item contact__item--required">
						<label for="">担当名</label>
						<input name="person" type="text" placeholder="例）チャットボット　太郎" class="js-required-input">
					</li>
					<li class="contact__item contact__item--required">
						<label for="">メールアドレス</label>
						<input name="email" type="text" placeholder="例）example@chat-mado.com" class="js-required-input js-email-input">
					</li>
					<li class="contact__item">
						<label for="">備考・ご要望</label>
						<textarea name="message" cols="30" rows="10" placeholder="例）チャットボットの導入を検討しています。導入にあたって知識がないので最適なサービスを教えて欲しいです。"></textarea>
					</li>
				</ul>
				<input type="submit" value="無料相談する" title="Submit form" id="js-submit-form">
			<?php } ?>
		</form>
	</div>
	<div class="l-contact__decors">
		<div class="l-contact__decors-left u-show-pc js-parallax" data-speed="2"></div>
		<div class="l-contact__decors-right js-parallax" data-speed="1.5"></div>
	</div>
</section>