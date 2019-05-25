<?php
include "include/config.php";
include "include/control.php";
$site_name="CT310 Project 2";
$page_name="Ingredients";
include "./include/header.php";
require_once "./assets/database.php";
?>



<?php
$imgFilename= $config->base_url."/img/"."paprika.jpg";
$imgAttribution='<p><small>Image taken from <a href="https://morguefile.com/">MorgueFile</a> free photo archive by GaborfromHungary</small></p>';
$ingredient="";
$ingredDescription="<p>Paprika is a spice made from a variety of ground peppers. Its flavor can range from mild to spicy, and even smokey or sweet! No matter what your preference is, paprika will add great flavor to any soups, stews, and many other meals.</p>";
$comment="";
$ingredid="";

if(isset($_GET['i']))
{
    $db = new Database();
    $ingredient = filter_var($_GET['i'], FILTER_SANITIZE_STRING);

    $result = $db->getIngredient($ingredient);
    //print_r($result);
    $imgFilename= $config->base_url."/img/".$result->imgname;
    $imgAttribution="<p><small>".$result->imgattrib."</small></p>";
    $ingredient=$result->name;
    $ingredDescription="<p>".$result->description."</p>";
    $ingredid=$result->id;
}
else{
    echo "blah";//generate dropdown menu of ingredients
}
?>
<div class='panel panel-ingredient'>
<div class="row">
        <div class="col-md-4 col-sm 10">
            <div class='panel panel-ingredientBox'>
                <img src=<?php echo $imgFilename;?> class="img-rounded img-responsive" alt= <?php echo $ingredient; ?> width="304" height="304">
                <?php echo $imgAttribution; ?>
                <?php echo $ingredDescription;
                    include "./include/addToCart.php"; ?> 
                    <br><br>
            </div>
        </div>
        <br>
        <?php include "./include/commentBox.php";
        //echo $ingredid."! ";
        //div sm-7
        $existingComments = $db->getCommentsByID($ingredid);

        foreach ($existingComments as $thisComment)
        {
            echo "<div class='panel panel-info form-group-med'>".$thisComment."</div></p>";
        }
        ?>
        </div>
        <div class="col-xs-1 visible-xs"></div>
    </div>
</div>
<br><br><br><br><br>
<?php 
include "./include/footer.php";
?>

