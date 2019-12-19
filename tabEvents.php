    <div class="contentleft">
	  <div class="bodyText">
      <p class="pageName">Events</p>
        <p class="style1">For regular activities and meetings
        please check
             <a href="#" id="tabEventsAct">Activities &amp Societies</a>
        <br /></p>
      <p class="style1">St. David&#39;s, St. George&#39;s, Trafalgar,
      Waterloo, Battle Of Britain Days and Burns Night are regularly
      celebrated with formal dinners. Please see the monthly list here.</p>  
      <em>
        <span class="style3">Clarification of details of any of the
        above may be obtained from the Mess Secretary</span>
      </em>
      <br />
      <br />
      <span class="pageName">AGM &amp Annual Events</span>
           
	  <p><!-- <strong>THE ANNUAL GENERAL MEETING WILL BE HELD ON FRIDAY THE 31st MAY 2019 at 7pm.</strong>&#160;&#160;&#160;&#160;&#160;&#160;</p>  -->
    
      
	 <!-- <p class="style1">The 
      <span class="highlight">104th Mess Annual Dinner</span> will take place
      in Cardiff on
      <strong>
        Friday 8th November 2019.
      </strong> The principal guest will be Major General James Swift OBE (Assistant Chief of the General Staff).</p> -->
      <hr />
      <p class="style1">
      <strong>NOTE:</strong>&#160;&#160;&#160;&#160;A LUNCH MENU IS
      SERVED IN THE LOUNGE: Noon to 2.00pm&#160; Monday to Thursday and
      on Friday Noon to 4.00pm&#160;
      <br />
      <br /></p>
      <p class="bodyText">&#160;</p>
	  </div>
     </div>
    <div class="contentright">
	<div class="bodyText">
    <br />
	<span class="pageName">List of Events.</span>
      <br />
      <br /> 
		<div id="eventaccordion">
		<?php  if (file_exists('events.xml')) {
				  $eventslist = simplexml_load_file("events.xml");
				  /*echo $eventslist->getName() . "\n";*/
				  foreach($eventslist->month as $month)
				  {
						  echo '<h3><a href="#" class = "subHeader">' ;
						  echo $month->name . "</a></h3>";
						  echo '<div id = "events">';
						  foreach($month->event as $event) {
								  echo '<span class="eventdate">'. $event->date .'</span><span class= "eventname">'.$event->name . "</span><br />";
						  }
						  echo '</div>';
				  }
				};
		  ?>					
		</div>	

	</div>
	</div>

	<script>		
		$( "#eventaccordion" ).accordion({
				header: "h3", 
				autoheight: true 
		});
	$(function() {
		$("#tabEventsAct").click(function() { // bind click event to link
				$("#tabs").tabs("url", 4, "tabActivities.php").tabs("select", 4); // switch to ContactUs
			return false;
		});
		$("#aHomeMessToday").click(function() {
			$( "#MessToday" ).dialog( "open" );  //.show();
			return false;
		});
	});
	</script>




