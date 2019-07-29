let section1ToTop =  $('.user-about-container').offset().top;
console.log('H:',section1ToTop);

$( window ).scroll(function() {

    let wScroll = $(this).scrollTop();
    console.log(wScroll);
    
    

});