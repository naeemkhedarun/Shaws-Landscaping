<?php ob_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<link rel="stylesheet" href="styles/test.css" type="text/css" media="screen" />
	</head>
	<body>
	<!-- Shows the grass and centered logo at the top. -->
	<div id="header">
		<img class="logo" src="images/logo.png" />
	</div>
	<!-- Main Container with left side bar and content area. -->
	<div id="maincontainer">
		<div id="left">
		<img class="left_bar_header" src="images/ButtonTop.png" /><div id="left_bar_body">
			<div id="left_bar_body_text">
			<!-- All Left Bar Links here. -->
				<a href="index.php">Home</a><br />
				<a href="stonepaving.php">Stone Paving</a><br />
				<a href="blockpaving.php">Block Paving</a><br />
				<a href="fencing.php">Fencing</a><br />
				<a href="decking.php">Decking</a><br />
				<a href="pond.php">Ponds & Rockery</a><br />   
				<a href="portfolio.php">Portfolio</a>
				<a href="contact.php">Contact Us</a><br />   
			</div>
		</div><img class="left_bar_footer" src="images/ButtonFlower.png" />
		</div>
		<div id="right">
		<img class="right_header" src="images/MainBoxTop.png" /><div id="right_body" style="background-image:url("images/MainBoxMiddle.png");">
			<div id="right_body_text">
			<!-- All main page content here. -->
<h2>Portfolio</h2>
Please click on an image for more detail on the project.
<br />
<br />

<div id="stonepaving">
<table>
<tr><td><a href="jackie.php"><img src="images/thumb_port_jackie47.jpg" /></a></td><td>Jackie: Weybridge<br />Designed and created a garden with paving, fencing, raised beds, turfing and other features..</td></tr>
<tr class="space_row"><td>Lindy: Barnes<br />Created a courtyard garden to specific plans.</td><td><a href="lindy.php"><img src="images/thumb_port_lindy12.jpg" /></a></td></tr>
<tr><td><a href="diana.php"><img src="images/thumb_port_diana14.jpg" /></a></td><td>Diana: Walton on Thames<br />We built a woodland garden reusing available materials.</td></tr>
<tr><td>Isobelle: Walton on Thames<br />Designed and created a bespoke mediteranean maintenance free front garden.</td><td><img src="images/thumb_port_isobelle3.jpg" /></td></tr>
<tr><td><img src="images/thumb_port_mccloud26.jpg" /></td><td>Toni & Peter: Walton on Thames<br />We worked with the client to create a functional back garden.</td></tr>
<tr><td>Colin: Shepperton<br />We made a usable and decorative patio and an individual front garden.</td><td><a href="colin.php"><img src="images/thumb_port_colin23.jpg" /></a></td></tr>
<tr><td><a href="paul.php"><img src="images/thumb_port_broadbent21.jpg" /></a></td><td>Barry: Egham<br />We made a back garden that is more functional with a sun bathing area.</td></tr>
<tr><td>Pat: Weybridge<br />Designed and created a bespoke mediteraneon front garden with flower beds.</td><td><img src="images/thumb_port_pat1.jpg" /></td></tr>
<tr><td><img src="images/thumb_port_lucy38.jpg" /></td><td>Lucy: Ottershaw<br />We made a working rear garden with a raised vegetable patch.</td></tr>
<tr><td>Ali: Putney<br />We recreated a patio that matches its surroundings.</td><td><img src="images/thumb_port_ali13.jpg" /></td></tr>
<tr><td><img src="images/thumb_port_kevin13.jpg" /></td><td>Kevin: Addlestone<br />We created a user friendly back garden and side path.</td></tr>
<tr><td>Paul: Wraysbury<br />Designed and created a unique front drive with block paving.</td><td><a href="paul.php"><img src="images/thumb_port_paul9.jpg" /></a></td></tr>

</table>
</div>
		</div><img class="right_footer" src="images/MainBoxBottom.png" />
		</div>
	</div>
	</body>
</html>

<?php
include_once 'replacePngTags.php';
echo replacePngTags(ob_get_clean());
?>
