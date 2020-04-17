<?php
session_start();
$Q= $_REQUEST["q"];
$proj = $_SESSION["message"];
$imgDir = "Projects/".$proj."/img/".$Q.".jpg";
$vidDir = "Projects/".$proj."/videos/".$Q.".mp4";
$dir = "Projects/".$proj."/videos/";
$fb = scandir($dir);
foreach ($fb as $key) {
    $fv =explode(".",$key);
    if($fv[0]==$Q){
        
       // unlink("Projects/".$proj."/videos/".$key);
    break;
    }
    
}
//unlink($imgDir);

echo "resources Deleted Succesfully";


?>