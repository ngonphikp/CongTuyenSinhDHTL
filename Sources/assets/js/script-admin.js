$(document).ready(function () {
    console.log("dasfasd");
    $.getJSON('response.json', function(data)
             {
                 $.each(data, function (index, value) {
                   
                   
                    console.log(index);
                    if (index=='provinces')
                    {
                        
                       
                        for(i in value){
                            //console.log(value[i].name);    
                            $('#sel').append('<option value="' + value[i].code + '">' + value[i].code + '</option>');
                        }
                    }
                });
                
            });   
});
