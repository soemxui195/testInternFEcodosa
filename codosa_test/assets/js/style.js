$(document).ready(function () {
    // Peloader
    setTimeout(function () {
        $('body').addClass('loaded');
    }, 3000);

    //Team Carousel   
    $("#team_01").owlCarousel({
        items: 3,
        itemsDesktop: [1199, 3],
        itemsDesktopSmall: [980, 3],
        itemsTablet: [768, 2],
        itemsMobile: [479, 1],
        navigation: false,
        pagination: true,
        autoplay: true,
        autoplayTimeout: 1000,
        autoplayHoverPause: true,
        afterAction: function (el) {
            //remove class active
            this
                .$owlItems
                .removeClass('active')

            //add class active
            this
                .$owlItems //owl internal $ object containing items
                .eq(this.currentItem + 1)
                .addClass('active')
        }
    });

    // Faq Tab
    $('#faq-area-06  .accordion-single .panel-heading').on('click', function (e) {
        $('#faq-area-06  .accordion-single .panel-heading').removeClass("active");
        $(this).addClass("active");
    });
    
    $(".header .navbar .navbar-nav .nav-item .nav-link").click(function () {
        $('.header .navbar .navbar-nav .nav-item .nav-link').removeClass('active');
        $(this).addClass('active'); 
    });
    //Scroll Spy    
    $('body').scrollspy({ target: '.cripto_nav' })

    //Smoth scroll
      $("nav a").on('click', function(event) {
        if (this.hash !== "") {
         // Prevent default anchor click behavior
         event.preventDefault();
  
         // Store hash
         var hash = this.hash;
  
         $('html, body').animate({
         scrollTop: $(hash).offset().top
         }, 1500, function(){
         window.location.hash = hash;
         });
        } // End if
      });

      
    //WOW animation   
    new WOW().init();

});