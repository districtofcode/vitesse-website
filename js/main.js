$(document).ready(function() {
    
    $('#nav-img').hide();
   
    $("#scrollknop").click(function() {
        $('html, body').animate({
        scrollTop: parseInt($("nav").offset().top)
    }, 2000);
    });
    
    $(window).scroll(function () {
        if ($(document).scrollTop() >= $(window).height()) {
            $('#nav-img').slideDown("slow");
            $('nav').addClass('fixed');
            $('#artikel-container').addClass('nav-margin');
            }
        else {
            $('#nav-img').fadeOut("fast");
            $('nav').removeClass('fixed');
            $('#artikel-container').removeClass('nav-margin');
            console.log($(document).scrollTop());
            
        }
       });
  
});


