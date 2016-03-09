 // lifetime standings
    
    $.ajax({
            async: false,
            url: "http://api.visalus.com/ITReporting/SalesAnalytics/GetDataBySP/?SPName=usp_Promo_NovNSTParty_Wrap&?",
            type: 'GET',
            dataType: 'jsonp',
            success: function (data) {
                var result = JSON.stringify(data);
                //alert(result);
                var obj = jQuery.parseJSON(result);
                var output="<table cellspacing='5' cellpadding='5' class='standings-table' width='100%'><tr class='head'><td>Rank</td><td align='center'>Country</td><td align='center'>Name</td><td align='center'>City/State</td><td align='center'>Points</td></tr>";
        for (var i in obj) {
            output+="<tr><td>" + obj[i].Rank + "</td><td align='center'>" + obj[i].Country + "</td><td align='center'>" + obj[i].FirstName + "&nbsp;" + obj[i].LastName + "</td><td align='center'>" + obj[i].CityState + "</td><td align='center'>" + obj[i].TotalPoints + "</td></tr>";
        }

        output+="</table>";
                
                document.getElementById("party").innerHTML = output;
                 
            },
            error: function (e) {
                alert('fail');
            }
        });
        
