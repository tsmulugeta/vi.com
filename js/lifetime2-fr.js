 // lifetime standings
    
    $.ajax({
            async: false,
            url: "http://api.visalus.com/ITReporting/SalesAnalytics/GetDataBySP/?SPName=usp_NumOfPersonallyEnrolledPromoters&?",
            type: 'GET',
            dataType: 'jsonp',
            success: function (data) {
                var result = JSON.stringify(data);
                //alert(result);
                var obj = jQuery.parseJSON(result);
                var output="<table class='standings-table' ><tr class='head'><td>Nom</td><td align='center'>Haut Rang</td><td align='center'>Ville, état/province</td><td align='center'>Pays principal</td><td align='center'>Nombre de promoteurs inscrits</td><td align='center'>Nombre de Rising Stars inscrites</td></tr>";
        for (var i in obj) {
            output+="<tr><td>" + obj[i].EnrollerName +  "</td><td align='center'>" + obj[i].HighRank + "</td><td align='center'>" + obj[i].CityState + "</td><td align='center'>" + obj[i].MainCountry + "</td><td align='center'>" + obj[i].NumOfErolledPromoters + "</td><td align='center'>" + obj[i].NumOfEnrolledRS +"</td></tr>";
        }

        output+="</table>";
                
                document.getElementById("lifetime").innerHTML = output;
                 
            },
            error: function (e) {
                alert('fail');
            }
        });
        
