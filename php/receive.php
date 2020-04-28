<?php
require '../vendor/autoload.php';

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

//echo $jdat;

// $client = new MongoDB\Client;
$client = new MongoDB\Client('mongodb+srv://smartindia:smartindia@cluster0-zlffx.gcp.mongodb.net/test?retryWrites=true&w=majority');


$companydb =$client->companydb; 

$ec = $companydb->empColl;

 $jbat = json_decode($jdat);
foreach ($jbat as $id => $item) {
   $ec->insertOne($item);
}
 
echo "Place created Succesfully";

header("Location:super-dm.php");
?>