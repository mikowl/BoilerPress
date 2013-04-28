<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php bloginfo( 'name' ); ?><?php wp_title( '|' ); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1"><!-- remove if not building a responsive site -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/modernizr.min.js"></script>
    <?php wp_head(); ?>
    <!--[if (gte IE 6)&(lte IE 8)]><script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/vendor/selectivizr.min.js"></script><![endif]-->
</head>
<body <?php body_class(); ?>>

<!--[if lt IE 7]><p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p><![endif]-->