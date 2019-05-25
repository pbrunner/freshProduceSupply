<?php 
include "./include/control.php";
$site_name="CT310 Project 2";
$page_name="Rosemary";
$ingredient="Rosemary";
include "./include/header.php";
?>
<div class="row">
    <div class="col-xs-1"></div>
    <div class="col-xs-5">
        <img src="<?php echo $config->base_url;?>/img/rosemary.jpg" class="img-rounded" alt="Rosemary" width="304" height="304">
        <p><small>Image taken from <a href="https://morguefile.com/">MorgueFile</a> free photo archive by Melodi2</small></p>
    </div>
    <div class="col-xs-6">
        <p>Rosemary is a must-have ingredient in anybodys spice rack. It will
			add delicious flavor to your meats, pizzas, and italian pasta dishes. Not only 			that, rosemary is proven to have numerous health benefits associated with it as 			well!</p>
        <?php include "./include/addToCart.php"; ?>
    </div>
</div>

<?php include "./include/commentBox.php"; ?>
<br><br><br><br>
<?php 
include "./include/footer.php";
?>