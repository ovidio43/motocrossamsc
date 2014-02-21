 </div>
        <div class="footer">
            <span class="log_line_foot"></span>
            <div class="wrapper">
                <div class="menu_foot">
                     <?php
                          wp_nav_menu(array('theme_location' => 'primary', 'container' => false, 'items_wrap' => '<ul class="no-padding">%3$s</ul>')); 
                    ?>
                </div>
                <span class="log_foot"></span>
            </div>
        </div>

        <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/jquery-1.10.1.min.js"></script>
         <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/bootstrap.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.bxslider/jquery.bxslider.min.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/source/jquery.fancybox.js?v=2.1.5"></script>
        <!--<script  src="<?php //echo get_template_directory_uri(); ?>/js/mootools-1.2-core.js"></script>
        <script  src="<?php //echo get_template_directory_uri(); ?>/js/mootools-1.2-more.js"></script>
        <script  src="<?php// echo get_template_directory_uri(); ?>/js/mooflow.js"></script>-->
        <script src="<?php echo get_template_directory_uri(); ?>/js/plugins.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>

        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src='//www.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>
