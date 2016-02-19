// TABS

$(".js-vertical-tab-content").hide();
$(".js-vertical-tab-content:first").show();

/* if in tab mode */
$(".js-vertical-tab").click(function(event) {
	event.preventDefault();

	$(".js-vertical-tab-content").hide();
	var activeTab = $(this).attr("rel");
	$("#"+activeTab).fadeIn();

	$(".js-vertical-tab").removeClass("is-active");
	$(this).addClass("is-active");

	$(".js-vertical-tab-accordion-heading").removeClass("is-active");
	$(".js-vertical-tab-accordion-heading[rel^='"+activeTab+"']").addClass("is-active");
});

/* if in accordion mode */
$(".js-vertical-tab-accordion-heading").click(function(event) {
	event.preventDefault();

	$(".js-vertical-tab-content").hide();
	var accordion_activeTab = $(this).attr("rel");
	$("#"+accordion_activeTab).fadeIn();

	$(".js-vertical-tab-accordion-heading").removeClass("is-active");
	$(this).addClass("is-active");

	$(".js-vertical-tab").removeClass("is-active");
	$(".js-vertical-tab[rel^='"+accordion_activeTab+"']").addClass("is-active");
});

// PARALLAX

// $(document).ready(function() {
//   if ($("#js-parallax-window").length) {
//     parallax();
//   }
// });

// $(window).scroll(function(e) {
//   if ($("#js-parallax-window").length) {
//     parallax();
//   }
// });

// function parallax(){
//   if( $("#js-parallax-window").length > 0 ) {
//     var plxBackground = $("#js-parallax-background");
//     var plxWindow = $("#js-parallax-window");

//     var plxWindowTopToPageTop = $(plxWindow).offset().top;
//     var windowTopToPageTop = $(window).scrollTop();
//     var plxWindowTopToWindowTop = plxWindowTopToPageTop - windowTopToPageTop;

//     var plxBackgroundTopToPageTop = $(plxBackground).offset().top;
//     var windowInnerHeight = window.innerHeight;
//     var plxBackgroundTopToWindowTop = plxBackgroundTopToPageTop - windowTopToPageTop;
//     var plxBackgroundTopToWindowBottom = windowInnerHeight - plxBackgroundTopToWindowTop;
//     var plxSpeed = 0.35;

//     plxBackground.css('top', - (plxWindowTopToWindowTop * plxSpeed) + 'px');
//   }
// }

// FLYER FLIP

$(document).ready(function(){
	$("#card").flip({
		axis: 'y',
		trigger: 'hover',
		reverse: true
	});
	$("#card-two").flip({
		axis: 'y',
		trigger: 'hover',
		reverse: true
	});
	$("#card-three").flip({
		axis: 'y',
		trigger: 'hover',
		reverse: true
	});
});

// OWL CAROUSEL

$(document).ready(function() {

	$("#owl-demo").owlCarousel({
 
			//navigation : true, // Show next and prev buttons
			slideSpeed : 300,
			paginationSpeed : 400,
			singleItem:true,
			autoPlay:7000,
			stopOnHover:true
			//navigation: true,
			//navigationText: false
	});
});


//FLUID WIDTH VIDEO EMBEDS

$(document).ready(function() {
	// Find all YouTube videos
	var $allVideos = $("iframe[src^='//player.vimeo.com'], iframe[src^='https://www.youtube.com']"),

			// The element that is fluid width
			$fluidEl = $(".post-content");

	// Figure out and save aspect ratio for each video
	$allVideos.each(function() {

		$(this)
			.data('aspectRatio', this.height / this.width)

			// and remove the hard coded width/height
			.removeAttr('height')
			.removeAttr('width');

	});

	// When the window is resized
	$(window).resize(function() {

		var newWidth = $fluidEl.width();

		// Resize all videos according to their own aspect ratio
		$allVideos.each(function() {

			var $el = $(this);
			$el
				.width(newWidth)
				.height(newWidth * $el.data('aspectRatio'));

		});

	// Kick off one resize to fix all videos on page load
	}).resize();
});

// SCROLL TO FUNCTION

$(document).ready(function() {
	$(".vertical-tab").on("click", function( e ) {
		e.preventDefault();
		$("body, html").animate({ 
			scrollTop: $( $(this).attr('href') ).offset({ top: 60 }) 
		});
	});
});

// Ninja Forms placeholder for textarea

$(document).ready(function($){
		$('#ninja_forms_field_3').attr("placeholder","Message");
});

$(document).ready(function(){
	$('.list-view').on('click touchstart',function (e) {
		$(this).addClass('active');
		$('.events').addClass('list');
		$('.flyer-view').removeClass('active');
		e.preventDefault();
	});
	$('.flyer-view').on('click touchstart',function (e) {
		$(this).addClass('active');
		$('.events').removeClass('list');
		$('.list-view').removeClass('active');
		e.preventDefault();
	});
});

