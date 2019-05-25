<?php 
include "include/config.php";
include "include/control.php";
$site_name="CT310 Project 2";
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
		<div style="text-align=: center"><li class="ingredientsList">Our <a href="./ingredients.php">Ingredients</a>
			<ul class="ingredients" >
				<?php
				$db = new Database();
							$result = $db->getAllIngredientNames();
							foreach ($result as $item)
							{
								echo "<li><a href='./ingredients.php?i=$item'>$item</a></li>";
							}?>
			</ul>
		</li></div>
		<li><a href="./about-us.php">About us:</a> Who we are and our purpose</li>
		<li><a href="./login.php">Login:</a> Authenticated users can post comments on our ingredients</li>
	</ul></div><br>
	<?php if($_SESSION['user'] != "Guest"){?>
          <div class="changelog">
                        <h2>Change Notes:</h2>
			  <ul>
                                        <li>Fixed file uploads - Peter</li>
			  		<li>Update the upload form so that it inserts into the ingredients table. - Peter</li>
						  <li>Need to add something to about us - both</li>
						  <li>Need to add two more ingredients to the default setup. Can be updated from the source_file folder and ingredients.csv file - Peter</li>

						<li>Update checkout system with a cart landing page that allows customers to change their order before submission - Matt</li>
						<li>improved security for admins by bcc'ing them on the order submissions. Currently all admins are emailed on submission of an order - Matt</li>
						<li>implemented password reset by users - Matt</li>
						
						<li>Added users table to the database, updated methods to allow for login from those credentials - Matt</li>
						<li>added ability for users to add comments - Matt</li>
						<li>randomly added bootstrap panels to the ingredients pages to make the new comments easier to identify - Matt</li>
						<li>modified the logic for showing the admin controls so that it works with the user system update -Matt </li>
						<li>merged files from 4-3-17</li>
				<li>updated index page with links to the ingredients page generator</li>	
								<li>Changed project file structure around (put header, footer, comment, addToCart, support, logo, css, and csv in a folder. images for ingredients in their own folder). As such, a bunch  of paths have been changed and a local path and other config values have been added to control.php - Matt</li>
							<li>Added ingredients.php with some simple templating for the database pull -Matt</li>
							<li>Updated checkout and add to cart buttons to not show when not logged in -Matt</li>
							<li>Now when an admin logs in two new links appear in the navbar: one for making a new webpage and one for resetting passwords. I've also started making the page for making a new webpage called "makePage.php". -Peter</li>
              				<li>Made a "config.php" file to make the file selecting more modular. -Peter</li>
								<li>Added Admin/user status in the users.csv file, and in session variables. -Matt</li>
								<li>Added test non-admin account. Username: customer Test Password: password</li>
								<li>Added cart functionality to the site (all ingredients now include a php file which handles the button and retaining how many of each item are ordered. Need to declare $ingedientName on top of every ingredient page for it to work). -Matt</li>
								<li>Added checkout button, which only works when the cart has something in it. (May want to add a form to list what’s in the cart before submitting, but I don’t read the requirements as saying we need that). -Matt</li>
								<li>Checkout emails the user and an admin (currently my email). Updatable on line 23 of checkout.php. -Matt</li>
								<li>Implemented this change notes feature, which is obvious since you're reading this. -Peter</li>
								<li>Created a template for the admins to use for on-the-fly page creation. -Peter</li>
            </ul>
			<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
          </div>
        <?php }; ?>
<?php
include "include/footer.php";
?>
