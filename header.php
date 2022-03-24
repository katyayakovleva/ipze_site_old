<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package IPZE
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="style/header.css" rel="stylesheet" type="text/css">
    <link href="style/footer.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page">
	
	<header>
  		<div class="container">
    		<div class="row">
      			<div class="col-3">
					<a href="<?php echo home_url(); ?>">
						<img class="logo_img" src="<?php bloginfo('template_url'); ?>/assets/img/logo.png" alt='logo'>
					</a>
      			</div>
      			<div class="col-9">
        			<div class="head_lang">
            			<div class="line head_txt">UA</div>
            			<div class="line head_txt"> | </div>
            			<div class="line head_txt">EN</div>
        			</div>
        			
					<nav id="site-navigation" class=" main-navigation">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'ipze' ); ?></button>
							<?php
								wp_nav_menu(
									array(
										'theme_location' => 'main-menu',
										'menu_id'        => 'primary-menu',
										'depth'          => '3'
										)
								);
							?>
					</nav><!-- #site-navigation -->
       			
					<img class="line search_img" src="<?php bloginfo('template_url'); ?>/assets/img/bi_search.svg">

        			<div class="social_media">
          				<img class="line social_img facebook_img" src="<?php bloginfo('template_url'); ?>/assets/img/facebook.svg">
						<img class="line social_img instagram_img" src="<?php bloginfo('template_url'); ?>/assets/img/instagram.svg">
						<img class="line social_img telegram_img" src="<?php bloginfo('template_url'); ?>/assets/img/telegram.svg">
					</div>
      			</div>
    		</div>
  		</div>
	</header>
