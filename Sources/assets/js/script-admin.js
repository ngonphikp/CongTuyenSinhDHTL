$(document).ready(function () {
    var base_url = window.location.origin;
    var newbase_url=base_url+'/CongTuyenSinhDHTL/Sources/assets/json/response.json';

    //"<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js"
    $.getJSON(newbase_url, function(data)
             {
                 $.each(data, function (index, value) {
                    // APPEND OR INSERT DATA TO SELECT ELEMENT.
                    //$('#sel').append('<option value="' + value.ID + '">' + value.Name + '</option>');
                    //$('#sel').append('<option value="' + value.ID + '">' + value.ID.Name + '</option>');
                    //console.log(index);
                    //$('#sel').append('<option value="' + index + '">' + index + '</option>');
                    //console.log(index);
                    if (index=='provinces')
                    {
                        
                        //console.log(value);
                        // $.each(data, function (index, value) {
                        //$('#sel2').append('<option value="' + index + '">' + value[0] + '</option>');
                        // });
                        for(i in value){
                            //console.log(value[i].name);    
                            $('#sel').append('<option value="' + value[i].code + '">' + value[i].code + " "+ value[i].name + '</option>');
                        }
                    }
                });
                
            });

            $('#sel').change(function () {
                $("#sel2").val([])
                 
                var x=sel.value;
                $.getJSON(newbase_url, function(data)
                {
                    var code=[]
                 $.each(data, function (index, value) {
                    if (index=='highSchools')
                    {
                        for(i in value){
                            if (value[i].provinceCode==x)
                            {
                                
                                code.push(value[i].districtName);
                                //$('#sel3').append('<option value="' + index + '">' + value[i].districtName + '</option>');
                            }
                        }
                        
                    }
                    });
                   
                    var uniqueNames = [];
                    $.each(code, function(i, el){
                    if($.inArray(el, uniqueNames) === -1) uniqueNames.push(el);
                    });
                    for (i in uniqueNames)
                        $('#sel2').append('<option value="' + "a" + '">' + uniqueNames[i] + '</option>');
                    });
                
          
        });


    //     $('#sel2').change(function () {
    //         $("#sel3").val([])
             
    //         var x=sel2.value;
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
    //                 $('#sel2').append('<option value="' + "a" + '">' + uniqueNames[i] + '</option>');
    //             });
            
      
    // });





        
        // $.getJSON(newbase_url, function(data)
        //      {
        //          $.each(data, function (index, value) {
        //             if (index=='highSchools')
        //             {
        //                 for(i in value){
        //                     //console.log(value[i].name);    
        //                     $('#tentruong').append('<option value="' + value[i].code + '">' + value[i].code+" "+value[i].name+" "+value[i].address + '</option>');
        //                 }
        //             }
        //         });
                
        //     });
      
});
