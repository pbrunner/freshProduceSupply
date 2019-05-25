<?php
include_once 'control.php';
include_once 'validate.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Author" content="Peter Brunner and Tanner Dodrill">
<meta name="Description" content="Bok Choy page">
<meta name="keywords" content="Peter, Brunner, Tanner, Dodrill, P1, Bok Choy">
<!--<meta charset="utf-8">-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="ingredientPage.css" type="text/css">
<title>Bok Choy</title>
</head>

<body>

<div id="container">

<div id="body">

<div id="header">

  <?php include 'header.php'; makeHeader("Bok Choy"); ?>
  
    <?php include 'navigation.php'; ?>

</div>

  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 text-center">
        <div class="picture">
          <h2>Bok Choy</h2>
          <img src="Bok%20Choy.jpg" alt="Bok Choy" width="400" height="400">
          <p>Image from <a href="https://morguefile.com/">Morguefile</a></p>
        </div>
      </div>
      <div class="col-lg-4 text-left">
        <div class="info">
          <p class="aParagraph">Bok choy or pak choi (Chinese: 青菜; Brassica rapa subsp. chinensis) is a type of Chinese cabbage. Chinensis varieties do not form heads and have smooth, dark green leaf blades instead, forming a cluster reminiscent of mustard greens or celery. Chinensis varieties are popular in southern China and Southeast Asia. Being winter-hardy, they are increasingly grown in Northern Europe. This group was originally classified as its own species under the name Brassica chinensis by Linnaeus.</p>
          <p class="aParagraph">Other than the ambiguous term "Chinese cabbage", the most widely used name in North America for the chinensis variety is bok choy (from the Cantonese, literally meaning "white vegetable"; also spelled pak choi, bok choi, and pak choy). In the UK, Australia, South Africa, and other Commonwealth Nations, the term pak choi is used. Less commonly, the descriptive English names Chinese chard, Chinese mustard, celery mustard, and spoon cabbage are also employed.</p>
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
