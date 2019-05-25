<?php 
include "include/config.php";
include "./include/control.php";
$site_name="CT310 Project 3";
$page_name="Checkout";
if(empty($_SESSION['cart']))
{
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    //from http://stackoverflow.com/a/5285044
    die;
}
include "./include/support.php";
include "./include/header.php";

echo "<div class='center'><h1>Shopping order sent</h1><p>Click <a href='./index.php'>here</a> to return to the homepage, or you will be redirected to it in 10 seconds</p></div>";
unset($_SESSION['cart']);
header('refresh: 10; url=./index.php');

include "./include/footer.php";
?>
