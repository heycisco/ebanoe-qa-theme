<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="main-header">
<div class="branding">
	<div class="left">
		<picture>
			<source srcset="<?php echo get_template_directory_uri();?>/images/image_main.webp">
			<source srcset="<?php echo get_template_directory_uri();?>/images/image_main_mobile.webp" media="(min-width: 760px)">
			<img src="<?php echo get_template_directory_uri();?>/images/image_main.jpg">
		</picture>
	</div>
	<div class="right">
		<h1 class="logo"><a title="В начало" href="<?php echo get_site_url();?>">ebanoe.QA</a></h1>
		<div class="slogan">
			Компании проебывают миллионы,<br>
			ну а как, если не матом?
		</div>
	</div>
</div>
</header>