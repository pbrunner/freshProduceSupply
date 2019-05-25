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
    $imgFilename= $config->base_url."/img/".$result->imgname;
    $imgAttribution="<p><small>".$result->imgattrib."</small></p>";
    $name=$result->name;
    $desc=$result->description;
    $ingredid=$result->id;
    $unit=$result->unit;
    $cost=$result->cost;
    $short=$result->short;
    $tim=$result->tim;
    //$ing = array ("name"=>$name, "desc"=>$desc);
    $ing = array ("name"=>$name, "short"=>$short, "unit"=>$unit, "cost"=>$cost, "time"=>$tim, "desc"=>$desc);

echo json_encode ($ing);
?>
