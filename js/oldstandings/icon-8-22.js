
    // rising star
    
    $.ajax({
            async: false,
            url: "http://api.visalus.com/ITReporting/SalesAnalytics/GetDataBySP/?SPName=usp_Promo_Magazine_August_Web_RisingStar_JSONP&?",
            type: 'GET',
            dataType: 'jsonp',
            success: function (data) {
                var result = JSON.stringify(data);
                //alert(result);
                var obj = jQuery.parseJSON(result);
                var output= "<div class='grid-10 alpha'></div><div class='grid-2 omega'><strong>Total Qualified: " +obj[0].TotalQualified + "</strong></div><div class='grid-12 alpha omega'><table class='standings-table' width='100%'><tr class='head'><td align='center'>Rank</td><td>Name</td><td align='center'>Points Behind Leader</td><td>Trending*</td><td align='center'>Total Points</td><td align='center'>Qualified to Advance</td></tr>";
        for (var i in obj) {
            output+="<tr><td align='center'>" + obj[i].Rank +  "</td><td>" + obj[i].FirstName + "&nbsp;" + obj[i].LastName + "</td><td align='center'>" + obj[i].PointsBehindLeader + "</td><td align='center'><div class='" + obj[i].Trending + "'></div></td><td align='center'>"  + obj[i].TotalPoints + "</td><td align='center'>" + obj[i].MetPoints + "</td></tr>";
        }

        output+="</table><small>*Trend based on difference between previous and current days rank<br />* Qualified to move to September Round 2</small></div>";
                
                document.getElementById("risingstar").innerHTML = output;
                 
            },
            error: function (e) {
                alert('fail');
            }
        });
        
        //rising star end
        
          // regional director
    
    $.ajax({
            async: false,
            url: "http://api.visalus.com/ITReporting/SalesAnalytics/GetDataBySP/?SPName=usp_Promo_Magazine_August_Web_RegionalDirector_JSONP&?",
            type: 'GET',
            dataType: 'jsonp',
            success: function (data) {
                var result = JSON.stringify(data);
                //alert(result);
                var obj = jQuery.parseJSON(result);
                var output="<div class='grid-10 alpha'></div><div class='grid-2 omega'><strong>Total Qualified: " +obj[0].TotalQualified + "</strong></div><div class='grid-12 alpha omega'><table class='standings-table' width='100%'><tr class='head'><td>Rank</td><td>Name</td><td align='center'>Points Behind Leader</td><td align='center'>Trending*</td><td align='center'>Total Points</td><td align='center'>Qualified to Advance</td></tr>";
        for (var i in obj) {
            output+="<tr><td align='center'>" + obj[i].Rank +  "</td><td>" + obj[i].FirstName + "&nbsp;" + obj[i].LastName + "</td><td align='center'>" + obj[i].PointsBehindLeader + "</td><td align='center'><div class='" + obj[i].Trending + "'></div></td><td align='center'>"  + obj[i].TotalPoints + "</td><td align='center'>" + obj[i].MetPoints + "</td></tr>";
        }

        output+="</table><small>*Trend based on difference between previous and current days rank<br />* Qualified to move to September Round 2</small></div>";
                
                document.getElementById("regionaldirector").innerHTML = output;
                 
            },
            error: function (e) {
                alert('fail');
            }
        });        
        //regional director end
 
 
   // national director
    
    $.ajax({
            async: false,
            url: "http://api.visalus.com/ITReporting/SalesAnalytics/GetDataBySP/?SPName=usp_Promo_Magazine_August_Web_NationalDirector_JSONP&?",
            type: 'GET',
            dataType: 'jsonp',
            success: function (data) {
                var result = JSON.stringify(data);
                //alert(result);
                var obj = jQuery.parseJSON(result);
                var output="<div class='grid-10 alpha'></div><div class='grid-2 omega'><strong>Total Qualified: " +obj[0].TotalQualified + "</strong></div><div class='grid-12 alpha omega'><table class='standings-table' width='100%'><tr class='head'><td align='center'>Rank</td><td>Name</td><td align='center'>Points Behind Leader</td><td align='center'>Trending*</td><td align='center'>Total Points</td><td align='center'>Qualified to Advance</td></tr>";
        for (var i in obj) {
            output+="<tr><td align='center'>" + obj[i].Rank +  "</td><td>" + obj[i].FirstName + "&nbsp;" + obj[i].LastName + "</td><td align='center'>" + obj[i].PointsBehindLeader + "</td><td align='center'><div class='" + obj[i].Trending + "'></div></td><td align='center'>"  + obj[i].TotalPoints + "</td><td align='center'>" + obj[i].MetPoints + "</td></tr>";
        }

        output+="</table><small>*Trend based on difference between previous and current days rank<br />* Qualified to move to September Round 2</small></div>";
                
                document.getElementById("nationaldirector").innerHTML = output;
                 
            },
            error: function (e) {
                alert('fail');
            }
        });        
        //national director end
        
        
         // presidential director
    
     $.ajax({
            async: false,
            url: "http://api.visalus.com/ITReporting/SalesAnalytics/GetDataBySP/?SPName=usp_Promo_Magazine_August_Web_PresidentialDirector_JSONP&?",
            type: 'GET',
            dataType: 'jsonp',
            success: function (data) {
                var result = JSON.stringify(data);
                //alert(result);
                var obj = jQuery.parseJSON(result);
                var output="<div class='grid-10 alpha'></div><div class='grid-2 omega'><strong>Total Qualified: " +obj[0].TotalQualified + "</strong></div><div class='grid-12 alpha omega'><table class='standings-table' width='100%'><tr class='head'><td align='center'>Rank</td><td>Name</td><td align='center'>Points Behind Leader</td><td align='center'>Trending*</td><td align='center'>Total Points</td><td align='center'>Qualified to Advance</td></tr>";
        for (var i in obj) {
            output+="<tr><td align='center'>" + obj[i].Rank +  "</td><td>" + obj[i].FirstName + "&nbsp;" + obj[i].LastName + "</td><td align='center'>" + obj[i].PointsBehindLeader + "</td><td align='center'><div class='" + obj[i].Trending + "'></div></td><td align='center'>"  + obj[i].TotalPoints + "</td><td align='center'>" + obj[i].MetPoints + "</td></tr>";
        }

        output+="</table><small>*Trend based on difference between previous and current days rank<br />* Qualified to move to September Round 2</small></div>";
                
                document.getElementById("presidentialdirector").innerHTML = output;
                 
            },
            error: function (e) {
                alert('fail');
            }
        });        
        //presidential director end
        
         // amb to 2 star
    
     $.ajax({
            async: false,
            url: "http://api.visalus.com/ITReporting/SalesAnalytics/GetDataBySP/?SPName=usp_Promo_Magazine_August_Web_AmbassadorTo2Star_JSONP&?",
            type: 'GET',
            dataType: 'jsonp',
            success: function (data) {
                var result = JSON.stringify(data);
                //alert(result);
                var obj = jQuery.parseJSON(result);
                var output="<div class='grid-10 alpha'></div><div class='grid-2 omega'><strong>Total Qualified: " +obj[0].TotalQualified + "</strong></div><div class='grid-12 alpha omega'><table class='standings-table' width='100%'><tr class='head'><td align='center'>Rank</td><td>Name</td><td align='center'>Points Behind Leader</td><td align='center'>Trending*</td><td align='center'>Total Points</td><td align='center'>Qualified to Advance</td></tr>";
        for (var i in obj) {
            output+="<tr><td align='center'>" + obj[i].Rank +  "</td><td>" + obj[i].FirstName + "&nbsp;" + obj[i].LastName + "</td><td align='center'>" + obj[i].PointsBehindLeader + "</td><td align='center'><div class='" + obj[i].Trending + "'></div></td><td align='center'>"  + obj[i].TotalPoints + "</td><td align='center'>" + obj[i].MetPoints + "</td></tr>";
        }

        output+="</table><small>*Trend based on difference between previous and current days rank<br />* Qualified to move to September Round 2</small></div>";
                
                document.getElementById("amb2star").innerHTML = output;
                 
            },
            error: function (e) {
                alert('fail');
            }
        });
        
        //amd to 2 star end
        
        
         // 3 star to 5 star
    
     $.ajax({
            async: false,
            url: "http://api.visalus.com/ITReporting/SalesAnalytics/GetDataBySP/?SPName=usp_Promo_Magazine_August_Web_3StarTo5StarAmbassador_JSONP&?",
            type: 'GET',
            dataType: 'jsonp',
            success: function (data) {
                var result = JSON.stringify(data);
                //alert(result);
                var obj = jQuery.parseJSON(result);
                var output="<div class='grid-10 alpha'></div><div class='grid-2 omega'><strong>Total Qualified: " +obj[0].TotalQualified + "</strong></div><div class='grid-12 alpha omega'><table class='standings-table' width='100%'><tr class='head'><td align='center'>Rank</td><td>Name</td><td align='center'>Points Behind Leader</td><td align='center'>Trending*</td><td align='center'>Total Points</td><td align='center'>Qualified to Advance</td></tr>";
        for (var i in obj) {
            output+="<tr><td align='center'>" + obj[i].Rank +  "</td><td>" + obj[i].FirstName + "&nbsp;" + obj[i].LastName + "</td><td align='center'>" + obj[i].PointsBehindLeader + "</td><td align='center'><div class='" + obj[i].Trending + "'></div></td><td align='center'>"  + obj[i].TotalPoints + "</td><td align='center'>" + obj[i].MetPoints + "</td></tr>";
        }

        output+="</table><small>*Trend based on difference between previous and current days rank <br />* Qualified to move to September Round 2</small></div>";
                
                document.getElementById("3starto5star").innerHTML = output;
                 
            },
            error: function (e) {
                alert('fail');
            }
        });
        
        //3 star to 5 star end
 
 
 
    