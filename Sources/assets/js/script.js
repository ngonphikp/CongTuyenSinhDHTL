$(document).ready(function () {
    //Ấn Learn more form dtm
    $(".me-fix-dtm #learn-more").click(function () {
       $(".me-fix-dtm").hide();
    });

    //Ẩn form login khi load
    $(".me-form-login").hide();
    //Click nút đăng nhập trên nav
    $(".btnDangNhap").click(function () {
        $(".me-form-login").toggle();
    });
    
    //Click Chat
    $(".me-open-button").click(function () {
        $("#myForm").show();
        $(this).hide();
    });
    $("#myForm .cancel").click(function () {
        $("#myForm").hide();
        $(".me-open-button").show();
    });

    //Sửa đổi thông tin cá nhân
    $(".hide-update").hide();
    $("#me-setting-ttcn").click(function () {
        $(".hide-update").toggle();
    });


    // Home
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
});
