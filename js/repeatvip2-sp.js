 // nstparty standings 2star
    
    $.ajax({
            async: false,
            url: "http://api.visalus.com/ITReporting/SalesAnalytics/GetDataBySP/?SPName=usp_Promo_RepeatVIP_JSON&?",
            type: 'GET',
            dataType: 'jsonp',
            success: function (data) {
                var result = JSON.stringify(data);
                //alert(result);
                var obj = jQuery.parseJSON(result);
                var output="<table cellspacing='5' cellpadding='5' class='standings-table' width='100%'><tr class='head'><td>Nivel</td><td align='center'>País</td><td>Nombre</td><td>Locación</td><td align='center'>Fecha de Calificación</td></tr>";
        for (var i in obj) {
        var myDate = new Date(obj[i].QualifiedDate + 'Z');
        
            output+="<tr><td align='center'>" + obj[i].Rank + "</td><td align='center'>" + "<img src='http://visalus.com/sites/default/files/promotions/icon/" + obj[i].MainCountry + ".jpg'>" + "</td><td>" + obj[i].Name + "</td><td>" + obj[i].Location + "</td><td align='center'>" + (myDate.getMonth() + 1) + "-" + myDate.getDate() + "-" + "2013" +"</td></tr>";
        }

        output+="</table>";
                
                document.getElementById("repeatvip").innerHTML = output;
                 
            },
            error: function (e) {
                alert('fail');
            }
        });
        


 