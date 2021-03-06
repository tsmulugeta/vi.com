
<!DOCTYPE html>
<html lang="en">
<head>
<title>Netherlands Prelaunch</title>
<meta name="description" content="At Vi&trade;" />
<meta name="keywords" content="vi, body by vi, community challenge" />
<meta name="author" content="Vi" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, maximum-scale=1.0" />
<title>Vi&trade;</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">


<link rel="stylesheet" href="../assets/css/reset.css" />
<link rel="stylesheet" href="../assets/css/style-nl.css" />
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




</head>
<body>
<div id="nav"> 
	    <div class="container_12">
		    <div class="grid_12 alpha omega">

			        <div class="grid_4 alpha">
                <img class="vi-logo" src="../assets/images/logo-vi.png" alt="Vi Logo">
              </div>
			
			        <div class="grid_8 omega">
				          <form class="langauges">
                    <span>Select language:</span>	
<select id="language-dropdown" onchange="window.location=this.options[this.selectedIndex].value;">
<option value="/nl/english.php">English</option>
<option selected value="/nl/nederlands.php">Nederlands</option>
</select>
                  </form>
              </div>

		    </div>
	    </div>
</div> <!-- #nav  -->
<div id="header"> </div>

<!-- content  -->
<div id="content-wrapper">

      <!-- slide 1  -->
      <div id="slide1 slide1-nl" class="container_12">
          <div class="grid_12" style="margin-top: 30px;">

              <div class="grid_9 alpha english-content">
<?php

 include("nl.html");
?>
                                   
              </div>
            
              <div class="grid_3 alpha omega english-content" style="margin-top:10px; margin-left:10px;">
              
               <p>
                 <a href="http://www.Facebook.com/ViNederland" target="_blank"> <img class="vi-logo" src="../assets/images/volg-ons.jpg" alt="Vi Logo"></a></p>
              </div>
         		
					</div>
		  </div> 
      <!-- slide 1 end -->

</div> <!-- #content-wrapper  -->


<section id="downloads" style="background-color:#f5f5f5">
	<div class="container_12">
    <div class="grid_12">
    
    
                 
						<div id="kaltura_player_1409187262" style="width: 940px; height: 360px; margin-bottom: 30px">&nbsp;</div>
<div class="overview-video">
<script src="https://cdnapisec.kaltura.com/p/1011121/sp/101112100/embedIframeJs/uiconf_id/15698192/partner_id/1011121?autoembed=true&amp;playerId=kaltura_player_1409187262&amp;cache_st=1409187262&amp;width=940&amp;height=360&amp;flashvars[streamerType]=auto&amp;flashvars[playlistAPI.kpl0Id]=0_e59p6uml" type="text/javascript"></script>
</div>

    
    
<h1>DOWNLOADS:</h1>
                  <h3>INSCHRIJF- & BESTELFORMULIEREN</h3>
                  <p><strong>ONLINE REGISTRATIE IS NU BESCHIKBAAR!</strong></p>
                  <a class="icon-green-doc link-top-padding" href="http://visalus.com/pdf/nl/Vi_NL Promoter Application_Dutch[2].pdf">PROMOTER INSCHRIJVING</a>
                  <a class="icon-green-doc link-top-padding" href="http://visalus.com/pdf/nl/Vi_NL Customer Application_Dutch.pdf">KLANT INSCHRIJVING</a>
                   <a class="icon-green-doc link-top-padding" href="http://visalus.com/pdf/nl/NL_SEPA_mandate_form_Dutch.pdf">SEPA MACHTIGING VOOR AUTOMATISCHE INCASSO</a>

                  

                  <h3>INFORMATIE VOOR PROMOTERS</h3>
                  
                  <!-- <p>
               <a class='iframe green-btn-lrg' style="display: inline;" href="http://learn.vi.com/euexpansion/webinar-schedule/nl.html">NIEUW Netherlands Influencer Webinar Schema</strong></a>
                 </p> -->
                  
                                   <p><!--  <a class="icon-green-doc" href="http://vi.com/pdf/nl/Vi_NL GST_Dutch_FINAL_v4.pdf">GETTING STARTED TRAINING</a> -->
                    <a class="icon-green-doc link-top-padding" href="http://visalus.com/pdf/nl/Vi_NL_Incentives Plan artwork.pdf">INCENTIVE PROGRAMMA</a>
</p>
                
                <p><a class="icon-green-doc link-top-padding" href="#" data-toggle="modal" data-target="#myModal">INFLUENCER SUMMIR SLIDES</a></p>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">INFLUENCER SUMMIR SLIDES</h4>
      </div>
      <div class="modal-body">
        <iframe src="//www.slideshare.net/slideshow/embed_code/40100988" width="476" height="400" frameborder="0" marginwidth="0" marginheight="0" scrolling="no"></iframe>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">SLUITEN</button>
       
      </div>
    </div>
  </div>
</div>
             
                 <p><a class="icon-green-doc link-top-padding" href="http://visalus.com/pdf/nl/Vi_NL%20GST_Dutch_FINAL_v4.pdf">INTRODUCTIETRAINING</a></p>
                  
                  
                  <!-- <a class="icon-green-doc link-top-padding" href="#">SELL SHEETS: Promoter Systems & Challenge Kits</a> -->
                  
                  <div>
<p><strong><a href="#" data-toggle="modal" data-target="#myModal">Influencer Webinar met Nick Sarnicola (01-09-2014)</a></strong> </p>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Vi</h4>
      </div>
      <div class="modal-body">
      
        <center>
			<script src="http://cdnapi.kaltura.com/p/1011121/sp/101112100/embedIframeJs/uiconf_id/25101282/partner_id/1011121"></script>
<object id="kaltura_player_1409915415" name="kaltura_player_1409915415" type="application/x-shockwave-flash" allowFullScreen="true" allowNetworking="all" allowScriptAccess="always" height="333" width="400" bgcolor="#000000" style="width: 400px; height: 333px;" xmlns:dc="http://purl.org/dc/terms/" xmlns:media="http://search.yahoo.com/searchmonkey/media/" rel="media:video" resource="http://cdnapi.kaltura.com/index.php/kwidget/cache_st/1409915415/wid/_1011121/uiconf_id/25101282/entry_id/0_le5ayor9" data="http://cdnapi.kaltura.com/index.php/kwidget/cache_st/1409915415/wid/_1011121/uiconf_id/25101282/entry_id/0_le5ayor9">
<param name="allowFullScreen" value="true" />
<param name="allowNetworking" value="all" />
<param name="allowScriptAccess" value="always" />
<param name="bgcolor" value="#000000" />
<param name="flashVars" value="" />
<param name="movie" value="http://cdnapi.kaltura.com/index.php/kwidget/cache_st/1409915415/wid/_1011121/uiconf_id/25101282/entry_id/0_le5ayor9" />

<a rel="media:thumbnail" href="http://cdnbakmi.kaltura.com/p/1011121/sp/101112100/thumbnail/entry_id/0_le5ayor9/version/100012/acv/172"></a>
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
 <!-- Modal -->
      
      
       
      
      
      
      
                  
                  
                  
                  <!-- Modal -->
                  <h3>PRODUCT INFORMATIE</h3>
                 <p> <a class="icon-green-doc" href="http://visalus.com/pdf/nl/1617NL001_product_guide_r3.pdf">FACTSHEETS KITS EN PRODUCTEN</a>
                 </p>
                  <p class="small-text">[Bevat factsheets voor onze Promoter Kits (Balance -, Shape -, Fuel - and Transformation Kit) en basisproducten (Vi-Shape Shake, Nutra Cookie, Vi-Shape Mix-ins, Metab-Awake, Vi-Trim, and Omegas Essentials.]</p>
                  
                                    
                 <!-- <h3>UPCOMING EVENTS</h3>
                  <a class="icon-green-doc inline" href="http://www.learn.vi.com/nl/pdf/Vi_NL_INFLUENCER_SUMMIT.pdf">Influencer Summit</a> | <a class="inline" href="http://www.learn.vi.com/event/nl/">RSVP NOW!</a> -->
                  
                  
                   
       
       
       
       
                  
                  
                                   
	</div>
    </div>
</section>

<!--
<section id="event">
  <div class="container_12">
    <div class="grid_12">
        <h2>4 Oktober 2014</h2>
		<h3>Vi NETHERLANDS INFLUENCER SUMMIT</h3>
		<b>Crowne Plaza Hotel Amsterdam Schiphol </b>
		<p>Met de 3 Vi oprichters Ryan Blair, Blake Mallen en Nick Sarnicola.</p>
<a target="_blank" href="http://learn.vi.com/event/nl/" class="green-btn-lrg">INFORMATIE & REGISTRATIE</a>
    </div>
  </div>
</section>
-->



<footer>
  <div class="container_12">
    <div class="grid_12">
        <span class="small-text right">©2014 Vi. Alle rechten voorbehouden.</span>
    </div>
  </div>
</footer>



</body>
</html>


<!-- google analytics  -->



<!-- google analytics  -->
