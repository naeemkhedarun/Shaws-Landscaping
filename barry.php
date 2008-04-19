<?php ob_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
        <link rel="stylesheet" href="styles/test.css" type="text/css" media="screen"/>
        <title>Shaws Landscaping - Barry, Egham</title>
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
                        <!-- All main page content here. --><h2>Barry, Egham</h2>
                        <div id="portfoliopage">
                        <a href="images/barry_egham_1.jpg"><img align="right" src="images/thumb_barry_egham_1.JPG"/></a>
						<b>Brief:</b> To design and create a back garden to suit the client's needs, including a small area to sunbathe on, and a border around the edge.
                        <br/>
                        <br/>
						<br/>
						<br/>
						<br/>
						<br/>
                        <a href="images/barry_egham_2.jpg"><img align="left" src="images/thumb_barry_egham_2.jpg"/></a>
						<b>Work:</b> We took up all of the grass and disposed of it, marked out a border around the outside and dug a small trench. We then concreted a border in place and placed membrane inside. Te area for the paving was marked out and dug ready for the paving. We created an individual raised bed using new railway sleepers, and paved the area with “fossil mint” Indian sandstone, and added a border using red bricks. The rest of the area was then covered with shingle and stepping stones were placed around the outside.
						<div id="centerimages">
							<a href="images/barry_egham_3.jpg"><img src="images/thumb_barry_egham_3.jpg"/></a>
							<a href="images/barry_egham_4.jpg"><img src="images/thumb_barry_egham_4.jpg"/></a>
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
