<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Strong_AF
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'strong-af' ); ?></a>
	<header id="masthead" class="site-header" role="banner">
		<?php if ( dynamic_sidebar('top') ) : else : endif; ?>
		<div class="site-branding">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<div id="yggdrasil" class="animate fadeInLeft one">
				<div class="yggdrasil">
				 <svg xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" stroke-miterlimit="1.414" viewBox="0 0 2000 2000" clip-rule="evenodd" stroke-linejoin="round">
  <g id="Yggdrasil">
    <path id="Tree" fill="#fff" fill-rule="nonzero" d="M1518.904 621.404l-162.78 100.546 160.217 61.945-45.42 23.076-188.27-44.43-207.64 123.2.85 26.63 257.92 4.13 408.02-159.36V800l-254.5 115.35 254.498.85v57.253l-575.494 76.763 77.9 115.926-42.437 24.922-118.77-69.5 11.4 332.398 57.105 53.546h309.464l-73.62 42.584h-95.42l31.187 33.32 2.286 2.564-30.2 17.374-18.94-20.225-30.904-33.033h-56.39l27.766 32.612 37.6 44.143-41.445 23.925-58.96-68.497-27.767-32.183h-33.61l22.93 32.043 10.68 14.803v103.967l-54.406 31.474-.28.14v-117.21l-24.5-33.61-22.93-31.62h-47.57l-22.5 31.04-24.927 34.18v117.2l-54.69-31.62v-103.96l11.683-16.238 21.94-30.61h-33.63l-26.2 30.33-60.666 70.35-41.3-23.924 39.732-46.855 25.498-29.9h-56.26l-27.774 29.62-22.07 23.496-28.203-16.09 6.555-7.697 24.92-29.33H613.3l-73.762-42.58H849l57.108-53.544 11.25-332.4-118.77 69.505-42.43-24.92 78.04-115.93-575.64-76.76V916.2l254.64-.85-254.64-115.357V757.13l408.02 159.36 257.91-4.13.85-26.63-207.5-123.194-188.42 44.434-45.293-23.075 160.22-61.945-162.92-100.546L258.54 652.59v-36.6l164.773-42.866-138.137-99.402 36.882-21.362L930.31 741.887l2.13-63.806-367.56-182.71-83.026-135.29 35.6-20.5 95.7 118.35V284.32l31.466-18.237 28.062 199.668 263.75 94.14 1.425-41.02L702.44 232.76l31.476-18.084 208.208 178.58 2.134-64.655L790.88 181.63l29.052-16.807 127.323 76.91 5.263-153.388L999.94 61.15l.29-.148.43.29 47.28 27.06 5.13 153.382 127.32-76.91 29.05 16.805-153.383 146.97 2.284 64.65 208.2-178.58 31.48 18.08-235.41 286.11 1.29 41.02 263.75-94.14 28.2-199.67 31.48 18.234v173.6l95.56-118.346 35.6 20.505-82.89 135.295-367.57 182.72 2.135 63.81 608.253-289.53 36.88 21.36-138.283 99.4 164.774 42.866v36.6l-222.87-31.18z"/>
    <g id="Leaves" fill="#fff" fill-rule="nonzero">
      <path id="Leaf" d="M1222.825 1071.78l41.58 41.396h58.722l-42.985-41.397h-57.317z"/>
      <path id="Leaf1" d="M1688.187 1016.302l41.306 31.425-52.43 9.825-28.525-33.097 39.65-8.153z"/>
      <path id="Leaf2" d="M1683.72 858.698l37.535 15.288-37.535 18.075-28.237-19.15 28.237-14.2z"/>
      <path id="Leaf3" d="M1695.483 688.334l40.49 18.104-40.49 25.87-61.186-21.987 61.186-21.98z"/>
      <path id="Leaf4" d="M1441.56 697.878l33.166 14.83-33.363 15.724-33.14-14.705 33.337-15.85z"/>
      <path id="Leaf5" d="M1199.076 849.393l45.96 20.555-46.24 21.783-45.914-20.37 46.194-21.96z"/>
      <path id="Leaf6" d="M1542.95 426.497l44.97-19.55-14.704 47.555-44.81 19.642 14.543-47.647z"/>
      <path id="Leaf7" d="M1160.298 450.513l44.39-16.96-16.32 45.394-44.236 17.043 16.166-45.477z"/>
      <path id="Leaf8" d="M1411.54 343.618l23.397-27.795 5.913 36.41-23.258 27.796-6.053-36.42z"/>
      <path id="Leaf9" d="M1296.89 288.815l25.555-25.828 2.97 36.77-25.42 25.834-3.104-36.77z"/>
      <path id="Leaf10" d="M1078.887 151.76l27.036-19.84-2.62 33.947-26.916 19.866 2.5-33.974z"/>
      <path id="Leaf11" d="M1698.222 531.257l43.63 19.508-43.897 20.68-43.58-19.34 43.847-20.848z"/>
      <path id="Leaf12" d="M777.57 1071.78l-41.58 41.396h-58.722l42.985-41.397h57.316z"/>
      <path id="Leaf13" d="M312.208 1016.302l-41.306 31.425 52.43 9.825 28.525-33.097-39.65-8.153z"/>
      <path id="Leaf14" d="M316.674 858.698l-37.534 15.288 37.534 18.075 28.238-19.15-28.238-14.2z"/>
      <path id="Leaf15" d="M304.912 688.334l-40.49 18.104 40.49 25.87 61.186-21.987-61.186-21.98z"/>
      <path id="Leaf16" d="M558.835 697.878l-33.167 14.83 33.37 15.724 33.133-14.705-33.33-15.85z"/>
      <path id="Leaf17" d="M801.312 849.393l-45.96 20.555 46.24 21.783 45.914-20.37-46.194-21.96z"/>
      <path id="Leaf18" d="M457.446 426.497l-44.972-19.55L427.18 454.5l44.81 19.642-14.544-47.647z"/>
      <path id="Leaf19" d="M840.09 450.513l-44.39-16.96 16.32 45.394 44.236 17.043-16.166-45.477z"/>
      <path id="Leaf20" d="M588.856 343.618l-23.4-27.795-5.91 36.41 23.264 27.796 6.046-36.42z"/>
      <path id="Leaf21" d="M703.497 288.815l-25.555-25.828-2.97 36.77 25.42 25.834 3.105-36.77z"/>
      <path id="Leaf22" d="M921.508 151.76l-27.043-19.84 2.62 33.947 26.923 19.866-2.5-33.974z"/>
      <path id="Leaf23" d="M302.166 531.257l-43.63 19.508 43.897 20.68 43.58-19.34-43.847-20.848z"/>
    </g>
  </g>
</svg>
</div><span class="site-title"><?php bloginfo( 'name' ); ?></a><span class="issn">ISSN No. 2574-5530</span></span></div>
				<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'strong-af' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'menu' ) ); ?>
		</nav><!-- #site-navigation -->
		</div><!-- .site-branding -->
	</header><!-- #masthead -->
	<div id="content" class="site-content">
