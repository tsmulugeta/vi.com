 // nstparty standings 2star
    
    $.ajax({
            async: false,
            url: "http://api.visalus.com/ITReporting/SalesAnalytics/GetDataBySP/?SPName=usp_Promo_RepeatVIP_Counter_JSON&?",
            type: 'GET',
            dataType: 'jsonp',
            success: function (data) {
                var result = JSON.stringify(data);
                //alert(result);
                var obj = jQuery.parseJSON(result);
                var output="Total VIPs: ";
        for (var i in obj) {
        var myDate = new Date(obj[i].QualifiedDate);
        
            output+="" + obj[i].Total + "";
        }

        output+="";
                
                document.getElementById("repeatvipcount").innerHTML = output;
                 
            },
            error: function (e) {
                alert('fail');
            }
        });
        


 