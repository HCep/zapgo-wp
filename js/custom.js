jQuery(document).ready(function() {
	addShow();
	checkTop();
	jQuery(document).on('scroll', function(){
		
		if (jQuery(document).scrollTop() == 0){
			jQuery('.footer-to-top').css({'opacity':'0'});
		}else{
			jQuery('.footer-to-top').css({'opacity':'1'});
		}
	});
	function checkTop(){
		if (jQuery(document).scrollTop() == 0){
			jQuery('.footer-to-top').css({'opacity':'0'});
		}else{
			jQuery('.footer-to-top').css({'opacity':'1'});
		}
	}
	jQuery('#to-top').on('click', function(){
		jQuery(document).scrollTop(0);
	})

	function addShow(){
		jQuery('#collapse1').addClass('show');
	}
	jQuery('.active-button').on('click', ()=>{
		if(jQuery('.page-overlay').hasClass('undisplayed') || jQuery('.popup-container').hasClass('undisplayed')){
		jQuery('.popup-container').removeClass('undisplayed');
		jQuery('.page-overlay').removeClass('undisplayed');
		}
	})
	jQuery('#close_popup').on('click', ()=>{
		
			jQuery('.popup-container').addClass('undisplayed');
			jQuery('.page-overlay').addClass('undisplayed');
			

	})
	jQuery('#collapse_button').on('click', ()=>{
		if(jQuery('#navbarNavAltMarkup').hasClass('show'))
		{
			jQuery('#navbarNavAltMarkup').removeClass('show');
		}else{
			jQuery('#navbarNavAltMarkup').addClass('show');
		}
		
	})
});