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
                        <!-- All main page content here. --><h2>Diana, Walton - On - Thames</h2>
                        <div id="portfoliopage">
                        <a href="images/diana_walton_1.jpg"><img align="left" src="images/thumb_diana_walton_1.jpg"/></a>
						<br /><b>Brief:</b> To design and create a natural garden reusing materials from the garden. The garden has to be wheelchair friendly and blend in to the character of the house.
                        <br/>
						<br/>
						<br/>
						<br/>
                        <a href="images/diana_walton_2.jpg"><img align="right" src="images/thumb_diana_walton_2.jpg"/></a>
						<b>Work:</b> 
						We took down the tree next to the house and created steps leading up to a bird “hotel”. The trunks from the tree were used to make a step to the left of the garden, but allowed a slope to the right for push chairs or wheel chairs. The trunks were also used as a raised bed in the centre of the garden. York stone was found in the ground, so was made into a rock feature with the larger pieces and crazy paving with the smaller pieces. A border was laid around the outside of the paths; membrane was laid and covered with bark chippings. A composter was made out of old fencing materials so that garden waste could be made useful in years to come.
						<div id="centerimages">
							<a href="images/diana_walton_3.jpg"><img src="images/thumb_diana_walton_3.jpg"/></a>
							<a href="images/diana_walton_4.jpg"><img src="images/thumb_diana_walton_4.jpg"/></a>
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
