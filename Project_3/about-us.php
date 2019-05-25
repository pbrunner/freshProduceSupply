<?php
include "include/config.php";
include "./include/control.php";
$site_name="CT310 Project 3";
$page_name="About Us";
include "./include/header.php";
?>

<body>
  <div id="container">
    <div id="body">
      <div id="header">

      </div>
      <div class="container-fluid">
        <div class="row visible-on description">
          <div class="col-md-3 col-lg-3">
            <img src="./img/elise.jpg" class="img-circle center-block" width="40%" alt="Photo of Elise" id="aboutElise">
          </div>
          <div class="col-lg-7 col-md-7" id="aboutElisePara">
            <p>Elise currently attends Colorado State University as a Journalism and Media Communication major. She also is pursuing an Information Science and Technology minor. Elise hopes to do web design and development, especially for non-profit organizations that don’t have the personnel to keep up a website. Having an Internet presence is becoming more and more important for small business and nonprofit organizations. Currently, she is a Media Specialist Intern for the Scott College of Engineering. This includes everything from print posters, to Facebook and Instagram, to monitor display graphics in the Scott Bioengineering building.</p>
            <p>In her free time, Elise enjoys dancing, rock climbing, reading, and being outside. Her favorite things include teal, purple, and chocolate. And of course, running around barefoot. I like all things compost and want to some day have a giant produce garden and a couple of farm animals.</p>
          </div>
        </div>
      </div>

        <hr>

      <div class="container-fluid">
        <div class="row visible-on description">
          <div class="col-md-3 col-lg-3">
            <img src="./img/Peter.jpg" class="img-circle center-block" width="70%" alt="Photo of Peter" id="aboutPeter">
          </div>
          <div class="col-lg-7 col-md-7" id="aboutPeterPara">
            <p>My name is Peter Brunner. I'm an amateur web developer and Applied Computing Technology major at Colorado State University. I enjoy playing guitar and Super Smash Bros. I was born in California but have lived in Colorado most of my life. I'm expecting to graduate May 2018.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
    <br><br><br><br>

    <?php
      include "./include/footer.php";
    ?>
  </div>
</body>
