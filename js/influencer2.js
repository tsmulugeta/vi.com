
    //date last updated
    
    
       $.ajax({
            async: false,
            url: "http://api.visalus.com/ITReporting/SalesAnalytics/GetDataBySP/?SPName=usp_Promo_Ambassador_Influencer_Aug1st2013_Nov15th2013_JSONP&?",
            type: 'GET',
            dataType: 'jsonp',
            success: function (data) {
                var result = JSON.stringify(data);
                //alert(result);
                var obj = jQuery.parseJSON(result);
                
        for (var i in obj) {
        
        var myDate = new Date(obj[i].LastUpdate + 'Z');
        var hours = myDate.getHours();
        var month = myDate.getMonth() + 1;
        var day = myDate.getDate();
        
         
        var ampm = hours >= 12 ? 'p.m.' : 'a.m.';
            output= "<p><strong>Updated: "+ myDate.getHours() + ":" + (myDate.getMinutes()<10?'0':'') + myDate.getMinutes() + "&nbsp;" +ampm + "&nbsp;" + month + "/" + day + "/" + "2013" +" EST. Updated every hour</strong></p>";
        }

        
                
                document.getElementById("updated").innerHTML = (output);
            },
            error: function (e) {
                alert('fail');
            }
        });

    
    
    
    
    // influencer standings
    
    $.ajax({
            async: false,
            url: "http://api.visalus.com/ITReporting/SalesAnalytics/GetDataBySP/?SPName=usp_Promo_Ambassador_Influencer_JSONP&?",
            type: 'GET',
            dataType: 'jsonp',
            success: function (data) {
                var result = JSON.stringify(data);
                //alert(result);
                var obj = jQuery.parseJSON(result);
                var output="<table cellspacing='5' cellpadding='5' class='standings-table' width='100%'><tr class='head'><td align='center'>Rank</td><td>Name</td><!-- <td align='center'>Goal</td>--><td align='center'><a class='underline' href='http://www.visalus.com/personally-enrolled'>Personally Enrolled</a></td><td align='center'>Personally Enrolled Rising Stars</td><td align='center'><a class='underline' href='http://www.visalus.com/influencer-standings-page'>Personally Enrolled Team</a></td></tr>";
        for (var i in obj) {
            output+="<tr><td align='center'>" + obj[i].Rank +  "</td><td>" + obj[i].AmbassadorName +  "</td><td align='center'>" + obj[i].PersonallyEnrolledPromoters + "</td><td align='center'>" + obj[i].PersonallyEnrolledRisingStars +"</td><td align='center'>" + obj[i].OpenlineAmbassadorTotalPromoters + "</td></tr>";
        }

        output+="</table>";
                
                document.getElementById("influencer").innerHTML = output;
                 
            },
            error: function (e) {
                alert('fail');
            }
        });
        
      
        
         
    