<?php
include "include/config.php";
include "./include/control.php";
$site_name="CT310 Project 2";
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
            <img src="./img/matt.jpg" class="img-circle center-block" width="40%" alt="Photo of Matt" id="aboutMatt">
          </div>
          <div class="col-lg-7 col-md-7" id="aboutMattPara">
            <p>My name is Matt Hehn. I'm a student at Colorado State University in the Applied Computing Technology Human Centric Computing program. I play Classical Guitar and enjoy long walks on the beach. also Peter stole half of what I could say here, so this is just here to fill some space and make this page less empty.
            <br><br>
            Why am I dressed like that? That's a very good question.</p>
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
