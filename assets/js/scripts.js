jQuery(document).ready(function ($) {


    $(window).stellar();

    var links = $('.navigation').find('li');
    slide = $('.slide');
    button = $('.button');
    mywindow = $(window);
    htmlbody = $('html,body');


    slide.waypoint(function (event, direction) {

        dataslide = $(this).attr('data-slide');

        if (direction === 'down') {
            $('.navigation li[data-slide="' + dataslide + '"]').addClass('active').prev().removeClass('active');
        }
        else {
            $('.navigation li[data-slide="' + dataslide + '"]').addClass('active').next().removeClass('active');
        }

    });
 
    mywindow.scroll(function () {
        if (mywindow.scrollTop() == 0) {
            $('.navigation li[data-slide="1"]').addClass('active');
            $('.navigation li[data-slide="2"]').removeClass('active');
        }
    });

    function goToByScroll(dataslide) {
        htmlbody.animate({
            scrollTop: $('.slide[data-slide="' + dataslide + '"]').offset().top
        }, 2000, 'easeInOutQuint');
    }



    links.click(function (e) {
        e.preventDefault();
        dataslide = $(this).attr('data-slide');
        goToByScroll(dataslide);
    });

    button.click(function (e) {
        e.preventDefault();
        dataslide = $(this).attr('data-slide');
        goToByScroll(dataslide);

    });
    
    
    
    
    
    
    
    $('[data-toggle="tooltip"]').tooltip();
    jQuery('.wow').addClass("hideit").viewportChecker({
	    classToAdd: 'showit animated fadeInUpBig', // Class to add to the elements when they are visible
	    offset: 100    
    }); 
    
    $('.single-activity').hover(function(){
        $(this).addClass('animated pulse');
    }, function(){
        $(this).removeClass('animated pulse');
    });
    
    $('.fade-in-up').addClass('hideit').viewportChecker({
        classToAdd: 'showit animated fadeInUpBig',
        offset: 100
    });
    $('.fade-in-left').addClass('hideit').viewportChecker({
        classToAdd: 'showit animated fadeInLeftBig',
        offset: 100
    });
    $('.bounce-in').addClass('hideit').viewportChecker({
        classToAdd: 'showit animated bounceInDown',
        offset: 100
    });
    
    //Feedback slider
    $('#quote-carousel').carousel({
        pause: true,
        interval: 4000,
      });
    
    $(function () {
        "use strict";
        var $bgobj = $(".ha-bg-parallax"); // assigning the object
        $(window).on("scroll", function () {
            var yPos = -($(window).scrollTop() / $bgobj.data('speed'));
            // Put together our final background position
            var coords = '100% ' + yPos + 'px';
            // Move the background
            $bgobj.css({ backgroundPosition: coords });
        });
            $('div.product-chooser').not('.disabled').find('div.product-chooser-item').on('click', function(){
            $(this).parent().parent().find('div.product-chooser-item').removeClass('selected');
            $(this).addClass('selected');
            $(this).find('input[type="radio"]').prop("checked", true);
        });
    });  
    

});