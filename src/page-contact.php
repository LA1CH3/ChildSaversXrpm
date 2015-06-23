<?php


/* Template Name: Contact */



 ?>

<?php get_header(); ?>

<main role="main">

	<section class="waypoint">
			<div class="jumbo jumbo-contact">
	 			<div id="map_canvas"></div>
	 		</div>
	</section>

	<section class="shared contact-details">
		<h2 class="cs-header-2">Contact Details</h2>
		<address>
			ChildSavers<br>
			200 North 22nd Street<br>
			Richmond, VA 23233
		</address>
		<p>
			(804)644-9590<br>
			info@childsavers.org
		</p>
	</section>
	<section class="shared contact-form">
		<h2 class="cs-header-2">Contact Us</h2>
		<?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true"]'); ?>
		
	</section>








<!-- Google Maps JS - don't touch -->
<script src="https://maps.googleapis.com/maps/api/js"></script>
<script>
  var bittersMap = (function () {
    var myLatlng = new google.maps.LatLng(37.532809, -77.422352),
        mapCenter = new google.maps.LatLng(37.532809, -77.422352),
        mapCanvas = document.getElementById('map_canvas'),
        mapOptions = {
          center: mapCenter,
          zoom: 15,
          scrollwheel: false,
          draggable: true,
          disableDefaultUI: true,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        },
        map = new google.maps.Map(mapCanvas, mapOptions),
        contentString =
          '<div id="content">'+
          '<div id="siteNotice">'+
          '</div>'+
          '<h1 id="firstHeading" class="firstHeading">thoughtbot</h1>'+
          '<div id="bodyContent"'+
          '<p>Sveavägen 98</p>'+
          '</div>'+
          '</div>',
        infowindow = new google.maps.InfoWindow({
          content: contentString,
          maxWidth: 300
        }),
        marker = new google.maps.Marker({
          position: myLatlng,
          map: map,
          title: 'thoughtbot (Sweden)'
        });

    return {
      init: function () {
        map.set('styles', [
    {
        "featureType": "all",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#f05a66"
            }
        ]
    },
    {
        "featureType": "all",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "gamma": 0.01
            },
            {
                "lightness": 20
            }
        ]
    },
    {
        "featureType": "all",
        "elementType": "labels.text.stroke",
        "stylers": [
            {
                "saturation": -31
            },
            {
                "lightness": -33
            },
            {
                "weight": 2
            },
            {
                "gamma": 0.8
            }
        ]
    },
    {
        "featureType": "all",
        "elementType": "labels.icon",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "landscape",
        "elementType": "geometry",
        "stylers": [
            {
                "lightness": 30
            },
            {
                "saturation": 30
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "geometry",
        "stylers": [
            {
                "saturation": 20
            }
        ]
    },
    {
        "featureType": "poi.park",
        "elementType": "geometry",
        "stylers": [
            {
                "lightness": 20
            },
            {
                "saturation": -20
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "geometry",
        "stylers": [
            {
                "lightness": 10
            },
            {
                "saturation": -30
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "geometry.stroke",
        "stylers": [
            {
                "saturation": 25
            },
            {
                "lightness": 25
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "all",
        "stylers": [
            {
                "lightness": -20
            }
        ]
    }
]);

        google.maps.event.addListener(marker, 'click', function () {
          infowindow.open(map,marker);
        });
      }
    };
  }());

  bittersMap.init();
</script>
</main>

<?php get_footer(); ?>