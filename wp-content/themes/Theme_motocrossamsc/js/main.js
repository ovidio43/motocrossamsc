jQuery(document).ready(function() {


    var url_raiz = jQuery('body').attr('rel');
    var content_par = jQuery('.table_calendary:odd');
    var content_impar = jQuery('.table_calendary:even');
    jQuery(content_impar).css({"padding-top": "10px", "padding-bottom": "10px"});
    jQuery(content_par).css("background-image", "url('" + url_raiz + "/img/bgd_calendar.png')");

    jQuery('#frm_contact input ').on('click', function(e) {
        e.preventDefault();
        jQuery(this).attr("value", "");
        jQuery(this).css({"box-sizing": "none"});

    });

    jQuery(".cold_content").hover(
            function() {
                var url_raiz = jQuery('body').attr('rel');
                jQuery(this).siblings('.cold_hover').css("display", "block");
                jQuery(this).css("background-image", "url('" + url_raiz + "/img/h_bg_tips.gif')");
                var val_hover_original = jQuery(this).siblings('.cold_category').children('a').children('img').attr('alt');
                jQuery(this).siblings('.cold_category').children('a').children('img').attr("src", url_raiz + '/img/' + val_hover_original);

            }, function() {
        var url_raiz = jQuery('body').attr('rel');
        jQuery(this).siblings('.cold_hover').css("display", "none");
        jQuery(this).css("background-image", "url('" + url_raiz + "/img/bg_tips.gif')");
        var val_hover_original = jQuery(this).siblings('.cold_category').children('a').children('img').attr('rel');
        jQuery(this).siblings('.cold_category').children('a').children('img').attr("src", url_raiz + '/img/' + val_hover_original);
    }
    );

    jQuery(".cold_category a").hover(
            function() {
                var url_raiz = jQuery('body').attr('rel');
                jQuery(this).parent().siblings('.cold_hover').css("display", "block");
                var val_hover_original = jQuery(this).children('img').attr('alt');
                jQuery(this).children('img').attr("src", url_raiz + '/img/' + val_hover_original);
                jQuery(this).parent().siblings('.cold_content').css("background-image", "url('" + url_raiz + "/img/h_bg_tips.gif')");

            }, function() {
        var url_raiz = jQuery('body').attr('rel');
        jQuery(this).parent().siblings('.cold_hover').css("display", "none");
        var val_hover_original = jQuery(this).children('img').attr('rel');
        jQuery(this).children('img').attr("src", url_raiz + '/img/' + val_hover_original);
        jQuery(this).parent().siblings('.cold_content').css("background-image", "url('" + url_raiz + "/img/bg_tips.gif')");

    }
    );

    jQuery('.fancygallery').fancybox();
    jQuery(".fancybox").on("click", function() {
        jQuery.fancybox({
            href: this.href,
            type: jQuery(this).data("type")
        }); // fancybox
        return false
    }); // on

    jQuery('.contet_detail_rankings').on('mouseenter', function() {
        jQuery(this).children('.post_detail_ranking_one').show();
        jQuery(this).siblings().children('.post_detail_ranking_one').hide();
    });

    jQuery('.content_pages , .post_ranking').hover(function() {    
        jQuery('.post_detail_ranking_one').hide();
    });


    /*jQuery( ".post_detail_ranking_one" ).hover(
     function(){
     jQuery(this).css("display","block");
     },
     function(){
     jQuery(this).css("display","none");
     //jQuery(this).parent().siblings('.post_detail_ranking_one').css("display","none");
     }
     );*/
    /* post_detail_ranking*/
    //jQuery('.fancybox').fancybox();

    /* myMooFlowPage = {   
     start: function(){
     var mf = new MooFlow(jQuery('mooFlow'), {
     useSlider: false,
     useAutoPlay: true,
     useCaption: true,
     useResize: true,
     useKeyInput: true
     }); 
     mf.play();  
     }
     };
     window.addEvent('domready', myMooFlowPage.start);*/

});