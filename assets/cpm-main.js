(function ($) {
    $(function () {
        // BACK TO TOP JS INIT
//         $(window).scroll(function () {
//             var scroll = $(window).scrollTop();

//             if (scroll > 800) {
//                 $('#back-to-top').addClass('show');
//             } else {
//                 $('#back-to-top').removeClass('show');
//             }
//         });

$('#back-to-top').on('click', function (e) {
    e.preventDefault();
    jQuery('html,body').animate({
        scrollTop: 0
    }, 700);
});

$(window).scroll(function() {
    if (  $(this).scrollTop() >= 300) { // this refers to window
        $.sidr('close', 'sidr');
        $(".hamburger-menu").removeClass("animate");
    }
});

// $(window).load(function() {
// $('.yel-subheading-1').insertAfter('.yel-ep-form-wrapper');
// });

// if ($(window).width() < 989){
// $('.single-tribe_events').one('touchmove', function(e) { 
//     $(".single-tribe_events").addClass("showpopup");
//            $(".single-tribe_events #boxzilla-8165 .boxzilla-close-icon").on("click",function(){
//     $(".single-tribe_events").removeClass("showpopup");
//     });
// });
// }

if ($(window).width() < 989){
$(window).scroll(function() {
   var hT = $('.tribe-events-single-event-description.tribe-events-content').offset().top,
       hH = $('.tribe-events-single-event-description.tribe-events-content').outerHeight(),
       wH = $(window).height(),
       wS = $(this).scrollTop();
   if (wS > (hT+hH-wH)){
       $(".single-tribe_events").addClass("showpopup");
           $(".single-tribe_events #boxzilla-8165 .boxzilla-close-icon").on("click",function(){
    $(".single-tribe_events").removeClass("showpopup");
    $(".single-tribe_events").addClass("donotshow");
    });
   }
});
}
  // $(document).mousemove(function(event){
   
  //       if( $(".yel-popup-main-wrapper").css('display') == 'block') {
  //           $(".yel-popup-main-wrapper").addClass("test");
  //       }

  // });



function addEvent(obj, evt, fn) {
    if (obj.addEventListener) {
        obj.addEventListener(evt, fn, false);
    }
    else if (obj.attachEvent) {
        obj.attachEvent("on" + evt, fn);
    }
}
addEvent(window, "load", function (e) {
    addEvent(document, "mouseleave", function (e) {
        e = e ? e : window.event;
        var from = e.relatedTarget || e.toElement;
        if (!from || from.nodeName == "HTML") {

           $("body.single-tribe_events").addClass("showpopup");
           $(".single-tribe_events #boxzilla-8165 .boxzilla-close-icon").on("click",function(){
    $(".single-tribe_events").removeClass("showpopup");
    $(".single-tribe_events").addClass("donotshow");
    });
        }
    });
});


 $("[lang='de-CH'] .yel-popup-main-wrapper input.wpcf7-form-control.wpcf7-submit").attr("value","Abonnieren");
 $("[lang='de'] .yel-popup-main-wrapper input.wpcf7-form-control.wpcf7-submit").attr("value","Abonnieren");


document.addEventListener( 'wpcf7mailsent', function( event ) {
    if ( '2428' == event.detail.contactFormId ) {
        var element = document.getElementById('boxzilla-2397');
        element.classList.add("hide-contact");
        var subscribe = document.getElementById('subscribe').getElementsByTagName("a");
        console.log(subscribe);
        subscribe[0].href="javascript:Boxzilla.show(2651)";
        subscribe[0].click();
        subscribe[0].href="javascript:Boxzilla.show(2397)";


    }

}, false );

$("#subscribe a").on("click",function(){
    if($("#boxzilla-2397").hasClass("hide-contact")){
        $("#boxzilla-2397").addClass("show-contanct");
        $(".hide-contact").css("display","block !important");
    }
});

$('.tribe-events-event-image, .tribe-events-single-event-description, .tribe-events-cal-links').wrapAll( $('<div>').addClass('single_event_wrap') );
$('.tribe-events-single-event-description, .tribe-events-cal-links').wrapAll( $('<div>').addClass('single_event_inner_wrap') );
$('.tribe-events-event-meta.primary, .tribe-events-event-meta.secondary').wrapAll( $('<div>').addClass('single_event_ps_wrap') );


        // jQuery(document).ready( function () {
        //     jQuery( 'input.tribe-tickets-quantity' ).val( 1 );
        // });

        $('.tribe-tickets__submit').attr('disabled',false); 
    });



    jQuery('#qty').on("click", function(e)
    {
        e.preventDefault();
        var qty=$("#qty").val();
        var price=$("#price").val();
        var reqv=parseInt(qty);
        var stockv=parseInt(price);
        if(reqv != 0)
        {
            var total=reqv*stockv;
            $("#amount").val(total);
        }
    });
    jQuery(document).ready(function(){
    jQuery("#boxzillapop").attr("href", "javascript:Boxzilla.show(2397)");
});
    
    jQuery(document).ready(function(){
    var reserverhtml=jQuery('.reserver').html();
jQuery('.event-reserve').html(reserverhtml);
    });

})(jQuery);
