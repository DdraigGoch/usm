<div id="homeleft" class="biglogo">
<img src="images/Logo.jpg"  alt="United Services Mess Logo" class="logoborder resize"/>
<p><strong>The United Services Mess</strong></p>
</div>
<div id="homeright" class="bodyText bigfont">
<p class="pageHeader">Welcome to Cardiff USM</p>
<script type="text/javascript">
	$(function() {
		$("#tabHomeCall").click(function() { // bind click event to link
				$("#tabs").tabs("url", 6, "tabContactUs.php").tabs("select", 6); // switch to ContactUs
			return false;
		});
		$("#tabHomeAbout").click(function() { // bind click event to link
				$("#tabs").tabs("url", 1, "tabAboutUs.php").tabs("select", 1); // switch to ContactUs
			return false;
		})
	});
</script>
<p class="style1 bigfont">Welcome to the website of the Cardiff United Services
Mess on <?php echo date("l, F jS Y") ?>.</p> <p class ="style1 bigfont">Here you can find information about the USM, what's happening, membership
and where to find us.</p>
<p class="style1">To find who's who please visit <a href="#" id="tabHomeAbout">About Us</a></p>

<p class="style1">If you wish to get in contact with the 
Mess please do not hesitate to <a href="#" id="tabHomeCall">call</a>.</p>
<!--<p>The 2019 Annual General Meeting will be held on Friday 31st May.</p> --> <div  id="usmkicker"> <p>The United Services Mess will hold its <strong>104th</strong> Annual Dinner on Friday 8th November 2019. </div>  <br></br>
</div>
