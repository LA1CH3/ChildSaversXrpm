(function( root, $, undefined ) {
	"use strict";

	$(function () {

		// cache selectors here as properties of cache object
		// example: $cache.headingOnes = $("h1");
		var $cache = {};
		$cache.mobileShow = $(".nav-mobile-show");
		$cache.mobileExit = $(".nav-mobile-exit");
		$cache.mobileOverlay = $(".nav-mobile");
		$cache.scrollButton = $(".scroll-down");
		$cache.valueSlider = $(".values-slider");
		$cache.waypoint = $(".waypoint");
		$cache.ajaxButton = $("#load-more");
		$cache.memberTrigger = $(".staff-type h2");
		$cache.contactRadio = $(".contact #field_1_5 ul li input");
		$cache.desktopnavItem = $(".nav-desktop .menu-item");
		$cache.scrollJumbo = $(".jumbo .scroll-jumbo");
		$cache.searchOverlay = $('.search-overlay');
		$cache.searchTrigger = $('.menu-item-170');
		$cache.searchExit = $('.cs-search-exit');

		// Init any jquery plugins here
		// example: $(".slider").slick({....});

		// nav background on scroll - waypoints.js
		var waypoints = $cache.waypoint.waypoint({
			handler: function(direction){
				$(".header").toggleClass("white");
			},
			offset: '-10px'
		});

		// window scrolling - jquery.scrollTo
		$cache.scrollButton.click(function(e){
			e.preventDefault();
			$.scrollTo($("#tiles"), {
				duration: 800,
				offset: -115
			});
		});

		$cache.scrollJumbo.click(function(e){
			e.preventDefault() ;
			$.scrollTo($("section[data-scroll]"), {
				duration: 800,
				offset: -100
			});
		});

		// slider init - slick.js
		$cache.valueSlider.slick({
			infinite: true,
			slidesToShow: 3,
			slidesToScroll: 3,
			dots: true,
			arrows: true,
			adaptiveHeight: true,
			responsive: [
			    {
			      breakpoint: 1024,
			      settings: {
			        slidesToShow: 3,
			        slidesToScroll: 3,
			        infinite: true,
			        dots: true
			      }
			    },
			    {
			      breakpoint: 1024,
			      settings: {
			        slidesToShow: 2,
			        slidesToScroll: 2
			      }
			    },
			    {
			      breakpoint: 480,
			      settings: {
			        slidesToShow: 1,
			        slidesToScroll: 1
			      }
			  }
			]
		});




		// Any custom functions can go here
		// example myFunc(a,b){ ... }

		function clickAppear($trigger, $item){
			$trigger.click(function(e){
				e.preventDefault();
				$item.fadeToggle();
			});
		}

		function hoverAppear($trigger){
			$trigger.hover(
				function(e){
					var $item = $(this).children(".sub-menu");
					var $nestedMenu = $item.find(".sub-menu");
					$item.stop().slideDown();
					$nestedMenu.hide();
				}, function(e){
					var $item = $(this).children(".sub-menu");
					$item.stop().slideUp();
				} );
		}

		clickAppear($cache.mobileExit, $cache.mobileOverlay);
		clickAppear($cache.mobileShow, $cache.mobileOverlay);
		clickAppear($cache.searchTrigger, $cache.searchOverlay);
		clickAppear($cache.searchExit, $cache.searchOverlay);


		// debounce that mofo
		hoverAppear($cache.desktopnavItem);

		// running functions dependent on window size
		// handles onload and resize
		function checkWidth() {
	        var windowsize = $(window).width();
	        if (windowsize > 768) {

	        	$(".slick-slider button").html("");
	    $(".slick-prev").html('<img src="http://childsavers.rpmdevserver.com/wp-content/themes/html5blank/src/img/arrow1.png" alt="next">');
	    $(".slick-next").html('<img src="http://childsavers.rpmdevserver.com/wp-content/themes/html5blank/src/img/arrow2.png" alt="previous">');

	            var $kid = $pane.detach();
	            $kid.appendTo(".kid2box");

	            var $kid2 = $pane2.detach();
	            $kid2.prependTo(".kid3box");

	            $cache.oddPosts = $(".blog .box-content:nth-child(odd), .tax-service-type .box-content:nth-child(even), .how-to-help .box-content:nth-child(odd), .events .box-content:nth-child(odd), .our-team .box-content:nth-child(odd), .employment-opportunities .box-content:nth-child(odd), .single-events .box-content:nth-child(odd), .single-services .box-content:nth-child(odd)");

	            $cache.oddPosts.each(function(){
	            	var $image = $(this).find(".image");
	            	var $newimg = $image.detach();
	            	$newimg.appendTo($(this));

	            });
	        }
	        else {
	        	$cache.oddPosts = $(".blog .box-content:nth-child(odd), .tax-service-type .box-content:nth-child(even),.how-to-help .box-content:nth-child(odd), .events .box-content:nth-child(odd), .our-team .box-content:nth-child(odd), .employment-opportunities .box-content:nth-child(odd), .single-events .box-content:nth-child(odd), .single-services .box-content:nth-child(odd)");

	            $cache.oddPosts.each(function(){
	            	var $image = $(this).find(".image");
	            	var $newimg = $image.detach();
	            	$newimg.prependTo($(this));

	            });

	            $(".slick-prev").html("< ");
	    		$(".slick-next").html(" >");

	        	var $kid = $pane.detach();
	        	$kid.prependTo(".kid2box");

	        	var $kid2 = $pane2.detach();
	        	$kid2.appendTo(".kid3box");
	        }
	    }
		var $window = $(window);
	    var $pane = $('#kid2');
	    var $pane2 = $('.about #kid3');

	    // Execute on load
	    checkWidth();
	    // Bind event listener
	    $(window).resize(checkWidth);

	    // run the window width checks after ajax calls as well
	    $.fn.almComplete = function(alm){
	    	checkWidth();
	    	// Bind event listener
	    	$(window).resize(checkWidth);	
	    };

	    ////////// All other needs can go here

	    // removing slick dots inner content - we do it on resize too
	    $(".slick-slider button").html("");
	    $(".slick-prev").html('<img src="http://childsavers.rpmdevserver.com/wp-content/themes/html5blank/src/img/arrow1.png" alt="next">');
	    $(".slick-next").html('<img src="http://childsavers.rpmdevserver.com/wp-content/themes/html5blank/src/img/arrow2.png" alt="previous">');


	    // give class to ajax button for styles
	    $cache.ajaxButton.addClass("read-mores");

	    // our team page
		$cache.memberTrigger.click(function(e){
			e.preventDefault();
			$(this).next().slideToggle();
		});

	    // apply styles to radio button parent for firefox..ugh 
	    $cache.contactRadio.change(function(){
	    	$cache.contactRadio.parent().removeClass("checkBorder");
	    	if(this.checked){
	    		$(this).parent().addClass("checkBorder");
	    	} 
	    });

	    // calendar hack
	    $(".spider_calendar td").each(function(){
	    	var color = $(this).css('border-color');
	    	if(color == "rgb(0, 84, 120)"){
	    		$(this).addClass("pinkBorder");
	    	}
	    });
		
	});

} ( this, jQuery ));