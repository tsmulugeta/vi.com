
    //updated
    
    
       $.ajax({
            async: false,
            url: "http://api.visalus.com/ITReporting/SalesAnalytics/GetDataBySP/?SPName=usp_Promo_Ambassador_Influencer_JSONP&?",
            type: 'GET',
            dataType: 'jsonp',
            success: function (data) {
                var result = JSON.stringify(data);
                //alert(result);
                var obj = jQuery.parseJSON(result);
                
        for (var i in obj) {
        
        var myDate = new Date(obj[i].LastUpdate);
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

    
    // sort results
  
    
    
    // influencer based on total
    
    $.ajax({
            async: false,
            url: "http://api.visalus.com/ITReporting/SalesAnalytics/GetDataBySP/?SPName=usp_Promo_Ambassador_Influencer_JSONP&?",
            type: 'GET',
            dataType: 'jsonp',
            success: function (data) {
                var result = JSON.stringify(data);
                //alert(result);
                var obj = jQuery.parseJSON(result);
                var output="<table cellspacing='5' cellpadding='5' class='standings-table' width='100%'><tr class='head'><td align='center'>Rank</td><td>Name</td><td align='center'>Goal</td><td align='center'>Personally Enrolled</td><td align='center'>Open line AMB Enroller Tree</td></tr>";
        
        for (var i in obj) {
            output+="<tr><td align='center'>" + obj[i].Rank +  "</td><td>" + obj[i].AmbassadorName +  "</td><td align='center'>" + obj[i].PersonallyEnrolledGoal +  "</td><td align='center'>" + obj[i].PersonallyEnrolledPromoters + "</td><td align='center'>" + obj[i].OpenlineAmbassadorTotalPromoters + "</td></tr>";
        }

        output+="</table>";
                
                document.getElementById("influencer").innerHTML = output;
                 
            },
            error: function (e) {
                alert('fail');
            }
        });
        
        
          // influencer based on personally enrolled
    
    $.ajax({
            async: false,
            url: "http://api.visalus.com/ITReporting/SalesAnalytics/GetDataBySP/?SPName=usp_Promo_Ambassador_Influencer_JSONP&?",
            type: 'GET',
            dataType: 'jsonp',
            success: function (data) {
                var result = JSON.stringify(data);
                //alert(result);
                var obj = jQuery.parseJSON(result);
                
                    
                var output="<table cellspacing='5' cellpadding='5' class='standings-table' width='100%'><tr class='head'><td align='center'>Rank</td><td>Name</td><td align='center'>Goal</td><td align='center'>Personally Enrolled</td><td align='center'>Open line AMB Enroller Tree</td></tr>";
        for (var i in obj) {
            output+="<tr><td align='center'>" + obj[i].Rank +  "</td><td>" + obj[i].AmbassadorName +  "</td><td align='center'>" + obj[i].PersonallyEnrolledGoal +  "</td><td align='center'>" + obj[i].PersonallyEnrolledPromoters + "</td><td align='center'>" + obj[i].OpenlineAmbassadorTotalPromoters + "</td></tr>";
        }

        output+="</table>";
                
                document.getElementById("influencer-enrolled").innerHTML = (output);
                 
            },
            error: function (e) {
                alert('fail');
            }
        });
        
      
        
         
    