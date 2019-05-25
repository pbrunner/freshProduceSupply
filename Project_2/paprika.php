<?php 

include "./include/control.php";
$site_name="CT310 Project 2";
$page_name="Paprika";
$ingredient="Paprika";
include "./include/header.php";
?>

<div class="row">
    <div class="col-xs-1"></div>
    <div class="col-xs-5">
        <img src="<?php echo $config->base_url;?>/img/paprika.jpg" class="img-rounded img-responsive" alt="Paprika" width="304" height="304">
       <p><small>Image taken from <a href="https://morguefile.com/">MorgueFile</a> free photo archive by GaborfromHungary</small></p>
    </div>
    <div class="col-xs-6">
        <p>Paprika is a spice made from a variety of ground peppers. Its flavor can range from mild to spicy, and even smokey or sweet! No matter what your preference is, paprika will add great flavor to any soups, stews, and many other meals.</p>
        <?php include "./include/addToCart.php"; ?>                
    </div>
</div>
<?php include "./include/commentBox.php"; ?>
<br><br><br><br>
<?php 
include "./include/footer.php";
?>