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


		// Init any jquery plugins here
		// example: $(".slider").slick({....});

		// nav background on scroll - waypoints.js
		var waypoints = $cache.waypoint.waypoint({
			handler: function(direction){
				$(".header").toggleClass("white");
			}
		});

		// window scrolling - jquery.scrollTo
		$cache.scrollButton.click(function(e){
			e.preventDefault();
			$.scrollTo($("#tiles"), 800);
		});

		// slider init - slick.js
		$cache.valueSlider.slick({
			infinite: true,
			slidesToShow: 3,
			slidesToScroll: 1,
			dots: true,
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
			      breakpoint: 600,
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

		clickAppear($cache.mobileExit, $cache.mobileOverlay);
		clickAppear($cache.mobileShow, $cache.mobileOverlay);

		function checkWidth() {
	        var windowsize = $(window).width();
	        if (windowsize > 768) {
	            var $kid = $pane.detach();
	            $kid.appendTo(".kid2box");
	        }
	        else {
	        	var $kid = $pane.detach();
	        	$kid.prependTo(".kid2box");
	        }
	    }
		var $window = $(window);
	    var $pane = $('#kid2');

	    // Execute on load
	    checkWidth();
	    // Bind event listener
	    $(window).resize(checkWidth);



	    // All other needs can go here

		
	});

} ( this, jQuery ));