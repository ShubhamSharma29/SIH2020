<?php
session_start();
$Q= $_REQUEST["q"];
$proj = $_SESSION["message"];
$imgDir = "../Projects/".$proj."/img/".$Q.".png";
$vidDir = "../Projects/".$proj."/videos/".$Q.".mp4";
$dir = "../Projects/".$proj."/videos/";
$fb = scandir($dir);
unlink($vidDir);
unlink($imgDir);

echo "resources Deleted Succesfully";


?>