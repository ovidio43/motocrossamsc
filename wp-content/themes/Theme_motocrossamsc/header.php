 <?php 
                date_default_timezone_set('UTC');
                require_once(get_template_directory() . '/lib/simplepie.inc');
                require_once(get_template_directory() . '/lib/simplepie_yahoo_weather.inc');

                $code = "BLXX0012"; 
                $path = "http://weather.yahooapis.com/forecastrss?u=c&p=";

                $feed = new SimplePie();
                $feed->set_feed_url($path.$code);
                $feed->set_item_class('SimplePie_Item_YWeather');
                $feed->init();

                function time2minuts($time) {
                    $minuts = 0;
                    $atime = explode(" ", $time);
                    if (strtolower($atime[1]) == "pm") {
                        $minuts = 12*60;
                    }
                    $ttime = explode(":", $atime[0]);
                    $minuts = $minuts + (int)$ttime[0]*60 + (int)$ttime[1];
                    return $minuts;
                }

                $weather = $feed->get_item(0);
                $fore = $weather->get_forecasts();
                $unit = $weather->get_units_temp();
                $ampm = "n";
                $icon = $weather->get_condition_code();
                $curday = 2*60 + time2minuts(date("g:i a"));
                $iniday = time2minuts($weather->get_sunrise());
                $endday = time2minuts($weather->get_sunset());

                if ($curday > $iniday && $curday < $endday ) {
                    $ampm = "d";
                }  

                $date=date("Y-m-d ");
                $date_for = split ("-", $date); 
                $date_formating=$date_for[2]."-".$date_for[1]."-".$date_for[0];
?>

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
                    <div class="time">
                        <div class="temp_date">
                            <div class="cont_temp">            
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/temp_suny.gif" id="img_temp" alt="temp img">
                                    <div id="temp">&nbsp;&nbsp;<?php echo $weather->get_temperature(); ?>&deg;<?php echo $unit; ?></div>   
                            </div><br>
                            <div class="cont_date">
                                Santa Cruz Bolivia<br> <?php echo $date_formating; ?> 
                            </div>          
                        </div>
                        <div class="dispon"> 
                            <?php
                                    $checked = get_field('check_box','option');
                                    if($checked[0]=="Circuito-Disponible"){ ?>
                                       <h6>Circuito DISPONIBLE</h6>
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/enabled.gif" alt="Disponible">
                                   <?php } else{ ?>
                                        <h6> Circuito NO DISPONIBLE</h6>
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/enabled_desactive.jpg" alt="No Disponible">
                                   <?php } 
                            ?>
                        </div>
                     </div>
                </div>
                <span class="log_left_header"></span>
                <div class="menu_header">
                <?php
                        wp_nav_menu(array('theme_location' => 'primary', 'container' => false, 'items_wrap' => '<ul class="no-padding">%3$s</ul>')); 
                ?>
                </div>
            </div>
            <span class="log_franj_line"></span>
        </div>
        <div class="body_content">