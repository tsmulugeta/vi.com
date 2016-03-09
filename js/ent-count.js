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
            url: "http://api.visalus.com/ITReporting/SalesAnalytics/GetDataBySP/?SPName=usp_PROMO_ViCrunch3FF_EntrepCount_JSON&?",
            type: 'GET',
            dataType: 'jsonp',
            success: function (data) {
                var result = JSON.stringify(data);
                //alert(result);
                var obj = jQuery.parseJSON(result);
                var output="";
        for (var i in obj) {
            output+="<h3>Congratulations to our " + obj[i].EntrepCount + " V<span class='case-lower'>i</span> Crunch Cereal Entrepreneurs</h3>";
        }

        
                
                document.getElementById("entcount").innerHTML = addCommas(output);
                 
            },
            error: function (e) {
                alert('fail');
            }
        });
        
       
        
         
    