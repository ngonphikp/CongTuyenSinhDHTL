$(document).ready(function () {
    var base_url = window.location.origin;
    var provinceBase_url=base_url+'/CongTuyenSinhDHTL/Sources/assets/json/Province.json';
    $.getJSON(provinceBase_url, function(data){
        $.each(data, function (index, value) {
            //console.log(index);
            $('#sel').append('<option value="'+value.CityName+'">' + value.CityName + '</option>');
            $('#seltinhthanhphocsdt').append('<option value="'+value.CityName+'">' + value.CityName + '</option>');
        });      
    });  

    $('#seltinhthanhphocsdt').change(function () {
                $("#selquanhuyencsdt").val([]);
                var districtBase_url=base_url+'/CongTuyenSinhDHTL/Sources/assets/json/District.json';
                var seltinhthanhphocsdtValue=seltinhthanhphocsdt.value;
                console.log(seltinhthanhphocsdtValue);
                $.getJSON(districtBase_url, function(data)
                {
                    var code=[];
                    $.each(data, function (index, value) {
                        if (value.CityName==seltinhthanhphocsdtValue) 
                        {
                            //console.log(value.DistrictName);
                            $('#selquanhuyencsdt').append('<option value="'+ value.DistrictName +'">' + value.DistrictName + '</option>');
                            
                        }  
                    });
                });     
    });


    // Bài viết
    // Thêm
    var form_add_bv = $("#form_add_bv");
    var add_ctbv_form_add_bv = $("#add_ctbv_form_add_bv");
    var save_form_add_bv = $("#save_form_add_bv");

    var countAdd = $("#count_ctbv_form_add_bv").val();
    console.log(countAdd);
    $(add_ctbv_form_add_bv).click(function (e) {
        e.preventDefault();
        console.log("add_ctbv_form_add_bv");  
        countAdd++;
        $(form_add_bv).append('<tr><td><input type="button" value="-" class = "delete_ctbv_form_add_bv"><p>Nội dung chi tiết</p><textarea name="ndct'+ countAdd +'" class="form-control" id="" cols="30" rows="3"></textarea></td><td><P>Ảnh chi tiết</p><input type="file" name="linkct'+ countAdd +'" class="form-control"></td></tr>')
    });    

    $(form_add_bv).on("click", ".delete_ctbv_form_add_bv", function(e) {
        e.preventDefault();
        console.log("delete_ctbv_form_add_bv");
        $(this).parent().parent().remove();
        //countAdd--;
    });

    $(save_form_add_bv).click(function () {
        $("#count_ctbv_form_add_bv").val((countAdd + ""));
    });

    // Sửa
    var form_edit_bv = $("#form_edit_bv");
    var add_ctbv_form_edit_bv = $("#add_ctbv_form_edit_bv");
    var save_form_edit_bv = $("#save_form_edit_bv");

    var countEdit = $("#count_ctbv_form_edit_bv").val();
    console.log(countEdit);

    $(add_ctbv_form_edit_bv).click(function (e) {
        e.preventDefault();
        console.log("add_ctbv_form_edit_bv");  
        countEdit++;
        $(form_edit_bv).append('<tr><td><input type="button" value="-" class = "delete_ctbv_form_edit_bv"><p>Nội dung chi tiết</p><textarea name="ndct'+ countEdit +'" class="form-control" id="" cols="30" rows="3"></textarea></td><td><P>Ảnh chi tiết</p><input type="file" name="linkct'+ countEdit +'" class="form-control"></td></tr>')
    });    

    $(form_edit_bv).on("click", ".delete_ctbv_form_edit_bv", function(e) {
        e.preventDefault();
        console.log("delete_ctbv_form_edit_bv");
        $(this).parent().parent().remove();
        //count--;
    });

    $(save_form_edit_bv).click(function () {
        $("#count_ctbv_form_edit_bv").val((countEdit + ""));
    });
});










// var newbase_url=base_url+'/CongTuyenSinhDHTL/Sources/assets/json/response.json';

    // //"<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js"
    // $.getJSON(newbase_url, function(data)
    //          {
    //              $.each(data, function (index, value) {
    //                 // APPEND OR INSERT DATA TO SELECT ELEMENT.
    //                 //$('#sel').append('<option value="' + value.ID + '">' + value.Name + '</option>');
    //                 //$('#sel').append('<option value="' + value.ID + '">' + value.ID.Name + '</option>');
    //                 //console.log(index);
    //                 //$('#sel').append('<option value="' + index + '">' + index + '</option>');
    //                 //console.log(index);
    //                 if (index=='provinces')
    //                 {
                        
    //                     //console.log(value);
    //                     // $.each(data, function (index, value) {
    //                     //$('#sel2').append('<option value="' + index + '">' + value[0] + '</option>');
    //                     // });
    //                     for(i in value){
    //                         //console.log(value[i].name);    
    //                         $('#sel').append('<option value="' + value[i].code + '">' + value[i].code + " "+ value[i].name + '</option>');
    //                         $('#seltinhthanhphocsdt').append('<option value="' + value[i].code + '">' + value[i].code + " "+ value[i].name + '</option>');
    //                     }
    //                 }
    //             });
                
    //         });

    //         $('#sel').change(function () {
    //             $("#sel2").val([])
                 
    //             var x=sel.value;
    //             $.getJSON(newbase_url, function(data)
    //             {
    //                 var code=[]
    //              $.each(data, function (index, value) {
    //                 if (index=='highSchools')
    //                 {
    //                     for(i in value){
    //                         if (value[i].provinceCode==x)
    //                         {
                                
    //                             code.push(value[i].districtName);
    //                             //$('#sel3').append('<option value="' + index + '">' + value[i].districtName + '</option>');
    //                         }
    //                     }
                        
    //                 }
    //                 });
                   
    //                 var uniqueNames = [];
    //                 $.each(code, function(i, el){
    //                 if($.inArray(el, uniqueNames) === -1) uniqueNames.push(el);
    //                 });
    //                 for (i in uniqueNames)
    //                     $('#sel2').append('<option value="' + "a" + '">' + uniqueNames[i] + '</option>');
    //                 });
                
          
    //         });

    //     $('#seltinhthanhphocsdt').change(function () {
    //         //console.log("sdfasd");
    //         $("#selquanhuyencsdt").val([])
    //         var x=seltinhthanhphocsdt.value;
    //         $.getJSON(newbase_url, function(data)
    //         {
    //             var code=[]
    //          $.each(data, function (index, value) {
    //             if (index=='highSchools')
    //             {
    //                 for(i in value){
    //                     if (value[i].provinceCode==x)
    //                     {
                            
    //                         code.push(value[i].districtName);
    //                         //$('#sel3').append('<option value="' + index + '">' + value[i].districtName + '</option>');
    //                     }
    //                 }
                    
    //             }
    //             });
               
    //             var uniqueNames = [];
    //             $.each(code, function(i, el){
    //             if($.inArray(el, uniqueNames) === -1) uniqueNames.push(el);
    //             });
    //             for (i in uniqueNames)
    //                 $('#selquanhuyencsdt').append('<option value="' + "a" + '">' + uniqueNames[i] + '</option>');
    //             });
            
      
    //     });