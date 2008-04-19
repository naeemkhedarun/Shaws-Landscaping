<?php ob_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <link rel="stylesheet" href="styles/test.css" type="text/css" media="screen" />
		<title>Shaws Landscaping - Decking</title>
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
<h2>Decking</h2>

Timber decking is a popular addition to a home. It creates an outdoor living area that is valuable as a space for parties or a place to relax.
Decking comes in soft or hard wood, and both carry a 15 year manufacturers guarantee against rot. 
<br />
<br />
Decking is extremely versatile, with designs and patterns that can be tailor made to suit all shapes and sizes of garden. It is 
possible to add tiers, lighting, balustrading, steps and planting to transform your garden area into an extended living space.
<br />
<br />
All decking is fitted to a solid wood framework base, which can be either be laid on concrete pads or secured by fixed posts. The decking boards are spaced
to allow for natural expansion and contraction. The choice of design layout of the decking boards is variable to suit individuals styles.

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
