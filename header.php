<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Abdelhadi
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'abdelhadi' ); ?></a>
      
   


  <!-- top menu header-->
 <div class="announcemment-bar">
   <div class="container">
   <div class="row">
    <div class="col-md-4 ">
	     <?php include get_stylesheet_directory() . './component/sub-header-left.php'; ?>
    </div>
    <div class="col-md-8 d-flex justify-content-end">
	     <?php include get_stylesheet_directory() . './component/sub-header-right.php'; ?>
    </div> 
  </div>
   </div>
 </div>
   <!-- top menu header-->





 <!-- top menu heaser-->



	<header id="masthead" class="site-header">

        <!--second header-->
		<div class="container pt-2 pb-2">
           <div class="row align-items-center">
			 <div class="col site-header__logo d-flex justify-content-center justify-content-md-start py-2">
                 <?php   the_custom_logo(); ?>
			 </div>
			 <div class="col-md-5 search">
			      <?php aws_get_search_form( true ); ?>
			 </div>
			 <div class="col cart d-flex justify-content-center justify-content-md-end ">
			  <a href="<?php echo wc_get_cart_url(); ?>"><i class="bi bi-bag p-2"></i></a>
			 <a class="cart-customlocation" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><?php echo sprintf ( _n( '%d item', '%d items', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?> – <?php echo WC()->cart->get_cart_total(); ?></a>
			 </div>
		   </div>
		</div>
		 <!--second header-->


		




		<nav id="site-navigation" class="main-navigation bg-primary">

		<div class="container d-flex justify-content-center align-items-center">
			<div class="row">
				<div class="col-12 d-flex justify-content-center">
				   
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
						<i class="bi bi-list"></i> 
					   <?php esc_html_e( 'Primary Menu', 'abdelhadi' ); ?>
				    </button> 

				</div>
				<div class="col-12">
				<?php wp_nav_menu(
				array(
					/*'theme_location' => 'menu-1',*/
					'menu_id'        => 'primary-menu',
				)
			);
			?>
				</div>
			</div>
			
		</div>
			
		</nav><!-- #site-navigation -->





	</header><!-- #masthead -->
