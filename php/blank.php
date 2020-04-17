<?php
	session_start();
	session_destroy();
	header('location:../index.php');
?>

<!doctype html>
<html>
    <head>
        <title>Blank Page</title>
        <style>
            body
            {
                background-color: lightcyan;
            }
            h2
            {
                text-align:center;
                margin-top: 300px;
            }
            h4
            {
                text-align: center;
            }
        </style>
        <body>
        <h2>This is a blank page!<br>You have logged out successfully</h2>
        <!-- <a href="loginadmin.php"><h4>Login again</h4></a> -->
        </body>
    </head>
</html>