$( window ).scroll(function() {

    let wScroll = $(this).scrollTop();
//     // console.log(wScroll);
//     if($( window ).width()>760&&$(window).width<1000)
//     {

//     $('.about-us-header').css({
//         'transform' : 'translateY('+ wScroll/6 +'%)'
//     })

//     $('.about-us-content').css({
//         'transform' : 'translateY(-'+ wScroll /90 +'%)'
//     })

//     }
//     else if($(window).width()>=1000)
//     {   
//         console.log('helo');
//         $('.about-us-header').css({
//             'transform' : 'translateY('+ wScroll/2+'%)'
//         })
    
//         $('.about-us-content').css({
//             'transform' : 'translateY(-'+ wScroll /45 +'%)'
//         })
//     }
   
$('.custom-logo').css({
    'transform' : 'rotate('+wScroll+'deg)'
})

$('.slogan-kiwe img').css({
    'transform' : ' translateX('+ (wScroll-100) /2.5 +'%) rotate('+wScroll+'deg)'
})


});