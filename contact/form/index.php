<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta name="author" content="Jahidul Pabel Islam">
		<meta name="description" content="Contact Form for our shop Bubbles Bargain World.">
		<meta name="keywords" content="shop, savings, discount, bubbles, bargain, world, west, sussex, bognor, regis, local, cards, toys, sweets, character, merchandise, party, arts, craft, novelty, gifts, stationary, glassware, baby, plaque, sign, souvenirs">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Contact Form - Bubbles Bargain World</title>
		<link rel="icon" href="../../images/favicon.png">
		<link rel="stylesheet" type="text/css" href="../../lib/style.css"/>
	</head>
	
	<body>
		<div id="sitemap">
			<p><a href="../../sitemap.xml">Site Map</a></p>
		</div>
		<div id="header">
			<header>
				<img id="logo" src="../../images/logo.png" alt="Bubbles Bargain World Logo">
			</header>
				
			<div id="openinghours">
				<p id="monday">Monday: 9am - 5:30pm</p>
				<p id="tuesday">Tuesday: 9am - 5:30pm</p>
				<p id="wednesday">Wednesday: 9am - 5:30pm</p>
				<p id="thursday">Thursday: 9am - 5:30pm</p>
				<p id="friday">Friday: 9am - 5:30pm</p>
				<p id="saturday">Saturday: 9am - 5:30pm</p>
				<p id="sunday">Sunday: 10am - 4pm</p>
			</div>
		</div>

		<nav>
			<img id="menu-icon" src="../../images/menu-icon.svg" alt="Menu">
			<ul>
				<li><a href="../../">Home</a></li>
				<li><a href="../../products/">Products</a></li>
				<li><a href="../">Contact Us</a></li>
				<li><a href="../../about/">About Us</a></li>
			</ul>
		</nav>
					
		<section >
			<h1>Contact Form</h1>
			<div id="errors">
			<?php
				$to = 'jahidul.pabel.islam@hotmail.com'; //the address to send mail to
				$subject = $_POST['subject']; //the subject user provided for message
				$message = $_POST['message']; //the message user wrote
			    $email = $_POST['email']; //the email user provided to reply to
				$headers = 'From: contact@bubblesbargainworld.co.uk'  . "\r\n" . 'Reply-To: ' . $email;
			    if ($_POST['submit']) { //checks if user clicked submit
			    	if ($message != "") { //checks if message is not empty
						if ($email != "") { //checks if email is not empty
							if ($subject == "") { 
								$subject = 'Bubbles Bargin World Contact Form'; //if user didn't provide subject a default one is assigned
							}
							if (mail($to, $subject, $message, $headers)) { //try to send email
								echo '<p>Your message has been sent!</p>';
							} 
							else { 
								echo '<p>Something went wrong, please try again!</p>';
							}
						}
						else {
							echo '<p>Please enter your email.</p>';
						}
				    }
				    else {
				    	echo '<p>Please enter your message.</p>';
				    }
				}
			?>
			</div>
			
			<form name="contactform" method="post" onsubmit="return validate(this);"> <!--validate using JavaScript when submitted-->
			    <label for="email">Email <span class="required">*</span></label>
			    <input type="email" name="email" placeholder="Enter your email here." required tabindex="1" onchange="emailvalidate(this);">

			    <label for="subject">Subject</label>
			    <input type="text" name="subject" placeholder="Enter the subject here." tabindex="2" >

			    <label for="message">Message <span class="required">*</span></label>
			    <textarea name="message" placeholder="Enter your message here." required tabindex="3" onchange="messagevalidate(this);"></textarea>

			    <input id="submit" name="submit" type="submit" value="Submit">
			    <p class="required">* indicates a required field</p>
			</form>
		</section>

		<footer>
			<a href="https://www.facebook.com/Bubbles-Bargain-World-1553944361587066/timeline" target="_blank"><img class="socialmedia" src="../../images/facebook.png" alt="Find Us On Facebook at bubblesbargainworld"></a>
			<p>Validated using <a href="http://validator.w3.org/check?uri=referer" target="_blank">HTML</a> and <a href="http://jigsaw.w3.org/css-validator/check/referer" target="_blank">CSS</a>.</p>
			<p>&copy; BubblesBargainWorld 2015 All Rights Reserved.</p>
			<p>Designed &amp; Developed by Jahidul Pabel Islam.</p>
		</footer>

		<div id="cookiebanner">
			<p>This website uses cookies. By viewing our website you agree to use cookies. Our
			<a href="../../about/cookie-policy/">Cookie Policy</a>
			<button id="ok" type="button">OK</button>
			</p>
		</div>
		<script type="text/javascript" src="../../lib/google-analytics.js"></script>
		<script type="text/javascript" src="../../lib/cookie-policy.js"></script>
		<script type="text/javascript" src="../../lib/day.js"></script>
		<script type="text/javascript" src="../../lib/jquery.js"></script>
		<script type="text/javascript" src="../../lib/height.js"></script>
		<script type="text/javascript" src="../../lib/formvalidator.js"></script>
	</body>
</html>
