$(document).ready(function(){
    $('.carousel').owlCarousel({
        loop:true,
        nav:true,
        navText:[
            '<i class="fas fa-chevron-left"></i>',
            '<i class="fas fa-chevron-right"></i>'
        ],
        dots:true,
        autoplay:true,
        autoplayTimeout:3000,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:1
            }
        }
    });

    //back-to-top
    var scrollTrigger = 400, // px
    backToTop = function () {
      var scrollTop = $(window).scrollTop();
      if (scrollTop > scrollTrigger) {
        $('#back-to-top').show();
      } else {
        $('#back-to-top').hide();
      }
    };
    backToTop();
    $(window).on('scroll', function () {
        backToTop();
    });
    $('#back-to-top').on('click', function (e) {
        e.preventDefault();
        $('html,body').animate({
        scrollTop: 0
        }, 700);
    });
    $('.btn-close').click(function(){
        $("#modal__login").css("display","none");
    })
    $('.btn-login').click(function(){
        $("#modal__login").css("display","block");
    })
})
