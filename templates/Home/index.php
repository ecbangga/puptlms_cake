
<div id="contentTime" >
	<?php
		// Use a constant in the format parameter
		//echo " ". date("l"); 
		echo '<div id="txt"></div>' ;
		
	?>
	<p style="font-size: 35px; color: black; float: left" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspHours  |  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspMinutes  |&nbsp&nbsp&nbsp&nbsp&nbsp  Seconds</p>
	
	<div id="contentDate" >
	<?php
		echo "<br>". date("l"); 
		echo  ", ".date("F d, Y");
	?>
	</div>
</div>

<?=$this->HTML->script(['home','sidenav'],['block'=>true]) ?>

