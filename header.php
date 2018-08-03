<?php
/**
 * Created by PhpStorm.
 * User: allanpichardo
 * Date: 8/2/18
 * Time: 4:47 PM
 */
?>
<html lang="en">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="theme-color" content="#000000">
	<?php wp_head(); ?>
	<title>Allan Pichardo</title>
</head>
<body>
<div id="root">
	<div class="App">
		<div class="Header">
			<div class="Header-logo"></div>
			<div class="Header-toggle">
				<button class="ToggleButton"><i class="material-icons md-light">menu</i></button>
			</div>
		</div>
		<div class="Navigation">
		<?php wp_nav_menu( array(
			'theme_location' => 'primary',
			'menu_id'        => 'primary',
			'menu_class' => 'Navigation-menu',
		) ); ?>
		</div>
