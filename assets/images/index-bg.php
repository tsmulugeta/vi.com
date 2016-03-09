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
<link rel="stylesheet" href="../assets/css/style-newcountries.css" />
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">


		<link rel="stylesheet" href="colorbox.css" />
        
        
        



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
<div id="nav"> 
	    <div class="container_12">
		    <div class="grid_12 alpha omega">

			        <div class="grid_4 alpha">
                <img class="vi-logo" src="../assets/images/logo-vi.png" alt="Vi Logo">
              </div>
			
			        <div class="grid_8 omega" style="display:none">
				          <form class="langauges">
                    <span>Select langauge:</span>	
<select id="language-dropdown" onchange="window.location=this.options[this.selectedIndex].value;">
<option selected value="/nl/english.php">English</option>
<option value="/nl/nederlans.php">Nederlands</option>
</select>
                  </form>
              </div>

		    </div>
	    </div>
</div> <!-- #nav  -->
<div id="header-en"> </div>

<!-- content  -->
<div id="content-wrapper">

      <!-- slide 1  -->
      <div id="slide1 slide1-nl" class="container_12">
        <div class="grid_12" style="margin-top: 30px;">

          <div class="grid_12 alpha english-content">
          
          <center>
          
          <a class='iframe' style="display: inline;" href="video.php"><img class="vi-logo" src="../assets/images/sizzel-video.jpg" alt="Vi Logo"></a>
          
          <h3 class="green-text">EU EXPANSION</h3>

			<p>Vi is bringing the Challenge to Europe!</p>
		    <p>We are so happy to announce this exciting news building on our expansion into Europe! </p>
		    <p>Check back on this site for more information. Updates will only be posted here. </p>
		    <p>In the meantime, <a class='iframe' style="display: inline;" href="http://learn.vi.com/euexpansion/webinar-schedule/"><strong>click here</strong></a> to join any of our daily Leader-run webinars!</p>
   
            
            </center>
          
          </div>

			
                  
           








<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">EU EXPANSION</h4>
      </div>
      <div class="modal-body">
      <center>
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
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>



</div>

            </div>
         
		 </div>
	
      <!-- slide 1 end -->

</div> <!-- #content-wrapper  -->


<div id="header-nl-launch"> </div>


<section id="downloads" style="background-color:#f5f5f5; padding: 60px 0;">
	<div class="container_12">
    	<div class="grid_4">
        
        <center>
        <img class="flags" src="../assets/images/sweden-flag.jpg" alt="Vi Logo">
        
        <h4>Pre-Enrollment</h4> 
        <p>01-10-2014 </p>
        <h4>Shipping Commences</h4> 
        <p>15-10-2014 </p>
        <a href="../assets/images/Sweden_r5.jpeg" target="_blank" class="green-btn-lrg">shareable</a>
        
        </center>
        
    	
   		</div>
    
    	<div class="grid_4">
        <center>
        <img class="flags" src="../assets/images/finland-flag.jpg" alt="Vi Logo">
        
        
        <h4>Pre-Enrollment</h4> 
        <p>01-10-2014</p> 
        <h4>Shipping Commences</h4> 
        <p>15-10-2014 </p>
       <a href="../assets/images/Finland_r5.jpeg" target="_blank" class="green-btn-lrg">shareable</a>
       
       </center>
    
    	</div>
    
    	<div class="grid_4 omega">
        <center>
        <img class="flags" src="../assets/images/spain-flag.jpg" alt="Vi Logo">
        
       
        <h4>Pre-Enrollment</h4> 
        <p>01-11-2014</p>
        <h4>Shipping Commences</h4> 
        <p>15-11-2014 </p>
        <a href="../assets/images/Spain_r5.jpeg" target="_blank" class="green-btn-lrg">shareable</a>
        </center>
        
    
    	</div>
  </div>
</section>


<footer>
  <div class="container_12">
    <div class="grid_12">
        <span class="small-text right">©2014 Vi. All rights reserved.</span>
    </div>
  </div>
</footer>



</body>
</html>


<!-- google analytics  -->



<!-- google analytics  -->
