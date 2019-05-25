<?php
header ( 'Content-Type: text/json' );
header ( "Access-Control-Allow-Origin: *" );
include "include/config.php";
include "include/control.php";

$listing = array();
$db = new Database();
$all = $db->getAllIngredientNames();

foreach ($all as $ingredient){
    $result = $db->getIngredient($ingredient);
    //print_r($result);
    $imgFilename= $config->base_url."/img/".$result->imgname;
    $imgAttribution="<p><small>".$result->imgattrib."</small></p>";
    $ingredient=$result->name;
    $ingredDescription=$result->description;
    $ingredid=$result->id;
    $ingredunit=$result->unit;
    $ingredcost=$result->cost;
    $ingredshort=$result->short;
    //$ing = array ("name"=>$ingredient);
    $ing = array ("name"=>$ingredient, "short"=>$ingredshort, "unit"=>$ingredunit, "cost"=>$ingredcost);
    array_push($listing, $ing);

}

echo json_encode ($listing);
?>
