<head>
	<meta charset="UTF-8">

	<?php /* CSS and JavaScript */ ?>
	<script><?php global $template;?>const wp_template = "<?php echo basename( $template ); ?>";
		const wp_imgpath = "<?php echo GET_PATH(); ?>";</script>

	<?php //defer : 遅延読み込みの為、headに記述
	 ?>
	<script src="https://cdn.jsdelivr.net/npm/js-cookie@3.0.5/dist/js.cookie.min.js"></script>
	<script src="<?php echo GET_PATH('js'); ?>lib/gsap/gsap.min.js" defer></script>
	<script src="<?php echo GET_PATH('js'); ?>lib/gsap/ScrollTrigger.min.js" defer></script>
	<script src="<?php echo GET_PATH('js'); ?>lib/splide/splide.min.js" defer></script>
	<script src="<?php echo GET_PATH('js'); ?>lib/splide/splide-extension-auto-scroll.min.js" defer></script>
	<script src="<?php echo GET_PATH('js'); ?>bundle.js?v=<?php echo esc_html(date_i18n('Ymd_His'));?>" defer></script>
	<link rel="stylesheet" href="<?php echo GET_PATH('css'); ?>lib/splide/splide.min.css">
	<link rel="stylesheet" href="<?php echo GET_PATH('css'); ?>style.css?v=<?php echo esc_html(date_i18n('Ymd_His')); ?>">
	<?php
		//	コンタクトフォームのみ
		global $reCAPTCHA_site_key;
		if (is_page('contact')||is_page('contact-confirm') ):
	?>
	<script src="https://www.google.com/recaptcha/api.js?render=<?php echo $reCAPTCHA_site_key; ?>" defer></script>
	<?php endif; ?>

	<?php /* Base */ ?>
	<?php wp_head(); ?>
	<?php /*
	// プラグインでSEO記述行う場合は不要
	<meta name="description" content="<?php bloginfo('description'); ?>">
	*/?>


	<?php /* Favicon */ ?>
	<link rel="shortcut icon" href="<?php echo GET_PATH();?>common/favicon/favicon.ico">
    <link rel="apple-touch-icon" href="<?php echo GET_PATH();?>common/favicon/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" type="image/png" href="<?php echo GET_PATH();?>common/favicon/android-touch-icon.png" sizes="192x192">

	<?php /* Font */
	/*
	<!--
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">
		-->
	*/
	 ?>



	<?php /* Other */ ?>
	<link rel="canonical" href="<?php echo get_pagenum_link(1); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="format-detection" content="telephone=no">

	<?php /* noindex */ ?>
	<?php if (is_page('contact-thanks')) : ?>
	<meta name="robots" content="noindex,nofollow">
	<?php endif; ?>

	<!-- preconnect : 事前接続 -->
	<link rel="preconnect" href="https://google-analytics.com">

	<?php
	/*
	<!-- google adsense
	<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8093422876321215"
     crossorigin="anonymous"></script>
-->
	 <!--google search console
	 <meta name="google-site-verification" content="BuoqrzhS3DF5II6XLgiPxHLmX87OHcOo-BEyNLSTWi4" />
	-->*/
	?>


</head>
