<?php
/**
 * The header file.
 *
 * Display header section and all other header <head> parts
 *
 * @package Livecast WordPress Theme
 * @subpackage Templates
 * @version 1.0.0
 */ 
?>
<!DOCTYPE html>

<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<link rel="profile" href="//gmpg.org/xfn/11">

<?php if( codeless_get_mod( 'responsive_layout', true ) ): ?>
<!-- Responsive -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php endif; ?>

<?php wp_head(); ?>
</head>

<!-- Body -->
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<?php codeless_hook_viewport_before(); ?>

<div id="viewport" class="<?php echo esc_attr( codeless_extra_classes('viewport') ) ?>" <?php echo codeless_extra_attr('viewport') ?> >

	<?php codeless_hook_wrapper_before(); ?>

	<div id="wrapper" class="<?php echo esc_attr( codeless_extra_classes('wrapper') ) ?>" <?php echo codeless_extra_attr('wrapper') ?> >

		<?php
		
		/**
		 * Functions hooked into codeless_hook_wrapper_begin action
		 *
		 * @hooked codeless_show_header                        - 0
		 */
		codeless_hook_wrapper_begin(); ?>

		<?php codeless_hook_main_before(); ?>

		<main id="main" class="site-main <?php echo esc_attr( codeless_extra_classes('main') ) ?>" <?php echo codeless_extra_attr('main') ?>>

			<?php codeless_hook_main_begin(); ?>