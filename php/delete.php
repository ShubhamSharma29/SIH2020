<?php
    /* include 'conn.php';
    $id = $_GET['id'];
    $query = " DELETE FROM `admins` WHERE id = $id ";
    mysqli_query($db, $query);
    header('location:modify-admins.php'); */

    require 'vendor/autoload.php';
/* session_start(); */
$id= $_GET['username'];
$client = new MongoDB\Client( 'mongodb+srv://smartindia:<password>@cluster0-zlffx.gcp.mongodb.net/test?retryWrites=true&w=majority');

$user =$client->users; 

$ec = $user->admins;

$ec->deleteOne(['username' => $id]);
header("location: modify-admins.php");

?>