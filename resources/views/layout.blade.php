
<!DOCTYPE html>

<html class="no-js">


<head>

	










    <title>Home page | BigShop</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Fav icon -->
    <link rel="shortcut icon" href="/img/favicon.ico">

    <!-- Font -->
    <link href='https://fonts.googleapis.com/css?family=Lato:400,400italic,900,700,700italic,300' rel='stylesheet'
        type='text/css'>
    <link
        href='http://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700%7CDancing+Script%7CMontserrat:400,700%7CMerriweather:400,300italic%7CLato:400,700,900'
        rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Cantata+One' rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700,600' rel='stylesheet'
        type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Ubuntu:400,300,500,700' rel='stylesheet' type='text/css'>
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <link rel="stylesheet" href="/css/bootstrap.min.css">

    <!-- Magnific Popup -->
    <link href="/css/magnific-popup.css" rel="stylesheet">

    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/css/skin-lblue.css">

    <link rel="stylesheet" href="/css/ecommerce.css">

    <!-- Owl carousel -->
    <link href="/css/owl.carousel.css" rel="stylesheet">

    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/style.css">
    <link rel="stylesheet" type="text/css" href="/css/revolutionslider_settings.css" media="screen" />

    <link rel="shortcut icon" href="/img/favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Lato:400,400italic,900,700,700italic,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700,600' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Ubuntu:400,300,500,700' rel='stylesheet' type='text/css'>
	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/bootstrap-override.css">
	<link rel="stylesheet" href="/css/skin-lblue.css">

	<link rel="stylesheet" href="/css/font-awesome.min.css">
	<link rel="stylesheet" href="/css/normalize.css">
	<link rel="stylesheet" href="/css/owl.carousel.css">
	<link rel="stylesheet" href="/css/main.css">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="/css/responsive.css">
	<script src="/js/vendor/modernizr-2.6.2.min.js"></script>

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</head>

<body class="style-14 index-2">
	{{-- <section class="loading-overlay">
		<div class="Loading-Page">
			<h1 class="loader">Loading...</h1>
		</div>
	</section> --}}

    <header>

        <!-- Header One Starts -->
        <div class="header-1">

            @include('/home/_header')

            @include('/home/_navigation')

        </div>
    </header>

    @yield('content')

    @yield('login')

    @yield('register')

    @yield('category')







    <script src="http://unpkg.com/turbolinks"></script>
    <!-- All script -->
    <script src="/js/vendor/jquery-1.10.2.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/smoothscroll.js"></script>
    <!-- Scroll up js
    ============================================ -->
    <script src="/js/jquery.scrollUp.js"></script>
    <script src="/js/menu.js"></script>
    <!-- new collection section script -->
    <script src="/js/swiper/idangerous.swiper.min.js"></script>
    <script src="/js/swiper/swiper.custom.js"></script>


    <script src="/js/pluginse209.js?v=1.0.0"></script>

    <!-- Magnific Popup -->
    <script src="/js/jquery.magnific-popup.min.js"></script>

    <script src="/js/jquery.countdown.min.js"></script>

    <!-- SLIDER REVOLUTION SCRIPTS  -->
    <script type="text/javascript" src="/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
    <script type="text/javascript" src="/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <!-- Owl carousel -->
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/main.js"></script>

    <script type="text/javascript">
        /* ************ */
        /* Owl Carousel */
        /* ************ */

        $(document).ready(function() {
            /* Owl carousel */
            $(".owl-carousel").owlCarousel({
                slideSpeed: 500,
                rewindSpeed: 1000,
                mouseDrag: true,
                stopOnHover: true
            });
            /* Own navigation */
            $(".owl-nav-prev").click(function() {
                $(this).parent().next(".owl-carousel").trigger('owl.prev');
            });
            $(".owl-nav-next").click(function() {
                $(this).parent().next(".owl-carousel").trigger('owl.next');
            });
        });


        /* Main Slider */
        $('.tp-banner0').show().revolution({
            dottedOverlay: "none",
            delay: 5000,
            startWithSlide: 0,
            startwidth: 869,
            startheight: 520,
            hideThumbs: 10,
            hideTimerBar: "on",
            thumbWidth: 50,
            thumbHeight: 50,
            thumbAmount: 4,
            navigationType: "bullet",
            navigationArrows: "solo",
            navigationStyle: "round",
            touchenabled: "on",
            onHoverStop: "on",
            swipe_velocity: 0.7,
            swipe_min_touches: 1,
            swipe_max_touches: 1,
            drag_block_vertical: false,
            parallax: "mouse",
            parallaxBgFreeze: "on",
            parallaxLevels: [7, 4, 3, 2, 5, 4, 3, 2, 1, 0],
            keyboardNavigation: "off",
            navigationHAlign: "right",
            navigationVAlign: "bottom",
            navigationHOffset: 30,
            navigationVOffset: 30,
            soloArrowLeftHalign: "left",
            soloArrowLeftValign: "center",
            soloArrowLeftHOffset: 50,
            soloArrowLeftVOffset: 8,
            soloArrowRightHalign: "right",
            soloArrowRightValign: "center",
            soloArrowRightHOffset: 50,
            soloArrowRightVOffset: 8,
            shadow: 0,
            fullWidth: "on",
            fullScreen: "off",
            spinner: "spinner4",
            stopLoop: "on",
            stopAfterLoops: -1,
            stopAtSlide: -1,
            shuffle: "off",
            autoHeight: "off",
            forceFullWidth: "off",
            hideThumbsOnMobile: "off",
            hideNavDelayOnMobile: 1500,
            hideBulletsOnMobile: "off",
            hideArrowsOnMobile: "off",
            hideThumbsUnderResolution: 0,
            hideSliderAtLimit: 0,
            hideCaptionAtLimit: 500,
            hideAllCaptionAtLilmit: 500,
            videoJsPath: "rs-plugin/videojs/",
            fullScreenOffsetContainer: ""
        });

    </script>

<!-- All Script -->
<script src="/js/vendor/jquery-1.10.2.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/smoothscroll.js"></script>
<!-- Scroll up js
============================================ -->
<script src="/js/jquery.scrollUp.js"></script>
<script src="/js/menu.js"></script>


<script src="/js/flexslider/jquery.flexslider-min.js"></script>
<script src="/js/image-lightbox/imagelightbox.js"></script>


<script src="/js/owl.carousel.min.js"></script>
<script src="/js/main.js"></script>






<script type="text/javascript">
	/*-----------------------------------------------------------------------------------*/
	/* Flex Slider
	 /*-----------------------------------------------------------------------------------*/
	if (jQuery().flexslider) {

		// Product Page Flex Slider
		$('.product-slider').flexslider({
			animation: "slide",
			animationLoop: false,
			slideshow: false,
			prevText: '<i class="fa fa-angle-left"></i>',
			nextText: '<i class="fa fa-angle-right"></i>',
			animationSpeed: 250,
			controlNav: "thumbnails"
		});

	}


	/*-----------------------------------------------------------------------------------*/
	/* Product Carousel
	 /*-----------------------------------------------------------------------------------*/
	if (jQuery().owlCarousel) {
		var productCarousel = $("#product-carousel");
		productCarousel.owlCarousel({
			loop: true,
			dots: false,
			responsive: {
				0: {
					items: 1
				},
				480: {
					items: 2
				},
				900: {
					items: 3
				},
				1100: {
					items: 4
				}
			}
		});

		// Custom Navigation Events
		$(".product-control-nav .next").on("click", function() {
			productCarousel.trigger('next.owl.carousel');
		});

		$(".product-control-nav .prev").on("click", function() {
			productCarousel.trigger('prev.owl.carousel');
		});
	}



	/*-----------------------------------------------------------------------------------*/
	/* Tabs
	 /*-----------------------------------------------------------------------------------*/
	$(function() {
		var $tabsNav = $('.tabs-nav'),
				$tabsNavLis = $tabsNav.children('li');

		$tabsNav.each(function() {
			var $this = $(this);
			$this.next().children('.tab-content').stop(true, true).hide()
					.first().show();
			$this.children('li').first().addClass('active').stop(true, true).show();
		});

		$tabsNavLis.on('click', function(e) {
			var $this = $(this);
			$this.siblings().removeClass('active').end()
					.addClass('active');
			var idx = $this.parent().children().index($this);
			$this.parent().next().children('.tab-content').stop(true, true).hide().eq(idx).fadeIn();
			e.preventDefault();
		});

	});


	/*-----------------------------------------------------------------------------------*/
	/*	Tabs Widget
	 /*-----------------------------------------------------------------------------------*/
	$('.footer .tabbed .tabs li:first-child, .tabbed .tabs li:first-child').addClass('current');
	$('.footer .block:first, .tabbed .block:first').addClass('current');


	$('.tabbed .tabs li').on("click", function() {
		var $this = $(this);
		var tabNumber = $this.index();

		/* remove current class from other tabs and assign to this one */
		$this.siblings('li').removeClass('current');
		$this.addClass('current');

		/* remove current class from current block and assign to related one */
		$this.parent('ul').siblings('.block').removeClass('current');
		$this.closest('.tabbed').children('.block:eq(' + tabNumber + ')').addClass('current');
	});



	/*-----------------------------------------------------------------------------------*/
	/*	Image Lightbox
	 /*  http://osvaldas.info/image-lightbox-responsive-touch-friendly
	 /*-----------------------------------------------------------------------------------*/
	if (jQuery().imageLightbox) {

		// ACTIVITY INDICATOR

		var activityIndicatorOn = function() {
					$('<div id="imagelightbox-loading"><div></div></div>').appendTo('body');
				},
				activityIndicatorOff = function() {
					$('#imagelightbox-loading').remove();
				},


		// OVERLAY

				overlayOn = function() {
					$('<div id="imagelightbox-overlay"></div>').appendTo('body');
				},
				overlayOff = function() {
					$('#imagelightbox-overlay').remove();
				},


		// CLOSE BUTTON

				closeButtonOn = function(instance) {
					$('<button type="button" id="imagelightbox-close" title="Close"></button>').appendTo('body').on('click touchend', function() {
						$(this).remove();
						instance.quitImageLightbox();
						return false;
					});
				},
				closeButtonOff = function() {
					$('#imagelightbox-close').remove();
				},

		// ARROWS

				arrowsOn = function(instance, selector) {
					var $arrows = $('<button type="button" class="imagelightbox-arrow imagelightbox-arrow-left"></button><button type="button" class="imagelightbox-arrow imagelightbox-arrow-right"></button>');

					$arrows.appendTo('body');

					$arrows.on('click touchend', function(e) {
						e.preventDefault();

						var $this = $(this),
								$target = $(selector + '[href="' + $('#imagelightbox').attr('src') + '"]'),
								index = $target.index(selector);

						if ($this.hasClass('imagelightbox-arrow-left')) {
							index = index - 1;
							if (!$(selector).eq(index).length)
								index = $(selector).length;
						} else {
							index = index + 1;
							if (!$(selector).eq(index).length)
								index = 0;
						}

						instance.switchImageLightbox(index);
						return false;
					});
				},
				arrowsOff = function() {
					$('.imagelightbox-arrow').remove();
				};

		// Lightbox for individual image
		var lightboxInstance = $('a[data-imagelightbox="lightbox"]').imageLightbox({
			onStart: function() {
				overlayOn();
				closeButtonOn(lightboxInstance);
			},
			onEnd: function() {
				closeButtonOff();
				overlayOff();
				activityIndicatorOff();
			},
			onLoadStart: function() {
				activityIndicatorOn();
			},
			onLoadEnd: function() {
				activityIndicatorOff();
			}
		});

		// Lightbox for product gallery
		var gallerySelector = 'a[data-imagelightbox="gallery"]';
		var galleryInstance = $(gallerySelector).imageLightbox({
			quitOnDocClick: false,
			onStart: function() {
				overlayOn();
				closeButtonOn(galleryInstance);
				arrowsOn(galleryInstance, gallerySelector);
			},
			onEnd: function() {
				overlayOff();
				closeButtonOff();
				arrowsOff();
				activityIndicatorOff();
			},
			onLoadStart: function() {
				activityIndicatorOn();
			},
			onLoadEnd: function() {
				activityIndicatorOff();
				$('.imagelightbox-arrow').css('display', 'block');
			}
		});

	}



</script>
</body>


</html>
