<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Author" content="Peter Brunner">
<meta name="Description" content="My AJAX page">
<meta name="keywords" content="Peter, Brunner, CS, A8, CSU">
<!--<meta charset="utf-8">-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="style.css" type="text/css">
<title>Peter Brunner A8</title>
<script>
jQuery(document).ready(function() {
	jQuery.post("http://www.cs.colostate.edu/~pjbrunn/Project_3/ajax_status.php", {}, function(data, status) {
                jQuery("#stuff").text(data[0].status);
		jQuery("#outp1").html(status);
	})
});
        </script>
</head>

<body>

<div id="container">

<div id="header">

  <div class="jumbotron">
    <h1>Peter Brunner A8</h1>
  </div>

</div>

<div id="body">

  <nav class="navbar navbar-inverse bg-primary">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Peter Brunner</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Home</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container-fluid">
    <div class="row visible-on">
      <div class="col-md-5 col-lg-5 hidden-sm hidden-xs">
        
      </div>

      <div class="col-md-2 col-lg-2">
        <div id="contents" style="text-align: center">
          <p id="stuff"></p>
          <p>Status of Federation AJAX call: <span id="outp1"> ... </span></p>
        </div>
      </div>

      <div class="col-md-5 col-lg-5 hidden-sm hidden-xs">
        
      </div>
    </div>
  </div>

</div>

<div class="footer">
  &copy; Copyright 2017 Peter Brunner
</div>

</div>
</body>
</html>
