<?php
//    $conn = new mysqli('localhost','root','password','');
   
//    if ($conn->connect_error) 
//    {
//         die("Connection failed: " . $conn->connect_error);
//    }
//    $sql = "SELECT  * FROM  LIMIT 5";
// $result  = $conn->query($sql);

// $rows = $result->fetch_all(MYSQLI_ASSOC);
// header('Content-Type: application/json');
// $result2 = json_encode($rows);
// echo $result2;
// $conn->close();
   // connect to mongodb

   require '../vendor/autoload.php';  
   // Creating Connection  
   $con = new MongoDB\Client;  
   $dbSelect = $con->companydb;
   $scenes= $dbSelect->empColl->find();
   $result = Array();
    foreach ($customers as $entry) 
    {
        array_push($result, $entry);
    }

    echo json_encode($result, true);
?>

