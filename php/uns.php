<?php
require 'vendor/autoload.php';

session_start();
$contentType = explode(';', $_SERVER['CONTENT_TYPE']);
$rp=  file_get_contents('php://input');
$data = array(); 

if(in_array('application/json', $contentType)) { 
  $data = json_decode($rp); 
} else {
  parse_str($data, $data); 
}

header('Content-Type: application/json; charset=UTF-8');
$jdat =  json_encode(array( 
  'data' => $data
));

$kx = $_SESSION["message"];
//$client = new MongoDB\Client;

$client = new MongoDB\Client('mongodb+srv://smartindia:smartindia@cluster0-zlffx.gcp.mongodb.net/test?retryWrites=true&w=majority');


$companydb =$client->companydb; 

$ec = $companydb->empColl;

 $jbat = json_decode($jdat);
 try{
foreach ($jbat as $id => $item) {
   $upd = $ec->replaceOne(['PlaceID' => $kx ],$item);
}
echo "Changes Committed Successfully";
 }
 catch(Exception $e) {
  echo "Unable to update place";
}

//unset( $_SESSION["message"]);
?>