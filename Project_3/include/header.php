<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="<?php echo $config->base_url;?>/include/style.css" rel="stylesheet">
<?php echo "<title> $site_name - $page_name</title>\n" ?>
</head>

<body>
  <div class="jumbotron"> 
    <h3 class="headertitle">Fresh Produce Supply</h3>
    <div class="headerattrib">
      <small>Image taken from <a href="https://morguefile.com/">MorgueFile</a> free photo archive by Kconnors</small>
    </div>
  </div>

  <nav class="navbar navbar-dark navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="./index.php">Home</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <?php $db = new Database();
          $result = $db->getAllIngredientNames(); ?>
          <li><a href="./listing.php">Listing</a></li>
            <?php if($_SESSION ['admin']) echo "<li class='nav-item'><a href=\"./makePage.php\">Make webpage</a></li>"; ?>
            <?php if($_SESSION ['admin']) echo "<li class='nav-item'><a href=\"./fedr_status.php\">Federation Status</a></li>"; ?>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="./about-us.php">About Us</a></li>
          <?php
            if($_SESSION['user'] == "Guest")  {echo '<li class="nav-item"><a href="./login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>'; }
            else {
              echo '<li class="nav-item"><a href="./checkout.php"><span class="glyphicon glyphicon-shopping-cart"></span> Checkout</a></li>';
              echo '<li class="nav-item"><a href="./logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>';};
          ?>
        </ul>
      </div>
    </div>
  </nav>
