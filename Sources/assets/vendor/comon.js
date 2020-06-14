$(document).ready(function() {
    //check value email
    function validateEmail(email) {
        const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(email);
      }
      
    function validate() {
        const $result = $("#ShowError");
        const email = $("#email").val();
        $result.text("");
      
        if (validateEmail(email)) {
          $result.text(email + " hợp lệ");
          $result.css("color", "green");
        } else {
          $result.text(email + " không đúng định dạng");
          $result.css("color", "red");
        }
        return false;
      }
      $(".btn__save").on("submit", validate);
      var showNV = document.getElementsByClassName('fa-minus');
      var changeMenu = document.querySelector('.fa-minus');
          changeMenu.addEventListener("click",function(){
              this.classList.toggle('fa-plus');
              $(".nop_ho_so").slideToggle("slow");
          });

      $(".btn__save").click(function(){
        $.ajax({
          url: "http://localhost/CongTuyenSinhDHTL/Sources/home/xhb2",
          type: 'GET',
          success: function(result){
            $(".content_tnv").html(result);
        }});
      })
});
