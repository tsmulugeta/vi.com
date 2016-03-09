<!doctype>
<html>
<head>
 
</head>
<body>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.8.2.js"></script>
    <script type="text/javascript">
        $(function () {
            var msgCounTimer = setInterval(getData, 2000);
            function getData() {
                var strURL = 'http://208.81.179.200/SMS/GetCount.aspx?';
                $.getJSON(strURL + 'callback=?', jsonp_callback);
            }
            function jsonp_callback(data) {
                $('#divResolutionCounter').html(data.Count);
            }
        });
    </script>
 
<div id="divResolutionCounter">
</div>  
  
  </body>
  
  </html>