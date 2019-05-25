<?php 
include "./include/config.php";
include "./include/control.php";
$site_name="CT310 Project 2";
$page_name="Create an Ingredient";
include "./include/header.php";
require_once "./assets/database.php";

$db = new Database();

if(!$_SESSION['admin'])
  header ( "Location: https://$host$uri/index.php" );

$max_file_size = 10000000;
$errors = "";
if (isset($_POST['name'])){
  $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
  if($name == "")
    $errors .= 'Please enter a name.<br>';
}
if (isset($_POST['comment'])){
  $content = filter_var($_POST['comment'], FILTER_SANITIZE_STRING);
  if($content == "")
    $errors .= 'Please enter a description.<br>';
}

if(isset($_POST['attr_name'])){
  $attr_name = filter_var($_POST['attr_name'], FILTER_SANITIZE_STRING);
  if($attr_name == "")
    $errors .= 'Please enter attribution for your image.<br>';
}
if(empty($errors)){
if ($_FILES && isset ( $_FILES ["image"] )) {
  if ($_FILES ["image"] ["error"] == UPLOAD_ERR_OK) {
    if ($_FILES ["image"] ["size"] > $max_file_size) {
      $error_msg = "File is too large.";
    } else {
      $ext = parseFileSuffix ( $_FILES ['image'] ['type'] );
      if ($ext == '') {
        $error_msg = "Unknown file type";
      } else {
          $fid = 1;
          if($db->checkFileName($_FILES["image"]["name"])){
            $error_msg = "Filename already in database, please rename your file or choose another.";
          }
        if ($fid == - 1) {
          $error_msg = "Unable to store image in DB";
        } else {
          if (! file_exists ( $config->upload_dir )) {
            if (! mkdir ( $config->upload_dir )) {
              $error_msg = "Attempt to make folder: \"" . $config->upload_dir . "\" failed";
            }
          }
          if(empty($error_msg)){
            $path = $config->upload_dir . $_FILES ["image"]["name"];
            move_uploaded_file ( $_FILES ["image"] ["tmp_name"], $path );
            chmod($path, 0644);
            $ingredient = new Ingredient($name, $db->getLastIngredientID()+1,$_FILES["image"]["name"], $attr_name, $content);
            $db->AddIngredient($ingredient);
            $ingredient="";
            header('Location: '.$_SERVER['PHP_SELF']);
          }
        }
      }
    }
  } else if ($_FILES ["image"] ["error"] == UPLOAD_ERR_INI_SIZE || $_FILES ["image"] ["error"] == UPLOAD_ERR_FORM_SIZE) {
  $error_msg = "File is too large.";
  } else {
    $error_msg = "No file selected. <!-- " . $_FILES ["image"] ["error"] . " -->";
  }
}
} else {
  if(!isset($_FILES["image"])){
    $error_msg = "No file selected.";
  }
}
?>

<body>
  <div id="container">
    <div id="body">
      <div id="header">

      </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-2 col-lg-2 hidden-sm hidden-xs">

          </div>

          <div class="col-lg-8 col-md-8">
            <h2 style="text-align: center">Welcome admin <b><?php echo $_SESSION['user']; ?></b></h2>
            <?php if (isset ( $error_msg ))
              echo "<div style=\"text-align: center;color: red\">$error_msg </div>";
              if (isset ( $errors ))
                echo "<div style=\"text-align: center; color: red\">$errors</div>";
            ?>
            <form method="post" enctype="multipart/form-data" class="form-inline" style="text-align: center">
              <div class="form-group">
                <p style="text-align: center">Select a photo to add to your new webpage:</p>
                <label class="sr-only" for="image">Upload Image</label>
                  <input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $max_file_size; ?>" /> 
                  <input type="file" class="form-control" name="image" id="image" />
                  <br><br>
                  <p style="text-align: center">Input attribution for the picture:</p>
                  <input type="text" class="form-control" name="attr_name"/>
                  <br><br>
                  <p style="text-align: center">Input the name of the ingredient:</p>
                  <input type="text" class="form-control" name="name"/>
                  <br><br>
                  <p style="text-align: center">Input a description for the ingredient:</p>
                  <textarea class="form-control" rows="10" cols="125" name="comment"></textarea>
                  <br><br>
                  <button type="submit" class="btn btn-default" value="submit">Submit</button>
              </div>
            </form>
          </div>

          <div class="col-md-2 col-lg-2 hidden-sm hidden-xs"></div>

          </div>
        </div>
      </div>
    </div>

    <?php
      function parseFileSuffix($iType) {
        if ($iType == 'image/jpeg') {
          return 'jpg';
        }
        if ($iType == 'image/gif') {
          return 'gif';
        }
        if ($iType == 'image/png') {
          return 'png';
        }
        if ($iType == 'image/tif') {
          return 'tif';
        }
        return '';
      }
    ?>
    <br><br><br><br>

    <?php
      include "./include/footer.php";
    ?>
  </div>
</body>
