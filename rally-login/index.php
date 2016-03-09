<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="style.css" />











</head>
<body>


<div class="container_12">
<div class="hidden-header grid_12">
&nbsp;
</div>
</div>
<!-- slide 1  -->
<div class="slide-wrap-1">
	<div id="slide1" class="container_12">
		
		
	
	<?php 
	
	$l = $_GET['l'];
	
	
	$q = $_POST['password'];
	
	
	if ($q <= "0") {
	echo '
	<div class="grid_12 top-3">
			<div class="grid_4 alpha">&nbsp;</div>
			<div class="grid_8 omega">
		<div style="text-align: left;">
<form method="post" action="index.php">
<h2>Password:&nbsp; <input type="text" name="password"> <input type="submit" name="submit" value="SUBMIT"></h2>
</form>
	</div>
</div>
			</div>
		    </div> 

</div>


	';

	}
	
	elseif ($q == 'vide') {
		
	$q = 1;
				
	} else {
		
		echo '
		<p style="color: #red;">The Password you entered is incorrect</p>
	<div class="grid_12 top-3">
			<div class="grid_4 alpha">&nbsp;</div>
			<div class="grid_8 omega">
		<div style="text-align: left;">
<form method="post" action="index.php">
<h2>Password:&nbsp; <input type="text" name="password"> <input type="submit" name="submit" value="SUBMIT"></h2>
</form>
	</div>
</div>
			</div>
		    </div> 

</div>


	';
		
	}
	
	
	
	if ($q == '1') {
	
	echo '
	
	

<div class="grid_4 alpha">&nbsp;</div>
			<div class="grid_8 omega">
		<div style="text-align: left;">
	
	<p>Webinar Details/Times</p>

<p><strong>Thursday, January 2nd</strong></p>
<p>Ambassador & Above Webinar 2pm PST</p>
<p>RD & Above Webinar 4pm PST</p>
<p>Company-Wide Webinar 6:30pm PST</p>
<br /><br />
<p><strong>Saturday & Sunday, January 4th & 5th</strong></p>
<p>Worlds Largest Resolution Rally</p>
<br /><br />
<p><strong>Monday, January 6th</strong></p>
<p>Vision Call to reiterate key items</p>
<br /><br />

<p><a href="http://rally.vi.com" target="_blank">Rally.vi.com</a> host page:</p>		

Select your Language (Toggle) 
<p><a href="">US Eng</a> / <a href="">US Esp</a> / <a href="">CAN Eng</a> / <a href="">CAN FR</a> / <a href="">UK</a> </p>


<h2 class="green-text">Worlds Largest Resolution Rally</h2>
<h3 class="no-case">Are you ready to ROCK 2014..?!</h3>

<h4 class="green-text">What is it?</h4>
<p>The Worlds Largest Resolution Rally is a collection of events being run by Promoters throughout the Vi Community to launch the New Year in style.</p>
<h4 class="green-text">When is it?</h4>
<p>World’s Largest Resolution Rally Parties are taking place Saturday and Sunday, January 4th and 5th.  Please check the list of parties here (link) and make sure there is one near your market.  If not, schedule one here (link).</p>
<h4 class="green-text">Why should every Promoter attend?</h4>
<p>Attendees will be the very first to learn about the..</p>
<p>•	NEW PROJECT 10™ Challenge</p>
<p>•	NEW Champion Categories, NEW Viral Voting Platform, NEW Cash Prizes, and more!</p>
<p>•	NEW Project 10 Bonus Pool, Promotions & Other Incentives</p>
<p>•	NEW Challenge Magazine</p>
<p>•	NEW Executive Promoter System</p>
<p>•	NEW Promoter Tools & Technology</p>
<p>•	...and more!</p>


<hr>


<h3>For all Event Hosts:</h3>

<h2>Step 1: Watch this special training Webinar on how to run your Resolution Rally event.  (link)</h2>
<h2>Step 2: Read through the instructions and event flow below. Download the videos and documents you will need for a successful party. </h2>

<h2>Step 3. Have FUN and get your teams off to an amazing New Year start!</h2>


___________________________________

<h2>How do I run the Party?</h2>

<p>A World’s Largest Resolution Rally is run like a normal Group Challenge Party, with Overview Presentation, Getting Started Training, and special 2014 launches.</p>

Event Agenda:
Part 1: Run a normal Challenge Party
•	Play Founder Intro Video 

•	Play the NEW Challenge Party Overview Videos 
o	Play Part 1
•	“i LOST it.” Challenge Testimonies
o	Play Part 2
•	Promoter Testimonies

•	After Part 2
o	Launch New Challenge Magazine
o	Launch New Executive Promoter System
o	Sort Room & Close
•	Type 1, 2, or 3

Part 2: Go Through NEW Getting Started Training
•	Hand out new Getting Started Training Packet

•	Play UPDATED Getting Started Training Video
o	(TIME) After Pool Section, Pause & Re-Explain
•	Lifetime Challenge Bonus
•	NEW PROJECT 10™ Weekly Pool
•	Launch 2nd Chance 3 for FREE & Rising Star
o	(TIME) After Step 1 Shoot Video
•	Pause & Shoot Videos
o	(TIME) After Step 3 Challenge Party
•	Pause & Schedule Personal Challenge Parties
o	After Video- Promote & Close RST Registrations
•	Hand out RST Flyer
•	Promote to come see your Regional Challenge Finalists
•	Close Registrations via Flyer or Vi-Net Mobile

•	Promote 2014.vi.com to learn more about all of the new rollouts

•	Recap GST Action Items & Close Event

What will I need?
You will want to have everything you normally have for a Group Challenge Party, PLUS…
•	Download WLRR Slides Powerpoint / Keynote 

•	Download and Print
o	New Customer Application  
o	New Promoter Application US / ES / CAFR / CAEN / UK
o	New Getting Started Training Flyer US / ES / CAFR / CAEN / UK
o	RST Flyer US / ES / CAFR / CAEN / UK

•	Download all the videos from the playlist below: ES / CAFR / UK
o	Founder Intro
o	Overview Part 1
o	Overview Part 2
o	Getting Started Training


</p>




	
	';
	
	
	}
	else {
	
	
	
	
	
	}
	
	?>
		
			







</body>
</html>


