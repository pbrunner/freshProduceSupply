<?php 
include "include/config.php";
include "include/control.php";
$site_name="CT310 Project 3";
$page_name="Home";
include "include/header.php";
?>
<div class='panel panel-mainBox'>
<div class="welcome">
	<h3>Welcome to Fresh Produce Supply!</h3>
	<p>We provide exceptional raw ingredients. Quality guaranteed!</p>
	<p>Choose a link below, or use our navigation above to view: </p>
</div>
	<ul class="pageList">
		<li><a href="./about-us.php">About us:</a> Who we are and our purpose</li>
		<li><a href="./login.php">Login:</a> Authenticated users can post comments on our ingredients</li>
	</ul></div><br>
	<?php if($_SESSION['user'] != "Guest"){?>
          <div class="changelog">
                        <h2>Change Notes:</h2>
			  <ul>
                                        <li>Here is where we can post updates notes than only non-guests can see. -Peter</li>
            </ul>
			<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
          </div>
        <?php }; ?>
<?php
include "include/footer.php";
?>
