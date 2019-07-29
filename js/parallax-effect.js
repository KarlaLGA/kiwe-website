$( window ).scroll(function() {

    let wScroll = $(this).scrollTop();
    console.log(wScroll);
    if($( window ).width()>760)
    {

    
    $('.team-logo img','.page-id-8 .site-description').css({
        'transform' : 'translateY('+ (wScroll*3) +'%)'
    })

    $('.about-us-content').css({
        'transform' : 'translateY(-'+ wScroll /65 +'%)'
    })

    }
   



});