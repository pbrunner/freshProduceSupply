<?php
include_once 'control.php';
include_once 'validate.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Author" content="Peter Brunner and Tanner Dodrill">
<meta name="Description" content="Arugula page">
<meta name="keywords" content="Peter, Brunner, Tanner, Dodrill, P1, Arugula">
<!--<meta charset="utf-8">-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="ingredientPage.css" type="text/css">
<title>Arugula</title>
</head>

<body>

<div id="container">

<div id="body">

<div id="header">

  <?php include 'header.php'; makeHeader("Arugula"); ?>
  
    <?php include 'navigation.php'; ?>

</div>

  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 text-center">
        <div class="picture">
          <h2>Arugula</h2>
          <img src="Arugula.jpg" alt="Arugula" width="400" height="400">
          <p>Image from <a href="https://morguefile.com/">Morguefile</a></p>
        </div>
      </div>
      <div class="col-lg-4 text-left">
        <div class="info">
          <p class="aParagraph">Eruca sativa (syn. E. vesicaria subsp. sativa (Miller) Thell., Brassica eruca L.) is an edible annual plant, commonly known as rocket salad or arugula; other names include rucola, rucoli, rugula, colewort, and roquette.</p>
          <p class="aParagraph">It is sometimes conflated with Diplotaxis tenuifolia, known as perennial wall rocket, another plant of the Brassicaceae family that is used in the same manner. Eruca sativa, which is widely popular as a salad vegetable, is a species of Eruca native to the Mediterranean region, from Morocco and Portugal in the west to Syria, Lebanon and Turkey in the east. The Latin adjective sativa in the plant's binomial is derived from satum, the supine of the verb sero, meaning "to sow", indicating that the seeds of the plant were sown in gardens. Eruca sativa differs from E. vesicaria in having early deciduous sepals. Some botanists consider it a subspecies of Eruca vesicaria: E. vesicaria subsp. sativa. Still others do not differentiate between the two. </p>
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
