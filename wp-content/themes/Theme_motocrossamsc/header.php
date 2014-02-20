 <!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/js/jquery.bxslider/jquery.bxslider.css">
        <link rel="stylesheet" type='text/javascript' href="<?php echo get_template_directory_uri(); ?>/css/mooflow.css">
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/source/jquery.fancybox.css?v=2.1.5" media="screen" />
        
    </head>
    <body <?php body_class(); ?> rel="<?php echo get_template_directory_uri(); ?>" >
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        <div class="header">
            <div class="wrapper">
                <div class="header_log">
                    <span class="log_right_header"></span>
                </div>
                <span class="log_left_header"></span>
                <div class="menu_header">
                <?php
                        wp_nav_menu(array('theme_location' => 'primary', 'container' => false, 'items_wrap' => '<ul class="no-padding">%3$s</ul>')); 
                ?>
                    <!--<ul>
                        <li><a href="#">AMSC</a></li>
                        <li><a href="#">NOTICIAS</a></li>
                        <li><a href="#">CALENDARIO DE EVENTOS</a></li>
                        <li><a href="#">REGLAMENTO</a></li>
                        <li><a href="#">RANKING</a></li>
                        <li><a href="#">PLANILLAS</a></li>
                        <li><a href="#">IMAGENES</a></li>
                        <li><a href="#">CONTACTOS</a></li>
                    </ul>-->    
                </div>
            </div>
            <span class="log_franj_line"></span>
        </div>
        <div class="body_content">