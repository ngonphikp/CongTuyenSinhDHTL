$(document).ready(function() {
    $("#show_form_nv").click(function(){
        $("#form_nguyenvong").slideToggle("slow");
    });
    $(".thugon").click(function(){
        $("#form_nguyenvong").slideUp("slow");
    });
    // $(".fa-angle-down").click(function(){
    //     $(this).toggleClass("rotate");
    // });
    // var nguyenvong = document.getElementById("nguyenvong");
    $(".delete").click(function(){
        $("#nguyenvong").css("display","none");
    });
    $(".btn-nguyenvong").click(function(){
        $(".a").toggle("show");
    });
    //add form
    var html = '<div class="col-sm-12" id="block__nguyenvong"> <div id="panel_nguyenvong"> <div class="col-sm-3 col-lg-3"> <div class="v-text-field__slot"> <div class="v-text-field__prefix">Nguyện vọng</div> <input type="number" id="quantity" name="quantity" min="1" max="19"></div> </div> <div class="col-sm-9 col-lg-9"> <div class="row" style="transform-origin: center top 0px;"> <div class="col-md-6">Mã xét tuyển: chưa chọn</div> <div class="col-md-6">Tổ hợp xét tuyển: chưa chọn</div> </div> <span class="icon-toggle" style="width:20px;height:20px;float:right;text-align:center;"> <i class="fas fa-angle-down"></i> </span> </div> </div> <div id="form_nguyenvong"> <div class="row"> <div class="col-md-4"> <div class="form-group"> <div class="select__slot"> <input type="text" class="form-control" id="" placeholder="Các nhóm ngành xét tuyển"> <div class="icon-toggle"> <i class="fas fa-caret-down" aria-hidden="true"></i> </div> </div> </div> <div class="text-details"> <div class="text-messages"> <p>Ngành/ Nhóm ngành/ Chuyên ngành/ Nhóm chuyên ngành xét tuyển không được để trống</p> </div> </div> </div> <div class="col-md-4"> <div class="form-group"> <input type="text" class="form-control" id="" placeholder="Địa chỉ"> </div> </div> <div class="col-md-4"> <div class="form-group"> <input type="text" class="form-control" id="" placeholder="Tổ hợp xét tuyển"> </div> </div> </div> <div class="row"> <div class="col"> <div> <b>Điểm trung bình 3 năm THPT</b> </div> <hr> </div> </div> <div class="row"> <div class="col-md-12"> <span>Lớp 10</span> </div> <div class="col-md-4"> <div class="form-group"> <input type="number" class="form-control" id="" placeholder="Điểm trung bình cả năm môn 1"> </div> </div> <div class="col-md-4"> <div class="form-group"> <input type="number" class="form-control" id="" placeholder="Điểm trung bình cả năm môn 2"> </div> </div> <div class="col-md-4"> <div class="form-group"> <input type="number" class="form-control" id="" placeholder="Điểm trung bình cả năm môn 3"> </div> </div> </div> <div class="row"> <div class="col-md-12"> <span>Lớp 11</span> </div> <div class="col-md-4"> <div class="form-group"> <input type="number" class="form-control" id="" placeholder="Điểm trung bình cả năm môn 1"> </div> </div> <div class="col-md-4"> <div class="form-group"> <input type="number" class="form-control" id="" placeholder="Điểm trung bình cả năm môn 2"> </div> </div> <div class="col-md-4"> <div class="form-group"> <input type="number" class="form-control" id="" placeholder="Điểm trung bình cả năm môn 3"> </div> </div> </div> <div class="row"> <div class="col-md-12"> <span>Lớp 12</span> </div> <div class="col-md-4"> <div class="form-group"> <input type="number" class="form-control" id="" placeholder="Điểm trung bình cả năm môn 1"> </div> </div> <div class="col-md-4"> <div class="form-group"> <input type="number" class="form-control" id="" placeholder="Điểm trung bình cả năm môn 2"> </div> </div> <div class="col-md-4"> <div class="form-group"> <input type="number" class="form-control" id="" placeholder="Điểm trung bình cả năm môn 3"> </div> </div> </div> <div class="row"> <div class="col"> <button type="button" class="btn btn-success thugon">THU GỌN</button> <button type="button" class="btn btn-warning delete">Xóa</button> </div> </div> </div> </div>';
    $(".btn-green").click(function(){
         $("#nguyenvong").append(html);
    });
    var input = document.querySelectorAll('.datepicker');
    M.Datepicker.init(input,{
        format: 'dd-mm-yyyy',
        showClearBtn:true,
        i18n:{
            weekdaysShort : 
            [   'Sunday',
                'Monday',
                'Tuesday',
                'Wednesday',
                'Thursday',
                'Friday',
                'Saturday'
            ]
        }
    });
});