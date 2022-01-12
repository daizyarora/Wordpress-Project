$(document).ready(function () {
	
	/*Active nav state code STARTS*/
	var classesBody	=	$('body').attr('class');
	if( classesBody.indexOf('parent-pageid-') != "-1" ){
		
		var parentPageID	=	classesBody.split('parent-pageid-');
		if( parentPageID ){
			
			var parentPageID = parentPageID[1].split(" ");
			if( parentPageID ){
				$('.navbar li.im-sub-li.my-page-id-'+parentPageID[0]).addClass('active-top');
				$('.navbar li.im-sub-li.my-page-id-'+parentPageID[0]).find('a').addClass('active');
				$('.navbar li.im-parent-li.my-page-id-'+parentPageID[0]).addClass('active-top');
			}
		}
		
	}
	/*Active nav state code ENDS*/
	
	'use strict';
    $("form.form-horizontal input.date-picker").attr( "data-toggle", "datepicker" );
	$("[data-toggle='tooltip']").tooltip();
	$("[data-toggle='popover']").popover();
	$("[data-toggle='datepicker']").datepicker({
		format: 'mm/dd/yyyy',
	}).on('changeDate', function(ev){
		$(this).datepicker('hide');
	});
	$("#toTop").scrollToTop();
	$("#print-01").find("button").on("click", function () {
		$("#print-01").print({
			addGlobalStyles: !0,
			stylesheet: "",
			rejectWindow: !0,
			noPrintSelector: ".no-print",
			iframe: !0,
			append: null,
			prepend: null
		});
	});
	$("#print-02").find("button").on("click", function () {
		$("#print-02").print({
			addGlobalStyles: !0,
			stylesheet: "",
			rejectWindow: !0,
			noPrintSelector: ".no-print",
			iframe: !0,
			append: null,
			prepend: null
		});
	});
	$("#print-03").find("button").on("click", function () {
		$("#print-03").print({
			addGlobalStyles: !0,
			stylesheet: "",
			rejectWindow: !0,
			noPrintSelector: ".no-print",
			iframe: !0,
			append: null,
			prepend: null
		});
	});
	$("#print-04").find("button").on("click", function () {
		$("#print-04").print({
			addGlobalStyles: !0,
			stylesheet: "",
			rejectWindow: !0,
			noPrintSelector: ".no-print",
			iframe: !0,
			append: null,
			prepend: null
		});
	});
	$(document).on('click', '.yamm .dropdown-menu', function (e) {
		e.stopPropagation();
	});
	$(".navbar").find("a").each(function () {
		//this.href == window.location && $(this).addClass("active")
		var locationString = window.location.toString();
		if (this.href === locationString) {
			$(this).addClass("active");
		}
	});
	$(".active").parents(".navbar li").addClass("active-top");
	$(".navbar>li").addClass("menu-top");
	$("#side-menu").find("a").each(function () {
		//this.href == window.location && $(this).addClass("sub-active")
		var locationString = window.location.toString();
		if (this.href === locationString) {
			$(this).addClass("active");
		}
	});
	$('.dropdown').on('show.bs.dropdown', function () {
		$(this).find('.dropdown-menu').first().stop(true, true).slideDown();
	});
	$('.dropdown').on('hide.bs.dropdown', function () {
		$(this).find('.dropdown-menu').first().stop(true, true).slideUp();
	});
	var slideshows = $('.cycle-slideshow').on('cycle-next cycle-prev', function (e, opts) {
		/* advance the other slideshow */
		slideshows.not(this).cycle('goto', opts.currSlide);
	});
	$('#cycle-gallery-2 .cycle-slide').click(function () {
		var index = $('#cycle-gallery-2').data('cycle.API').getSlideIndex(this);
		slideshows.cycle('goto', index);
	});
	/* Announcement Close */
	$( "#announcement-bar-close" ).click(function() {
		$( ".announcement-bar-wrapper" ).slideUp( "slow", function() {
		});
	});
	/* fix for admin menu */
	$("#mp-admin-menu").parents("body").addClass("admin");

	/* Prevent modal video from playing after close */
	$( ".modal-video" ).on( 'hidden.bs.modal', function ( e ) {
		$( ".modal-video iframe" ).attr( "src", $( ".modal-video iframe" ).attr( "src" ) );
	} );
	
	/* Cycle Controls */
	$('.cycle-pause').click(function () {
		$('.cycle-slideshow').cycle('pause');
		$(this).hide();
		$('.cycle-resume').show();
	});
	
	$('.cycle-resume').click(function () {
		$('.cycle-slideshow').cycle('resume');
		$(this).hide();
		$('.cycle-pause').show();
	});
	
	$('.cycle-prev').click(function () {
		$('.cycle-slideshow').cycle('prev');
	});
	
	$('.cycle-next').click(function () {
		$('.cycle-slideshow').cycle('next');
	});
	
	/* Carousel Controls */
	$('.carousel-pause').click(function () {
		$('#carousel-example-generic').carousel('pause');
		$(this).hide();
		$('.carousel-resume').css('display', 'block');
	});
	
	$('.carousel-resume').click(function () {
		$('#carousel-example-generic').carousel('cycle');
		$(this).hide();
		$('.carousel-pause').css('display', 'block');
	});
	
	/* Add Class Names to Contact Form 7 Forms for Styling */
	var form = document.querySelector('.wpcf7-form');
	if (form) {
		if (document.querySelector('.wpcf7-form.form-horizontal.form-horizontal-express')) {
			return;
		}
		else {
			form.classList.add("form-horizontal", "form-horizontal-express");
		}
	}
	
	$(".datepicker-days table.table-condensed").prepend('<caption class="datepicker-caption">Datepicker Days</caption>');
	$(".datepicker-months table.table-condensed").prepend('<caption class="datepicker-caption">Date Picker Months</caption>');
	$(".datepicker-years table.table-condensed").prepend('<caption class="datepicker-caption">Date Picker Years</caption>');


// 
/*let headerWrapperHeight = $(".header-wrapper").height();
let bannerWrapperHeight = $(".banner").height();
$(".banner").css('top' , headerWrapperHeight + "px" );
$(".xs-wrapper").css('top' , (headerWrapperHeight + bannerWrapperHeight) + "px" );
*/



// Ready
});

