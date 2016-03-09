
   

//var myDate = new Date("2013-08-07T10:02:40.673");
//var myDate = new Date("2013-08-07T10:02:40.673");
//document.write((myDate.getHours()) + ":" + (myDate.getMinutes()<10?'0':'') + myDate.getMinutes());
//document.write("<br/>");
//document.write((myDate.getMonth() + 1) + "/" + myDate.getDate() + "/" + myDate.getFullYear());






   
       $.ajax({
            async: false,
            url: "http://api.visalus.com/ITReporting/SalesAnalytics/GetDataBySP/?SPName=usp_Promo_Magazine_August_Web_RisingStar_JSONP&?",
            type: 'GET',
            dataType: 'jsonp',
            success: function (data) {
                var result = JSON.stringify(data);
                //alert(result);
                var obj = jQuery.parseJSON(result);
                
        for (var i in obj) {
        
        var myDate = new Date(obj[i].LastUpdate);
        var hours = myDate.getHours();
        var ampm = hours >= 12 ? 'p.m.' : 'a.m.';
            output= "<p>Updated: "+ myDate.getHours() + ":" + (myDate.getMinutes()<10?'0':'') + myDate.getMinutes() + "&nbsp;" +ampm +" PST</p>";
        }

        
                
                document.getElementById("updated").innerHTML = (output);
            },
            error: function (e) {
                alert('fail');
            }
        });
 
  
  
 
    
  
  // obj[i].LastUpdate
  
  
 // obj[i].LastUpdate.getHours()) + ":" + (obj[i].LastUpdate.getMinutes()<10?'0':'') + obj[i].LastUpdate.getMinutes()