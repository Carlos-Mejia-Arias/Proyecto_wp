<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="site-header">


<div class="site-branding">

		<?php if ( has_custom_logo() ): ?>	
			<div class="site-logo">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<img src="<?php echo esc_url( benowu_get_logo_url() ); ?>">
				</a>
			</div>
		<?php endif; ?>

		<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
		<p class="site-description"><?php bloginfo( 'description' ); ?></p>
	</div>

	<div class="navigation-main-menu">
		<div class="navigation-wrap">

			<nav id="site-navigation" class="main-navigation" role="navigation">
				<?php if ( has_nav_menu( 'main-menu' ) ): ?>
					<?php
					wp_nav_menu(
						[
							'theme_location' => 'main-menu',
							'menu_id'        => 'main-menu',
						]
					);
					?>
				<?php endif; ?>
				<?php if ( has_nav_menu( 'mobile-menu' ) ): ?>
					<?php
					wp_nav_menu(
						[
							'theme_location' => 'mobile-menu',
							'menu_id'        => 'mobile-menu',
						]
					);
					?>
				<?php endif; ?>
			
		</div>
	</div>

</header>

<div id="content" class="row">