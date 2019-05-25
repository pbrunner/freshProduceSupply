<?php
include "include/config.php";
include "include/control.php";
$site_name="CT310 Project 3";
$page_name="Ingredients";
include "./include/header.php";
require_once "./assets/database.php";
?>

<?php
$getName = substr($_SERVER['REQUEST_URI'],38);
//print $getName;
$strings = explode("~",$getName);
$ingredient = $strings[1];
$imgFilename= "";
$imgAttribution = "";
$ingredDescription= "";
$comment= "";
$ingredid= "";
?>

<script>
  var getShort = "<?php echo $strings[0] ?>";
  var getName = "<?php echo $strings[1] ?>";
  jQuery(document).ready(function() {
  jQuery.post("http://www.cs.colostate.edu/~ct310/yr2017sp/more_assignments/project03masterlist.php", {}, function(data, status) {
    checkSites(data)
    jQuery("#outp1").html(status);
  })
  //start();
});

function checkSites(lst) {
  var len = lst.length;
  for (j = len - 1; j >= 0; j--) {
    getStatus(lst[j].baseURL, j, lst[j].nameShort, lst[j].nameLong);
  }
}

function getStatus(n, i, nameShort, nameLong) {
    if(nameShort.localeCompare(getShort) == 0){
      jQuery.post(n + "ajax_ingredient.php?ing=" + getName, {}, function(data, status) {
        jQuery(ingredient).text(data['name']);
        jQuery(ingDescription).text(data['desc']);
        jQuery(ingShort).text(data['short']);
        jQuery(ingUnit).text(data['unit']);
        jQuery(ingCost).text(data['cost']);
        jQuery(ingTime).text(data['time']);
        jQuery("#outp2").html(status);
      })
      jQuery.ajax({
        url : n + "ajax_ingrimage.php?ing=" + getName,
        processData : false,
        success: function(b64data){
          jQuery("#img").attr("src", "data:image/png;base64,"+b64data);
        },
          error: function(XMLHttpRequest, textStatus, errorThrown) {
          document.getElementById("imgError").innerHTML = arr;
        }
      });
    }
}
</script>
<div class='panel panel-ingredient'>
<div class="row">
        <div class="col-md-4 col-sm 10">
            <div class='panel panel-ingredientBox'>
                <h2 id="ingredient"></h2>
                <img src="" id="img" class="img-rounded img-responsive" width="304" height="304">
                 <p id="imgError"></p>
                 <p id="ingDescription"></p>
                 <p id="ingShort"></p>
                 <p id="unitDescription">Units: <span id="ingUnit"></span></p>
                 <p id="costDescription">Cost: <span id="ingCost"></span></p>
                 <p id="timeDescription">Time: <span id="ingTime"></span></p>
                <?php include "./include/addToCart.php"; ?>
                    <br><br>
            </div>
        </div>
        <br>
        <!--<p>Status of Federation AJAX call: <span id="outp1"> ... </span></p>
        <p>Status of site AJAX call: <span id="outp2"> ... </span></p>-->
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

