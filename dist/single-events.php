<?php get_header(); ?>

<main role="main">

	<?php if(have_posts()) :
		while(have_posts()) : the_post(); 

		// for map
		$lat = get_field('latitude');
		$lon = get_field('longitude');

		// textual & image fields
		$date = get_field('date');
		$loc = get_field('location');
		$time = get_field('time');
		$reg = get_field('register');

		?>

	<section class="waypoint">
			<div class="jumbo jumbo-contact">
	 			<div id="map_canvas"></div>
	 		</div>
	</section>
	<section class="shared event-info">
		<h2 class="cs-header-2"><?php the_title(); ?></h2>
		<div class="event-info-left">
			<?php the_content(); ?>
		</div>
		<div class="event-info-right">
			<article>
				<h3 class="cs-header-2">Start Date</h2>
				<p class="time"><?php echo $date; ?></p>
			</article>
			<article>
				<h3 class="cs-header-2">Location</h2>
				<p class="location"><?php echo $loc; ?></p>
			</article>
			<article>
				<h3 class="cs-header-2">Time</h2>
				<p class="time"><?php echo $time; ?></p>
			</article>
		</div>
	</section>
	<section class="tiles-about">
		<div class="row third box-content">
				<div class="content">
					<h2>Register Now</h2>
					<a class="read-mores" target="_blank" href="<?php echo $reg; ?>">Register Now</a>
				</div>
				<div class="image" id="kid1"></div>
			</div>
			<div class="row third box-content kid3box">
				<div class="image" id="kid3"></div>
				<div class="content">
					<h2>Photos</h2>
					<a href="javascript:;" class="read-mores galleryOpen">View Photos</a>
				</div>
			</div>
	</section>
	<section class="shared sponsors">
		<h2 class="cs-header-2">Sponsors</h2>
		<?php 
		if(have_rows('sponsors')) :
			while(have_rows('sponsors')) : the_row();

				$logo = get_sub_field('logo');
				$link = get_sub_field('link');
		?>
				<div class="sponsor">
					<a target="_blank" href="<?php echo $link; ?>">
						<?php echo wp_get_attachment_image($logo, 'full'); ?>
					</a>
				</div>

		<?php endwhile; endif; ?>

		
	</section>


<!-- Google Maps JS - don't touch -->
<script src="https://maps.googleapis.com/maps/api/js"></script>
<script>
  var bittersMap = (function () {

  	var lat = <?php echo json_encode($lat); ?>;
  	var lon = <?php echo json_encode($lon); ?>;


    var myLatlng = new google.maps.LatLng(lat, lon),
        mapCenter = new google.maps.LatLng(lat, lon),
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

<!-- photo gallery -->
<script>
	$(".galleryOpen").click(function(e){
		$.fancybox([
			<?php if(have_rows('photos')) : while(have_rows('photos')) : the_row();
				$img = get_sub_field('image'); ?>
				{
					href: <?php echo json_encode($img); ?>,
				},
				<?php endwhile; endif; ?>
			]);
	});
</script>

<?php endwhile; endif; wp_reset_postdata(); ?>