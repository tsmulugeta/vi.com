
   

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
            url: "http://api.visalus.com/ITReporting/SalesAnalytics/getdatabysp?spname=usp_PROMO_VidefyUnitCounter_June2013&?",
            type: 'GET',
            dataType: 'jsonp',
            success: function (data) {
                var result = JSON.stringify(data);
                //alert(result);
                var obj = jQuery.parseJSON(result);
                
        for (var i in obj) {
            output= "<h3 class='green-text bold'>ONLY "+ obj[i].Remaining_Videfy + " V<span class='case-lower'>i</span>-DEFY BOXES LEFT!</h3>";
        }

        
                
                document.getElementById("videfy").innerHTML = addCommas(output);
            },
            error: function (e) {
                alert('fail');
            }
        });
 
  
  
 
    
  
  