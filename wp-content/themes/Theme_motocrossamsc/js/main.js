jQuery(document).ready(function() {

	var url_raiz=jQuery('body').attr('rel');
	var content_par=jQuery('.table_calendary:odd');
	var content_impar=jQuery('.table_calendary:even');
	jQuery(content_impar).css({"padding-top":"10px" , "padding-bottom":"10px"});
  	jQuery(content_par).css("background-image","url('"+url_raiz+"/img/bgd_calendar.png')");

  	jQuery('#frm_contact input ').on('click', function(e) {
        e.preventDefault();
        jQuery(this).attr("value","");
        jQuery(this).css({"box-sizing":"none"});

    });

	 jQuery( ".cold_content" ).hover(
		 function() {
	  		jQuery(this).parent().siblings().children('.cold_hover').css("display","none");
	  		jQuery(this).siblings('.cold_hover').css("display","block");

	  		var url_raiz=jQuery('body').attr('rel');
	  		jQuery(this).parent().siblings().children('.cold_content').css("background-image","url('"+url_raiz+"/img/bg_tips.gif')");
	  		jQuery(this).css("background-image","url('"+url_raiz+"/img/h_bg_tips.gif')");

	  		var val_hover_original=jQuery(this).siblings('.cold_category').children('a').children('img').attr('alt');
	  		jQuery(this).siblings('.cold_category').children('a').children('img').attr("src", url_raiz+'/img/'+val_hover_original);
	 		
	 		var broderts=jQuery(this).parent().siblings().children('.cold_category').children('a').children('img').attr('rel');
	 		jQuery(this).parent().siblings().children('.cold_category').children('a').children('img').attr("src",url_raiz+'/img/'+broderts);


	 	 }, function() {
	 	 	var url_raiz=jQuery('body').attr('rel');
	  		jQuery(this).siblings('.cold_hover').css("display","none");
	  		jQuery(this).css("background-image","url('"+url_raiz+"/img/bg_tips.gif')");
	  		var val_original=jQuery(this).siblings('.cold_category').children('a').children('img').attr('rel');
	  		jQuery(this).siblings('.cold_category').children('a').children('img').attr("src", url_raiz+'/img/'+val_original);
	 	 }
	 );
	 jQuery( ".cold_category a" ).hover(
		 function(){
	  		jQuery(this).parent().parent().siblings().children('.cold_hover').css("display","none");
	  		jQuery(this).parent().siblings('.cold_hover').css("display","block");
	  		
	  		var url_raiz=jQuery('body').attr('rel');
	  		jQuery(this).parent().parent().siblings().children('.cold_content').css("background-image","url('"+url_raiz+"/img/bg_tips.gif')");
	  		jQuery(this).parent().siblings('.cold_content').css("background-image","url('"+url_raiz+"/img/h_bg_tips.gif')");
	 		
	 		
	 		var val_hover_original=jQuery(this).children('img').attr('alt');
	 		jQuery(this).children('img').attr("src", url_raiz+'/img/'+val_hover_original);
	 		var broderts=jQuery(this).parent().parent().siblings().children('.cold_category').children('a').children('img').attr('rel');
	 		jQuery(this).parent().parent().siblings().children('.cold_category').children('a').children('img').attr("src",url_raiz+'/img/'+broderts);
	 		
	 	 }, function(){
	 	 	var url_raiz=jQuery('body').attr('rel');
	  		jQuery(this).parent().siblings('.cold_hover').css("display","none");
	  		jQuery(this).parent().siblings('.cold_content').css("background-image","url('"+url_raiz+"/img/bg_tips.gif')");
	  		var val_original=jQuery(this).children('img').attr('rel');
	  		jQuery(this).children('img').attr("src", url_raiz+'/img/'+val_original);

	 	 }
	 );

});