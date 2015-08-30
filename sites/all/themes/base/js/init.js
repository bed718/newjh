Drupal.behaviors.init = {
	attach: function (context, settings) {
		(function ($) {
 			
 			
			// MENU TWEAKS!!!
 			//===================================
 			$('.menu-toggle').once().click(function(){
				$('#header-container #menu').slideToggle(300);
				return false;
			});

 			jQuery('#line-sheet-btn').once().click(function(){
				jQuery('#line-sheet-form').slideToggle(500);
			});

 			// MASONRY!!!
 			//===================================
			var masonry_container = $('.field-name-field-collection-images .field-items');
			
			masonry_container.imagesLoaded(function(){
				var mason = masonry_container.masonry({
				  itemSelector: '.field-item'
				}).masonry();
			});


			$('.field-name-field-product-info-title').once().prepend('<span class="icon-arrow-down" />');
			

			$('.job h2').click(function(event) {
				var parent = $(this).parent();
				$('.more-info', parent).slideToggle(300);
				return false;
			});

			$('.job .info-toggle').click(function(event) {
				var parent = $(this).parent();
				$('.more-info', parent).slideToggle(300);
				return false;
			});
			


			// SKROLR!!!
 			//===================================
			// if($(window).width() > 500){
	 		//		var s = skrollr.init({
	 		// 		forceHeight: false,
	 		// 	});
	 		// }

	 		var topTrigger = $('#back-to-top');

	 		topTrigger.click(function(){
			    $("html, body").animate({ scrollTop: 0 }, 800);
			    return false;
			});

	 		$(window).scroll(function (e) {
	 			var top = $(window).scrollTop();

				if(top > 200){
					topTrigger.addClass('active');
				}else{
					topTrigger.removeClass('active');
				}
	 		});

	 		var front_feed = new Instafeed({
					accessToken: '261510677.467ede5.da369227708543cca194414d9ffbf11b',
					get: 'user',
					target: 'footer-instafeed',
					userId: 261510677,
					limit: '6',
					resolution: 'standard_resolution',
					clientId: '84b8e0f7d72a430c948d42c3a84c3e36'
				});

	 		

	 		$('#footer-instafeed').once('instafeed', function(){
	 			front_feed.run();
	 		});

			


		}(jQuery));
	}	
}


