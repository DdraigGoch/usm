<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
  <meta name="description" content=
"United Services Mess Cardiff, Wales. Private members club with more than 100 years history originally representing all military services and Merchant Navy, now open to all. Located in central Cardiff with bars, restaurant, meeting and function rooms." />
<meta name="keywords" content=
"club, historic, military history, VC winners, Cardiff, bar, lounge, food, restaurant, events, function rooms, rugby international, millennium stadium, formal dinners, beer, wine, drinks, USM, mess, Wales, Captain Scott Society, skittles, Army, RAF, Royal Navy" />

  <title>USM Cardiff</title>
  <meta name="generator" content="Amaya, see http://www.w3.org/Amaya/" />
  <link href="css/layout.css" rel="stylesheet" type="text/css" />
  <link type="text/css" href="css/usmwidget/jquery-ui-1.8.20.custom.css" rel="stylesheet" />
  <link href="css/usmstyle.css" rel="stylesheet" type="text/css" />
  <script type="text/javascript" src="jquery.js"></script>
  <script type="text/javascript" src="jquery-ui.js"></script>
<!--<script type="text/javascript" src="jquerycookiesmin.js"></script>  -->
<script type="text/javascript" src="jqueryfontscalemin.js"></script>

	<script type="text/javascript">
//			$(document).ready(function(){
//			 $("#up").fontscale("p","up",{unit:"px",increment:1});
//			 $("#down").fontscale("p.style1","down",{unit:"px",increment:1});
//			 $("#reset").fontscale("p.style1","reset");
//			});
	$(document).ready(function() {
		var $usmtabs = $( "#tabs" ).tabs();
		$('#testit').click(function(event) { // bind click event to link
//			$.jAlert("testit clicked");
			$usmtabs.tabs('select', 6);
				//$("#tabs").tabs('url', 7, "tabContactUs.php").tabs("load", 7); // switch to ContactUs
			event.preventDefault();
			//return false;

		});
	});
</script> <!-- -->

<body>
<div id="header"><div id="floater"><div id="fitter"><span class="logo">The United Services Mess &nbsp;|&nbsp;<span class="tagline">CARDIFF</span></span></div></div></div>

<div>
	<div id="tabs">
<!--		<ul>
			<li><a href="tabHome.php">HOME</a></li>
			<li><a href="tabAboutUs.php">ABOUT US</a></li>
			<li><a href="tabEvents.php">EVENTS</a></li>
			<li><a href="tabGallery.php">GALLERY/LINKS</a></li>
			<li><a href="tabActivities.php">ACTIVITIES &amp SOCIETIES</a></li>
			<li><a href="tabFacilities.php">FACILITIES</a></li>
			<li><a href="tabContactUs.php">CONTACT US</a></li>
		</ul>
-->
		<ul>
			<li><a href="#tHome">HOME</a></li>
			<li><a href="#tAbout">ABOUT US</a></li>
			<li><a href="#tEvents">EVENTS</a></li>
			<li><a href="#tGallery">GALLERY/LINKS</a></li>
			<li><a href="#tActivities">ACTIVITIES &amp SOCIETIES</a></li>
			<li><a href="#tFacilities">FACILITIES</a></li>
			<li><a href="#tContact">CONTACT US</a></li>
		</ul>
		<div id="tHome">
			<?php include("tabHome.php"); ?>
		</div>
		<div id="tAbout">
			<?php include("tabAboutUs.php"); ?>
		</div>
		<div id="tEvents">
			<?php include("tabEvents.php"); ?>
		</div>
		<div id="tGallery">
			<?php include("tabGallery.php"); ?>
		</div>
		<div id="tActivities">
			<?php include("tabActivities.php"); ?>
		</div>
		<div id="tFacilities">
			<?php include("tabFacilities.php"); ?>
		</div>
		<div id="tContact">
			<?php include("tabContactUs.php"); ?>
		</div>	
	</div> <!-- end of tabs -->
</div>
<!-- <script>
	$(function() {
		var $usmtabs = $( "#tabs" ).tabs();
		$("#testit").click(function() { // bind click event to link
			jAlert("testit clicked");
			$usmtabs.tabs('select', 6);
				//$("#tabs").tabs('url', 7, "tabContactUs.php").tabs("load", 7); // switch to ContactUs
			return false;

		});
	});
	</script> -->

<?php include("footer.php"); ?>
</body>
</html>
