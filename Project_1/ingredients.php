
<?php
include_once 'control.php';
include_once 'validate.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Author" content="Peter Brunner and Tanner Dodrill">
<meta name="Description" content="Ingredients page">
<meta name="keywords" content="Peter, Brunner, Tanner, Dodrill, P1, Ingredients">
<!--<meta charset="utf-8">-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="ingredients.css" type="text/css">
<title>Ingredients</title>
</head>

<body>

<div id="container">

<div id="body">

<div id="header">

  <?php include 'header.php'; makeHeader("Ingredients")?>

</div>

<?php include 'navigation.php'; ?>


  <div class="container-fluid">
    <div class="row visible-on">
      <div class="col-md-3 col-lg-3 hidden-sm hidden-xs">
      
      </div>
      <div class="col-md-2 col-lg-2 col-sm-4">
       
              <div class="ingredientEntry">
                <img src="Bok%20Choy.jpg" class="img-responsive" alt="Bok Choy" >
                <a href="bok_choy.php"><h4>Bok Choy</h4></a>
              </div>
      </div>
      <div class="col-md-2 col-lg-2 col-sm-4">
              <div class="ingredientEntry">
                <img src="Arugula.jpg" class="img-responsive" alt="Arugula">
                <a href="arugula.php"><h4>Arugula</h4></a>
              </div>
       </div>
             <div class="col-md-2 col-lg-2 col-sm-4"> 
              <div class="ingredientEntry">
                <img src="Water%20Chestnut.jpg" class="img-responsive" alt="Water Chestnut">
                <a href="water_chestnut.php"><h4>Water Chestnut</h4></a>
              </div>
              
      </div>
      <div class="col-md-2 col-lg-2 hidden-sm hidden-xs">
      
      </div>
    </div>
  </div>

</div>

<?php include 'footer.php'; ?>

</div>
</body>
</html>
