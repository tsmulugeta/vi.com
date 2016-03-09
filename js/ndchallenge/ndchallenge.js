   // nd
   
   $.ajax({
            async: false,
            url: "https://api.visalus.com/ITReporting/SalesAnalytics/GetDataBySp?spname=usp_Jan2014_EPSGrowth_ND_JSONP&?",
            type: 'GET',
            dataType: 'jsonp',
            success: function (data) {
                var result = JSON.stringify(data);
                //alert(result);
                var obj = jQuery.parseJSON(result);
                var output="<h4>Number of EPS is based on Open-line ND</h4><table cellspacing='5' cellpadding='5' class='standings-table' width='100%'><tr class='head'><td align='center'>Position</td><td align='center'>Country</td><td>Name</td><td>High Rank</td><td align='center'>EPS</td></tr>";
        for (var i in obj) {
        var myDate = new Date(obj[i].QualifiedDate + 'Z');
        
            output+="<tr><td align='center'>" + obj[i].Ranking + "</td><td align='center'>" + "<img src='http://visalus.com/sites/default/files/promotions/icon/" + obj[i].Country + ".jpg'>" + "</td><td>" + obj[i].Name + "</td><td>" + obj[i].HighRank + "</td><td align='center'>" + obj[i].EPSCount +"</td></tr>";
        }

        output+="</table>";
                
                document.getElementById("epsnd").innerHTML = output;
                 
            },
            error: function (e) {
                alert('fail');
            }
        });
        

 
 //pd
 
   $.ajax({
            async: false,
            url: "https://api.visalus.com/ITReporting/SalesAnalytics/GetDataBySp?spname=usp_Jan2014_EPSGrowth_PD_JSONP&?",
            type: 'GET',
            dataType: 'jsonp',
            success: function (data) {
                var result = JSON.stringify(data);
                //alert(result);
                var obj = jQuery.parseJSON(result);
                var output="<h4>Number of EPS is based on Open-line PD</h4><table cellspacing='5' cellpadding='5' class='standings-table' width='100%'><tr class='head'><td align='center'>Position</td><td align='center'>Country</td><td>Name</td><td>High Rank</td><td align='center'>EPS</td></tr>";
        for (var i in obj) {
        var myDate = new Date(obj[i].QualifiedDate + 'Z');
        
            output+="<tr><td align='center'>" + obj[i].Ranking + "</td><td align='center'>" + "<img src='http://visalus.com/sites/default/files/promotions/icon/" + obj[i].Country + ".jpg'>" + "</td><td>" + obj[i].Name + "</td><td>" + obj[i].HighRank + "</td><td align='center'>" + obj[i].EPSCount +"</td></tr>";
        }

        output+="</table>";
                
                document.getElementById("epspd").innerHTML = output;
                 
            },
            error: function (e) {
                alert('fail');
            }
        });
        


 //amb
 
   $.ajax({
            async: false,
            url: "https://api.visalus.com/ITReporting/SalesAnalytics/GetDataBySp?spname=usp_Jan2014_EPSGrowth_AMB_JSONP&?",
            type: 'GET',
            dataType: 'jsonp',
            success: function (data) {
                var result = JSON.stringify(data);
                //alert(result);
                var obj = jQuery.parseJSON(result);
                var output="<h4>Number of EPS is based on Open-line AMB</h4><table cellspacing='5' cellpadding='5' class='standings-table' width='100%'><tr class='head'><td align='center'>Position</td><td align='center'>Country</td><td>Name</td><td>High Rank</td><td align='center'>EPS</td></tr>";
        for (var i in obj) {
        var myDate = new Date(obj[i].QualifiedDate + 'Z');
        
            output+="<tr><td align='center'>" + obj[i].Ranking + "</td><td align='center'>" + "<img src='http://visalus.com/sites/default/files/promotions/icon/" + obj[i].Country + ".jpg'>" + "</td><td>" + obj[i].Name + "</td><td>" + obj[i].HighRank + "</td><td align='center'>" + obj[i].EPSCount +"</td></tr>";
        }

        output+="</table>";
                
                document.getElementById("epsamb").innerHTML = output;
                 
            },
            error: function (e) {
                alert('fail');
            }
        });
        


 
 
 
 
 // 5 star
    
    $.ajax({
            async: false,
            url: "https://api.visalus.com/ITReporting/SalesAnalytics/GetDataBySp?spname=usp_Jan2014_EPSGrowth_5StarAMB_JSONP&?",
            type: 'GET',
            dataType: 'jsonp',
            success: function (data) {
                var result = JSON.stringify(data);
                //alert(result);
                var obj = jQuery.parseJSON(result);
                var output="<h4>Number of EPS is based on Open-line 5 Star AMB</h4><table cellspacing='5' cellpadding='5' class='standings-table' width='100%'><tr class='head'><td align='center'>Position</td><td align='center'>Country</td><td>Name</td><td>High Rank</td><td align='center'>EPS</td></tr>";
        for (var i in obj) {
        var myDate = new Date(obj[i].QualifiedDate + 'Z');
        
            output+="<tr><td align='center'>" + obj[i].Ranking + "</td><td align='center'>" + "<img src='http://visalus.com/sites/default/files/promotions/icon/" + obj[i].Country + ".jpg'>" + "</td><td>" + obj[i].Name + "</td><td>" + obj[i].HighRank + "</td><td align='center'>" + obj[i].EPSCount +"</td></tr>";
        }

        output+="</table>";
                
                document.getElementById("fivestar").innerHTML = output;
                 
            },
            error: function (e) {
                alert('fail');
            }
        });
        


// total count

 
    
    $.ajax({
            async: false,
            url: "https://api.visalus.com/ITReporting/SalesAnalytics/GetDataBySp?spname=usp_Jan2014_EPSGrowth_Total_JSONP&?",
            type: 'GET',
            dataType: 'jsonp',
            success: function (data) {
                var result = JSON.stringify(data);
                //alert(result);
                var obj = jQuery.parseJSON(result);
                var output="<h1><strong>";
        for (var i in obj) {
        var myDate = new Date(obj[i].QualifiedDate + 'Z');
        
            output+="" + obj[i].Total + "</strong></h1>";
        }

        output+="</table>";
                
                document.getElementById("count").innerHTML = output;
                 
            },
            error: function (e) {
                alert('fail');
            }
        });
        


 