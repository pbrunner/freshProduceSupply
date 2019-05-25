<?php
include_once 'control.php';
include_once 'validate.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">	
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="ingredients.css">
        <title>CT310 Ingredients Home</title>
    </head>
    <body>
		
		<div id="container">
		<div id="body">
		<div id="header">
			<?php include_once 'header.php'; makeHeader("Petner's Ingredients");?>
			<?php include_once 'navigation.php'; ?>
        </div>
    
		<div class="container-fluid">
			<div class="row visible-on description">
				<div class="col-md-2 col-lg-2"></div>
				
				<div class="col-lg-7 col-md-7">    
					<h2 style="text-align: center">Welcome to Petner's Ingredients!</h2>
					<p>Here, you can find pictures and info about all of your favorite ingredients!
					Navigate to the "Login" page to enter your user credentials. As a user
					you can comment on pictures! Go to the "About Us" page to find out about
					the creators of this website. Click on "Ingredients" to look at all the 
					vegetables we offer! Our products include: 
					<a href="./arugula.php">arugula</a>, 
					<a href="./bok_choy.php">bok choy</a>, and 
					<a href="./water_chestnut.php">water chestnuts</a>.
					When on the ingredients page click on the name of an ingredient
					and you will be taken to the corresponding page. Each
					individual ingredient page offers helpful information. If you are logged
					in then you may also comment on ingredients.</p> 
					   
					<?php if($_SESSION['userid'] != "Guest"){?>
					<div class="changelog">	
						<h2>Change Notes:</h2>		    
						<ul>
							<li>Changed commentCheck.php to add user and refuse guests.</li>
							<li>Added logout button to login page, mostly for testing.</li>
							<li style="text-decoration:line-through;">Note: still need to fix some css. particularly with login message.
							Additionally, there's some issue with responsiveness on the login page,
							I'm not really sure how to fix it. login/logout buttons are covered by footer...</li>
							<li>Tweaked login CSS and fixed footer issue. It was a wrapper issue on my pages. -T</li>
							<li>Added sanitization to the login page. -Peter</li>
							<li>Added a welcome message pending review. -Peter</li>
							<li>Reviewed welcome message, made slight change to wording. - Tanner</li>
							<li>Typo fix on P's about paragraph. "enjoying" -> "enjoy" and "lived" -> "have lived" - Tanner</li>
							<li>Changed css styling on about.php paragraphs - Tanner</li>
						</ul>
					</div>
					<?php }; ?>
				</div>
			</div>
        </div>
        </div>
        <?php include_once 'footer.php';
          ?>
          </div>
    </body>
</html>

<!--
Parts of the code used for session validation were originally made by Ross Beveridge and subsequently modified by Tanner Dodrill
-->
