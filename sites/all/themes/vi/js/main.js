
(function ($) {

  /*EQUAL HEIGHTS FOR ROWS*/
	/*Drupal.behaviors.equalHeight = {
		attach:function(context) {


			function equalHeight(group) {
				var tallest = 0;
				group.each(function() {
					var thisHeight = $(this).height();
					if(thisHeight > tallest) {
						tallest = thisHeight;
					}
				});
				group.height(tallest);
			}
			equalHeight($(".view-display-id-block_1 article"));
			equalHeight($(".view-display-id-block_2 article"));
			equalHeight($(".view-display-id-block_4 article"));


		}
	};*/

	Drupal.behaviors.fixedHeader = {
		attach:function(context) {

			console.log("tseg");

			var headerHeight = $("header").height();
			if( $(".region-header-third").is(":hidden") ){
				$('#section-content').css('padding-top', headerHeight + 'px');
			} else {
			}

			$(window).resize(function(){
				if( $(".region-header-third").is(":hidden") ){
					/*console.log("Not Mobile");*/
					var headerHeight = $("header").height();
					$('#section-content').css('padding-top', headerHeight + 'px');
				} else {
					/*console.log("Mobile");*/
					$('#section-content').css('padding-top', '0px');
				}
			});

			/* MASONRY EFFECT */
			/*
			$(".masonry-item").hover(
        		function() {
        			console.log ("this works");
        			$(this).find("div.views-field-body").show();
        		},
        		function() {
        			console.log ("this works");
        			$(this).find("div.views-field-body").hide();
        		}
    		);
    		*/


		}
	};

}(jQuery));