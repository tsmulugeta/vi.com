<!DOCTYPE html>
<html lang="en">
<head>
<title>Sweden Prelaunch</title>
<meta name="description" content="At Vi&trade;" />
<meta name="keywords" content="vi, body by vi, community challenge" />
<meta name="author" content="Vi" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, maximum-scale=1.0" />
<title>Vi&trade;</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">


<link rel="stylesheet" href="../assets/css/reset.css" />
<link rel="stylesheet" href="../assets/css/style-fi.css" />
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
<meta name="google-translate-customization" content="9f237263cf957cae-cee884a1b87ff245-g1dee91bc9f7f3d19-1a"></meta>

<style>

.goog-te-gadget-icon {
    float: left;
}


.goog-te-gadget {
    margin-bottom: 10px;
}


</style>


</head>
<body>
<div id="nav"> 
	    <div class="container_12">
		    <div class="grid_12 alpha omega">

			        <div class="grid_4 alpha">
                <img class="vi-logo" src="../assets/images/logo-vi.png" alt="Vi Logo">
              </div>
              
              <div style="float:right; margin-top:16px">
              
              <a href="http://www.Facebook.com/ViNederland" target="_blank"> <img class="vi-logo" src="../assets/images/follow-us.png" alt="Vi Logo" width="150px"></a>
              
              </div>
			
			       <!-- <div class="grid_8 omega">
				          <form class="langauges">
                    <span>Select language:</span>	
<select id="language-dropdown" onchange="window.location=this.options[this.selectedIndex].value;">
<option selected value="/nl/english.php">English</option>
<option value="/nl/nederlands.php">Nederlands</option>
</select>
                  </form>
              </div>
              
              -->
              
		    </div>
	    </div>
</div> <!-- #nav  -->
<div id="header-se"> </div>

<!-- content  -->
<div id="content-wrapper">

      <!-- slide 1  -->
      <div id="slide1 slide1-nl" class="container_12">
          <div class="grid_12" style="margin-top: 30px;">

              <div class="grid_9 alpha english-content">
<?php


 include("se.html");
 

 ?>
                                   
              </div>
              
              <!--
              <div class="grid_3 alpha omega english-content" style="margin-top:10px; margin-left:10px;">
              <h4 style="margin-bottom:2px;"> Google Translate Page </h4> 
             <div id="google_translate_element"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'sv', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

-->
        
              
       
              </div>
         		
         
					</div>
		  </div> 
      <!-- slide 1 end -->

</div> <!-- #content-wrapper  -->


<section style="background-color:#000; padding: 0px 0; padding-bottom:5px">
<div class="container_12">
<center>
<a href="http://vi.com/se/products/neon" target="_blank"><img  src="images/NEON_Web_Banner_SE.png" width="100%"></a>

</center>
</div>

</section>


<section id="faq" style="background-color:#f7f7f7;">
<div class="container_12">







<div role="tabpanel">

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#download" aria-controls="download" role="tab" data-toggle="tab">Resurser</a></li>
    <li role="presentation"><a href="#video" aria-controls="video" role="tab" data-toggle="tab">Videor</a></li>
    <li role="presentation"><a href="#events" aria-controls="events" role="tab" data-toggle="tab">Evenemang</a></li>
    <li role="presentation"><a href="#shareables" aria-controls="shareables" role="tab" data-toggle="tab">Material att dela</a></li>
    <li role="presentation"><a href="#faqs" aria-controls="faqs" role="tab" data-toggle="tab">Vanliga frågor</a></li>   
    <li role="presentation"><a href="#2015" aria-controls="2015" role="tab" data-toggle="tab">Nya initiativ för 2015</a></li>
    <!-- <li role="presentation"><a href="http://www.stadsmissionen.se" target="_blank">Vi-välgörenhetspartner i Sverige</a></li> -->

     
     

  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane fade in active" id="download">
    
    
    <h3 class="green-text">RESURSER ATT LADDA NER:</h3>
                  <h3>ANSÖKNINGS- OCH BESTÄLLNINGSFORMULÄR</h3>
                  <p><strong>NU KAN DU REGISTRERA DIG PÅ NÄTET!</strong></p>
                  <p><a target="_blank" class="icon-green-doc link-top-padding" href="pdf/se/1000SE001_promoter_application_r33-1.pdf">Promotoransökan</a>
                  <a target="_blank" class="icon-green-doc link-top-padding" href="pdf/se/1053SE001_customer_application_r23.pdf">Kundansökan</a> <br />
                  <a class="icon-green-doc link-top-padding" href="pdf/2180PIEN001_r1_Payment_Recommendations.pdf" style="display:inline">Betalningsregler för EU </a> (EN) |  <a class="icon-green-doc link-top-padding" href="pdf/2180PISE001_r1_Payment_Recommendations.pdf" style="display:inline">Betalningsregler för EU </a> (SE)
                
                  </p>
                  
       <a data-toggle="collapse" data-target="#payoneer" style="cursor:pointer"> <h3>PAYONEER</h3></a>
  <div id="payoneer" class="collapse">
    Nu gör vi utbetalningar till Payoneer-kort. Om du redan har ett Payoneer-kort behöver du inte skaffa något nytt kort. Istället klickar du på länken till inloggningen, som markeras med en grön pil på bilden nedan.<br>
              <p><img class="vi-logo" src="./images/PayoneerExistingAccount.jpg" width="500px"></p><br>    </div>       
                
      

      <h3>INFORMATION FÖR PROMOTORER</h3>
                 <!-- <p>
               <a class='iframe green-btn-lrg' style="display: inline;" href="http://learn.vi.com/euexpansion/webinar-schedule/nl.html">NEW Netherlands Influencer Webinar Schedule</strong></a>
                 </p> -->
                 
      <p>
        <a class="icon-green-doc link-top-padding" href="pdf/1047SE001_book_incentives_plan_r7.pdf">Incitamentsprogram</a></p>
                         	 <p><a class="icon-green-doc link-top-padding" href="pdf/1060SE026_getting_started_training_r6.pdf">Getting Started Training</a>
                             
                             <p><a class="icon-green-doc link-top-padding" href="http://www.vi.com/sites/default/files/slides/CHALLENGEOVERVIEW.PART1.JulyLaunch.V2.Swedish%20VERSION%20(1).pptx" target="_blank" style="display:inline">Vi-översikt del 1 </a>
      <p><a class="icon-green-doc link-top-padding" href="http://www.vi.com/sites/default/files/slides/SEStrategyOverview.2015_23.7.15.pptx" target="_blank" style="display:inline">Strategimaterial</a><!-- <a class="icon-green-doc link-top-padding" href="#">SELL SHEETS: Promoter Systems & Challenge Kits</a> -->
                       

<!-- Modal --></p>

<p><a class="icon-green-doc link-top-padding" href="pdf/EUC782SE001_How_to_Host_Playbook_r2.pdf" target="_blank"> Att vara värd för en Challenge Group</a></p>

<p><a class="icon-green-doc link-top-padding" href="pdf/1088SE001_BMWGuidelines_r2_Final.pdf" target="_blank">BMW-riktlinjer </a>

<p><a class="icon-green-doc link-top-padding" href="pdf/1605SE002_policies_procedures_book.pdf" target="_blank">Policyer och procedurer</a></p> 

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
                  <h3>PRODUKTINFORMATION</h3>
                  <p>
                  <a class="icon-green-doc" href="pdf/1617SE001_product_guide_r5_Final.pdf">Kombinerad kit- och produktguide</a></p>
                 
                 <p> <a class="icon-green-doc" href="http://visalus.com/se/vibites" target="_blank">Vi Bites </a></p>
                 
                 <p> <a class="icon-green-doc" href="pdf/1286SE002_faq_vibites_FINAL4Launch.pdf">Vi Bites, VANLIGA FRÅGOR</a></p>
                 <p> <a class="icon-green-doc" href="pdf/1285SE002_factsheet_vibites_FINAL_4Launch.pdf">Vi Bites, FAKTABLAD
</a>
                </p>
                 
                  
    
    </div>
    <!-- End Downloads -->
    <div role="tabpanel" class="tab-pane fade" id="events">
    
    <h3 class="green-text">KOMMANDE EVENEMANG</h3>
                    <!-- <ul>
 
 
        <li><strong>National Success Training (NST)</strong> <br/>
        19–20 JUNI 2015 <br/>
        Hotel Auditorium Madrid, Spanien  <br/>
        Av. Aragón, 400, 28022 Madrid
        </li>    
        </ul> -->
        
<p><a href="http://visalus.com/eu/pdf/EU_Events.pdf" target="_blank"><strong>KLICKA HÄR FÖR KALENDARIUM ÖVER EVENEMANG I EUROPA</strong> </a> </p>  
<p><a href="http://visalus.com/eu/pdf/EUC1404SE001_Vitality_flyer_post_r3.pdf" target="_blank"><strong>Flygblad om Vitality</strong> </a> </p> 
            
    
    
    
    
    </div>
    <!-- End Events -->
    
    <div role="tabpanel" class="tab-pane fade" id="video">
    
    <h3 class="green-text">Översiktsvideo</h3>
                  
                  <p class="small-text">[Produkter, priser och erbjudanden kan variera mellan olika länder]</p>
                  
<iframe src="video-se.html"  style="width: 940px; height: 360px; margin-bottom: 30px"></iframe>
    
    
    </div>
    <!-- End Events -->
    <div role="tabpanel" class="tab-pane fade" id="shareables">
    
    <h3 class="green-text">NYTT MATERIAL ATT DELA</h3>
                  <p>
                  
                 
                  <a style="float:left; margin-right:5px; margin-bottom:5px" href="images/EUC-758_RD_EU_Ako_Omari.jpg" target="_blank"> <img class="sharable" src="images/EUC-758_RD_EU_Ako_Omari.jpg"  width="230px" alt="Vi Sweden Sharable" onclick="fbs_click(this)"/></a>
                  
                 
                  
                  
                  <a style="float:left; margin-right:5px; margin-bottom:5px" href="images/Nathalie Höglund_RD_SE.jpg" target="_blank"> <img class="sharable" src="images/Nathalie Höglund_RD_SE.jpg"  width="230px" alt="Vi Sweden Sharable" onclick="fbs_click(this)"/></a>
                  
                  
                  <a style="float:left; margin-right:5px; margin-bottom:5px" href="images/Tommy Walter_RD_SE.jpg" target="_blank"> <img class="sharable" src="images/Tommy Walter_RD_SE.jpg"  width="230px" alt="Vi Sweden Sharable" onclick="fbs_click(this)"/></a>
                 
                 
                  <a style="float:left; margin-right:5px; margin-bottom:5px" href="images/Victor Salomonsson_SE_RD_r1.jpg" target="_blank"> <img class="sharable" src="images/Victor Salomonsson_SE_RD_r1.jpg"  width="230px" alt="Vi Sweden Sharable" onclick="fbs_click(this)"/></a>
                  
                 
                  <a style="float:left; margin-right:5px; margin-bottom:5px" href="images/Andre Bengtsson_RD_SE.jpg" target="_blank"> <img class="sharable" src="images/Andre Bengtsson_RD_SE.jpg"  width="230px" alt="Vi Sweden Sharable" onclick="fbs_click(this)"/></a>
                  
                  
                
                  
                  
                  
                  
                  
                  <a style="float:left; margin-right:5px; margin-bottom:5px" href="images/Victor Salomonsson_SE_RD_r1.jpg" target="_blank"> <img class="sharable" src="images/Victor Salomonsson_SE_RD_r1.jpg"  width="230px" alt="Vi Sweden Sharable" onclick="fbs_click(this)"/></a>
                  
                  <a style="float:left; margin-right:5px; margin-bottom:5px" href="images/Urban Hoglund_SE_ND.jpg" target="_blank"> <img class="sharable" src="images/Urban Hoglund_SE_ND.jpg"  width="230px" alt="Vi Sweden Sharable" onclick="fbs_click(this)"/></a>
                  
                  
                  
                  <a style="float:left; margin-right:5px; margin-bottom:5px" href="images/Pierre Mattsson_SE_RD_r1.jpg" target="_blank"> <img class="sharable" src="images/Pierre Mattsson_SE_RD_r1.jpg"  width="230px" alt="Vi Sweden Sharable" onclick="fbs_click(this)"/></a>
                  
                   <a style="float:left; margin-right:5px; margin-bottom:5px" href="images/Elisabeth Andersson_SE_RD_r1.jpg" target="_blank"> <img class="sharable" src="images/Elisabeth Andersson_SE_RD_r1.jpg"  width="230px" alt="Vi Sweden Sharable" onclick="fbs_click(this)"/></a>
                   
                    <a style="float:left; margin-right:5px; margin-bottom:5px" href="images/Brian Husen_SE_RD_r1.jpg" target="_blank"> <img class="sharable" src="images/Brian Husen_SE_RD_r1.jpg"  width="230px" alt="Vi Sweden Sharable" onclick="fbs_click(this)"/></a>
                    
                     <a style="float:left; margin-right:5px; margin-bottom:5px" href="images/Arpy  Olsson_SE_RD_r1.jpg" target="_blank"> <img class="sharable" src="images/Arpy  Olsson_SE_RD_r1.jpg"  width="230px" alt="Vi Sweden Sharable" onclick="fbs_click(this)"/></a> 
                 
                 
                 
                  <a style="float:left; margin-right:5px; margin-bottom:5px" href="images/Vi_Stockholm_GROUP CHALLENGE PARTY_r2.jpg" target="_blank"> <img class="sharable" src="images/Vi_Stockholm_GROUP CHALLENGE PARTY_r2.jpg"  width="230px" alt="Vi Sweden Sharable" onclick="fbs_click(this)"/></a>
                  
                  
                  <a style="float:left; margin-right:5px; margin-bottom:5px" href="images/Vi_SE_GROUP CHALLENGE PARTY_r3.jpg" target="_blank"> <img class="sharable" src="images/Vi_SE_GROUP CHALLENGE PARTY_r3.jpg"  width="230px" alt="Vi Sweden Sharable" onclick="fbs_click(this)"/></a>
                  
                  <a style="float:left; margin-right:5px; margin-bottom:5px" href="images/Jigy Diabate_RD_SE.jpg" target="_blank"> <img class="sharable" src="images/Jigy Diabate_RD_SE.jpg"  width="230px" alt="Vi Sweden Sharable" onclick="fbs_click(this)"/></a>
                  
                  <a style="float:left; margin-right:5px; margin-bottom:5px" href="images/Kristoffer_SE_PD.jpg" target="_blank"> <img class="sharable" src="images/Kristoffer_SE_PD.jpg"  width="230px" alt="Vi Sweden Sharable" onclick="fbs_click(this)"/></a>
                  
                  <a style="float:left; margin-right:5px; margin-bottom:5px" href="images/Pia Nikula_RD_SE.jpg" target="_blank"> <img class="sharable" src="images/Pia Nikula_RD_SE.jpg"  width="230px" alt="Vi Sweden Sharable" onclick="fbs_click(this)"/></a>
                  
                  <a style="float:left; margin-right:5px; margin-bottom:5px" href="images/Tanja Eva Joergensen_RD_SE.jpg" target="_blank"> <img class="sharable" src="images/Tanja Eva Joergensen_RD_SE.jpg"  width="230px" alt="Vi Sweden Sharable" onclick="fbs_click(this)"/></a>
                  
                  <a style="float:left; margin-right:5px; margin-bottom:5px" href="images/Teemu Ahonen_RD_SE.jpg" target="_blank"> <img class="sharable" src="images/Teemu Ahonen_RD_SE.jpg"  width="230px" alt="Vi Sweden Sharable" onclick="fbs_click(this)"/></a>
                  
                  
                  
                  <a style="float:left; margin-right:5px; margin-bottom:5px" href="images/Rikard Nilsson_PD_r1.jpg" target="_blank"> <img class="sharable" src="images/Rikard Nilsson_PD_r1.jpg"  width="230px" alt="Vi Sweden Sharable" onclick="fbs_click(this)"/></a>
                  
                  
                  <a style="float:left; margin-right:5px; margin-bottom:5px" href="images/Martin Ousbaeck_SE_RD.jpg" target="_blank"> <img class="sharable" src="images/Martin Ousbaeck_SE_RD.jpg"  width="230px" alt="Vi Sweden Sharable" onclick="fbs_click(this)"/></a>
                  
                  
                  <a style="float:left; margin-right:5px; margin-bottom:5px" href="images/Bajro_RD_SE.jpeg" target="_blank"> <img class="sharable" src="images/Bajro_RD_SE.jpeg"  width="230px" alt="Vi Sweden Sharable" onclick="fbs_click(this)"/></a>
                 
                     
                   
                    <a style="float:left; margin-right:5px; margin-bottom:5px" href="images/Kristoffer Jumlin_r3.jpg" target="_blank"> <img class="sharable" src="images/Kristoffer Jumlin_r3.jpg"  width="230px" alt="Vi Sweden Sharable" onclick="fbs_click(this)"/></a>
                 
                 
                 <a style="float:left; margin-right:5px; margin-bottom:5px" href="images/Glenn Bengtsson_RD_SE.jpg" target="_blank"> <img class="sharable" src="images/Glenn Bengtsson_RD_SE.jpg"  width="230px" alt="Vi Sweden Sharable" onclick="fbs_click(this)"/></a>
                 
                 <a style="float:left; margin-right:5px; margin-bottom:5px" href="images/Ida Lundell.jpg" target="_blank"> <img class="sharable" src="images/Ida Lundell.jpg"  width="230px" alt="Vi Sweden Sharable" onclick="fbs_click(this)"/></a>
                 
                 <a style="float:left; margin-right:5px; margin-bottom:5px" href="images/Urban Hoglund.jpg" target="_blank"> <img class="sharable" src="images/Urban Hoglund.jpg"  width="230px" alt="Vi Sweden Sharable" onclick="fbs_click(this)"/></a>
                 
                 <a style="float:left; margin-right:5px; margin-bottom:5px" href="images/Jorge_RD_SE.jpg" target="_blank"> <img class="sharable" src="images/Jorge_RD_SE.jpg"  width="230px" alt="Vi Sweden Sharable" onclick="fbs_click(this)"/></a>
                 
                 <a style="float:left; margin-right:5px; margin-bottom:5px" href="images/sweden-sharable.jpg" target="_blank"> <img class="sharable" src="images/sweden-sharable.jpg"  width="230px" alt="Vi Sweden Sharable" onclick="fbs_click(this)"/></a>
                 
               
              
                 
                 
                 
                 <a style="float:left; margin-right:5px; margin-bottom:5px" href="images/se/Rickard Nilsson.jpg" target="_blank"> <img class="sharable" src="images/se/Rickard Nilsson.jpg"  width="230px" alt="Vi Sweden Sharable" onclick="fbs_click(this)"/></a>
                 
               
               
               
               <a style="float:left; margin-right:5px; margin-bottom:5px" href="images/69C06470-980B-4285-95DA-0B47237555E2.png" target="_blank"> <img class="sharable" src="images/69C06470-980B-4285-95DA-0B47237555E2.png"  width="230px" alt="Vi Sweden Sharable"></a>
                 
               
      </p>
             
         <script>
     function fbs_click(TheImg) {
     u=TheImg.src;
     // t=document.title;
    t=TheImg.getAttribute('alt');
    window.open('http://www.facebook.com/sharer.php?u='+encodeURIComponent(u)+'&t='+encodeURIComponent(t),'sharer','toolbar=0,status=0,width=626,height=436');return false;
}
</script>
     
                  <div style="clear:both;"> </div>  
                  
    
    </div>
    <!-- 
    
     <div role="tabpanel" class="tab-pane fade" id="payment">
     
     
     <h3 class="green-text">European Payment Recommendations</h3>
     
     
      <p><a class="green-btn-mdl" style="display:inline" href="pdf/2180PISE001_r1_Payment_Recommendations.pdf" target="_blank">Click here for the Swedish version</a></p>
     
 
<p style="margin-top:10px">VI wants to support your new Promoters and Customers to join the Challenge in the most effective way possible. Vi provides three different payment options for joining the Challenge and  ordering Promoter kits or Challenge kits.</p>
 
<h3>We recommend asking for payment in the following order
</h3>
<ol> 
<li> <strong>Credit Card</strong> – This is the fastest and easiest way to get on the Challenge and start challenging others. Products normally ship within 24 hours.</li>
<li>  <strong>PayPal</strong> – This is as fast and easy as using a Credit Card. Use this with prospects that do not have a credit card or are unwilling to use their credit card. Products normally ship within 24 hours.</li>
<li>     <strong>Direct Debit</strong> –
	<ul> 
    	<li>Use this as a last option because shipment of Promoter and Challenge kits will be delayed a minimum of 7-9 days.</li>
		<li>Vi ships products after Vi has received payment. Due to EU banking rules and regulations there is a delay in Direct Debit payment confirmation of up to 7 days.  If there are issues with the Direct Debit information this can take longer.</li>
		<li> For this reason products ship within 7-9 days. </li>
		<li>Please note BV will not show up until payment is received.</li>
		<li>We recommend that you encourage your prospects to sign up for autoship on the 5th of the month to ensure any Direct Debit issues are resolved before the end of month.</li>
	</ul>
 </li>
 </ol>
 
<h3>How VI Processes Direct Debit Orders</h3>
 
 <ol>
	<li> Vi receives a Direct Debit order.</li>
	<li>Order is held until Vi receives payment confirmation from bank  (5-7 days) 
    	<ol type="a">
			<li>If payment confirmation is received then the product is shipped </li>
			<li>If payment fails for any reason our Call Center does the following:
            	<ol type="i">
                  <li>The account is placed on a temporary hold </li>
                  <li>An email is sent to the Promoter and their enroller informing them of the decline </li>
                  <li>Our Call Centre team will then call the Promoter to advise them that the Direct Debit has been declined and to ask for alternative methods of payment</li>
              </ol>
           </li>
       </ol>
    </li>
 </ol>
  
     </div>
      <!-- End European payment -->
      
      
      <div role="tabpanel" class="tab-pane fade" id="faqs">
      <h3 class="green-text">VANLIGA FRÅGOR</h3>
      
      <p><a class="green-btn-mdl" style="display:inline" href="http://vi.com/eu/pdf/Sweden-2163SE001_PI_FAQ_r1.pdf" target="_blank">LADDA NER VANLIGA FRÅGOR PÅ SVENSKA</a></p>
      
      
  <div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
         1. What is a PI market?
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in">
      <div class="panel-body">
        To react more quickly to demand in new markets, Vi is launching a strategy called Personal Import (“PI”), which allows us to
launch more countries faster.
We are permitted to ship our current products to Customers in EU countries; this takes advantage of a unique rule in the EU
permitting PI on a Customer basis.
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
          2. How do I enroll?
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse">
      <div class="panel-body">
        Simply go to the online enrollment website via your bodybyvi.com page or <a href="http://myvi.net" target="_blank" class="linkinline">myvi.net</a>, then click on your country’s PI flag and follow the instructions.  Note that products will be shipped only to the country you select.
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
          3. What are the current PI markets?
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse">
      <div class="panel-body">
        <table width="100%" border="1" class="faqTable">
  <tr class="head">
    <th scope="col">Country</th>
    <th align="center" scope="col" style="text-align: center;">Enrollment Begins...</th>
    <th align="center"  scope="col" style="text-align: center;">Products Ship...</th>
  </tr>
  <tr class="odd">
    <td>Finland</td>
    <td align="center" style="text-align: center;">1.10.2014</td>
    <td align="center" style="text-align: center;" >15.10.2014</td>
  </tr>
  <tr class="even">
    <td>Sweden</td>
    <td align="center" style="text-align: center;">1.10.2014</td>
    <td align="center" style="text-align: center;">15.10.2014</td>
  </tr>
  <tr class="odd">
    <td>Spain</td>
    <td align="center" style="text-align: center;" >1.11.2014</td>
    <td align="center" style="text-align: center;">15.11.2014</td>
  </tr>
</table>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
          4. Will I have a choice of Promoter Systems upon enrollment?
        </a>
      </h4>
    </div>
    <div id="collapseFour" class="panel-collapse collapse">
      <div class="panel-body">
        Yes! You may enroll on a Basic Promoter System, Executive Promoter System, or Star Promoter System (Vi-Trim®, Metab-Awake®,
and Vi Omega Essentials™ will not be available). For now, printed marketing materials contained in Promoter Systems are only
available in German.
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
          5. What products will be offered?
        </a>
      </h4>
    </div>
    <div id="collapseFive" class="panel-collapse collapse">
      <div class="panel-body">
        <table width="100%" border="1" class="faqTable">
  <tr class="head">
    <th align="left" valign="middle" scope="col">Kit/Product</th>
    <th align="center" valign="middle" scope="col" style="text-align: center;">PI Market (e.g., Sweden)</th>
    <th align="center" valign="middle"  scope="col" style="text-align: center;">Full Launch Market (e.g., UK)</th>
  </tr>
  <tr class="odd">
    <td align="left" valign="middle">Balance Kit</td>
    <td align="center" valign="middle"  style="text-align: center;">X</td>
    <td align="center" valign="middle"  style="text-align: center;">X</td>
  </tr>
  <tr class="even">
    <td align="left" valign="middle">Shape Kit</td>
    <td align="center" valign="middle"  style="text-align: center;">X</td>
    <td align="center" valign="middle"  style="text-align: center;">X</td>
  </tr>
  <tr class="odd">
    <td align="left" valign="middle">Fuel Kit</td>
    <td align="center" valign="middle"  style="text-align: center;">X</td>
    <td align="center" valign="middle"  style="text-align: center;">X</td>
  </tr>
  <tr class="even">
    <td align="left" valign="middle">Transformation Kit</td>
    <td align="center" valign="middle"  style="text-align: center;"> </td>
    <td align="center" valign="middle"  style="text-align: center;">X</td>
  </tr>
  <tr class="odd">
    <td align="left" valign="middle">Vi-Shape® Nutritional Shake Mix</td>
    <td align="center" valign="middle"  style="text-align: center;">X</td>
    <td align="center" valign="middle"  style="text-align: center;">X</td>
  </tr>
  <tr class="even">
    <td align="left" valign="middle">Vi-Shape® Mix-Ins - Chocolate and Strawberry Flavors</td>
    <td align="center" valign="middle"  style="text-align: center;">X</td>
    <td align="center" valign="middle"  style="text-align: center;">X</td>
  </tr>
  <tr class="odd">
    <td align="left" valign="middle">Nutra-Cookie®- Chocolate Chip and Oatmeal</td>
    <td align="center" valign="middle"  style="text-align: center;">X</td>
    <td align="center" valign="middle"  style="text-align: center;">X</td>
  </tr>
  <tr class="even">
    <td align="left" valign="middle">Vi-Trim®</td>
    <td align="center" valign="middle"  style="text-align: center;"> </td>
    <td align="center" valign="middle"  style="text-align: center;">X</td>
  </tr>
  <tr class="odd">
    <td align="left" valign="middle">Metab-Awake®</td>
    <td align="center" valign="middle"  style="text-align: center;"> </td>
    <td align="center" valign="middle"  style="text-align: center;">X</td>
  </tr>
  <tr class="even">
    <td align="left" valign="middle">Vi Omega Essentials™</td>
    <td align="center" valign="middle"  style="text-align: center;"> </td>
    <td align="center" valign="middle"  style="text-align: center;">X</td>
  </tr>
</table>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseSix">
          6. Are the products compliant in the PI markets?
        </a>
      </h4>
    </div>
    <div id="collapseSix" class="panel-collapse collapse">
      <div class="panel-body">
        Yes! All Vi products meet each PI country’s specific regulatory requirements. Products will arrive to you with multi-language labels
including nutritional information and instructions for use.
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseSeven">
          7. What materials will be available to me in the PI markets’ native languages?
        </a>
      </h4>
    </div>
    <div id="collapseSeven" class="panel-collapse collapse">
      <div class="panel-body">
        In a PI market you get limited locally translated materials, including: 1) Customer & Promoter applications/enrollment, 2) Products,
3) the 1-page Incentives Program summary, 4) Limited ViNet back-office including shop cart, and 5) Product Guide. You will NOT
get most Vi marketing materials (e.g., challenge.com, GST, mobile apps); however, all other materials are available in English.
In addition, Vi will offer our enrollment website, online shop cart, select ViNet back office functions and legal documents necessary
to grow and manage your Vi business in the PI markets – all in the native languages. Additional materials (e.g., Vi.com,
Challenge.com, Getting Started Training) will be available in English, German, and Dutch.
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseEight">
          8. When will PI Markets become Full Launch (a.k.a. Self-Distribution/SD) Markets like the UK and Germany?
        </a>
      </h4>
    </div>
    <div id="collapseEight" class="panel-collapse collapse">
      <div class="panel-body">
        Vi will monitor sales to determine when to convert to SD.
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseNine">
          9. Will I be entitled to receive all the same commissions and bonuses as other Promoters?
        </a>
      </h4>
    </div>
    <div id="collapseNine" class="panel-collapse collapse">
      <div class="panel-body">
        YES! EVERY PROMOTER WILL HAVE THE OPPORTUNITY TO EARN THE SAME COMMISSIONS AND BONUSES ACCORDING
TO THE GERMAN INCENTIVES PROGRAM. Your commissions and bonuses can be direct deposited into your personal bank
account in local currency or you may sign up for a pre-paid Prosperity Card loaded in Euros (when making purchases, transaction
and foreign exchange fees may apply if your local currency is not the Euro). Payments will be made on the same weekly and
monthly schedule globally.
      </div>
    </div>
  </div>
</div>

<p>
<a class="icon-green-doc link-top-padding" href="pdf/2180PIEN001_r1_Payment_Recommendations.pdf" style="display:inline">Betalningsregler för EU</a> (EN) |  <a class="icon-green-doc link-top-padding" href="pdf/2180PISE001_r1_Payment_Recommendations.pdf" style="display:inline">Betalningsregler för EU</a> (SE)
</p>
      
      </div>
      <!-- End FAQ -->
      
      <div role="tabpanel" class="tab-pane fade" id="2015">
      
      <ul>
          <li> <a href="http://visalus.com/se/equity" target="_blank">Aktieplan</a> </li>
      <li> <a href="http://visalus.com/se/challenge-groups" target="_blank">Challenge-grupper </a> </li>
      <li> <a href="http://visalus.com/se/3-free" target="_blank">3 for free</a> </li>
      <li> <a href="http://visalus.com/se/project-10-kids" target="_blank">Project 10</a> </li>
      <li> <a href="http://visalus.com/se/weekly-bonus-pools-new" target="_blank">
Veckobonuspott</a> </li>
      <li> <a href="http://visalushub.com/" target="_blank">Vi Hub</a> </li>
       <li> <a href="http://visalus.com/se/2015" target="_blank">Översikt 2015</a> </li>
       
     
      
      
      
      </ul>
      
      
      </div>
     <!-- End 2015 -->
     
   <!-- <p class="small-text">[For any Vi Promoters who create and use their own Vi-branded sales materials (videos, flyers,adverts etc.), we ask that you forward to <a style="display:inline" href="mailto:PISalesTools@vi.com">PISalesTools@vi.com</a> for review by our Compliance Team.  Once reviewed and approved, we can then upload to the appropriate Vi websites for use amongst the Vi Community to build successful businesses.]</p> -->

    
  </div>

</div>






</section>









<footer>
  <div class="container_12">
    <div class="grid_12">
    För mer information, kontakta <a href= "mailto:swedeninfo@vi.com" style="display:inline">swedeninfo@vi.com</a>
        <span class="small-text right">©2015 Vi. Med ensamrätt.</span>
    </div>
  </div>
</footer>



</body>
</html>


<!-- google analytics  -->



<!-- google analytics  -->
