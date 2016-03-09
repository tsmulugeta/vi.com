function addCommas(nStr)
{
	nStr += '';
	x = nStr.split('.');
	x1 = x[0];
	x2 = x.length > 1 ? '.' + x[1] : '';
	var rgx = /(\d+)(\d{3})/;
	while (rgx.test(x1)) {
		x1 = x1.replace(rgx, '$1' + ',' + '$2');
	}
	return x1 + x2;
}

   
    
    $.ajax({
            async: false,
            url: "http://api.visalus.com/ITReporting/SalesAnalytics/GetDataBySP/?SPName=usp_ViCrunch_BowlCount_JSON&?",
            type: 'GET',
            dataType: 'jsonp',
            success: function (data) {
                var result = JSON.stringify(data);
                //alert(result);
                var obj = jQuery.parseJSON(result);
                var output="";
        for (var i in obj) {
            output+="<h4 class='white-text' style='font-size: 24px;'>NOMBRE DE BOLS SERVIS:</h4><h1><strong>" + obj[i].Bowls + "</strong></h1>";
        }

        
                
                document.getElementById("bowls").innerHTML = addCommas(output);
                 
            },
            error: function (e) {
                alert('fail');
            }
        });
        
       
        
         
    