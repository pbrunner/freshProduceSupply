<?php
session_start ();
$numText = '01';
$sessionName = "petner" . $numText . "_session_2017";
session_name ( $sessionName );

$host = $_SERVER ['HTTP_HOST'];

if (! isset ( $_SESSION ['startTime'] )) {
	$_SESSION ['startTime'] = time ();
}
if (! isset ( $_SESSION ['userid'] )) {
	$_SESSION ['userid'] = "Guest";
}
?>
