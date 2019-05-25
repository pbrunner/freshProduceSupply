<?php
header ( 'Content-Type: text/json' );
header ( "Access-Control-Allow-Origin: *" );
include "include/config.php";
include "include/control.php";

$ingredient = array();
$db = new Database();

    $ingredient = filter_var($_GET['ing'], FILTER_SANITIZE_STRING);

    $result = $db->getIngredient($ingredient);
    //print_r($result);
    $image= "/s/bach/c/under/pjbrunn/public_html/Project_3/img/".$result->imgname;
    $data = file_get_contents($image);

echo json_encode (base64_encode($data));
?>
