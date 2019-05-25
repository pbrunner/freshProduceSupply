<?php
include "./include/control.php";
$site_name="CT310 Project 2";
$page_name="Spinach";
$ingredient="Spinach";
include "./include/header.php";
?>

<div class="row">
    <div class="col-xs-1"></div>
    <div class="col-xs-5">
        <img src="<?php echo $config->base_url;?>/img/spinach.jpg" class="img-rounded" alt="Spinach" width="304" height="304">
        <p><small>Image taken from <a href="https://morguefile.com/">MorgueFile</a> free photo archive by Nourbese</small></p>
    </div>
    <div class="col-xs-6">
        <p>Spinach is a great addition to just about any meal. Whether you are cooking 
			it in with a main dish or eating it raw in a salad, spinach tastes delicious 			and contains many essential vitamins to promote a healthy life. </p>
        <?php include "./include/addToCart.php"; ?>
    </div>
</div>

<?php include "./include/commentBox.php"; ?>
<br><br><br><br>
<?php 
include "./include/footer.php";
?>