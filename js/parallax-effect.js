$( window ).scroll(function() {

    let wScroll = $(this).scrollTop();
   
$('.custom-logo').css({
    'transform' : 'rotate('+wScroll+'deg)'
})


});