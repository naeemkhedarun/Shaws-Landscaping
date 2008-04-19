<?php ob_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <link rel="stylesheet" href="styles/test.css" type="text/css" media="screen" />
		<title>Shaws Landscaping - Block Paving</title>
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
    <h2>
        Contact Us</h2>
		
		Call us free on: <b>0800 007 5679</b>, <br />or ring Mr Thomas Shaw directly on: <b>07704 824 525</b>.
		<br />
		<br />
		Alternatively you can email us at <a href="mailto://shawslandscaping@hotmail.co.uk">shawslandscaping@hotmail.co.uk</a>. Please leave
		your name, telephone number, address and a brief description of your requirements and
		we will get back to you as soon as possible.
				<br /><br />
		Contact Address:<br />
		35 Tringhm Close<br />
		Ottershaw<br />
		Surrey<br />
		KT16 0NF<br />
		
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
