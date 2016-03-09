 // nstparty standings 2star
    
    $.ajax({
            async: false,
            url: "http://api.visalus.com/ITReporting/SalesAnalytics/GetDataBySP/?SPName=usp_Promo_NovNSTParty_Wrap_2Star&?",
            type: 'GET',
            dataType: 'jsonp',
            success: function (data) {
                var result = JSON.stringify(data);
                //alert(result);
                var obj = jQuery.parseJSON(result);
                var output="<table cellspacing='5' cellpadding='5' class='standings-table' width='100%'><tr class='head'><td>Nivel</td><td align='center'>País</td><td>Nombre</td><td>Ciudad/Estado</td><td align='center'>Puntos</td></tr>";
        for (var i in obj) {
            output+="<tr><td align='center'>" + obj[i].Rank + "</td><td align='center'>" + obj[i].Country + "</td><td >" + obj[i].FirstName + "&nbsp;" + obj[i].LastName + "</td><td>" + obj[i].CityState + "</td><td align='center'>" + obj[i].TotalPoints + "</td></tr>";
        }

        output+="</table>";
                
                document.getElementById("amb2star").innerHTML = output;
                 
            },
            error: function (e) {
                alert('fail');
            }
        });
        


 // nstparty standings 5star
    
    $.ajax({
            async: false,
            url: "http://api.visalus.com/ITReporting/SalesAnalytics/GetDataBySP/?SPName=usp_Promo_NovNSTParty_Wrap_5Star&?",
            type: 'GET',
            dataType: 'jsonp',
            success: function (data) {
                var result = JSON.stringify(data);
                //alert(result);
                var obj = jQuery.parseJSON(result);
                var output="<table cellspacing='5' cellpadding='5' class='standings-table' width='100%'><tr class='head'><td>Nivel</td><td align='center'>País</td><td>Nombre</td><td>Ciudad/Estado</td><td align='center'>Puntos</td></tr>";
        for (var i in obj) {
            output+="<tr><td align='center'>" + obj[i].Rank + "</td><td align='center'>" + obj[i].Country + "</td><td >" + obj[i].FirstName + "&nbsp;" + obj[i].LastName + "</td><td>" + obj[i].CityState + "</td><td align='center'>" + obj[i].TotalPoints + "</td></tr>";
        }

        output+="</table>";
                
                document.getElementById("amb5star").innerHTML = output;
                 
            },
            error: function (e) {
                alert('fail');
            }
        });
        
        
         // nstparty standings director
    
    $.ajax({
            async: false,
            url: "http://api.visalus.com/ITReporting/SalesAnalytics/GetDataBySP/?SPName=usp_Promo_NovNSTParty_Wrap_Director&?",
            type: 'GET',
            dataType: 'jsonp',
            success: function (data) {
                var result = JSON.stringify(data);
                //alert(result);
                var obj = jQuery.parseJSON(result);
                var output="<table cellspacing='5' cellpadding='5' class='standings-table' width='100%'><tr class='head'><td>Nivel</td><td align='center'>País</td><td>Nombre</td><td>Ciudad/Estado</td><td align='center'>Puntos</td></tr>";
        for (var i in obj) {
            output+="<tr><td align='center'>" + obj[i].Rank + "</td><td align='center'>" + obj[i].Country + "</td><td >" + obj[i].FirstName + "&nbsp;" + obj[i].LastName + "</td><td>" + obj[i].CityState + "</td><td align='center'>" + obj[i].TotalPoints + "</td></tr>";
        }

        output+="</table>";
                
                document.getElementById("director").innerHTML = output;
                 
            },
            error: function (e) {
                alert('fail');
            }
        });
        
        
         // nstparty standings PD
    
    $.ajax({
            async: false,
            url: "http://api.visalus.com/ITReporting/SalesAnalytics/GetDataBySP/?SPName=usp_Promo_NovNSTParty_Wrap_PD&?",
            type: 'GET',
            dataType: 'jsonp',
            success: function (data) {
                var result = JSON.stringify(data);
                //alert(result);
                var obj = jQuery.parseJSON(result);
                var output="<table cellspacing='5' cellpadding='5' class='standings-table' width='100%'><tr class='head'><td>Nivel</td><td align='center'>País</td><td>Nombre</td><td>Ciudad/Estado</td><td align='center'>Puntos</td></tr>";
        for (var i in obj) {
            output+="<tr><td align='center'>" + obj[i].Rank + "</td><td align='center'>" + obj[i].Country + "</td><td >" + obj[i].FirstName + "&nbsp;" + obj[i].LastName + "</td><td>" + obj[i].CityState + "</td><td align='center'>" + obj[i].TotalPoints + "</td></tr>";
        }

        output+="</table>";
                
                document.getElementById("pd").innerHTML = output;
                 
            },
            error: function (e) {
                alert('fail');
            }
        });
        