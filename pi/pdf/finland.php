<!DOCTYPE html>
<html lang="en">
<head>
<title>Finland Prelaunch</title>
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



<meta name="google-translate-customization" content="d93262085ff0483b-3f4e7f5d7157d1e2-ge988535f1af3332c-18"></meta>

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
<div id="header-fi"> </div>

<!-- content  -->
<div id="content-wrapper">

      <!-- slide 1  -->
      <div id="slide1 slide1-nl" class="container_12">
          <div class="grid_12" style="margin-top: 30px;">

              <div class="grid_9 alpha english-content">
<?php


 include("fi.html");
 

 ?>
                                   
              </div>
              
              <!--
              
              <div class="grid_3 alpha omega english-content" style="margin-top:10px; margin-left:10px;">
              <h4 style="margin-bottom:2px;"> Google Translate Page </h4> 
              <div id="google_translate_element" style="width:100%"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'fi', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

-->
        
              
             
         		
         
					</div>
		  </div> 
      <!-- slide 1 end -->

</div> <!-- #content-wrapper  -->


<section style="background-color:#000; padding: 0px 0; padding-bottom:5px">
<div class="container_12">
<center>
<a href="http://vi.com/fi/nst-europe-2015" target="_blank"><img  src="images/nst-europe-2015.jpg" width="100%"></a>

</center>
</div>

</section>



<section id="downloads" style="background-color:#f5f5f5">
	<div class="container_12">
    <div class="grid_12">

<!--
						<div id="kaltura_player_1409187262" style="width: 940px; height: 360px;  margin-bottom: 30px">&nbsp;</div>
<div class="overview-video">
<script src="https://cdnapisec.kaltura.com/p/1011121/sp/101112100/embedIframeJs/uiconf_id/15698192/partner_id/1011121?autoembed=true&amp;playerId=kaltura_player_1409187262&amp;cache_st=1409187262&amp;width=940&amp;height=360&amp;flashvars[streamerType]=auto&amp;flashvars[playlistAPI.kpl0Id]=0_e59p6uml" type="text/javascript"></script>
</div>

-->




    
    

                  
                  

      
                  
                    
                  
                   

                   
                   
                     
                  
                  
      <!-- <h3>UPCOMING EVENTS</h3>
                  <a class="icon-green-doc inline" href="http://www.learn.vi.com/nl/pdf/Vi_NL_INFLUENCER_SUMMIT.pdf">Influencer Summit</a> | <a class="inline" href="http://www.learn.vi.com/event/nl/">RSVP NOW!</a> -->
                  
                  
                  
                                   
	</div>
    </div>
</section>

<!-- 
<section id="event">
  <div class="container_12">
    <div class="grid_12">
        <h2>4<sup>th</sup> October 2014</h2>
		<h3>Vi NETHERLANDS INFLUENCER SUMMIT</h3>
		<b>Crowne Plaza Hotel Amsterdam Schiphol </b>
		<p>Featuring all 3 Vi Founders Ryan Blair, Blake Mallen & Nick Sarnicola.</p>
<a target="_blank" href="http://learn.vi.com/event/nl/en.html" class="green-btn-lrg">Information & RSVP</a>
    </div>
  </div>
</section>
-->



<section id="faq" style="background-color:#f5f5f5; padding: 0px 0;">
<div class="container_12">







<div role="tabpanel">

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#download" aria-controls="download" role="tab" data-toggle="tab">Resources</a></li>
    <li role="presentation"><a href="#video" aria-controls="video" role="tab" data-toggle="tab">Videos</a></li>
    <li role="presentation"><a href="#events" aria-controls="events" role="tab" data-toggle="tab">Events</a></li>
    <li role="presentation"><a href="#shareables" aria-controls="shareables" role="tab" data-toggle="tab">Shareables</a></li>
    <li role="presentation"><a href="#faqs" aria-controls="faqs" role="tab" data-toggle="tab">FAQ</a></li>
    <li role="presentation"><a href="#2015" aria-controls="2015" role="tab" data-toggle="tab">New 2015 initiatives</a></li>





  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane fade in active" id="download">
    
    
    <h3 class="green-text">RESOURCES FOR DOWNLOAD:</h3>
                  <h3>APPLICATION & ORDER FORMS</h3>
                  
                  <p><a target="_blank" class="icon-green-doc link-top-padding" href="pdf/1000FI001_promoter_application_r21.pdf">Promoter Application</a>
                  <a target="_blank" class="icon-green-doc link-top-padding" href="pdf/1053FI001_customer_application_r8.pdf">Customer Application</a>
                  <a class="icon-green-doc link-top-padding" href="pdf/PI_FI_SEPAMANDATE_FINAL.docx">SEPA Direct Debit Mandate</a> <br/>
                  <a class="icon-green-doc link-top-padding" href="pdf/2180PIEN001_r1_Payment_Recommendations.pdf" style="display:inline">EU Payment Info</a> (EN) |  <a class="icon-green-doc link-top-padding" href="pdf/2180PIFI001_r1_Payment_Recommendations.pdf" style="display:inline">EU Payment Info</a> (FI)
                  </p>
                  <p><strong>ONLINE REGISTRATION IS AVAILABLE NOW!</strong></p>
                  
                

                  <h3>INFORMATION FOR PROMOTERS</h3>
                 <!-- <p>
               <a class='iframe green-btn-lrg' style="display: inline;" href="http://learn.vi.com/euexpansion/webinar-schedule/nl.html">NEW Netherlands Influencer Webinar Schedule</strong></a>
                 </p> -->
                 
      <p>
                    <a class="icon-green-doc link-top-padding" href="pdf/1047FI001_book_incentives_plan_r8.pdf">Incentives Program</a></p>
                         	 <p><a class="icon-green-doc link-top-padding" href="pdf/1060FI026_getting_started_training_r6x.pdf">Getting Started Training</a>
                             <p><a class="icon-green-doc link-top-padding" href="pdf/FI.StrategyOverview.2015_22.5.15.pdf" target="_blank"> Strategy Slides</a>
                 
                  
      <!-- <a class="icon-green-doc link-top-padding" href="#">SELL SHEETS: Promoter Systems & Challenge Kits</a> -->
                  
               

<!-- Modal --></p>

<p><a class="icon-green-doc link-top-padding" href="pdf/EUC783FI001_How_to_Host_Playbook_r2.pdf" target="_blank"> How to Host a Challenge Group</a></p>

<p><a class="icon-green-doc link-top-padding" href="pdf/1088FI001_BMWGuidelines_r3_Final.pdf" target="_blank">BMW Guidlines </a>

<p><a class="icon-green-doc link-top-padding" href="pdf/1605FI002_policies_procedures_book.pdf" target="_blank">Policies and Procedures</a></p>

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
                  <h3>PRODUCT INFORMATION</h3>
                  <p>
                <a class="icon-green-doc" href="pdf/1617FI001_product_guide_r5_Final.pdf">Consolidated Kit & Product Guide</a></p>
              
              <p>  <a class="icon-green-doc" href="http://visalus.com/fi/vibites" target="_blank">Vi Bites </a> </p>
              
              <p>  <a class="icon-green-doc" href="pdf/1286FI002_FAQ_ViBites_FINAL4Launch.pdf">Vi Bites FAQ </a> </p>
                <p>  <a class="icon-green-doc" href="pdf/1285FI002_factsheet_vibites_FINAL_4Launch.pdf">Vi Bites FACT SHEETS
</a></p>
                 
                  
    
    </div>
    <!-- End Downloads -->
    <div role="tabpanel" class="tab-pane fade" id="events">
    
    <h3 class="green-text">UPCOMING EVENTS</h3>
                     <ul>
                     
                    <li> ViSO - 5 May - Helsinki, Finland 
                    <li> ViSO & LST - 16 May - Oulu, Finland 
                     <li> ViSO & LST - 16 May - Helsinki, Finland 
                     
               <li>LST - 26 April - Helsinki, Finland  </li>                    
                   <li><strong>National Success Training (NST)</strong> <br/>
        19. + 20. JUNE, 2015 <br/>
        Hotel Auditorium Madrid, Spanje <br/>
        Av. Aragón, 400, 28022 Madrid
        </li>    
        </ul>
        
        <p><a href="http://visalus.com/eu/pdf/May-International.pdf" target="_blank"><img  src="http://visalus.com/eu/images/button-blue.gif" ></a> </p>  
    
    
    </div>
    <!-- End Events -->
    
    <div role="tabpanel" class="tab-pane fade" id="video">
    
    <h3 class="green-text">OVERVIEW VIDEO</h3>
                  
                  <p class="small-text">[Products, pricing and offers may differ across countries]</p>
                  
<iframe src="video-fi.html"  style="width: 940px; height: 360px; margin-bottom: 30px"></iframe>
    
    
    </div>
    <!-- End Events -->
    <div role="tabpanel" class="tab-pane fade" id="shareables">
    
    <h3 class="green-text">LATEST SHAREABLES</h3>
                  <p>
                     
                   
                    <a style="float:left; margin-right:5px; margin-bottom:5px" href="images/Pekka Kaasinen_FI_RD_r1.jpg" target="_blank"> <img class="sharable" src="images/Pekka Kaasinen_FI_RD_r1.jpg"  width="230px" alt="Vi Sweden Sharable" onclick="fbs_click(this)"/></a>
                    
                   
                   
                    <a style="float:left; margin-right:5px; margin-bottom:5px" href="images/Vi_FI_GROUP CHALLENGE PARTY_r3.jpg" target="_blank"> <img class="sharable" src="images/Vi_FI_GROUP CHALLENGE PARTY_r3.jpg"  width="230px" alt="Vi Sweden Sharable" onclick="fbs_click(this)"/></a>
                    
                    
                    <a style="float:left; margin-right:5px; margin-bottom:5px" href="images/Mervi_FI_PD.jpg" target="_blank"> <img class="sharable" src="images/Mervi_FI_PD.jpg"  width="230px" alt="Vi Sweden Sharable" onclick="fbs_click(this)"/></a>
                    
                    
                    <a style="float:left; margin-right:5px; margin-bottom:5px" href="images/Jukka Tikkanen_FI_RD.jpg" target="_blank"> <img class="sharable" src="images/Jukka Tikkanen_FI_RD.jpg"  width="230px" alt="Vi Sweden Sharable" onclick="fbs_click(this)"/></a>
                   
                   
                    <a style="float:left; margin-right:5px; margin-bottom:5px" href="images/Toni Kontiomaa_FI_ND.jpeg" target="_blank"> <img class="sharable" src="images/Toni Kontiomaa_FI_ND.jpeg"  width="230px" alt="Vi Sweden Sharable" onclick="fbs_click(this)"/></a>
                   
                    <a style="float:left; margin-right:5px; margin-bottom:5px" href="images/Mervi Hämäläinen_r2.jpg" target="_blank"> <img class="sharable" src="images/Mervi Hämäläinen_r2.jpg"  width="230px" alt="Vi Sweden Sharable" onclick="fbs_click(this)"/></a>
                    
                    <a style="float:left; margin-right:5px; margin-bottom:5px" href="images/Heidi Heikkinen.jpg" target="_blank"> <img class="sharable" src="images/Heidi Heikkinen.jpg"  width="230px" alt="Vi Sweden Sharable" onclick="fbs_click(this)"/></a>
                    
                    <a style="float:left; margin-right:5px; margin-bottom:5px" href="images/Juha Laakkonen_RD_FI.jpg" target="_blank"> <img class="sharable" src="images/Juha Laakkonen_RD_FI.jpg"  width="230px" alt="Vi Sweden Sharable" onclick="fbs_click(this)"/></a>
                     
                    <a style="float:left; margin-right:5px; margin-bottom:5px" href="images/Erkki Pohjola_RD_FI.jpg" target="_blank"> <img class="sharable" src="images/Erkki Pohjola_RD_FI.jpg"  width="230px" alt="Vi Sweden Sharable" onclick="fbs_click(this)"/></a>
                     
                    <a style="float:left; margin-right:5px; margin-bottom:5px" href="images/finland-sharable.jpg" target="_blank"> <img class="sharable" src="images/finland-sharable.jpg"  width="230px" alt="Vi Sweden Sharable" onclick="fbs_click(this)"/></a>
                     
                    <a style="float:left; margin-right:5px; margin-bottom:5px" href="images/fi/7583_892392540772724_6130538568239721317_n.jpg" target="_blank"> <img class="sharable" src="images/fi/7583_892392540772724_6130538568239721317_n.jpg"  width="230px" alt="Vi Sweden Sharable" onclick="fbs_click(this)"/></a>
                 
                 <a style="float:left; margin-right:5px; margin-bottom:5px" href="images/fi/Jorma_RD_FI_r2.jpg" target="_blank"> <img class="sharable" src="images/fi/Jorma_RD_FI_r2.jpg"  width="230px" alt="Vi Sweden Sharable" onclick="fbs_click(this)"/></a>
                 
                 <a style="float:left; margin-right:5px; margin-bottom:5px" href="images/fi/Matti_RD_FI_r2.jpg" target="_blank"> <img class="sharable" src="images/fi/Matti_RD_FI_r2.jpg"  width="230px" alt="Vi Sweden Sharable" onclick="fbs_click(this)"/></a>
                 
                 <a style="float:left; margin-right:5px; margin-bottom:5px" href="images/fi/Mervi_RD_FI_r2.jpg" target="_blank"> <img class="sharable" src="images/fi/Mervi_RD_FI_r2.jpg"  width="230px" alt="Vi Sweden Sharable" onclick="fbs_click(this)"/></a>
                 
                 <a style="float:left; margin-right:5px; margin-bottom:5px" href="images/fi/Toni_RD_FI_r2.jpg" target="_blank"> <img class="sharable" src="images/fi/Toni_RD_FI_r2.jpg"  width="230px" alt="Vi Sweden Sharable" onclick="fbs_click(this)"/></a>
                 
                 
                 <a style="float:left; margin-right:5px; margin-bottom:5px" href="images/54BA5CC8-1D51-41B1-BC7C-A9C29A04C7A3.png" target="_blank"> <img class="sharable" src="images/54BA5CC8-1D51-41B1-BC7C-A9C29A04C7A3.png"  width="230px" alt="Vi Sweden Sharable" onclick="fbs_click(this)"/></a>
                 
                 <a style="float:left; margin-right:5px; margin-bottom:5px" href="images/69C06470-980B-4285-95DA-0B47237555E2.png" target="_blank"> <img class="sharable" src="images/69C06470-980B-4285-95DA-0B47237555E2.png"  width="230px" alt="Vi Sweden Sharable" onclick="fbs_click(this)"/></a>
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
    <!-- End Shareables -->
    
      
      
      <div role="tabpanel" class="tab-pane fade" id="faqs">
      <h3 class="green-text">FAQ's</h3>
      
      <p class="small-text2"><a class="green-btn-mdl" style="display:inline" href="http://learn.vi.com/euexpansion/pdf/Finland-2163FI001_PI_FAQ_r1.pdf" target="_blank">Download the FAQ in Finnish</a></p>
      
      
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
        Simply go to the online enrollment website via your bodybyvi.com page or <a style="display:inline" href="http://myvi.net" target="_blank" class="linkinline">myvi.net</a>, then click on your country’s PI flag and follow the instructions.  Note that products will be shipped only to the country you select.
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
   <a class="icon-green-doc link-top-padding" href="pdf/2180PIEN001_r1_Payment_Recommendations.pdf" style="display:inline">EU Payment Info</a> (EN) |  <a class="icon-green-doc link-top-padding" href="pdf/2180PIFI001_r1_Payment_Recommendations.pdf" style="display:inline">EU Payment Info</a> (FI)
   </p>   
      </div>
      <!-- End FAQ -->
      
      <div role="tabpanel" class="tab-pane fade" id="2015">
      
      <ul>
      <li> <a href="http://visalus.com/fi/equity" target="_blank">Equity Plan</a> </li>
      <li> <a href="http://visalus.com/fi/challenge-groups" target="_blank">Challenge Groups</a> </li>
      <li> <a href="http://visalus.com/fi/3-free" target="_blank">3 for free</a> </li>
      <li> <a href="http://visalus.com/fi/project-10-kids" target="_blank">Project 10</a> </li>
      <li> <a href="http://visalus.com/fi/weekly-bonus-pools-new" target="_blank">Weekly Bonus Pools</a> </li>
      <li> <a href="http://visalushub.com/" target="_blank">Vi Hub</a> </li>
       <li> <a href="http://visalus.com/fi/2015" target="_blank">2015 overview</a> </li>
       
       
     
      
      
      
      </ul>
      
      
      </div>
    
   <!-- <p class="small-text">[For any Vi Promoters who create and use their own Vi-branded sales materials (videos, flyers,adverts etc.), we ask that you forward to <a style="display:inline" href="mailto:PISalesTools@vi.com">PISalesTools@vi.com</a> for review by our Compliance Team.  Once reviewed and approved, we can then upload to the appropriate Vi websites for use amongst the Vi Community to build successful businesses.]</p> -->

    
  </div>

</div>






</section>









<footer>
  <div class="container_12">
    <div class="grid_12">
    For more information contact <a href= "mailto:finlandinfo@vi.com" style="display:inline">finlandinfo@vi.com</a>
        <span class="small-text right">©2015 Vi. All rights reserved.</span>
    </div>
  </div>
</footer>



</body>
</html>


<!-- google analytics  -->



<!-- google analytics  -->
