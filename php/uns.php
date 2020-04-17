<?php


session_start();
if(isset($_SESSION["flist"])){
    unset($_SESSION["flist"]);    
}

session_destroy();

?>
