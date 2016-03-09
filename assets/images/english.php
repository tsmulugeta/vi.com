<?php
    session_start();
?>
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

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

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

              <div class="grid_9 alpha english-content">
<?php

 if (isset($_SESSION['luser'])) { 
 include("en.html");
 
 } else {

$user = "Vi Promoter";
$pass = $_POST['pass'];

$optional = array("ViNL", "Vi NL", "VINL", "VI NL", "vinl", "vi nl");
if (in_array($pass, $optional))
{
		    // Authentication successful - Set session
        	 $_SESSION['luser'] = $user;
            $_SESSION['start'] = time(); // Taking now logged in time.
            // Ending a session in 30 minutes from the starting time.
            $_SESSION['expire'] = $_SESSION['start'] + (30 * 60);
        include("en.html");
}
else
{
    if(isset($_POST))
    {
		if(!empty($pass)) {
	 		if ($pass != "Vi NL") {
				$message = "Incorrect password. Please try again.";
			 }
		 }	
		?>
    	 <?php $aside = "no aside"  ?>
      <div style="width:100%; margin-left:100px; margin-top:40px; margin-bottom:10px;">
    	<center>
            <p><strong>Enter your password:<br>
            </strong></p>


            <form method="POST" action="http://learn.vi.com/nl/english.php"><input type="password" name="pass" style="width: 152px; margin: 5px;"></input><br/>
            <input type="submit" name="submit" value="Click to log in"></input>
            </form>
            
            <br />
            <p style="color:red;">
				<?php if (isset($message)) {echo $message;}?> 
            </p>
    </center>
    </div>
    <?}
}
}
?>
                                   
              </div>
              
              <?php if (!isset ($aside)) { ?>
              <div class="grid_3 alpha omega english-content" style="margin-top:10px; margin-left:10px;">
              <p> 
              <a href="../assets/images/shareables/NL_Shareable_05_r2.jpg" target="_blank">
              <img class="vi-logo" src="../assets/images/NL_Shareable_02_r4-thumb.jpg" alt="Vi Logo">
              </a>
             </p>
               <p>
                 <a href="http://www.Facebook.com/ViNederland" target="_blank"> <img class="vi-logo" src="../assets/images/follow-us.jpg" alt="Vi Logo"> </a></p>
              
              </div>
         		<?php } ?>	
         
					</div>
		  </div> 
      <!-- slide 1 end -->

</div> <!-- #content-wrapper  -->

<?php if (!isset ($aside)) { ?>

<section id="downloads" style="background-color:#f5f5f5">
	<div class="container_12">
    <div class="grid_12">
<h1>RESOURCES FOR DOWNLOAD:</h1>
                  <h3>APPLICATION & ORDER FORMS</h3>
                  <p><strong>ONLINE REGISTRATION IS AVAILABLE NOW!</strong></p>
                  <p><a class="icon-green-doc link-top-padding" href="http://visalus.com/pdf/nl/Vi_NL_Promoter_Application.pdf">Promoter Application</a>
                  <a class="icon-green-doc link-top-padding" href="http://visalus.com/pdf/nl/Vi_NL Customer Application_ENG_FINAL_v5.pdf">Customer Application</a>
                  <a class="icon-green-doc link-top-padding" href="http://visalus.com/pdf/nl/NL_SEPA-mandate-form-Eng.pdf">SEPA Direct Debit Mandate</a>
                  </p>
                  
                  <p>Email completed forms to prelaunch@vi.com, or fax them to 020 524 1581.</p>

                  <h3>INFORMATION FOR PROMOTERS</h3>
                 <p>
                    <a class="icon-green-doc link-top-padding" href="http://visalus.com/pdf/nl/Vi_NL_Incentives Plan_ENG_FINAL_v3.pdf">Incentives Program</a>
                 	<a class="icon-green-doc link-top-padding inline" href="http://visalus.com/pdf/nl/Playbook-English.pdf">Influencer Playbook</a> (PDF)
                  | <a class="icon-green-doc link-top-padding inline" href="http://visalus.com/pdf/nl/Playbook-English.pptx">Influencer Playbook</a> (PPT)
                 </p>
                  
                  
                  <!-- <a class="icon-green-doc link-top-padding" href="#">SELL SHEETS: Promoter Systems & Challenge Kits</a> -->
                  
                  <div>
<p><strong><a href="#" data-toggle="modal" data-target="#myModal">Influencer Webinar with Nick Sarnicola (01-09-2014)</a></strong> </p>
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
                  <h3>PRODUCT INFORMATION</h3>
                  <a class="icon-green-doc" href="http://visalus.com/pdf/nl/1617UK001_product guide_Final_120513.pdf">Consolidated Kit & Product Guide</a>
                  <p class="small-text">[Includes fact sheets for our kits (Balance, Shape, Fuel, and Transformation Kit) and core products (Vi-Shape Shake, Nutra Cookie, Vi-Shape Mix-ins, Metab-Awake, Vi-Trim, and Omegas).]</p>
                  
                  
                  
                 <!-- <h3>UPCOMING EVENTS</h3>
                  <a class="icon-green-doc inline" href="http://www.learn.vi.com/nl/pdf/Vi_NL_INFLUENCER_SUMMIT.pdf">Influencer Summit</a> | <a class="inline" href="http://www.learn.vi.com/event/nl/">RSVP NOW!</a> -->
                  
                  
                  
                                   
	</div>
    </div>
</section>

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
<?php } ?>	


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
