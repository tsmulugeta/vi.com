// director standings
   
    $.ajax({
            async: false,
            url: "http://api.visalus.com/ITReporting/SalesAnalytics/GetDataBySP/?SPName=usp_CashInAtCheckIn_NewDirectors&?",
            type: 'GET',
            dataType: 'jsonp',
            success: function (data) {
                var result = JSON.stringify(data);
                //alert(result);
                var obj = jQuery.parseJSON(result);
                var output="<table width='100%' class='standings-table'><tr class='header'><td>Nombre</td><td>Ciudad</td></tr>";
        for (var i in obj) {
            output+="<tr><td>" + obj[i].Name + "</td><td>" + obj[i].MainCity + ", " + obj[i].MainState +"</td></tr>";
        }

        output+="</table>";
                
                document.getElementById("director").innerHTML = output;
            },
            error: function (e) {
                alert('fail');
            }
        });
 
     
  
  // amb standings
  
   
    $.ajax({
            async: false,
            url: "http://api.visalus.com/ITReporting/SalesAnalytics/GetDataBySP/?SPName=usp_CashInAtCheckIn_JSON_AMB&?",
            type: 'GET',
            dataType: 'jsonp',
            success: function (data) {
                var result = JSON.stringify(data);
                //alert(result);
                var obj = jQuery.parseJSON(result);
                var output="<table width='100%' class='standings-table'><tr class='header'><td>Rango</td><td>Nombre</td><td>Points</td><td>Mínimo conseguido</td></tr>";
        for (var i in obj) {
            output+="<tr class=" + obj[i].MetMin + "><td>" + obj[i].Ranking + "</td><td>" + obj[i].Name + "</td><td>" + obj[i].Points + "</td><td>"  + obj[i].MetMin + "</td></tr>";
        }

        output+="</table>";
                
                document.getElementById("placeholderamb").innerHTML = output;
            },
            error: function (e) {
                alert('fail');
            }
        });
 
    
 
    //pd standings
    
    
    
    $.ajax({
            async: false,
            url: "http://api.visalus.com/ITReporting/SalesAnalytics/GetDataBySP/?SPName=usp_CashInAtCheckIn_JSON_PD&?",
            type: 'GET',
            dataType: 'jsonp',
            success: function (data) {
                var result = JSON.stringify(data);
                //alert(result);
                var obj = jQuery.parseJSON(result);
                var output="<table width='100%' class='standings-table'><tr class='header'><td>Rango</td><td>Nombre</td><td>Puntos</td><td>Mínimo conseguido </td></tr>";
        for (var i in obj) {
            output+="<tr class=" + obj[i].MetMin + "><td>" + obj[i].Ranking + "</td><td>" + obj[i].Name + "</td><td>" + obj[i].Points + "</td><td>"  + obj[i].MetMin + "</td></tr>";
        }

        output+="</table>";
                
                document.getElementById("placeholderpd").innerHTML = output;
            },
            error: function (e) {
                alert('fail');
            }
        });
 
   
 
    //nd standings
  
  
    $.ajax({
            async: false,
            url: "http://api.visalus.com/ITReporting/SalesAnalytics/GetDataBySP/?SPName=usp_CashInAtCheckIn_JSON_ND&?",
            type: 'GET',
            dataType: 'jsonp',
            success: function (data) {
                var result = JSON.stringify(data);
                //alert(result);
                var obj = jQuery.parseJSON(result);
                var output="<table width='100%' class='standings-table'><tr class='header'><td>Rango</td><td>Nombre</td><td>Puntos</td><td>Mínimo conseguido </td></tr>";
        for (var i in obj) {
            output+="<tr class=" + obj[i].MetMin + "><td>" + obj[i].Ranking + "</td><td>" + obj[i].Name + "</td><td>" + obj[i].Points + "</td><td>"  + obj[i].MetMin + "</td></tr>";
        }

        output+="</table>";
                
                document.getElementById("placeholdernd").innerHTML = output;
            },
            error: function (e) {
                alert('fail');
            }
        });
 
   
    //rd standings
     
       
    $.ajax({
            async: false,
            url: "http://api.visalus.com/ITReporting/SalesAnalytics/GetDataBySP/?SPName=usp_CashInAtCheckIn_JSON_RD&?",
            type: 'GET',
            dataType: 'jsonp',
            success: function (data) {
                var result = JSON.stringify(data);
                //alert(result);
                var obj = jQuery.parseJSON(result);
                var output="<table width='100%' class='standings-table'><tr class='header'><td>Rango</td><td>Nombre</td><td>Points</td><td>Mínimo conseguido</td></tr>";
        for (var i in obj) {
            output+="<tr class=" + obj[i].MetMin + "><td>" + obj[i].Ranking + "</td><td>" + obj[i].Name + "</td><td>" + obj[i].Points + "</td><td>"  + obj[i].MetMin + "</td></tr>";
        }

        output+="</table>";
                
                document.getElementById("placeholderrd").innerHTML = output;
            },
            error: function (e) {
                alert('fail');
            }
        });
 
    
 
    