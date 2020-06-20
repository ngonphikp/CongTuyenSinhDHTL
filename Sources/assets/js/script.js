$(document).ready(function () {
    //Ấn Learn more form dtm
    $(".me-fix-dtm #learn-more").click(function () {
       $(".me-fix-dtm").hide();
    });

    //Ẩn form login khi load
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
    $('.D_carousel').owlCarousel({
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
                items:1,
                nav:false,
                dots:false
            },
            600:{
                items:1
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
        $(".me-form-login").hide();
    })
    $('.fa-bars').click(function(){
        $(".inner-menu").css("width","90%");
        $(".inner-menu").toggle();
        $(".D_modal").show();
    })
    $('.D_modal').click(function(){
        $(this).css("display","none");
        $(".inner-menu").hide();
    })
    var changeMenu = document.getElementsByClassName('search__menu-mb fa-search');
    var changeMenu = document.querySelector('.search__menu-mb .fa-search');
        changeMenu.addEventListener("click",function(){
            this.classList.toggle('fa-times');
            $(".search-mb").slideToggle("slow");
        });
        var base_url = window.location.origin;
        var provinceBase_url=base_url+'/CongTuyenSinhDHTL/Sources/assets/json/Province.json';
        $.getJSON(provinceBase_url, function(data){
            $.each(data, function (index, value) {
                $('#selTinhThanhPhoAddHsxt').append('<option value="'+value.CityName+'">' + value.CityName + '</option>');
                $('#seltinhthanhphocsdt').append('<option value="'+value.CityName+'">' + value.CityName + '</option>');
                $('#selNoiSinhAddHsxt').append('<option value="'+value.CityName+'">' + value.CityName + '</option>');
                $('#selTinhThanhPhoLop10AddHsxt').append('<option value="'+value.CityName+'">' + value.CityName + '</option>');
                $('#selTinhThanhPhoLop11AddHsxt').append('<option value="'+value.CityName+'">' + value.CityName + '</option>');
                $('#selTinhThanhPhoLop12AddHsxt').append('<option value="'+value.CityName+'">' + value.CityName + '</option>');
            }); 
        });  
    
        $('#seltinhthanhphocsdt').change(function () {
            var select = document.getElementById("selquanhuyencsdt");
            var length = select.options.length;
            for (i = length-1; i >= 0; i--) {
            select.options[i] = null;
            }
            var districtBase_url=base_url+'/CongTuyenSinhDHTL/Sources/assets/json/District.json';
            var seltinhthanhphocsdtValue=seltinhthanhphocsdt.value;
            $.getJSON(districtBase_url, function(data)
            {
                var code=[];
                $.each(data, function (index, value) {
                    if (value.CityName==seltinhthanhphocsdtValue) 
                    {
                        $('#selquanhuyencsdt').append('<option value="'+ value.DistrictName +'">' + value.DistrictName + '</option>');
                    }  
                });
            });     
        });
    
        $('#selTinhThanhPhoAddHsxt').change(function () {
            var select = document.getElementById("selQuanHuyenAddHsxt");
            var length = select.options.length;
            for (i = length-1; i >= 0; i--) {
            select.options[i] = null;
            }
            var districtBase_url=base_url+'/CongTuyenSinhDHTL/Sources/assets/json/District.json';
            var selTinhThanhPhoAddHsxtValue=selTinhThanhPhoAddHsxt.value;
            $.getJSON(districtBase_url, function(data)
            {
                var code=[];
                $.each(data, function (index, value) {
                    if (value.CityName==selTinhThanhPhoAddHsxtValue) 
                    {
                        $('#selQuanHuyenAddHsxt').append('<option value="'+ value.DistrictName +'">' + value.DistrictName + '</option>');
                    }  
                });
            });     
        });
    
        $('#selTinhThanhPhoLop10AddHsxt').change(function () {
            var select = document.getElementById("selQuanHuyenLop10AddHsxt");
            var length = select.options.length;
            for (i = length-1; i >= 0; i--) {
            select.options[i] = null;
            }
          
            var districtBase_url=base_url+'/CongTuyenSinhDHTL/Sources/assets/json/District.json';
            var selTinhThanhPhoLop10AddHsxtValue=selTinhThanhPhoLop10AddHsxt.value;
           
            $.getJSON(districtBase_url, function(data)
            {
                var code=[];
                $.each(data, function (index, value) {
                    if (value.CityName==selTinhThanhPhoLop10AddHsxtValue) 
                    {
                        
                        $('#selQuanHuyenLop10AddHsxt').append('<option value="'+ value.DistrictName +'">' + value.DistrictName + '</option>');
                        
                    }  
                });
            });     
        });
    
        $('#selQuanHuyenLop10AddHsxt').change(function () {
            
            var select = document.getElementById("selTruongThptLop10AddHsxt");
            var length = select.options.length;
            for (i = length-1; i >= 0; i--) {
            select.options[i] = null;
            }
            var schoolBase_url=base_url+'/CongTuyenSinhDHTL/Sources/assets/json/School.json';
            var selQuanHuyenLop10AddHsxtValue=selQuanHuyenLop10AddHsxt.value;
            $.getJSON(schoolBase_url, function(data)
            {
                var code=[];
                $.each(data, function (index, value) {
                    if (value.DistrictName==selQuanHuyenLop10AddHsxtValue) 
                    {
                        $('#selTruongThptLop10AddHsxt').append('<option value="'+value.SchoolName+'">' + value.SchoolName + '</option>');
                    }  
                });
            });     
        });
    
    
    
        $('#selTinhThanhPhoLop11AddHsxt').change(function () {
            var select = document.getElementById("selQuanHuyenLop11AddHsxt");
            var length = select.options.length;
            for (i = length-1; i >= 0; i--) {
            select.options[i] = null;
            }
            var districtBase_url=base_url+'/CongTuyenSinhDHTL/Sources/assets/json/District.json';
            var selTinhThanhPhoLop11AddHsxtValue=selTinhThanhPhoLop11AddHsxt.value;
            
            $.getJSON(districtBase_url, function(data)
            {
                var code=[];
                $.each(data, function (index, value) {
                    if (value.CityName==selTinhThanhPhoLop11AddHsxtValue) 
                    {
                       
                        $('#selQuanHuyenLop11AddHsxt').append('<option value="'+ value.DistrictName +'">' + value.DistrictName + '</option>');
                        
                    }  
                });
            });     
        });
    
        $('#selQuanHuyenLop11AddHsxt').change(function () {
            var select = document.getElementById("selTruongThptLop11AddHsxt");
            var length = select.options.length;
            for (i = length-1; i >= 0; i--) {
            select.options[i] = null;
            }
            var schoolBase_url=base_url+'/CongTuyenSinhDHTL/Sources/assets/json/School.json';
            var selQuanHuyenLop11AddHsxtValue =selQuanHuyenLop11AddHsxt.value;
            $.getJSON(schoolBase_url, function(data)
            {
                var code=[];
                $.each(data, function (index, value) {
                    if (value.DistrictName==selQuanHuyenLop11AddHsxtValue) 
                    {
                        
                        $('#selTruongThptLop11AddHsxt').append('<option value="'+value.SchoolName+'">' + value.SchoolName + '</option>');
                        
                    }  
                });
            });     
        });
    
    
    
        $('#selTinhThanhPhoLop12AddHsxt').change(function () {
            var select = document.getElementById("selQuanHuyenLop12AddHsxt");
            var length = select.options.length;
            for (i = length-1; i >= 0; i--) {
            select.options[i] = null;
            }
            var districtBase_url=base_url+'/CongTuyenSinhDHTL/Sources/assets/json/District.json';
            var selTinhThanhPhoLop12AddHsxtValue=selTinhThanhPhoLop12AddHsxt.value;
            
            $.getJSON(districtBase_url, function(data)
            {
                var code=[];
                $.each(data, function (index, value) {
                    if (value.CityName==selTinhThanhPhoLop12AddHsxtValue) 
                    {
                       
                        $('#selQuanHuyenLop12AddHsxt').append('<option value="'+ value.DistrictName +'">' + value.DistrictName + '</option>');
                        
                    }  
                });
            });     
        });
    
        $('#selQuanHuyenLop12AddHsxt').change(function () {
        
            var select = document.getElementById("selTruongThptLop12AddHsxt");
            var length = select.options.length;
            for (i = length-1; i >= 0; i--) {
            select.options[i] = null;
            }
           
            var schoolBase_url=base_url+'/CongTuyenSinhDHTL/Sources/assets/json/School.json';
            var selQuanHuyenLop12AddHsxtValue =selQuanHuyenLop12AddHsxt.value;
            
            $.getJSON(schoolBase_url, function(data)
            {
                var code=[];
                $.each(data, function (index, value) {
                    if (value.DistrictName==selQuanHuyenLop12AddHsxtValue) 
                    {
                        
                        $('#selTruongThptLop12AddHsxt').append('<option value="'+value.SchoolName+'">' + value.SchoolName + '</option>');
                        
                    }  
                });
            });     
        });
        //add hsxt
    var enthicBase_url=base_url+'/CongTuyenSinhDHTL/Sources/assets/json/enthic.json';
    $.getJSON(enthicBase_url, function(data){
        $.each(data, function (index, value) {
            for(i in value){
                $('#selDanTocAddHsxt').append('<option value="'+value[i].TEN+'">' + value[i].TEN + '</option>');
            }
        });      
    });  
});
