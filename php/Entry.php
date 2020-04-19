<?php
require '../vendor/autoload.php';
session_start();
$client = new MongoDB\Client('mongodb+srv://smartindia:smartindia@cluster0-zlffx.gcp.mongodb.net/test?retryWrites=true&w=majority');

$companydb =$client->companydb; 

$ec = $companydb->empColl;

$kx = $_POST["Pname"];

 $cursor =$ec->count(['PlaceID' => $kx]);
 $nvar="";
if($cursor==1){

  $getcon = $ec->find(['PlaceID' => $kx],['projection' => ['_id'=>0]]);
  
  foreach($getcon as $key){
    
    $bson = MongoDB\BSON\fromPHP($key);
    
    $nvar.=MongoDB\BSON\toJSON($bson);
    //echo MongoDB\BSON\toJSON($bson);
    
  }
  
  $_SESSION["scenedata"] = $nvar;
  $_SESSION["message"] = $kx;
  
  header("Location:Access.php");

}
else{
  echo "Value not found";
} 

?>

