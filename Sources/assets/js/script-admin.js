$(document).ready(function () {
    var base_url = window.location.origin;
    var provinceBase_url=base_url+'/CongTuyenSinhDHTL/Sources/assets/json/Province.json';
    $.getJSON(provinceBase_url, function(data){
        $.each(data, function (index, value) {
            //console.log(index);
            $('#selTinhThanhPhoAddHsxt').append('<option value="'+value.CityName+'">' + value.CityName + '</option>');
            $('#seltinhthanhphocsdt').append('<option value="'+value.CityName+'">' + value.CityName + '</option>');
            $('#selNoiSinhAddHsxt').append('<option value="'+value.CityName+'">' + value.CityName + '</option>');
            $('#selTinhThanhPhoLop10AddHsxt').append('<option value="'+value.CityName+'">' + value.CityName + '</option>');
            
        });      
    });  

    $('#seltinhthanhphocsdt').change(function () {
                //console.log("afdasdfa");
                //$("#selquanhuyencsdt").val([]);
                //$("#selquanhuyencsdt").val();
                var select = document.getElementById("selquanhuyencsdt");
                var length = select.options.length;
                for (i = length-1; i >= 0; i--) {
                select.options[i] = null;
                }
                //document.getElementById("selquanhuyencsdt").empty();
                var districtBase_url=base_url+'/CongTuyenSinhDHTL/Sources/assets/json/District.json';
                var seltinhthanhphocsdtValue=seltinhthanhphocsdt.value;
                //console.log(seltinhthanhphocsdtValue);
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


    $('#selTinhThanhPhoAddHsxt').change(function () {
        //console.log("afdasdfa");
        //$("#selquanhuyencsdt").val([]);
        //$("#selquanhuyencsdt").val();
        var select = document.getElementById("selQuanHuyenAddHsxt");
        var length = select.options.length;
        for (i = length-1; i >= 0; i--) {
        select.options[i] = null;
        }
        //document.getElementById("selquanhuyencsdt").empty();
        var districtBase_url=base_url+'/CongTuyenSinhDHTL/Sources/assets/json/District.json';
        var selTinhThanhPhoAddHsxtValue=selTinhThanhPhoAddHsxt.value;
        //console.log(seltinhthanhphocsdtValue);
        $.getJSON(districtBase_url, function(data)
        {
            var code=[];
            $.each(data, function (index, value) {
                if (value.CityName==selTinhThanhPhoAddHsxtValue) 
                {
                    //console.log(value.DistrictName);
                    $('#selQuanHuyenAddHsxt').append('<option value="'+ value.DistrictName +'">' + value.DistrictName + '</option>');
                    
                }  
            });
        });     
    });

    $('#selTinhThanhPhoAddHsxt').change(function () {
        //console.log("afdasdfa");
        //$("#selquanhuyencsdt").val([]);
        //$("#selquanhuyencsdt").val();
        var select = document.getElementById("selQuanHuyenAddHsxt");
        var length = select.options.length;
        for (i = length-1; i >= 0; i--) {
        select.options[i] = null;
        }
        //document.getElementById("selquanhuyencsdt").empty();
        var districtBase_url=base_url+'/CongTuyenSinhDHTL/Sources/assets/json/District.json';
        var selTinhThanhPhoAddHsxtValue=selTinhThanhPhoAddHsxt.value;
        //console.log(seltinhthanhphocsdtValue);
        $.getJSON(districtBase_url, function(data)
        {
            var code=[];
            $.each(data, function (index, value) {
                if (value.CityName==selTinhThanhPhoAddHsxtValue) 
                {
                    //console.log(value.DistrictName);
                    $('#selQuanHuyenAddHsxt').append('<option value="'+ value.DistrictName +'">' + value.DistrictName + '</option>');
                    
                }  
            });
        });     
    });

    //add hsxt
    var enthicBase_url=base_url+'/CongTuyenSinhDHTL/Sources/assets/json/enthic.json';
    $.getJSON(enthicBase_url, function(data){
        $.each(data, function (index, value) {
            for(i in value){
                //console.log(value[i].TEN);    
                //$('#sel2').append('<option value="' + value[i].code + '">' + value[i].TEN + '</option>');
                $('#selDanTocAddHsxt').append('<option value="'+value[i].TEN+'">' + value[i].TEN + '</option>');
            }
        });      
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