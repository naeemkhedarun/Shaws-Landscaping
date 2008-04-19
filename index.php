<?php ob_start(); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <link rel="stylesheet" href="styles/test.css" type="text/css" media="screen" />
		<title>Shaws Landscaping</title>
    </head>
	<body>
	    <!-- Shows the grass and centered logo at the top. -->
	    <div id="header">
	        <img class="logo" src="images/logo.png" />
	    </div>
	    <!-- Main Container with left side bar and content area. -->
	    <div id="maincontainer">
	        <div id="left">
	            <img alt="" class="left_bar_header" src="images/ButtonTop.png" /><div id="left_bar_body">
	                <div id="left_bar_body_text">
	                    <!-- All Left Bar Links here. -->
	                        <a href="index.php">Home</a><br />
	                        <a href="stonepaving.php">Stone Paving</a><br />
	                        <a href="blockpaving.php">Block Paving</a><br />
	                        <a href="fencing.php">Fencing</a><br />
	                        <a href="decking.php">Decking</a><br />
				<a href="pond.php">Ponds & Rockery</a>
				<a href="portfolio.php">Portfolio</a>
	                        <a href="contact.php">Contact Us</a><br />   
	                </div>
	            </div><img alt="" class="left_bar_footer" src="images/ButtonFlower.png" />
	        </div>
	        <div id="right">
	            <img alt="" class="right_header" src="images/MainBoxTop.png" /><div id="right_body" style="background-image:url("images/MainBoxMiddle.png");">
	                <div id="right_body_text">
	                    <!-- All main page content here. -->
						
						At
                        Shaw's Landscaping we believe that your
                        garden reflects your personality and style.
                        That is why we create and complete bespoke
                        designs to suite your individual
                        requirements.

			<br />
                        <br />

                        <div class="right_body_images"><a href="images/kevin6.jpg"><img alt="Circular boarder around a tree." src="images/thumb_kevin6.jpg" /></a> <a href="images/isabelle2.jpg"> <img alt="Small bespoke maintenance free garden." src="images/thumb_isabelle2.jpg" /></a>
                        </div>
                        <br />
                        <br />
                         No garden is too big or too small. The
                        possibilities to encompass unique designs
                        are boundless. With extensive ranges
                        available in Natural Stone Paving, Block
                        Paving, Decking, Fencing and Trellis Work
                        the choice may be overwhelming. We can help
                        you to choose the finish and style to suit
                        your needs and your garden.<br />
                        <br />
                         

                        <div class="right_body_images">
                            <a href="images/paul26.jpg"><img alt="Unique pathway incorporated inside block paving." src="images/thumb_paul26.jpg" /><a/>
                        </div>
                        <br />
                        <br />
                         Our team of landscapers work to high
                        standards and are professional in their
                        approach to completion of your bespoke
                        design. We are rugged and versatile,
                        offering straight forward hard work coupled
                        with an innovative approach. If it's "your
                        garden", "an outside room", "your
                        sanctuary" or "driveway", we can offer:
                        paving, stone work, fencing, decking,
                        trellis work, ponds, rock features, tree
                        work, beds, borders, brickwork etc..
						<br />
						<br />
			<div class="right_body_images">
			<a href="images/lindy12.jpg"><img alt="Courtyard garden." src="images/thumb_lindy12.jpg" /></a>
                        </div>
			<br />
                         We are happy to meet and discuss your
                        individual requirements with you. We offer
                        free estimates, and a fair priced
                        design and build service. We take pride in
                        our work and consider it an investment, as
                        it will add value to your property. All of
                        our work includes disposing of all old
                        material and rubbish, and leaving the
                        property ready to be enjoyed.
	                </div>
	            </div><img alt="" class="right_footer" src="images/MainBoxBottom.png" />
	        </div>
	    </div>
	</body>
</html>

<?php
    include_once 'replacePngTags.php';
    echo replacePngTags(ob_get_clean());
?>
