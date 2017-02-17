<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

  <!-- Cloud Typography -->
  <link rel="stylesheet" type="text/css" href="//cloud.typography.com/6973314/6451952/css/fonts.css" />

  <!-- Global -->
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/global.css"/>

  <title>Tim Smith’s Microblog</title>
  <?php wp_head(); ?>
</head>

<header class="header" role="banner">
  <figure class="avatar">
    <img src="<?php bloginfo('template_url'); ?>/images/tim-smith-avatar.jpg" alt="Tim Smith">
  </figure>
  <h1 class="site__name">Timothy B. Smith</h1>
  <h2 class="site__bio">Designer &amp; Developer. Writer of <a href="https://theboldreport.net">The Bold Report</a>. Design Mentor at <a href="https://bloc.io">Bloc</a>. In love with Kelly Smith. Chapín/Boricua.</h2>
  <a href="<?php bloginfo('rss2_url'); ?>" class="button button--primary">Subscribe</a>
</header>

<body <?php body_class(); ?>>
