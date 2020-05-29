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

});
