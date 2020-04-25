<?php 


session_start();
//define('UPLOAD_DIR', 'Projects/');
$Proj = $_SESSION["message"];
$img = $_POST['imgBase64']; 
$img = str_replace('data:image/png;base64,', '', $img); 
$img = str_replace(' ', '+', $img); 
$data = base64_decode($img); 
$head = $_POST['fname'];
$file = '../Projects/' .$Proj . '/img/'.$head.'.png'; 
$success = file_put_contents($file, $data); 
$_SESSION["flist"]=$_SESSION["flist"].$file."$"
//print $success ? $file : 'Unable to save the file.'; 

?> 
