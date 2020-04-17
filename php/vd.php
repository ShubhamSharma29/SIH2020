<?php

session_start();



$video = $_FILES['file']['name'];
$qu = $_REQUEST["q"];
$path_parts = pathinfo($_FILES["file"]["name"]);
$cmd = "C://xampp//htdocs//SIH//FFMpeg//bin//ffmpeg -i $video 2>&1";
$second = 1;
if (preg_match('/Duration: ((\d+):(\d+):(\d+))/s', `$cmd`, $time)) {
    $total = ($time[2] * 3600) + ($time[3] * 60) + $time[4];
    $second = rand(1, ($total - 1));
}

$image  = 'Projects/'.$qu.'/img/'.$path_parts['filename'].'.jpg';
echo $image;
$_SESSION["flist"]=$_SESSION["flist"].$image."$";
$cmd = "C://xampp//htdocs//SIH//FFMpeg//bin//ffmpeg -i $video -deinterlace -an -ss $second -t 00:00:01 -r 1 -y -vcodec mjpeg -f mjpeg $image 2>&1";
$do = `$cmd`
?>