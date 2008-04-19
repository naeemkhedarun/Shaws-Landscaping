<?php ob_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
        <link rel="stylesheet" href="styles/test.css" type="text/css" media="screen"/>
        <title>Shaws Landscaping - Block Paving</title>
    </head>
    <body>
        <!-- Shows the grass and centered logo at the top. -->
        <div id="header">
            <img class="logo" src="images/logo.png"/>
        </div><!-- Main Container with left side bar and content area. -->
        <div id="maincontainer">
            <div id="left">
                <img class="left_bar_header" src="images/ButtonTop.png"/>
                <div id="left_bar_body">
                    <div id="left_bar_body_text">
                        <!-- All Left Bar Links here. --><a href="index.php">Home</a>
                        <br/>
                        <a href="stonepaving.php">Stone Paving</a>
                        <br/>
                        <a href="blockpaving.php">Block Paving</a>
                        <br/>
                        <a href="fencing.php">Fencing</a>
                        <br/>
                        <a href="decking.php">Decking</a>
                        <br/>
                        <a href="pond.php">Ponds & Rockery</a>
                        <br/>
                        <a href="portfolio.php">Portfolio</a>
                        <a href="contact.php">Contact Us</a>
                        <br/>
                    </div>
                </div>
                <img class="left_bar_footer" src="images/ButtonFlower.png"/>
            </div>
            <div id="right">
                <img class="right_header" src="images/MainBoxTop.png"/>
                <div id="right_body" style="background-image:url("images/MainBoxMiddle.png");">
                    <div id="right_body_text">
                        <!-- All main page content here. --><h2>Lindy, Barnes</h2>
                        <div id="portfoliopage">
                        <a href="images/lindy9.jpg"><img align="right" src="images/thumb_lindy9.jpg"/></a>
						<b>Brief:</b> Work to exact plans for a courtyard garden that had already been designed,
						using reclaimed yellow stock bricks, and a natural stone paving. Sort out the
						man-hole cover and drainage problems.
                        <br/>
                        <br/>
					    <br/>
						<br/>
                        <br/>                       
						<a href="images/lindy16.jpg"><img align="left" src="images/thumb_lindy16.jpg"/></a>
						<b>Work:</b> As this was a typical London terrace house, the only access to the garden was through the house.
						To sort out the drainage problems, we had to level out the ground and dispose of over a tonne of dirt.
						For the man-hole we used a recessed man-hole cover that carries on the pattern of the paving. The brickwork
						was marked out, then setup with string lines and completed to the exact specifications that were given to us.
						The paving used was "dessert mint" Indian sandstone, and was cut to fit around the brickwork exactly, leaving a 75mm
						gap around the outsides.
						<div id="centerimages">
							<a href="images/lindy11.jpg"><img src="images/thumb_lindy11.jpg"/></a>
							<a href="images/lindy15.jpg"><img src="images/thumb_lindy15.jpg"/></a>
						</div>
                        </div>
                        <br/>
                    </div>
                </div>
                <img class="right_footer" src="images/MainBoxBottom.png"/>
            </div>
        </div>
    </body>
</html>

<?php
include_once 'replacePngTags.php';
echo replacePngTags(ob_get_clean());
?>
