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
                        <!-- All main page content here. --><h2>Jackie, Weybridge</h2>
                        <div id="portfoliopage">
                        <a href="images/jackie68.JPG"><img align="right" src="images/thumb_jackie68.JPG"/></a>
						<b>Brief:</b> Extend the paving to the back of the garden and create an area large enough 
                        for seating. Leave a flower bed down the side and incorporate a flower bed 
                        into the left side and back of the garden. Level out the centre of the garden 
                        and maximise the area for turfing. At the rear of the garden, erect fencing that 
                        is not obstructing to the eye.
                        <br/>
                        <br/>
                        <a href="images/jackie64.JPG"><img align="left" src="images/thumb_jackie64.JPG"/></a>
						<b>Work:</b> Took down all of the trees at the rear and side of the garden and disposed of them. 
                        Marked out the area for the paving and dug to a depth of 6 inches and laid a foundation.  
                        Matching paving was laid in the same pattern so that it blends in. The fencing that was 
                        chosen allows wind through so that there is no pressure on the panel, and allows for your  
                        sight to go further so that it does not seem like a barrier. A large raised bed was 
                        constructed around the side and back of that garden with old oak railway sleepers. 
                        Lots of topsoil was brought in to level out the area, this was compacted then turfed.
						<div id="centerimages">
							<a href="images/jackie47.JPG"><img src="images/thumb_jackie47.JPG"/></a>
							<a href="images/jackie60.JPG"><img src="images/thumb_jackie60.JPG"/></a>
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
