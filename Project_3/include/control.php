<?php
session_start ();
$host = $_SERVER ['HTTP_HOST'];
$uri = rtrim ( dirname ( $_SERVER ['PHP_SELF'] ), '/\\' );
session_name("IngredientsForYou-MH&PB");

if (! isset ( $_SESSION ['startTime'] )) {
	$_SESSION ['loginTime'] = "".date("m/d/y") . " at " . date("h:i:sa");
}
if (! isset ( $_SESSION ['user'] )) {
	$_SESSION ['user'] = "Guest";
}

if (! isset ( $_SESSION ['admin'] )) {
	$_SESSION ['admin'] = FALSE;
}

if (! isset ( $_SESSION ['cart'] )) {
	$_SESSION ['cart'] = array();
}
?>
