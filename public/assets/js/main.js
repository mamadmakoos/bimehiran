(function($) {
	"use strict";
	jQuery(document).on('ready', function() {
		$(window).on('scroll', function() {
			if ($(this).scrollTop() > 120) {
				$('.navbar-area').addClass("is-sticky");
			} else {
				$('.navbar-area').removeClass("is-sticky");
			}
		});
		jQuery('.mean-menu').meanmenu({
			meanScreenWidth: "991"
		});
		$('select').niceSelect();
		$('.odometer').appear(function(e) {
			var odo = $(".odometer");
			odo.each(function() {
				var countNumber = $(this).attr("data-count");
				$(this).html(countNumber);
			});
		});
		$('.popup-youtube').magnificPopup({
			disableOn: 320,
			type: 'iframe',
			mainClass: 'mfp-fade',
			removalDelay: 160,
			preloader: false,
			fixedContentPos: false
		});
		var $imagesSlider = $(".feedback-slides .client-feedback>div"),
			$thumbnailsSlider = $(".client-thumbnails>div");
		$imagesSlider.slick({
			speed: 300,
			slidesToShow: 1,
			slidesToScroll: 1,
			cssEase: 'linear',
			fade: true,
			rtl: true,
			autoplay: true,
			draggable: true,
			asNavFor: ".client-thumbnails>div",
			prevArrow: '.client-feedback .prev-arrow',
			nextArrow: '.client-feedback .next-arrow'
		});
		$thumbnailsSlider.slick({
			speed: 300,
			slidesToShow: 5,
			slidesToScroll: 1,
			cssEase: 'linear',
			autoplay: true,
			rtl: true,
			centerMode: true,
			draggable: false,
			focusOnSelect: true,
			asNavFor: ".feedback-slides .client-feedback>div",
			prevArrow: '.client-thumbnails .prev-arrow',
			nextArrow: '.client-thumbnails .next-arrow',
		});
		var $caption = $('.feedback-slides .caption');
		var captionText = $('.client-feedback .slick-current img').attr('alt');
		updateCaption(captionText);
		$imagesSlider.on('beforeChange', function(event, slick, currentSlide, nextSlide) {
			$caption.addClass('hide');
		});
		$imagesSlider.on('afterChange', function(event, slick, currentSlide, nextSlide) {
			captionText = $('.client-feedback .slick-current img').attr('alt');
			updateCaption(captionText);
		});

		function updateCaption(text) {
			if (text === '') {
				text = '&nbsp;';
			}
			$caption.html(text);
			$caption.removeClass('hide');
		}
		$(function() {
			$('.accordion').find('.accordion-title').on('click', function() {
				$(this).toggleClass('active');
				$(this).next().slideToggle('fast');
				$('.accordion-content').not($(this).next()).slideUp('fast');
				$('.accordion-title').not($(this)).removeClass('active');
			});
		});
		$(function() {
			$(window).on('scroll', function() {
				var scrolled = $(window).scrollTop();
				if (scrolled > 600) $('.go-top').addClass('active');
				if (scrolled < 600) $('.go-top').removeClass('active');
			});
			$('.go-top').on('click', function() {
				$("html, body").animate({
					scrollTop: "0"
				}, 500);
			});
		});
		$('.success-story-slides').owlCarousel({
			loop: true,
			nav: true,
			dots: false,
			rtl: true,
			autoplayHoverPause: true,
			autoplay: true,
			items: 1,
			margin: 5,
			navText: ["<i class='fas fa-chevron-right'></i>", "<i class='fas fa-chevron-left'></i>"]
		});
		$('.partner-slides').owlCarousel({
			loop: true,
			nav: true,
			dots: false,
			rtl: true,
			autoplayHoverPause: true,
			autoplay: true,
			margin: 30,
			navText: ["<i class='fas fa-chevron-left'></i>", "<i class='fas fa-chevron-right'></i>"],
			responsive: {
				0: {
					items: 3,
				},
				576: {
					items: 4,
				},
				768: {
					items: 5,
				},
				992: {
					items: 6,
				}
			}
		});
	});
	$(window).on('load', function() {
		if ($(".wow").length) {
			var wow = new WOW({
				boxClass: 'wow',
				animateClass: 'animated',
				offset: 20,
				mobile: true,
				live: true,
			});
			wow.init();
		}
	});
	jQuery(window).on('load', function() {
		$('.preloader').fadeOut();
	});

	// blog and Testimonial carousel
	$(".blog-carousel, .testimonial-carousel").owlCarousel({
		autoplay: true,
		smartSpeed: 1000,
		margin: 25,
		loop: true,
		center: true,
		dots: false,
		nav: true,
		navText : [
			'<i class="bi bi-chevron-left"></i>',
			'<i class="bi bi-chevron-right"></i>'
		],
		responsive: {
			0:{
				items:1
			},
			576:{
				items:1
			},
			768:{
				items:2
			},
			992:{
				items:3
			}
		}
	});

}(jQuery));