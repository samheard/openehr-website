<?php
$PageName = 'Events';
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>

<head>

	<?php include '../../panel/headpanel.php' ?>
	
</head>

<body>

<div id="MainFrame">
	
	<div id="TopPanel">
		<?php include '../../panel/toppanel.php' ?>
	</div>
	
	<div id="TopMenu">
	
		<div class="nav">
			<?php include '../../menu/topmenu.php' ?>
		</div>
		
	</div> 

	<div id="MainArea" style="height:450px;">
	
		<div id="SideMenu">
			<?php include '../menu.php' ?>
		</div>
		
		<div id="TextArea">
		
			<h1><?php echo "$PageName";?></h1>
			
			<h2>HL7 Australia Seminar on Future HL7 Standards</h2>
			<h6>2. July 2012 | Sydney</h6>
			<br/>
			
			<p>This HL7 Australia "Future of eHealth Standards" Seminar will outline the recent developments in the use of openEHR Archetypes in HL7, the FHIR work (an
			Aussie development that is taking the global HL7 community by storm) as well as the Clinical Information Modeling Initiative (CIMI) 
			(Programme to see <a href="http://www.hl7.org.au/2012-HL7-Future-Seminar.htm">here</a>).</p>
			<p>Keynote - <strong>FHIR?&nbsp; CIMI?&nbsp; openEHR?&nbsp; What's the Future of the HL7
			Standards?</strong> - Prof Ed Hammond, Duke University, USA</p>
			<p>2 July 2012, 9am to 5:30pm - Standards Australia, 20 Bridge St., Sydney,
			Australia</p>
			
			<br/>
			<a href="../events">>> Back to <?php echo "$PageName";?></a>
			
		</div>
			
	</div>
	
	<div id="BottomMenu">
		<?php include '../../menu/bottommenu.php' ?>
	</div>

	<div id="BottomPanel">
		<?php include '../../panel/bottompanel.php' ?>	
	</div>

</div>
	
<?php include '../../panel/scriptpanel.php' ?>

</body>

</html>