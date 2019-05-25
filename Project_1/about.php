<?php
include_once 'control.php';
include_once 'validate.php';
?>
<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">	
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="ingredients.css">
        <title>CT310 Ingredients - About Us</title>
    </head>
    
    <body>
		
		<div id="container">

		<div id="body">

		<div id="header">
        <?php
        include_once 'header.php';
        makeHeader("About Us");
        ?>
		
        <?php include_once 'navigation.php'; ?>

		</div>
        <div class="container-fluid">
            <div class="row visible-on description">
			
				
                <div class="col-md-3 col-lg-3">
                        <img src="./profile.jpg" class="img-circle center-block"
                             alt="Photo of me, as a cowboy" id="aboutTanner">
                </div>
                
                <div class="col-lg-7 col-md-7" id="aboutTannerPara">
                    <p>I'm Tanner Dodrill. After separating from the USAF I used my GI Bill to pursue a BA in Anthropology.
                    Because of my interest in social and behavioral sciences, I've decided to follow that up by working on my
                    BS in Applied Computing Technology and expect to complete it in early 2018. After that, I plan on either
                    finding a real job again or working on my Master's in something-or-other.	
                    <span style="font-size:50%">I don't normally dress up as a cowboy. Ethnographic field school.</span>
                    </p>
                </div>
            </div>
        </div>
        
        <hr>
        
        <div class="container-fluid">
            <div class="row visible-on description">

                <div class="col-md-3 col-lg-3">
                        <img src="Peter.jpg" class="img-circle center-block"
                             alt="Photo of Peter" id="aboutPeter">
                </div>
                <div class="col-lg-7 col-md-7" id="aboutPeterPara">
                    <p>My name is Peter Brunner. I'm an amateur web developer and Applied Computing 
                    Technology major at Colorado State University. I enjoy playing guitar and Super Smash Bros. 
                    I was born in California but have lived in Colorado most of my life. I'm expecting to graduate May 2018.

                    </p>
                </div>

            </div>
        </div>
	</div>
        <?php
        include_once 'footer.php';
        ?>
    </div>
    </body>
</html>
