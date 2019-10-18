"use strict";

function multishop_initslider(refresh, parent) {

	var slider_thumbs = '#prod-thumbs';
	var slider_main = '#prod-slider';

	if (refresh) {
		jQuery('#prod-thumbs').removeData("flexslider");
		jQuery('#prod-thumbs .slides').find("li").off();
		jQuery('#prod-slider').removeData("flexslider");
	}

	if (parent) {
		slider_thumbs = parent + ' ' + slider_thumbs;
		slider_main = parent + ' ' + slider_main;
	}

	jQuery(slider_thumbs).flexslider({
		animation: "slide",
		controlNav: false,
		animationLoop: false,
		slideshow: false,
		itemWidth: 97,
		itemMargin: 0,
		minItems: 5,
		maxItems: 5,
		asNavFor: slider_main,
		start: function(slider){
			jQuery(slider_thumbs).resize();
		}
	});
	jQuery(slider_main).flexslider({
		animation: "fade",
		animationSpeed: 500,
		slideshow: false,
		animationLoop: false,
		smoothHeight: false,
		controlNav: false,
		sync: slider_thumbs,
		after: function(slider) {
			jQuery('.prod-slider-count .count-cur').text(slider.currentSlide+1);
		}
	});
}

jQuery(document).ready(function ($) {

	// Modal Form
	$('.callback').fancybox({
		padding: 0,
		content: $('#modal-form'),
		helpers: {
			overlay: {
				locked: false
			}
		},
		tpl: {
			closeBtn: '<a title="Close" class="fancybox-item fancybox-close modal-form-close" href="javascript:;"></a>'
		}
	});


	// Fancybox Images
	$('.fancy-img').fancybox({
		padding: 0,
		margin: [60, 50, 20, 50],
		helpers: {
			overlay: {
				locked: false
			},
			thumbs: {
				width: 60,
				height: 60
			}
		},
		tpl: {
			closeBtn: '<a title="Close" class="fancybox-item fancybox-close modal-form-close2" href="javascript:;"></a>',
			prev: '<a title="Previous" class="fancybox-nav fancybox-prev modal-prev" href="javascript:;"><span></span></a>',
			next: '<a title="Next" class="fancybox-nav fancybox-next modal-next" href="javascript:;"><span></span></a>',
		}
	});

	// Modal Videos
	$(".multishop-gallery").on('click', ".multishop-gallery-video", function() {
		$.fancybox({
			'padding'       : 0,
			'autoScale'     : false,
			'transitionIn'  : 'none',
			'transitionOut' : 'none',
			'href'          : this.href.replace(new RegExp("watch\\?v=", "i"), 'v/'),
			'type'          : 'swf',
			'swf'           : {
				'wmode'             : 'transparent',
				'allowfullscreen'   : 'true'
			},
			tpl: {
				closeBtn: '<a title="Close" class="fancybox-item fancybox-close modal-form-close2" href="javascript:;"></a>'
			}
		});
		return false;
	});


	// Dropdown
	if ($('.dropdown-wrap').length > 0) {
		$('.dropdown-wrap').on('click', '.dropdown-title', function () {
			$('.dropdown-list').slideUp(200);
			if ($(this).hasClass('opened')) {
				$(this).removeClass('opened');
			} else {
				$('.dropdown-wrap .dropdown-title').removeClass('opened');
				$(this).addClass('opened');
				$(this).next('.dropdown-list').slideDown(200);
			}
			return false;
		});
		$('.cont').on('click', '.dropdown-wrap-range', function () {
			return false;
		});
		$('.dropdown-wrap .dropdown-list li').on('click', 'a', function () {
			$(this).closest('.dropdown-wrap').find('.dropdown-title').text($(this).text());
			if ($(this).attr('href') == '#') {
				$('.dropdown-list').slideUp(200);
				$('.dropdown-wrap .dropdown-title').removeClass('opened');
				return false;
			}
		});
	}

	if ($('.dropdown-wrap').length > 0 || $('#b-crumbs-menu').length > 0) {
		$('body').on('click', function () {
			if ($('#b-crumbs-menu').length > 0) {
				$('.b-crumbs-menulist').fadeOut(200);
				$('#b-crumbs-menu').removeClass('opened');
			}
			if ($('.dropdown-wrap').length > 0) {
				$('.dropdown-list').slideUp(200);
				$('.dropdown-wrap .dropdown-title').removeClass('opened');
			}
		});
	}

	// Top Menu Seacrh
	$('.site-header').on('click', '#h-search-btn', function () {
		if ($(this).hasClass('opened')) {
			$(this).removeClass('opened');
			if ($('#h-search').length > 0) {
				$('#h-search').fadeOut();
			} else if ($('#h-search').length > 0) {
				$('#h-search').fadeOut();
			}
		} else {
			$(this).addClass('opened');
			if ($('#h-search').length > 0) {
				$('#h-search').fadeIn();
			} else if ($('#h-search').length > 0) {
				$('#h-search').fadeIn();
			}
		}
		return false;
	});


	// Top Menu
	$('.site-header').on('click', '#h-menu-btn', function () {
		$(this).toggleClass('opened');
		$('.cmm-toggle-wrapper .cmm-toggle').click();

		if ($('#h-menu').length > 0) {
			$('#h-menu').slideToggle();
		}

		return false;
	});

	// Top SubMenu
	$('.mainmenu nav > ul').on('click', '.menu-item-has-children > a', function () {
		if ($(window).width() < 751) {
			if ($(this).hasClass('opened')) {
				$(this).removeClass('opened');
				$(this).next('ul').slideUp();
			} else {
				$(this).addClass('opened');
				$(this).next('ul').slideDown();
			}
			return false;
		}
	});


	// Filter Button
	if ($('#section-filter-toggle-btn').length > 0 && $('.section-filter .woof_redraw_zone').length > 0) {
		$('.section-filter-toggle').on('click', '#section-filter-toggle-btn', function () {
			if ($(this).parent().hasClass('filter_hidden')) {
				$(this).text($(this).data('hidetext')).parent().removeClass('filter_hidden');
				document.cookie = "filter_toggle=filter_opened; expires=Thu, 31 Dec 2020 23:59:59 GMT; path=/;";
			} else {
				$(this).text($(this).data('showtext')).parent().addClass('filter_hidden');
				document.cookie = "filter_toggle=filter_hidden; expires=Thu, 31 Dec 2020 23:59:59 GMT; path=/;";
			}

			return false;
		});
	}

	// Sticky sidebar
	if ($('#section-sb').length > 0 && $('#section-list-withsb').length > 0) {
		$('#section-sb, #section-list-withsb').theiaStickySidebar({
			additionalMarginTop: 30
		});
	}


	// Product Tabs
	$('body').on('click', '.prod-tabs li a', function () {
		if ($(this).parent().hasClass('prod-tabs-addreview') || $(this).parent().hasClass('active') || $(this).attr('data-prodtab') == '')
			return false;
		$('.prod-tabs li').removeClass('active');
		$(this).parent().addClass('active');

		// mobile
		$('.prod-tab-mob').removeClass('active');
		$('.prod-tab-mob[data-prodtab-num=' + $(this).parent().data('prodtab-num') + ']').addClass('active');

		$('.prod-tab-cont .prod-tab').hide();
		$($(this).attr('data-prodtab')).fadeIn();

		return false;
	});

	// Product Tabs (mobile)
	$('body').on('click', '.prod-tab-cont .prod-tab-mob', function () {
		if ($(this).hasClass('active') || $(this).attr('data-prodtab') == '')
			return false;
		$('.prod-tab-cont .prod-tab-mob').removeClass('active');
		$(this).addClass('active');

		// main
		$('.prod-tabs li').removeClass('active');
		$('.prod-tabs li[data-prodtab-num=' + $(this).data('prodtab-num') + ']').addClass('active');

		$('.prod-tab-cont .prod-tab').slideUp();
		$($(this).attr('data-prodtab')).slideDown();
		return false;
	});

	$('body').on('click', '.prod-tabs-addreview', function () {
		if ($('.prod-tabs li.active a').attr('data-prodtab') == '#prod-tab-3') {
			$('html, body').animate({scrollTop: ($('.prod-tabs-wrap').offset().top - 10)}, 700);
		} else {
			$('.prod-tabs li').removeClass('active');
			$('#prod-reviews').addClass('active');
			$('.prod-tab-cont .prod-tab').hide();
			$('.prod-tab-cont .prod-tab.prod-reviews').fadeIn();
			$('html, body').animate({scrollTop: ($('.prod-tabs-wrap').offset().top - 10)}, 700);
		}

		$('#review_form_wrapper').fadeIn();

		return false;
	});

	if ($('.prod-tab #commentform #submit').length > 0) {
		var filterEmail  = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,6})+$/;
		$('body').on('click', '.prod-tab #commentform #submit', function () {
			var errors = false;
			if (!$(this).parents('#commentform').find('#rating').val()) {
				$('.prod-tab-addreview').addClass('error');
				errors = true;
			}
			$(this).parents('#commentform').find('input[type=text], input[type=email], textarea').each(function () {
				if ($(this).attr('id') == 'email'){
					if (!filterEmail.test($(this).val())) {
						$(this).addClass("redborder");
						errors++;
					}
					else {
						$(this).removeClass("redborder");
					}
					return;
				}
				if ($(this).val() == '') {
					$(this).addClass('redborder');
					errors++;
				} else {
					$(this).removeClass('redborder');
				}
			});

			if (errors)
				return false;
		});
	}

	// Show Properties
	$('.prod-cont').on('click', '#prod-showprops', function () {
		if ($('.prod-tabs li.active a').attr('data-prodtab') == '#prod-tab-2') {
			$('html, body').animate({scrollTop: ($('.prod-tabs-wrap').offset().top - 10)}, 700);
		} else {
			$('.prod-tabs li').removeClass('active');
			$('#prod-props').addClass('active');
			$('.prod-tab-cont .prod-tab').hide();
			$('#prod-tab-2').fadeIn();
			$('html, body').animate({scrollTop: ($('.prod-tabs-wrap').offset().top - 10)}, 700);
		}
		return false;
	});

	// Show Description
	$('.prod-cont').on('click', '#prod-showdesc', function () {
		if ($('.prod-tabs li.active a').attr('data-prodtab') == '#prod-tab-1') {
			$('html, body').animate({scrollTop: ($('.prod-tabs-wrap').offset().top - 10)}, 700);
		} else {
			$('.prod-tabs li').removeClass('active');
			$('#prod-desc').addClass('active');
			$('.prod-tab-cont .prod-tab').hide();
			$('#prod-tab-1').fadeIn();
			$('html, body').animate({scrollTop: ($('.prod-tabs-wrap').offset().top - 10)}, 700);
		}
		return false;
	});



	// Post Add Comment Form
	$('.post-comments').on('click', '#post-comments-add', function () {
		$('#post-addcomment-form').slideDown();
		$(this).fadeOut();
		return false;
	});



	// Select Styler
	if ($('.prod-add .variations select').length > 0) {
		$('.prod-add .variations select').chosen({
			disable_search_threshold: 10
		});
	}
	if ($('.section-top .products-per-page select').length > 0) {
		$('.section-top .products-per-page select').chosen({
			disable_search_threshold: 10
		});
	}
	if ($('.blog-sb-widget:not(.WOOF_Widget) select').length > 0) {
		$('.blog-sb-widget:not(.WOOF_Widget) select').chosen({
			disable_search_threshold: 10
		});
	}
	if ($('.shipping-calculator-form select').length > 0) {
		$('.shipping-calculator-form select').chosen({
			disable_search_threshold: 10
		});
	}


	// Product List Show Information
	$('body').on('click', '.prod-li-information', function () {
		var product_info = $(this).parents('.prod-li').find('.prod-li-informations');
		$(this).toggleClass('opened');
		if (product_info.length) {
			product_info.slideToggle();
		}
		return false;
	});


	// Widgets Mobile Toggle
	if ($('.section-sb .blog-sb-widget .widgettitle').length > 0) {
		$('.section-sb .blog-sb-widget').on('click', '.widgettitle', function () {
			if ($(window).width() <= 991) {
				if ($(this).hasClass('opened')) {
					$(this).removeClass('opened').next().slideUp();
				} else {
					$(this).addClass('opened').next().slideDown();
				}
			}
			return false;
		});
	}

});


(function($) {
	jQuery(window).load(function(){

		// Product Slider
		if ($('#prod-slider').length > 0) {
			multishop_initslider(false, '');

			$('#prod-slider').on('click', '.prod-slider-zoom', function () {
				$('#prod-slider .slides .flex-active-slide .fancy-img').click();
				return false;
			});
		}



		// Slider "About Us"
		if ($('.content_carousel').length > 0) {
			$('.content_carousel').each(function () {
				if ($(this).data('slideshow_speed') != '') {
					var slideshow_speed =  $(this).data('slideshow_speed');
				} else {
					var slideshow_speed =  '7000';
				}
				if ($(this).data('animation_speed') != '') {
					var animation_speed =  $(this).data('animation_speed');
				} else {
					var animation_speed =  '600';
				}
				if ($(this).data('navigation') == true) {
					var navigation =  true;
				} else {
					var navigation =  false;
				}
				if ($(this).data('pagination') == true) {
					var pagination =  true;
				} else {
					var pagination =  false;
				}
				if ($(this).data('stop_on_hover') == true) {
					var stop_on_hover =  true;
				} else {
					var stop_on_hover =  false;
				}
				$('.content_carousel').flexslider({
					pauseOnHover: stop_on_hover,
					animationSpeed: animation_speed,
					slideshowSpeed: slideshow_speed,
					useCSS: false,
					directionNav: navigation,
					controlNav: pagination,
					animation: "fade",
					slideshow: false,
					animationLoop: true,
					smoothHeight: true
				});
			});
		}


		// Blog sliders
		if ($('.blog-slider').length > 0) {
			$('.blog-slider').flexslider({
				animation: "fade",
				animationSpeed: 500,
				slideshow: false,
				animationLoop: false,
				directionNav: false,
				smoothHeight: false,
				controlNav: true,
			});
		}
		if ($('.post-slider').length > 0) {
			$('.post-slider').flexslider({
				animation: "fade",
				animationSpeed: 500,
				slideshow: false,
				animationLoop: false,
				directionNav: false,
				smoothHeight: true,
				controlNav: true,
			});
		}

		// Slider "Testimonials"
		if ($('.testimonials-car').length > 0) {
			$('.testimonials-car').each(function () {
				var testimonials_slider;
				if ($(this).data('slideshow_speed') != '') {
					var slideshow_speed =  $(this).data('slideshow_speed');
				} else {
					var slideshow_speed =  '7000';
				}
				if ($(this).data('animation_speed') != '') {
					var animation_speed =  $(this).data('animation_speed');
				} else {
					var animation_speed =  '600';
				}
				if ($(this).data('navigation') == true) {
					var navigation =  true;
				} else {
					var navigation =  false;
				}
				if ($(this).data('pagination') == true) {
					var pagination =  true;
				} else {
					var pagination =  false;
				}
				if ($(this).data('stop_on_hover') == true) {
					var stop_on_hover =  true;
				} else {
					var stop_on_hover =  false;
				}
				if ($(this).hasClass('style-1')) {
					var items =  1;
					var item_margin =  0;
				} else {
					var items =  2;
					if ($(window).width() < 751) {
						items =  1;
					}
					var item_margin =  68;
				}
				$(this).flexslider({
					pauseOnHover: stop_on_hover,
					animationLoop: true,
					animation: 'slide',
					animationSpeed: animation_speed,
					slideshowSpeed: slideshow_speed,
					useCSS: false,
					directionNav: navigation,
					controlNav: pagination,
					slideshow: false,
					itemMargin: item_margin,
					itemWidth: 2000,
					maxItems: items,
					minItems: items,
					start: function(slider){
						testimonials_slider = slider;
					}
				});
				$(window).resize(function() {
					if ($(window).width() < 751) {
						testimonials_slider.vars.minItems = 1;
						testimonials_slider.vars.maxItems = 1;
					} else {
						testimonials_slider.vars.minItems = items;
						testimonials_slider.vars.maxItems = items;
					}
				});
			});
		}



		// Quantity
		$('body').on('click', '.qnt-wrap a', function () {
			var qnt = $(this).parent().find('input').val();
			if ($(this).hasClass('qnt-plus')) {
				qnt++;
			} else if ($(this).hasClass('qnt-minus')) {
				qnt--;
			}
			if (qnt > 0) {
				$(this).parent().find('input').attr('value', qnt);
			}
			return false;
		});


		// Masonry Grids
		if ($('#blog-grid').length > 0) {
			$('#blog-grid').isotope({
				itemSelector: '.blog-grid-i',
			});
		}
		if ($('#gallery-grid').length > 0) {

			var $grid = $('#gallery-grid').isotope({
				itemSelector: '.gallery-grid-i',
			});
			$('#gallery-sections').on('click', 'a', function() {
				var filterValue = $( this ).attr('data-section');
				$grid.isotope({ filter: filterValue });
			});
			$('#gallery-sections').each( function( i, buttonGroup ) {
				var $buttonGroup = $( buttonGroup );
				$buttonGroup.on('click', 'a', function() {
					$buttonGroup.find('.active').removeClass('active');
					$( this ).addClass('active');
					return false;
				});
			});

		}
		if ($('.multishop-gallery').length > 0) {

			var $grid = $('.multishop-gallery').isotope({
				itemSelector: '.gallery-grid-i',
			});
			$('.multishop-gallery-sections').on('click', 'a', function() {
				var filterValue = $( this ).attr('data-section');
				$grid.isotope({ filter: filterValue });
			});
			$('.multishop-gallery-sections').each( function( i, buttonGroup ) {
				var $buttonGroup = $( buttonGroup );
				$buttonGroup.on('click', 'a', function() {
					$buttonGroup.find('.active').removeClass('active');
					$( this ).addClass('active');
					return false;
				});
			});

		}
		if ($('#about-gallery').length > 0) {
			$('#about-gallery').isotope({
				itemSelector: '.grid-item',
				columnWidth: '.grid-sizer',
				percentPosition: true
			});
		}



		// Quick View
		$('.quick-view').fancybox({
			content: $('.quick-view-modal'),
			padding: 0,
			helpers : {
				overlay : {
					locked  : false
				}
			},
			afterLoad: function() {
				multishop_initslider(true);
			}
		});


		// Sticky header
		if ($('.header-sticky').length > 0) {
			$(window).scroll(function () {
				var topbar = false;
				var topbar_ht = $('.site-header-before').height();
				if ($('.site-header-before').length > 0 && $('.site-header-before').css('display') !== 'none') {
					topbar = true;
				}
				if (topbar) {
					$('body').css('margin-top', '0px');
					if (topbar_ht < $(window).scrollTop()) {
						$('.header-sticky .site-header').addClass('header_sticky');
						$('.site-header-before').css('margin-bottom', $('.header-sticky .site-header').outerHeight(true));
					} else {
						$('.header-sticky .site-header').removeClass('header_sticky');
						$('.site-header-before').css('margin-bottom', '0px');
					}
				} else {
					$('.header-sticky .site-header').addClass('header_sticky');
					$('body').css('margin-top', $('.header-sticky .site-header').outerHeight(true));
				}
			});
		}

		if ($('.prod-i').length > 0) {
			$('.prod-i').each(function () {
				var prod = $(this);
				var prod_img = prod.find('.prod-i-img');
				var prod_cont = prod.find('.prod-i-bot');
				if (prod.outerHeight() + 1 < prod_img.outerHeight() + prod_cont.outerHeight() || prod.outerHeight() - 1 > prod_img.outerHeight() + prod_cont.outerHeight()) {
					prod_img.outerHeight(prod.outerHeight() - prod_cont.outerHeight());
				}
			});
			$(window).resize(function () {
				$('.prod-i').each(function () {
					var prod = $(this);
					var prod_img = prod.find('.prod-i-img');
					var prod_cont = prod.find('.prod-i-bot');
					if (prod.outerHeight() + 1 < prod_img.outerHeight() + prod_cont.outerHeight() || prod.outerHeight() - 1 > prod_img.outerHeight() + prod_cont.outerHeight()) {
						prod_img.outerHeight(prod.outerHeight() - prod_cont.outerHeight());
					}
				});
			});
		}

	});




	// Forms Validation
	var filterEmail  = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,6})+$/;
	$('.form-validate').submit(function () {
		var errors = 0;
		$(this).find('[data-required="text"]').each(function () {
			if ($(this).attr('data-required-email') == 'email'){
				if (!filterEmail.test($(this).val())) {
					$(this).addClass("redborder");
					errors++;
				}
				else {
					$(this).removeClass("redborder");
				}
				return;
			}
			if ($(this).val() == '') {
				$(this).addClass('redborder');
				errors++;
			} else {
				$(this).removeClass('redborder');
			}
		});
		if (errors === 0) {
			var form1 = $(this);
			$.ajax({
				type: "POST",
				url: 'php/email.php',
				data: $(this).serialize(),
				success: function(data) {
					console.log(data);
					if (data == 'PSD') {
						form1.html('<p style="margin: 10px 0 20px; font-weight: 600; font-size: 16px;" class="form-result"><a target="_blank" href="https://yadi.sk/i/14-2AkkU3N6FaQ">Download PSD</a></p>');
					} else {
						form1.append('<p class="form-result">Thank you!</p>');
					}
					$("form").trigger('reset');
				}
			});
		}
		return false;
	});
	$('.form-validate').find('[data-required="text"]').blur(function () {
		if ($(this).attr('data-required-email') == 'email' && ($(this).hasClass("redborder"))) {
			if (filterEmail.test($(this).val()))
				$(this).removeClass("redborder");
			return;
		}
		if ($(this).val() != "" && ($(this).hasClass("redborder")))
			$(this).removeClass("redborder");
	});




	// Filter Toggle
	jQuery('.woof_front_toggle').on('click', function () {
		if (jQuery(this).data('condition') == 'opened') {
			jQuery(this).removeClass('woof_front_toggle_opened');
			jQuery(this).addClass('woof_front_toggle_closed');
			jQuery(this).data('condition', 'closed');
			if (woof_toggle_type == 'text') {
				jQuery(this).text(woof_toggle_closed_text);
			} else {
				jQuery(this).find('img').prop('src', woof_toggle_closed_image);
			}
		} else {
			jQuery(this).addClass('woof_front_toggle_opened');
			jQuery(this).removeClass('woof_front_toggle_closed');
			jQuery(this).data('condition', 'opened');
			if (woof_toggle_type == 'text') {
				jQuery(this).text(woof_toggle_opened_text);
			} else {
				jQuery(this).find('img').prop('src', woof_toggle_opened_image);
			}
		}

		//jQuery(this).parents('.woof_container_inner').find('.woof_block_html_items').toggle(500);
		jQuery(this).parents('.woof_container_inner').find('.woof_block_html_items').toggleClass('woof_closed_block');
		return false;
	});


})(jQuery);





// Compare List
(function($) {
	$.fn.setDraggable = function() {
		var compares = $(this),
			html = $('html');

		compares.each(function() {
			var compare = $(this),
				tables = compare.find('.wccm-table'),
				wrappers = compare.find('.wccm-table-wrapper'),
				dragging = false,
				maxshift = wrappers.width() - tables.width(),
				offset = 0,
				shift = 0;

			$(window).resize(function() {
				maxshift = wrappers.width() - tables.width();
				if (maxshift < 0) {
					wrappers.css('cursor', 'move');
				} else {
					wrappers.css('cursor', 'default');
					tables.css('margin-left', '0');
				}
			});

			if (maxshift < 0) {
				wrappers.css('cursor', 'move');
				shift = parseInt(tables.css('margin-left'));
			}

			tables.mousedown(function(e) {
				var node = e.target.nodeName;

				if (maxshift < 0 && node != 'IMG' && node != 'A') {
					dragging = true;
					offset = e.screenX;
					shift = parseInt(tables.css('margin-left'));
					wrappers.css('cursor', 'default');
				}
			});

			html.mouseup(function() {
				dragging = false;
				if (maxshift < 0) {
					wrappers.css('cursor', 'move');
				}
			});

			html.mousemove(function(e) {
				var move = shift - (offset - e.screenX);
				if (dragging && maxshift <= move && move <= 0) {
					tables.css('margin-left', move + 'px');
				}
			});
		});

		return compares;
	};

	$(document).ready(function() {
		$('.wccm-compare-table').setDraggable();
	});
})(jQuery);