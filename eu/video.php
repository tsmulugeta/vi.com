<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Vi EU EXPANSION</title>
<meta name="description" content="At Vi&trade;" />
<meta name="keywords" content="vi, body by vi, community challenge" />
<meta name="author" content="Vi" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, maximum-scale=1.0" />
<title>Vi&trade;</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">


<link rel="stylesheet" href="../assets/css/reset.css" />
<link rel="stylesheet" href="../assets/css/style-newcountries-table.css" />
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">


		<link rel="stylesheet" href="colorbox.css" />


<style>
h1 {
    color: #74ad30;
    font-family: "Neuzeit";
    font-size: 28px;
    font-weight: bold;
    line-height: 28px;
}
</style>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

<!-- scroll script  -->
<script>
$(document).ready(function(){
    
});
</script>

<noscript>
<link rel="stylesheet" href="../assets/css/mobile.min.css" />
</noscript>




<script>
// Edit to suit your needs.
var ADAPT_CONFIG = {
  // Where is your CSS?
  path: '../assets/css/',

  // false = Only run once, when page first loads.
  // true = Change on window resize and page tilt.
  dynamic: true,

  // First range entry is the minimum.
  // Last range entry is the maximum.
  // Separate ranges by "to" keyword.
  range: [
    '0px    to 760px  = mobile.min.css',
    '760px  to 980px  = 720.min.css',
    '980px  to 1280px = 960.min.css',
    '1280px to 1600px = 960.min.css',
    '1600px to 1940px = 960.min.css',
    '1940px to 2540px = 960.min.css',
    '2540px           = 960.min.css'
  ]
};
</script>

<!-- responive for 960  -->
<script src="../assets/js/adapt.min.js"></script>


<!-- google  -->

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-972891-53']);
  _gaq.push(['_setDomainName', 'vi.com']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<!-- tracking  -->

<script src="../jquery.colorbox.js"></script>
		<script>
			$(document).ready(function(){
				//Examples of how to assign the Colorbox event to elements
				$(".group1").colorbox({rel:'group1'});
				$(".group2").colorbox({rel:'group2', transition:"fade"});
				$(".group3").colorbox({rel:'group3', transition:"none", width:"75%", height:"75%"});
				$(".group4").colorbox({rel:'group4', slideshow:true});
				$(".ajax").colorbox();
				$(".youtube").colorbox({iframe:true, innerWidth:640, innerHeight:390});
				$(".vimeo").colorbox({iframe:true, innerWidth:500, innerHeight:409});
				$(".iframe").colorbox({iframe:true, width:"80%", height:"80%"});
				$(".inline").colorbox({inline:true, width:"50%"});
				$(".callbacks").colorbox({
					onOpen:function(){ alert('onOpen: colorbox is about to open'); },
					onLoad:function(){ alert('onLoad: colorbox has started to load the targeted content'); },
					onComplete:function(){ alert('onComplete: colorbox has displayed the loaded content'); },
					onCleanup:function(){ alert('onCleanup: colorbox has begun the close process'); },
					onClosed:function(){ alert('onClosed: colorbox has completely closed'); }
				});

				$('.non-retina').colorbox({rel:'group5', transition:'none'})
				$('.retina').colorbox({rel:'group5', transition:'none', retinaImage:true, retinaUrl:true});
				
				//Example of preserving a JavaScript event for inline calls.
				$("#click").click(function(){ 
					$('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
					return false;
				});
			});
		</script>




<!-- multi-player script  -->
<script>
jQuery(document).ready(function($) {

    $(function(){
      //Snag the URL of the iframe so we can use it later
     var url = [ "http://www.kaltura.com/p/1011121/sp/101112100/embedIframeJs/uiconf_id/23823292/partner_id/1011121?iframeembed=true&playerId=kaltura_player&entry_id=0_p76f95cr", "four", "five" ];
      /*$('.modal-body iframe').each(function(index, value) {
             var url = $(this).attr('src');
             alert(url[i]);
      });*/
      /*var url = $('.modal-body iframe').attr('src');
      alert(url);*/
      $('.modal-body iframe').attr('src', '');
      $('.modal_click a').click(function() {
	      //Below we remove the URL to stop the video from playing, here we add it back in
	      var divID = $(this).attr('href');
              var suffix = divID.match(/\d+/);
              console.log(suffix);
              console.log(url[suffix]);
      	      $(divID).find("iframe").attr('src', url[suffix] + "&flashvars[autoPlay]=true");
      });
      $('.close').click(function() { 
	      //Assign the iframe's src to null, which kills the video
	      $(this).parents(".modal").find("iframe").attr('src', '');
      });
    });

});
jQuery(document).mouseup(function (e)
{
    var container = $(".modal");

    if (!container.is(e.target) // if the target of the click isn't the container...
        && container.has(e.target).length === 0) // ... nor a descendant of the container
    {
               $('.modal-body iframe').attr('src', '');
    }
});
</script>
<!-- multi-player script  -->


</head>
<body>
      <center>
      
      <h1>&nbsp;</h1>
      <h1>Vi EU EXPANSION! </h1>
      <p>&nbsp;</p>
      
			<script src="http://cdnapi.kaltura.com/p/1011121/sp/101112100/embedIframeJs/uiconf_id/10669871/partner_id/1011121"></script>
<object id="kaltura_player_1409915415" name="kaltura_player_1409915415" type="application/x-shockwave-flash" allowFullScreen="true" allowNetworking="all" allowScriptAccess="always" height="312" width="521" bgcolor="#000000" style="width: 521px; height: 312px;" xmlns:dc="http://purl.org/dc/terms/" xmlns:media="http://search.yahoo.com/searchmonkey/media/" rel="media:video" resource="http://cdnapi.kaltura.com/index.php/kwidget/cache_st/1409915415/wid/_1011121/uiconf_id/10669871/entry_id/0_hi4zbo08" data="http://cdnapi.kaltura.com/index.php/kwidget/cache_st/1409915415/wid/_1011121/uiconf_id/10669871/entry_id/0_hi4zbo08">
<param name="allowFullScreen" value="true" />
<param name="allowNetworking" value="all" />
<param name="allowScriptAccess" value="always" />
<param name="bgcolor" value="#000000" />
<param name="flashVars" value="" />
<param name="movie" value="http://cdnapi.kaltura.com/index.php/kwidget/cache_st/1409915415/wid/_1011121/uiconf_id/10669871/entry_id/0_hi4zbo08" />

<a rel="media:thumbnail" href="http://cdnbakmi.kaltura.com/p/1011121/sp/101112100/thumbnail/entry_id/0_hi4zbo08/version/100012/acv/172"></a>
<span property="dc:description" content=""></span>
<span property="media:title" content="Netherlands Influencer Webinar 01-09-14 19.00"></span>
<span property="media:width" content="400"></span>
<span property="media:height" content="333"></span>
<span property="media:type" content="application/x-shockwave-flash"></span>	

</object>
</center>


</body>
</html>


<!-- google analytics  -->



<!-- google analytics  -->
