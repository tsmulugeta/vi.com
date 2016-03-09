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
			
			        <div class="grid_8 omega">
				          <form class="langauges">
                    <span>Select language:</span>	
<select id="language-dropdown" onchange="window.location=this.options[this.selectedIndex].value;">
<option  value="index.php">English</option>
<option value="se.php">Sweden</option>
<option selected value="fi.php">Finland</option>
<option  value="es.php">Spanish</option>
</select>
                  </form>
              </div>

		    </div>
	    </div>
</div> <!-- #nav  -->
<div id="header-fi"> </div>

<!-- content  -->
<div id="content-wrapper">

      <!-- slide 1  -->
      <div id="slide1 slide1-nl" class="container_12">
        <div class="grid_12" style="margin-top: 30px;">

          <div class="grid_12 alpha english-content">
          
          <center>
          
          <a class='iframe' style="display: inline;" href="video.php"><img class="vi-logo" src="../assets/images/sizzel-video.jpg" alt="Vi Logo"></a>
          
          <h3 class="green-text">LAAJENTAMINEN EUROOPPAAN</h3>

			<p>Vi tuo Challenge-haasteen Eurooppaan!</p>
		    <p>Olemme erittäin iloisia voidessamme ilmoittaa, että toiminta-alueemme laajenee Eurooppaan!</p>
		    <p>Lisätietoa löydät tältä sivustolta. Uutiset ilmestyvät vain täällä. </p>
		   <!-- <p>In the meantime, <a class='iframe' style="display: inline;" href="http://learn.vi.com/euexpansion/webinar-schedule/"><strong>click here</strong></a> to join any of our daily Leader-run webinars! <br>
		      (For International Influencer Webinar Schedule For Spain <a class='iframe' style="display: inline;" href="http://learn.vi.com/euexpansion/webinar-schedule/es-webinar-eng.php"><strong>click here</strong></a>) </p> -->
              
              
               <p><a class='iframe' style="display: inline;" href="http://learn.vi.com/euexpansion/webinar-schedule/"><strong>Klikkaa </strong></a> sillä välin tästä ottaaksesi osaa päivittäisiin johtajiemme vetämiin webinaareihin! 
		      </p>
              
              <p>
              <a style="font-size: 16px; margin-top: 50px; text-decoration: underline;" href="pdf/International_Influencers_Flyer_rev11-11a.pdf" target="_blank">Klikkaa tästä ladataksesi Kansainvälinen vaikuttaja -aikataulun</a>
              </p>
            
   
            
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


<div id="header-nl-launch">
<div class="container_12">
    	<div class="grid_7 left" align="center">
      
<p>LANSEERAUS</p> 
<p>ALANKOMAISSA</p> 
 <p class="button-margin">
  <a href="http://www.nl.vi.com" target="_blank" class="green-btn-lrg">KLIKKAA TÄSTÄ</a>
  </p>


</div>
  </div>
 </div>


<section id="downloads" style="background-color:#f5f5f5; padding: 60px 0 40px 0;">
	<div class="container_12">
    	<div class="grid_4">
        
        <center>
       <a href="http://se.vi.com"> <img class="flags" src="../assets/images/fi-sweden-flag.jpg" alt="Vi Logo"> </a>
        <p style="margin-top:0px"><a href="http://se.vi.com" class="green-btn-mdl" target="_blank">Klikkaa tästä  Landing Page</a> </p>	
        
        </center>
        
    	
   		</div>
    
    	<div class="grid_4">
        <center>
       <a href="http://fi.vi.com"> <img class="flags" src="../assets/images/fi-finland-flag.jpg" alt="Vi Logo"> </a>
        
        <p style="margin-top:0px"><a href="http://se.vi.com" class="green-btn-mdl" target="_blank">Klikkaa tästä  Landing Page</a> </p>	
        
       
       </center>
    
    	</div>
    
    	<div class="grid_4 omega">
        <center>
        <img class="flags" src="../assets/images/fi-spain-flag.jpg" alt="Vi Logo">
        
       
        </center>
        
    
    	</div>
  </div>
  
</section>


<section id="faq" style="background-color:#f5f5f5; padding: 0px 0;">
<div class="container_12">

<div style="padding-bottom:10px;"> 
<center>
<h4 style="font-size:20px;">Usein kysytyt kysymykset PI-maille</h4>
</center>
</div>


<ul class="nav nav-tabs" role="tablist" id="myTab">
  <li class="active"><a href="#finnish" role="tab" data-toggle="tab">Suomi</a></li>
  <li><a href="#english" role="tab" data-toggle="tab">Englanti</a></li>
  <li><a href="#swedish" role="tab" data-toggle="tab">Ruotsi</a></li>
  <li><a href="#spanish" role="tab" data-toggle="tab">Espanja</a></li>
</ul>

<div class="tab-content">


  <div class="tab-pane active" id="finnish">
  
  
<div class="panel-group" id="FIaccordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#FIaccordion" href="#FIcollapseOne">
         Kysymys 1. Mitä tarkoitetaan PI-markkinoilla?
        </a>
      </h4>
    </div>
    <div id="FIcollapseOne" class="panel-collapse collapse in">
      <div class="panel-body">
        Vastaus: Voidakseen vastata nopeammin uusilla markkina-alueilla esiintyvään kysyntään Vi ottaa käyttöön Personal Import (PI) -nimisen
strategian, joka mahdollistaa nopean laajentumisen useisiin maihin.
Meillä on lupa toimittaa nykyisiä tuotteitamme EU-maiden asiakkaille, sillä EU-säännöt sallivat tuonnin henkilökohtaiseen käyttöön.
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#FIaccordion" href="#FIcollapseTwo">
         Kysymys 2. Miten liityn mukaan?
        </a>
      </h4>
    </div>
    <div id="FIcollapseTwo" class="panel-collapse collapse">
      <div class="panel-body">
        Vastaus: Promoottoriksi liitytään Saksan markkina-alueen kautta. Sinun tarvitsee vain mennä verkkosivuston liittymissivulle, klikata maasi lippua ja
noudattaa ruudulle ilmestyviä ohjeita. Huomaa, että tuotteet toimitetaan vain valitsemaasi maahan.
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#FIaccordion" href="#FIcollapseThree">
          Kysymys 3. Mitkä ovat nykyiset PI-markkinat?
        </a>
      </h4>
    </div>
    <div id="FIcollapseThree" class="panel-collapse collapse">
      <div class="panel-body">
        <table width="100%" border="1" class="faqTable">
  <tr class="head">
    <th scope="col">Maa</th>
    <th align="center" scope="col" style="text-align: center;">Liittyminen...</th>
    <th align="center"  scope="col" style="text-align: center;">Tuotteiden toimitus...</th>
  </tr>
  <tr class="odd">
    <td>Suomi</td>
    <td align="center" style="text-align: center;">1.10.2014</td>
    <td align="center" style="text-align: center;" >15.10.2014</td>
  </tr>
  <tr class="even">
    <td>Ruotsi</td>
    <td align="center" style="text-align: center;">1.10.2014</td>
    <td align="center" style="text-align: center;">15.10.2014</td>
  </tr>
  <tr class="odd">
    <td>Espanja</td>
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
        <a data-toggle="collapse" data-parent="#FIaccordion" href="#FIcollapseFour">
          Kysymys 4. Voinko valita promoottoriohjelman liittymisen yhteydessä?
        </a>
      </h4>
    </div>
    <div id="FIcollapseFour" class="panel-collapse collapse">
      <div class="panel-body">
        Vastaus: Kyllä! Voit liittyä Basic Promoter System, Executive Promoter System tai Star Promoter Systems (Vi-Trim®, Metab-Awake® ja Vi Omega
Essentials™ eivät ole saatavilla). Toistaiseksi promoottoriohjelmien painetut markkinointimateriaalit ovat saatavilla vain saksaksi.
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#FIaccordion" href="#FIcollapseFive">
          Kysymys 5. Mitä tuotteita on tarjolla?
        </a>
      </h4>
    </div>
    <div id="FIcollapseFive" class="panel-collapse collapse">
      <div class="panel-body">
      Vastaus: PI-markkinoilla tulee olemaan rajoitettu valikoima paketteja ja tuotteita.
        <table width="100%" border="1" class="faqTable">
  <tr class="head">
    <th align="left" valign="middle" scope="col">Paketti/tuote</th>
    <th align="center" valign="middle" scope="col" style="text-align: center;">PI-markkinat(esim. Ruotsi)</th>
    <th align="center" valign="middle"  scope="col" style="text-align: center;">Täyden valikoiman markkinat(esim. Iso-Britannia)</th>
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
    <td align="left" valign="middle">Vi-Shape® Mix-Ins - (suklaa/mansikka)</td>
    <td align="center" valign="middle"  style="text-align: center;">X</td>
    <td align="center" valign="middle"  style="text-align: center;">X</td>
  </tr>
  <tr class="odd">
    <td align="left" valign="middle">Nutra-Cookie®- (suklaa/kaura-rusina)</td>
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
        <a data-toggle="collapse" data-parent="#FIaccordion" href="#FIcollapseSix">
          Kysymys 6. Ovatko tuotteet PI-markkinoiden lainsäädännön mukaisia?
        </a>
      </h4>
    </div>
    <div id="FIcollapseSix" class="panel-collapse collapse">
      <div class="panel-body">
        Vastaus: Kyllä! Kaikki Vi-tuotteet täyttävät kunkin PI-maan lainsäädännölliset vaatimukset. Tuotteissa on monikieliset etiketit sekä ravintosisältötiedot ja
käyttöohjeet.
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#FIaccordion" href="#FIcollapseSeven">
          Kysymys 7. Mitä materiaaleja on saatavilla PI-markkinoiden paikallisilla kielillä?
        </a>
      </h4>
    </div>
    <div id="FIcollapseSeven" class="panel-collapse collapse">
      <div class="panel-body">
        Vastaus: PI-markkinoita varten on olemassa rajoitettu määrä paikallisille kielille käännettyä materiaalia, muun muassa: 1) asiakkaiden ja
promoottoreiden hakemukset/liittymislomakkeet, 2) tuotteet, 3) yksisivuinen kannustinohjelmatiivistelmä, 4) osa Vi-Net-palvelusta, mukaan lukien
verkkokauppa, sekä 5) tuoteopas. Suurinta osaa Vi-markkinointimateriaaleista EI ole saatavilla paikallisilla kielillä (esim. Challenge.com-sivusto, Getting
Started Training, mobiilisovellukset). Kaikki materiaalit ovat kuitenkin saatavilla englanniksi. Lisäksi liittymissivusto, verkkokauppa, osa Vi-Net-palvelun
toiminnoista sekä lailliset asiakirjat – eli kaikki mitä tarvitset liiketoimintasi kasvattamiseen ja hallintaan PI-markkinoilla – ovat olemassa paikallisilla
kielillä. Lisämateriaalit (esim. Vi.com, Challenge.com, Getting Started Training) ovat saatavilla englanniksi, saksaksi ja hollanniksi.
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#FIaccordion" href="#FIcollapseEight">
         Kysymys 8. Milloin PI-markkinoista tulee Ison-Britannian tai Saksan kaltaisia täyden valikoiman markkinoita
(Self-Distribution-/SD-markkinoita)?
        </a>
      </h4>
    </div>
    <div id="FIcollapseEight" class="panel-collapse collapse">
      <div class="panel-body">
        Vastaus: Seuraamme myyntiä ja päätämme sen perusteella, milloin maa voi siirtyä SD-markkina-alueeksi.
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#FIaccordion" href="#FIcollapseNine">
		Kysymys 9. Olenko oikeutettu samoihin provisioihin ja bonuksiin kuin muutkin promoottorit?        </a>
      </h4>
    </div>
    <div id="FIcollapseNine" class="panel-collapse collapse">
      <div class="panel-body">
        Vastaus: KYLLÄ! KAIKILLA PROMOOTTOREILLA ON MAHDOLLISUUS SAMOIHIN PROVISIOIHIN JA BONUKSIIN SAKSALAISEN
KANNUSTINOHJELMAN MUKAISESTI. Provisiot ja bonukset voidaan tallettaa suoraan henkilökohtaiselle pankkitilillesi oman maasi valuuttana
tai voit hankkia pre-paid-periaatteella toimivan euromääräisen Prosperity Cardin (ostoksia tehtäessä voidaan veloittaa ylimääräisiä rahansiirto- ja
valuutanvaihtomaksuja, jos paikallinen valuuttasi ei ole euro). Maksu tapahtuu saman viikko- ja kuukausiaikataulun mukaan kaikkialla maailmassa.
      </div>
    </div>
  </div>
</div>
  <!------End Finnish FAQ -->
  </div>
<!------End Finnish TAB -->



  <div class="tab-pane" id="english">
  
  
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
<!------End English FAQ -->
  </div>
<!------End English TAB -->

  
  <div class="tab-pane" id="swedish">
  
  
  
 <div class="panel-group" id="SEaccordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#SEaccordion" href="#SEcollapseOne">
         Fråga 1: Vad är en PI-marknad?
        </a>
      </h4>
    </div>
    <div id="SEcollapseOne" class="panel-collapse collapse in">
      <div class="panel-body">
        Svar: För att snabbare kunna möta efterfrågan på nya marknader lanserar Vi en strategi för privat import (”PI”) som innebär att vi kan lansera
oss i fler länder snabbare.
Våra aktuella produkter kan levereras direkt till kunder i EU-länderna, tack vare en unik bestämmelse inom EU som
tillåter PI på kundnivå.
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#SEaccordion" href="#SEcollapseTwo">
          Fråga 2: Hur anmäler jag mig?
        </a>
      </h4>
    </div>
    <div id="SEcollapseTwo" class="panel-collapse collapse">
      <div class="panel-body">
        Svar: Promotorer anmäler sig på den tyska marknaden – gå bara in på webbsidan för onlineanmälan, klicka på ditt lands PI-flagga och följ
instruktionerna på skärmen. Observera att produkterna kommer att levereras på kundbasis endast till det land du har valt.
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#SEaccordion" href="#SEcollapseThree">
          Fråga 3: Vilka är de aktuella PI-marknaderna?
        </a>
      </h4>
    </div>
    <div id="SEcollapseThree" class="panel-collapse collapse">
      <div class="panel-body">
        <table width="100%" border="1" class="faqTable">
  <tr class="head">
    <th scope="col">Land</th>
    <th align="center" scope="col" style="text-align: center;">Anmälan kan göras från...</th>
    <th align="center"  scope="col" style="text-align: center;">Produkter börjar levereras...</th>
  </tr>
  <tr class="odd">
    <td>Finland</td>
    <td align="center" style="text-align: center;">2014-10-01</td>
    <td align="center" style="text-align: center;" >2014-10-15</td>
  </tr>
  <tr class="even">
    <td>Sverige</td>
    <td align="center" style="text-align: center;">2014-10-01</td>
    <td align="center" style="text-align: center;">2014-10-15</td>
  </tr>
  <tr class="odd">
    <td>Spanien</td>
    <td align="center" style="text-align: center;" >2014-11-01</td>
    <td align="center" style="text-align: center;">2014-11-15</td>
  </tr>
</table>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#SEaccordion" href="#SEcollapseFour">
          Fråga 4: Kan jag välja mellan olika promotorsystem när jag anmäler mig?
        </a>
      </h4>
    </div>
    <div id="SEcollapseFour" class="panel-collapse collapse">
      <div class="panel-body">
        Svar: Ja! Du kan anmäla dig till Basic Promoter System, Executive Promoter System, eller Star Promoter System (Vi-Trim®,
Metab-Awake® och Vi Omega Essentials™ kommer inte att vara tillgängliga). I dagsläget finns det tryckta marknadsföringsmaterialet som ingår i
promotorsystemen bara på tyska.
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#SEaccordion" href="#SEcollapseFive">
         Fråga 5: Vilka produkter kommer att erbjudas?
        </a>
      </h4>
    </div>
    <div id="SEcollapseFive" class="panel-collapse collapse">
      <div class="panel-body">
        <table width="100%" border="1" class="faqTable">
  <tr class="head">
    <th align="left" valign="middle" scope="col">Kit/Produkt</th>
    <th align="center" valign="middle" scope="col" style="text-align: center;">PI-marknaden(t.ex. Sverige)</th>
    <th align="center" valign="middle"  scope="col" style="text-align: center;">Marknad med full lansering
(t.ex. Storbritannien)</th>
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
    <td align="left" valign="middle">Vi-Shape® Mix-Ins - (choklad/jordgubb)</td>
    <td align="center" valign="middle"  style="text-align: center;">X</td>
    <td align="center" valign="middle"  style="text-align: center;">X</td>
  </tr>
  <tr class="odd">
    <td align="left" valign="middle">Nutra-Cookie®- (Chocolate chip/Havre & russin)</td>
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
        <a data-toggle="collapse" data-parent="#SEaccordion" href="#SEcollapseSix">
          Fråga 6: Är produkterna godkända inom PI-marknaderna?
        </a>
      </h4>
    </div>
    <div id="SEcollapseSix" class="panel-collapse collapse">
      <div class="panel-body">
        Svar: Ja! Alla Vi:s produkter uppfyller de specifika kraven enligt varje PI-lands gällande lagstiftning. Produkterna levereras till dig med flerspråkiga
etiketter som innehåller näringsinformation och användningsanvisningar.
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#SEaccordion" href="#SEcollapseSeven">
         Fråga 7: Vilken typ av material finns att tillgå på PI-marknadernas egna språk?
        </a>
      </h4>
    </div>
    <div id="SEcollapseSeven" class="panel-collapse collapse">
      <div class="panel-body">
        Svar: Inom PI-marknaderna finns ett begränsat material översatt till lokala språk: 1) ansöknings-/anmälningsformulär för kunder och promotorer, 2)
produkter, 3) sammanfattande beskrivning (1 sida) av incitamentsprogram, 4) delar av ViNet:s administrativa dokumentation, inbegripet varukorgen,
och 5) produktguiden. Stora delar av Vi:s marknadsföringsmaterial finns INTE på lokala språk (t.ex. challenge.com, GST, mobilappar), men allt material
finns på engelska. Dessutom kommer vi att tillhandahålla vår webbanmälan, onlinevarukorg, valda delar av ViNet:s administrativa funktioner och de
juridiska dokument som du behöver för att hantera din Vi-verksamhet och låta den växa på PI-marknaden – allt på lokala språk. Ytterligare material
(t.ex. Vi.com, Challenge.com, Getting Started Training) kommer att finnas på engelska, tyska och nederländska.
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#SEaccordion" href="#SEcollapseEight">
          Fråga 8: När kommer PI-marknaderna att bli marknader med full lansering (d.v.s. med egen distribution)
som t.ex. Storbritannien och Tyskland?
        </a>
      </h4>
    </div>
    <div id="SEcollapseEight" class="panel-collapse collapse">
      <div class="panel-body">
        Svar: Vi kommer att bevaka försäljningen för att avgöra när det är lämpligt att övergå till egen distribution.
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#SEaccordion" href="#SEcollapseNine">
          Fråga 9: Kommer jag att bli berättigad till samma provisioner och bonusar som andra promotorer?
        </a>
      </h4>
    </div>
    <div id="SEcollapseNine" class="panel-collapse collapse">
      <div class="panel-body">
        Svar: JA! ALLA PROMOTORER HAR MÖJLIGHET ATT TJÄNA IN SAMMA PROVISIONER OCH BONUSAR SOM INOM DET TYSKA
INCITAMENTSPROGRAMMET. Dina provisioner och bonusar kan sättas in direkt på ditt personliga bankkonto i lokal valuta eller också kan du välja att
få beloppet förbetalt på ett Prosperity Card som laddas med euro (när du handlar med kortet kan transaktions- eller valutaväxlingsavgifter tillkomma
om din lokala valuta inte är euro). Utbetalningar görs enligt samma vecko-/månadsschema i alla länder.
      </div>
    </div>
  </div>
</div>
  
  <!------End Swedish FAQ -->
  </div>
<!------End Swedish TAB -->



  <div class="tab-pane" id="spanish">
  
  <div class="panel-group" id="ESaccordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#ESaccordion" href="#EScollapseOne">
        1. ¿Qué es un mercado PI?
        </a>
      </h4>
    </div>
    <div id="EScollapseOne" class="panel-collapse collapse in">
      <div class="panel-body">
        Para reaccionar con mayor rapidez a la demanda en nuevos mercados, Vi está lanzando una estrategia denominada Personal Import (“PI”),
que nos permite que lancemos más países más rápido.
Se nos permite enviar nuestros productos actuales a clientes en los países de la UE; esto aprovecha la ventaja de una regla única en la UE que
permite PI cuando basada en Clientes.
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#ESaccordion" href="#EScollapseTwo">
          2. ¿Cómo me inscribo?
        </a>
      </h4>
    </div>
    <div id="EScollapseTwo" class="panel-collapse collapse">
      <div class="panel-body">
       Sólo tiene que ir a la página web de inscripción a través de su páginabodybyvi.com o <a href="http://myvi.net" target="_blank" class="linkinline">myvi.net</a>, y a continuación hacer clic en la bandera de su país PI y seguir las instrucciones. Tenga en cuenta que los productos sólo serán enviados para el país que seleccione.

      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#ESaccordion" href="#EScollapseThree">
          3. ¿Cuáles son los actuales mercados PI?
        </a>
      </h4>
    </div>
    <div id="EScollapseThree" class="panel-collapse collapse">
      <div class="panel-body">
        <table width="100%" border="1" class="faqTable">
  <tr class="head">
    <th scope="col">País</th>
    <th align="center" scope="col" style="text-align: center;">La inscripción comienza...</th>
    <th align="center"  scope="col" style="text-align: center;">Los productos son enviados...</th>
  </tr>
  <tr class="odd">
    <td>Finlandia</td>
    <td align="center" style="text-align: center;">1.10.2014</td>
    <td align="center" style="text-align: center;" >15.10.2014</td>
  </tr>
  <tr class="even">
    <td>Suecia</td>
    <td align="center" style="text-align: center;">1.10.2014</td>
    <td align="center" style="text-align: center;">15.10.2014</td>
  </tr>
  <tr class="odd">
    <td>España</td>
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
        <a data-toggle="collapse" data-parent="#ESaccordion" href="#EScollapseFour">
         4. ¿En la inscripción tendré la posibilidad de escoger entre los Sistemas de Promotores?
        </a>
      </h4>
    </div>
    <div id="EScollapseFour" class="panel-collapse collapse">
      <div class="panel-body">
        ¡Sí! Usted puede inscribirse con el Basic Promoter System, Executive Promoter System, o Star Promoter System (Vi-Trim®, Metab-Awake®,
y Vi Omega Essentials™ no estarán disponibles). Por ahora, los materiales de marketing impresos que figuran en los Promoter Systems solo
están disponibles en alemán.
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#ESaccordion" href="#EScollapseFive">
         5. ¿Qué productos se ofrecen?
        </a>
      </h4>
    </div>
    <div id="EScollapseFive" class="panel-collapse collapse">
      <div class="panel-body">
        <table width="100%" border="1" class="faqTable">
  <tr class="head">
    <th align="left" valign="middle" scope="col">Kits/Productos</th>
    <th align="center" valign="middle" scope="col" style="text-align: center;">Mercado PI (por ejemplo, Suécia)</th>
    <th align="center" valign="middle"  scope="col" style="text-align: center;">Lanzamiento Mercado Completo(por ejemplo, Reino Unido)</th>
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
    <td align="left" valign="middle">Vi-Shape® Mix-Ins - Chocolate y Fresa</td>
    <td align="center" valign="middle"  style="text-align: center;">X</td>
    <td align="center" valign="middle"  style="text-align: center;">X</td>
  </tr>
  <tr class="odd">
    <td align="left" valign="middle">Nutra-Cookie®- Perlas de Chocolate y Avena con Pasas</td>
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
        <a data-toggle="collapse" data-parent="#ESaccordion" href="#EScollapseSix">
          6. ¿Están los productos de acuerdo con la ley en los mercados PI?
        </a>
      </h4>
    </div>
    <div id="EScollapseSix" class="panel-collapse collapse">
      <div class="panel-body">
        ¡Sí! Todos los productos Vi cumplen los requisitos reglamentarios específicos de cada país PI. Los productos llegarán a usted con etiquetas en varios
idiomas incluyendo información nutricional e instrucciones de uso.
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#ESaccordion" href="#EScollapseSeven">
          7. ¿Qué materiales estarán disponibles para mí en los idiomas nativos de los mercados PI?
        </a>
      </h4>
    </div>
    <div id="EScollapseSeven" class="panel-collapse collapse">
      <div class="panel-body">
        En un mercado PI usted obtiene materiales limitados, traducidos a nivel local, entre ellos: Formularios de Aplicación / Inscripción de Cliente y Promotor,
2) Productos, 3) Sumario de una página del Programa de Incentivos, 4) Acceso limitado al Back-office ViNet incluyendo carrito de compras, 5) Guía de
Productos & hoja de datos del batido Vi Shake Shape. Además, Vi ofrecerá nuestras herramientas (como es sitio web GST) y los documentos legales
necesarios para hacer crecer y administrar su negocio Vi en los mercados PI - todo en las lenguas nativas. <br/> <br />

Usted NO recibirá algunos de los materiales de marketing Vi en su lengua nativa (por ejemplo, aplicaciones móviles, vi.com) en su lengua materna; sin
embargo, todos los materiales están disponibles en alemán o inglés, como por ejemplo el Challenge.com, el folleto GST (Formación Como Empezar),
el Vídeo de Lanzamiento, el Folleto Challenge, o la Revista Challenge). Los populares videos Overview (Información General) y GST (Formación Como
Empezar) están disponibles en inglés con subtítulos.
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#ESaccordion" href="#EScollapseEight">
          8. ¿Cuándo se convertirán los mercados PI para Lanzamiento Completo (también conocido como Auto-Distribución /
AD) Mercados como el Reino Unido y Alemania?
        </a>
      </h4>
    </div>
    <div id="EScollapseEight" class="panel-collapse collapse">
      <div class="panel-body">
        Vi supervisará las ventas para determinar cuándo convertir a AD.
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#ESaccordion" href="#EScollapseNine">
          9. ¿Tendré derecho a recibir las mismas comisiones y bonos como otros Promotores?
        </a>
      </h4>
    </div>
    <div id="EScollapseNine" class="panel-collapse collapse">
      <div class="panel-body">
        ¡SÍ! CADA PROMOTOR TENDRÁ LA OPORTUNIDAD DE GANAR LAS MISMAS COMISIONES Y BONOS DE ACUERDO CON EL PROGRAMA DE
INCENTIVOS ALEMÁN. Sus comisiones y bonos pueden ser depositados directamente en su cuenta bancaria personal en la moneda local, o
usted puede registrarse para obtener una Tarjeta Prosperity prepaga cargada en Euros (al hacer compras, tasas y transacciones de divisas pueden
aplicarse si su moneda local no es el Euro). Los pagos se harán en el mismo horario semanal y mensual a nivel mundial.
      </div>
    </div>
  </div>
</div>
  <!------End Spanish FAQ -->
  </div>
<!------End Spanish TAB -->


</div>

<script>
  $(function () {
    $('#myTab a:first').tab('show')
  })
</script>






<p class="small-text">[ Download the FAQ for PI Countries: <a class="linkinline" href="pdf/2163ENG001_PI_FAQ_r3.pdf" target="_blank">ENG</a> | <a class="linkinline" href="pdf/Sweden-2163SE001_PI_FAQ_r1.pdf" target="_blank">SE</a> | <a class="linkinline" href="pdf/Finland-2163FI001_PI_FAQ_r1.pdf" target="_blank">FI</a> | <a class="linkinline" href="pdf/Spain-2163ESESP001_PI_FAQ_r5.pdf" target="_blank">ES</a> ]</p>


</div>
</section>


<section style="background-color:#f5f5f5; padding: 0px 0;">
<div class="container_12">

<div style="padding-bottom:10px;"> 
<center>
<h4 style="font-size:20px;">Vi-yleiskatsausvideot</h4>
</center>
</div>


<ul class="nav nav-tabs" role="tablist" id="myTab2">
  <li class="active"><a href="#english-overview" role="tab" data-toggle="tab">Englanti</a></li>
  <li><a href="#finnish-overview" role="tab" data-toggle="tab">Suomi</a></li>
  <li><a href="#spanish-overview" role="tab" data-toggle="tab">Espanja</a></li>
</ul>

<div class="tab-content">


  <div class="tab-pane active" id="english-overview">
  
  
  <div id="kaltura_player_1409187262" style="width: 940px; height: 360px; margin-bottom: 30px">&nbsp;</div>

<script src="https://cdnapisec.kaltura.com/p/1011121/sp/101112100/embedIframeJs/uiconf_id/21232652/partner_id/1011121?autoembed=true&amp;playerId=kaltura_player_1409187262&amp;cache_st=1409187262&amp;width=940&amp;height=360&amp;flashvars[streamerType]=auto&amp;flashvars[playlistAPI.kpl0Id]=0_ns57cj50" type="text/javascript"></script>

  
  
 </div>
    
    
  <div class="tab-pane" id="finnish-overview">
  
  <div id="kaltura_player_14091872621" style="width: 940px; height: 360px; margin-bottom: 30px">&nbsp;</div>

<script src="https://cdnapisec.kaltura.com/p/1011121/sp/101112100/embedIframeJs/uiconf_id/25943622/partner_id/1011121?autoembed=true&amp;playerId=kaltura_player_14091872621&amp;cache_st=1409187262&amp;width=940&amp;height=360&amp;flashvars[streamerType]=auto&amp;flashvars[playlistAPI.kpl0Id]=0_68tgn85q" type="text/javascript"></script>
 
 
 </div>
 
 
 
 <div class="tab-pane" id="spanish-overview">
  
  <div id="kaltura_player_14091872622" style="width: 940px; height: 360px; margin-bottom: 30px">&nbsp;</div>

<script src="https://cdnapisec.kaltura.com/p/1011121/sp/101112100/embedIframeJs/uiconf_id/11685031/partner_id/1011121?autoembed=true&amp;playerId=kaltura_player_14091872622&amp;cache_st=1409187262&amp;width=940&amp;height=360&amp;flashvars[streamerType]=auto&amp;flashvars[playlistAPI.kpl0Id]=0_hqhnsfnp" type="text/javascript"></script>
 
 
 </div>



</div>

<script>
  $(function () {
    $('#myTab2 a:first').tab('show')
  })
</script>



</div>
</section>


<section style="background-color:#f5f5f5; padding: 0px 0;">
<div class="container_12">

<div style="margin-top:-320px"> 
<br/>
<h4 style="font-size:20px;">Eurooppalaiset maksusuositukset</h4>
 
<p style="margin-top:10px">Vi haluaa helpottaa uusien promoottoreidensa ja asiakkaidensa liittymistä Challenge-ohjelmaan. Siksi se tarjoaa kolme erilaista maksutapaa Challenge-ohjelmaan liittyville sekä Promoter Kit- tai Challenge Kit -pakettien tilaajille.</p>
 
<h4 style="font-size:20px;">Suosittelemme maksutapoja seuraavassa järjestyksessä</h4>
<ol> 
<li> <strong>Luottokortti.</strong> Nopein ja helpoin tapa päästä alkuun Challenge-ohjelmassa ja muiden mukaan haastamisessa. Tuotteet lähetetään tavallisesti 24 tunnin kuluessa.</li>
<li>  <strong>PayPal</strong> Yhtä helppo ja nopea maksutapa kuin luottokortti. Soveltuu niille, joilla ei ole luottokorttia tai jotka eivät halua maksaa luottokortilla. Tuotteet lähetetään tavallisesti 24 tunnin kuluessa.</li>
<li>     <strong>Suoraveloitus.</strong>
	<ul> 
    	<li>Käytetään vain viimeisenä vaihtoehtona, sillä Promoter Kit- ja Challenge Kit -pakettien lähettäminen viivästyy vähintään 7–9 päivällä.</li>
		<li> Vi lähettää tuotteet vastaanotettuaan maksun. EU:n pankkisäännöksistä johtuen suoraveloituksena tehtyjen maksujen vahvistaminen saattaa kestää jopa seitsemän päivää tai pidempään, mikäli suoraveloitustiedoissa on ongelmia.</li>
		<li> Tästä syystä tuotteet lähetetään 7–9 päivän kuluessa.  </li>
		<li> Huomioitavaa: BV näkyy vasta maksun vastaanottamisen jälkeen.</li>
		<li>Suosittelemme, että liittyjiä kannustetaan valitsemaan joka kuun 5. päivänä tehtävä automaattinen autoship-toimitus. Näin varmistetaan, että suoraveloitukseen liittyvät mahdolliset ongelmat ehditään ratkaista ennen kuun loppua.</li>
	</ul>
 </li>
 </ol>
 
<h4 style="font-size:20px;"> Suoraveloituksena maksettavien tilausten käsittely</h4>
 
 <ol>
	<li>  Vi vastaanottaa suoraveloituksena maksettavan tilauksen.</li>
	<li> Vi odottaa pankin vahvistusta maksun vastaanottamisesta ennen toimituksen lähettämistä (5–7 päivää).  
    	<ol type="a">
			<li>Jos maksu vahvistetaan vastaanotetuksi, toimitus lähetetään tilaajalle.</li>
			<li>Jos maksu epäonnistuu, asiakaspalvelumme ryhtyy seuraaviin toimenpiteisiin:
            	<ol type="i">
                  <li>Tili jäädytetään väliaikaisesti. </li>
                  <li>Promoottorille ja hänet ilmoittaneelle henkilölle tiedotetaan maksun epäonnistumisesta sähköpostitse.</li>
                  <li> Asiakaspalvelumme ottaa promoottoriin puhelimitse yhteyttä ilmoittaakseen suoraveloitusmaksun hylkäämisestä ja ehdottaakseen toista maksutapaa.</li>
              </ol>
           </li>
       </ol>
    </li>
 </ol>
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
