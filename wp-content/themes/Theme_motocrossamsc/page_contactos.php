/**
 *Template name: template_contactos
 *
 */
<?php get_header(); ?>
            <div class="body_block_one">
                    <div class="wrapper">
                        <div class="banner-slider">
                            <ul class="slider_">
                                <li>
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/imgbx_one.jpg">
                                </li>
                                <li>
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/imgbx_two.jpg">
                                </li>
                                <li>
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/imgbx_three.jpg">
                                </li>
                                <li>
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/imgbx_for.jpg">
                                </li>
                                <li>
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/imgbx_five.jpg">
                                </li>
                                <li>
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/imgbx_six.jpg">
                                </li>
                                <li>
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/imgbx_seven.jpg">
                                </li>
                                <li>
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/imgbx_eight.jpg">
                                </li>
                                <li>
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/imgbx_nine.jpg">
                                </li>
                                <li>
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/imgbx_ten.jpg">
                                </li>
                            </ul>
                        </div>
                    </div>
            </div>
             <div class="body_block_two">
                  <span class="backgroud_body_two"></span>
                  <div class="wrapper">
                        <h2><img src="<?php echo get_template_directory_uri(); ?>/img/contact.png"></h2>
                        <div class="content_pages">
                             <h1>Dirección</h1>
                            <p>Villa Deportiva Abran Telchi</p>
                            <p>Av. Santa Dumont 4to anillo</p>
                            <p>Tel: 358 – 7829</p>
                            <div id="contact_form"> 
                                    <div id="form_contact">
                                        <form method="post" action="" id="frm_contact">
                                            <input type="text" name="fname" id="fname" class="textfield" value="Nombre"> 
                                            <input type="text" name="fphone" id="fphone" class="textfield" value="Telefono"> 
                                            <input type="text" name="femail" id="femail" class="textfield" value="E-mail"> 
                                            <textarea name="fmensaje" id="fmensaje" rows="10" cols="30" style="resize: none;">Mensaje</textarea>
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/btn_contact.gif" alt="Enviar" id="submit_contact">
                                        </form>
                                    </div>
                                    <div id="map_contact">
                                        <iframe width="579" height="250" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=es&amp;geocode=&amp;q=villa+olimpica,+santa+cruz+bolivia&amp;sll=37.0625,-95.677068&amp;sspn=33.901528,86.044922&amp;ie=UTF8&amp;hq=villa+olimpica,&amp;hnear=Santa+Cruz+de+la+Sierra,+Andr%C3%A9s+Ib%C3%A1%C3%B1ez,+Santa+Cruz,+Bolivia&amp;cid=14119724340441553200&amp;ll=-17.816768,-63.181772&amp;spn=0.020429,0.04961&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>                            </div>                          
                                    </div>
                            </div>
                        </div>
                  </div>
            </div>
<?php get_footer(); ?>
