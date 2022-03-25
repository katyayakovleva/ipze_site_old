<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package IPZE
 */

?>

	<footer id="colophon" >
		<div class="container foot_cont">
			<div class="row">
				<div class="col-3">
					<img class="logo_img" src="style/logo.png">
				</div>
				<div class="col-9">
					<div class="foot_menu">
						<div class="line foot_txt">Новини</div>
						<div class="line foot_txt">Про кафедру</div>
						<div class="line foot_txt">Вступ</div>
						<div class="line foot_txt">Навчання</div>
						<div class="line foot_txt">Наука</div>
						<div class="line foot_txt">Контакти</div>	
					</div>
					<div class="social_media_foot">
						<img class="line social_img facebook_img" src="style/facebook.svg">
						<img class="line social_img instagram_img" src="style/instagram.svg">
						<img class="line social_img telegram_img" src="style/telegram.svg">
					</div>
				</div>
			</div>
			<hr class="foot_line">
			<div class="foot_txt_dwn">Кафедра ІПЗЕ ТЕФ КПІ ім. Ігоря Сікорського</div>
		</div>
	</footer><!-- #colophon -->
<!-- </div>#page -->

<?php wp_footer(); ?>

</body>
</html>
