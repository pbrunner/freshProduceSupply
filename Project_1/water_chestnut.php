<?php
include_once 'control.php';
include_once 'validate.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Author" content="Peter Brunner and Tanner Dodrill">
<meta name="Description" content="Water chestnut page">
<meta name="keywords" content="Peter, Brunner, Tanner, Dodrill, P1, Water Chestnut">
<!--<meta charset="utf-8">-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="ingredientPage.css" type="text/css">
<title>Water Chestnut</title>
</head>

<body>

<div id="container">

<div id="body">

<div id="header">

  <?php include 'header.php'; makeHeader("Water Chestnut"); ?>
  
    <?php include 'navigation.php'; ?>

</div>

  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 text-center">
        <div class="picture">
          <h2>Water Chestnut</h2>
          <img src="Water%20Chestnut.jpg" alt="Water Chestnut" width="400" height="400">
          <p>Image from <a href="https://www.dreamstime.com/">dreamstime</a></p>
        </div>
      </div>
      <div class="col-lg-4 text-left">
        <div class="info">
          <p class="aParagraph">The Chinese water chestnut or water chestnut (Eleocharis dulcis) is a grass-like sedge native to Asia (China, Japan, India, Philippines, etc.), Australia, tropical Africa, and various islands of the Pacific and Indian Oceans. It is grown in many countries for its edible corms.</p>
          <p class="aParagraph">The water chestnut is not a nut at all, but an aquatic vegetable that grows in marshes, under water, in the mud. It has stem-like, tubular green leaves that grow to about 1.5 m. The water caltrop, which also is referred to by the same name, is unrelated and often confused with the water chestnut. The small, rounded corms have a crisp, white flesh and may be eaten raw, slightly boiled, or grilled, and often are pickled or tinned. They are a popular ingredient in Chinese dishes. In China, they are most often eaten raw, sometimes sweetened. They also may be ground into a flour form used for making water chestnut cake, which is common as part of dim sum cuisine. They are unusual among vegetables for remaining crisp even after being cooked or canned, because their cell walls are cross-linked and strengthened by certain phenolic compounds, such as oligomers of ferulic acid. This property is shared by other vegetables that remain crisp in this manner, including the tiger nut and lotus root. The corms contain the antibiotic agent puchiin, which is stable to high temperature. Apart from the edible corms, the leaves can be used for cattlefeed, mulch or compost.</p>
        </div>
        <div class ="wiki">
          <a href="https://en.wikipedia.org/wiki/Wikipedia:Text_of_Creative_Commons_Attribution-ShareAlike_3.0_Unported_License">Text from Wikipedia: Creative Commons Attribution-ShareAlike</a>
        </div>
      </div>
      <div class="col-lg-2 hidden-sm hidden-xs">
      
      </div>
    </div>
    <div class="row">
      <div class="col-md-3 col-lg-3 hidden-sm hidden-xs">
      
      </div>
      <div class="col-md-6 col-lg-6">
        <div class="comments">
          <form action="#" method="post">
            <div class="form-group">
              <label>Comment:</label>
              <textarea class="form-control" rows="5" cols="5" name="comment"></textarea>
              <button type="submit" class="btn btn-default" value="submit">Submit</button>
              <?php include 'commentCheck.php'; ?>
            </div>
          </form>
        </div>
      </div>
      <div class="col-md-3 col-lg-3 hidden-sm hidden-xs">
      
      </div>
    </div>
  </div>

</div>

<?php include 'footer.php'; ?>

</div>
</body>
</html>
