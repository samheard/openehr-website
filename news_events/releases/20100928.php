<?php
$PageName = 'Releases';
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
			
			<h2>ADL 1.5 Workbench - beta release 2</h2>
			<h6>28. September 2010 | from: Thomas Beale</h6>
			<br/>
			
			<p>A second beta of the ADL/AOM 1.5 Workbench has been released. The main feature added is support for regression testing of archetypes. A new SVN repository has been added <a href="https://github.com/openEHR/adl-archetypes/tree/master/ADL15-reference">here (moved from /svn/knowledge2/TRUNK/)</a> that contains test archetypes as well as the object model schemas used to drive the ADL Workbench. Around 150 test archetypes are available, each now with a test result tag included in the description meta-data, covering most pass/fail conditions defined in ADL 1.5. Other features include text searching for archetypes, and various compiler bug fixes.</p>
			<p>Builds are available for:</p>
			<ul>
				<li>Windows XP/Vista/Windows 7</li>
				<li>Mac OS X 10.6</li>
				<li>Mac OS X 10.5</li>
				<li>Linux</li>
			</ul>
			<br/>
			<a href="/downloads/ADLworkbench/home">Download page</a>;
			<a href="/downloads/ADLworkbench/releasenotes">Release notes</a>.</p>
			
			<br/>
			<a href="../releases">>> Back to <?php echo "$PageName";?></a>
			
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
