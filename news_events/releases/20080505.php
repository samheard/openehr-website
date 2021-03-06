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
			
			<h2>First openEHR Ruby implementation released</h2>
			<h6>5. May 2008 | from: Thomas Beale</h6>
			<br/>
			
			<p>Akimihci Tatsukawa and Shinji Kobayashi of <a href="http://openehr.jp">openEHR.jp</a> announce the release of version 0.0.1 of a Ruby implementation of openEHR.</p>
			<p>"This release is experimental preview of our work based on openEHR specification release 1.0.1. We implemented ADL Parser and some archetype models and reference models. This parser successfully parses 27 ADL archetypes and generates archetype instances. The work is still in progress. The intention is to have complete implementation of openEHR Reference Model and Archetype Object Model, with support for archetype based object creation and validation."</p>
			<p>The package is available on the URL shown bellow: <a href="http://openehr.jp/svn/ruby/tags/release-0.0.1/adl_parser/pkg/adl_parser-0.0.1.gem">http://openehr.jp/svn/ruby/tags/release-0.0.1/adl_parser/pkg/adl_parser-0.0.1.gem</a></p>
			
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
