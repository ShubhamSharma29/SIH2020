<?php

require '../vendor/autoload.php';
session_start();
$q = $_POST["Pname"];
echo $q;
$target = "../Projects/".$q."/";
mkdir($target,0777,true);
mkdir($target."/img",0777,true);
mkdir($target."/videos",0777,true);
$_SESSION["message"] = $q;
header("Location:upload.php");
?>