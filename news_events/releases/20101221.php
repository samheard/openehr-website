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
			
			<h2>Achetype Editor 2.2 beta release</h2>
			<h6>21. December 2010 | from: Thomas Beale</h6>
			<br/>
			
			<p>A new beta release of the Archetype Editor is now available <a href="/downloads/archetypeeditor/home">here</a>. Bug fixes and enhancements are described in the <a href="/downloads/archetypeeditor/releasenotes">release notes</a>. Issues can be reported on the Problem Report tracker <a href="/issues/browse/AEPR">here</a>. Thanks to Peter Gummer at Ocean Informatics for ongoing software support and creating the new openEHR installer, and to Shahla Fozonkhah for her tireless testing.</p>
			
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