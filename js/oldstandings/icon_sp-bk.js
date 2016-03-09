
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
                var output="<table class='standings-table' width='100%'><tr class='head'><td>Rango</td><td>Nombre</td><td>Puntos detrás del líder </td><td>Tendencia*</td><td>Total Points</td></tr>";
        for (var i in obj) {
            output+="<tr><td>" + obj[i].Rank +  "</td><td>" + obj[i].FirstName + "&nbsp;" + obj[i].LastName + "</td><td>" + obj[i].PointsBehindLeader + "</td><td align='center'><div class='" + obj[i].Trending + "'></div></td><td>"  + obj[i].TotalPoints + "</td></tr>";
        }

        output+="</table><small>Tendencia con base en la diferencia entre el rango de los días anteriores y actuales </small>";
                
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
                var output="<table class='standings-table' width='100%'><tr class='head'><td>Rango</td><td>Nombre</td><td>Puntos detrás del líder </td><td>Tendencia*</td><td>Total Points</td></tr>";
        for (var i in obj) {
            output+="<tr><td>" + obj[i].Rank +  "</td><td>" + obj[i].FirstName + "&nbsp;" + obj[i].LastName + "</td><td>" + obj[i].PointsBehindLeader + "</td><td align='center'><div class='" + obj[i].Trending + "'></div></td><td>"  + obj[i].TotalPoints + "</td></tr>";
        }

        output+="</table><small>Tendencia con base en la diferencia entre el rango de los días anteriores y actuales </small>";
                
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
                var output="<table class='standings-table' width='100%'><tr class='head'><td>Rango</td><td>Nombre</td><td>Puntos detrás del líder </td><td>Tendencia*</td><td>Total Points</td></tr>";
        for (var i in obj) {
            output+="<tr><td>" + obj[i].Rank +  "</td><td>" + obj[i].FirstName + "&nbsp;" + obj[i].LastName + "</td><td>" + obj[i].PointsBehindLeader + "</td><td align='center'><div class='" + obj[i].Trending + "'></div></td><td>"  + obj[i].TotalPoints + "</td></tr>";
        }

        output+="</table><small>Tendencia con base en la diferencia entre el rango de los días anteriores y actuales </small>";
                
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
                var output="<table class='standings-table' width='100%'><tr class='head'><td>Rango</td><td>Nombre</td><td>Puntos detrás del líder </td><td>Tendencia*</td><td>Total Points</td></tr>";
        for (var i in obj) {
            output+="<tr><td>" + obj[i].Rank +  "</td><td>" + obj[i].FirstName + "&nbsp;" + obj[i].LastName + "</td><td>" + obj[i].PointsBehindLeader + "</td><td align='center'><div class='" + obj[i].Trending + "'></div></td><td>"  + obj[i].TotalPoints + "</td></tr>";
        }

        output+="</table><small>Tendencia con base en la diferencia entre el rango de los días anteriores y actuales </small>";
                
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
                var output="<table class='standings-table' width='100%'><tr class='head'><td>Rango</td><td>Nombre</td><td>Puntos detrás del líder </td><td>Tendencia*</td><td>Total Points</td></tr>";
        for (var i in obj) {
            output+="<tr><td>" + obj[i].Rank +  "</td><td>" + obj[i].FirstName + "&nbsp;" + obj[i].LastName + "</td><td>" + obj[i].PointsBehindLeader + "</td><td align='center'><div class='" + obj[i].Trending + "'></div></td><td>"  + obj[i].TotalPoints + "</td></tr>";
        }

        output+="</table><small>Tendencia con base en la diferencia entre el rango de los días anteriores y actuales </small>";
                
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
                var output="<table class='standings-table' width='100%'><tr class='head'><td>Rango</td><td>Nombre</td><td>Puntos detrás del líder </td><td>Tendencia*</td><td>Total Points</td></tr>";
        for (var i in obj) {
            output+="<tr><td>" + obj[i].Rank +  "</td><td>" + obj[i].FirstName + "&nbsp;" + obj[i].LastName + "</td><td>" + obj[i].PointsBehindLeader + "</td><td align='center'><div class='" + obj[i].Trending + "'></div></td><td>"  + obj[i].TotalPoints + "</td></tr>";
        }

        output+="</table><small>Tendencia con base en la diferencia entre el rango de los días anteriores y actuales </small>";
                
                document.getElementById("3starto5star").innerHTML = output;
                 
            },
            error: function (e) {
                alert('fail');
            }
        });
        
        //3 star to 5 star end
 
 
 
    