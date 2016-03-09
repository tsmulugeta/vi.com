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
                var output="<table cellspacing='5' cellpadding='5' class='standings-table' width='100%'><tr class='head'><td>Name</td><td align='center'>High Rank</td><td align='center'>City State</td><td align='center'>Main Country</td><td align='center'>Number of Enrolled Promoters</td></tr>";
        for (var i in obj  {
        
        
            output+="<tr><td>" + obj[i].RankCategoryID +  "</td><td align='center'>" + obj[i].HighRank + "</td><td align='center'>" + obj[i].CityState + "</td><td align='center'>" + obj[i].MainCountry + "</td><td align='center'>" + obj[i].NumOfErolledPromoters + "</td></tr>";
        }

        output+="</table>";
                
                document.getElementById("nstparty").innerHTML = output;
                 
            },
            error: function (e) {
                alert('fail');
            }
        });
        
