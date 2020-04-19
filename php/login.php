<?php

session_start();

require '../vendor/autoload.php';
                            
$tuname = $_POST["username"];
$tpass = $_POST["password"];
$client = new MongoDB\Client;
$user =$client->users; 

$ec = $user->admins;
$dr = $ec->count(['username' => $tuname, 'password' => $tpass]);
if($dr ==1 ){
  $_SESSION["currentuser"] = $tuname;
  header("location: super-dm.php");
}
else{
echo $tpass;
}
// include("config.php");

// $tuname = $_POST["username"];
// $tpass = $_POST["password"];


// $sql = "SELECT username FROM accounts WHERE username= '$tuname' and password = '$tpass'";
// $result = mysqli_query($db,$sql);
// $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
// $active = $row['active'];

// $count = mysqli_num_rows($result);
// // echo $row["reg_no"];
  
// if($count >= 1) {
//   $_SESSION["currentuser"] = $tuname;
  

//   if(isset($_SESSION["currentuser"]))
//   {
// 		$_SESSION['id']=$row['userid']; 
//     header("location: super-dm.php"); 
// } 
// }else {
//   $row=mysqli_fetch_array($result);
//    $error = "Your Username or Password is invalid";
//    header('location:loginadmin.php');
//    echo $error;
// }

?>
