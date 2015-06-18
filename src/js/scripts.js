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
			slidesToScroll: 3,
			dots: true,
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

		clickAppear($cache.mobileExit, $cache.mobileOverlay);
		clickAppear($cache.mobileShow, $cache.mobileOverlay);

		// on blog post pages, we want each post to alternate which side the image is on
		function oddSort(){}

		function checkWidth() {
	        var windowsize = $(window).width();
	        if (windowsize > 768) {
	            var $kid = $pane.detach();
	            $kid.appendTo(".kid2box");

	            var $kid2 = $pane2.detach();
	            $kid2.prependTo(".kid3box");

	            $cache.oddPosts = $(".blog .box-content:nth-child(odd), .services .box-content:nth-child(even), .how-to-help .box-content:nth-child(odd), .events .box-content:nth-child(odd)");

	            $cache.oddPosts.each(function(){
	            	var $image = $(this).find(".image");
	            	var $newimg = $image.detach();
	            	$newimg.appendTo($(this));

	            });
	        }
	        else {
	        	$cache.oddPosts = $(".blog .box-content:nth-child(odd), .services .box-content:nth-child(even),.how-to-help .box-content:nth-child(odd), .events .box-content:nth-child(odd)");

	            $cache.oddPosts.each(function(){
	            	var $image = $(this).find(".image");
	            	var $newimg = $image.detach();
	            	$newimg.prependTo($(this));

	            });

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



	    // All other needs can go here

	    // removing slick dots inner content - we do it on resize too
	    $(".slick-dots button").html("");

	    // give class to ajax button for styles
	    $cache.ajaxButton.addClass("read-mores");

		
	});

} ( this, jQuery ));