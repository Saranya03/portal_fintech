<?php
header('Content-type: application/json');

$url=$_GET['url'];


$ip = $_SERVER['REMOTE_ADDR'];
$ip = "&remoteip=".$ip;


$URL = "https://www.google.com/recaptcha/api/siteverify?secret=6Lc_iy4UAAAAAMcVYm23M393qhsvcf-SPY0Kha3h&response=".$url ;

$json=file_get_contents($URL);
echo $json;

?>
