<?php
  if(isset($_POST['comment'])){
    $user = $_SESSION['userid'];
    $errors = "";
    $content = $_POST['comment'];
    if($user != "Guest"){
    if($content != ""){
      $content = filter_var($content, FILTER_SANITIZE_STRING);
      if($content == ""){
        $errors .= '<br>Please enter a <u>valid</u> message to send.<br>';
      }
    } else{
      $errors .= '<br>Please enter a message to send.<br>';
      }
    } else{
		$errors .= '<br>Please login to comment.<br>';
	}
    if(empty($errors)){
      echo "<br><p id=\"com\">" . $user . ": " . $content . "<br><br></p>";
    } else{
      echo '<div style="color: red">' . $errors . '<br></div>';
    }
  }
?>
