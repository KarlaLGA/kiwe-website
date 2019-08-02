
$( window ).scroll(function() {
let section1ToTopUser =  $('.restaurant-about-section').offset().top; 
let section1ToBottomUser =  section1ToTopUser + $('.business-plan-kiwe').outerHeight(); 

let section2ToTopUser =  $('.how-to-section').offset().top;
let section2ToBottomUser =  section2ToTopUser + $('.how-to-section').outerHeight(); 
  
let section3ToTopUser =  $('.faq').offset().top;  
let section3ToBottomUser =  section3ToTopUser + $('.faq').outerHeight(); 


    let wScroll = $(this).scrollTop()+80;
    // console.log(wScroll);

    if(wScroll>=section1ToTopUser && wScroll < section1ToBottomUser){
      

        $("#menu-item-126 a").addClass('middle-menu-active');
    }
    else{
        $("#menu-item-126 a").removeClass('middle-menu-active');
    }

    
    if(wScroll>=section2ToTopUser && wScroll < section2ToBottomUser){
       

        $("#menu-item-135 a").addClass('middle-menu-active');
    }
    else{
        $("#menu-item-135 a").removeClass('middle-menu-active');
    }

    if(wScroll>=section3ToTopUser && wScroll < section3ToBottomUser){
        

        $("#menu-item-139 a").addClass('middle-menu-active');
    }
    else{
        $("#menu-item-139 a").removeClass('middle-menu-active');
    }

   
});

$("#menu-secondary-menu-restaurant .menu-item a").click(function(){
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            let target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top-80
                }, 800);
                return false;
            }
        }
})
