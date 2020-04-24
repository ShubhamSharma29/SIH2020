<?php

require '../vendor/autoload.php';
/* session_start(); */
// $id= $_GET['username'];
$client = new MongoDB\Client('mongodb+srv://smartindia:smartindia@cluster0-zlffx.gcp.mongodb.net/test?retryWrites=true&w=majority');

$user =$client->users; 

$ec = $user->admins;

if(isset($_POST["update"])){
  $username=$_POST["username"];
  $crpassword=$_POST["password"];
  $newpassword=$_POST["newpassword"];
  $ec->updateOne(['username' => $username],[ 'set' => ["password" => $newpassword ]]);
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive sidebar template with sliding effect and dropdown menu based on bootstrap 3">
    <title>Sidebar template</title>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="../styles/dm.css" rel="stylesheet">
    <link href="../styles/dm3.css" rel="stylesheet">
    <script src="../scripts/dm.js"></script>
    
 

</head>
<style> 
body {
  background-image: url("https://s27389.pcdn.co/wp-content/uploads/2018/04/AdobeStock_136701855-1024x683.jpeg");
  background-repeat: no-repeat;
  background-color: #cccccc;
  background-size: cover;
  background-position: center;
  background-blend-mode: overlay;
}
</style>
<body>
<div class="page-wrapper chiller-theme toggled">
  <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
    <i class="fas fa-bars"></i>
  </a>
  <nav id="sidebar" class="sidebar-wrapper">
    <div class="sidebar-content">
      <div class="sidebar-brand">
        <a href="#"></a>
        <div id="close-sidebar">
          <i class="fas fa-times"></i>
        </div>
      </div>
      <div class="sidebar-header">
        <div class="user-pic">
          <!-- <img class="img-responsive img-rounded" src="https://raw.githubusercontent.com/azouaoui-med/pro-sidebar-template/gh-pages/src/img/user.jpg" -->
        </div>
        <div class="user-info"><a href="super-dm.php">
          <span class="user-name">6 Bits
          </span>
          <span class="user-role">A VR Experience</span></a>
        </div>
      </div>
      <!-- sidebar-header  -->
      <div class="sidebar-search">
        <div>
          <div class="input-group">
            <input type="text" class="form-control search-menu" placeholder="Search...">
            <div class="input-group-append">
              <span class="input-group-text">
                <i class="fa fa-search" aria-hidden="true"></i>
              </span>
            </div>
          </div>
        </div>
      </div>
      <!-- sidebar-search  -->
    <div class="sidebar-menu">
        <ul>
          <li class="header-menu">
            <span>General</span>
          </li>
          <li class="sidebar-dropdown">
            <a href="#">
              <i class="far fa-gem"></i>
              <span>Scenes/Projects</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="index.php">Add Place</a>
                </li>
                <li>
                  <a href="#">Modify Scene</a>
                </li>
                <li>
                  <a href="../html/scene-backup.html">Backup</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="sidebar-dropdown">
            <a href="#">
            <i class="far fa-user"></i>
              <span>User Management</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                    <a href="add-user.php">Add admin</a>
                  </li>
                  <li>
                    <a href="modify-admins.php">Modify/Delete admins</a>
                  </li>
                  <li>
                  <a href="#">Change password</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="sidebar-btn">
            <a href="blank.php">
              <i class="fa fa-globe"></i>
              <span>Log out</span>
            </a>
          </li>
        </ul> 

      <br><br><br>
      <li class="header-menu">
            <span>Contact us:<br>
               At Vit University <br>
                Bhopal - 02026554875</span>
          </li>
    </div>
    <!-- sidebar-menu  -->
  </div>
</nav>
<!-- sidebar-wrapper  -->
<main class="page-content">
  <div class="container-fluid">
    <h2>6 Bits</h2>
    <hr>
    <div id="adminForm">

        <form method="POST" autocomplete="on">
            <div class="row">
                  <div class="form-group col-sm-6"> 
                    <label for="Username">Username</label>
                    <input type="text" class="form-control" id="exampleInputRegno" name="username" placeholder="Enter username:">
                  </div>
            </div>

            <div class="row">

                  <div class="form-group col-sm-6">
                    <label for="Password">Current Password</label>
                    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Current Password">
                  </div>
                  <div class="form-group col-sm-6">
                      <label for="Password">New  Password</label>
                      <input type="password" class="form-control"  name="newpassword" id="exampleInputPassword2" placeholder="New Password">
                    </div>
            </div>
              <div class="row">
                  <div class="col-sm-6">
                      <button type="submit" id="submit" name="insert" class="btn btn-primary button">Submit</button>
                  </div>
                  <div class="col-sm-6">
                      <button type="reset" class="btn btn-primary button">Reset</button>
                  </div>
                </div>
             
            </form>

    </div>
    
      <div class="row">
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">         
          </div>
        </div>          
      </div>
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">          
          </div>
        </div>          
      </div>
    </div>
  </div>

</main>
<div class="float-sm">
            <div class="fl-fl float-fb">
              <i class="fas fa-user"></i>
              <a href="">View Profile</a>
            </div>
            <div class="fl-fl float-tw">
              <i class="fas fa-database"></i>
              <a href="../html/analytics-backup.html">Analytics Back-up</a>
            </div>
            <div class="fl-fl float-gp">
              <i class="fas fa-file-alt"></i>
              <a href="../html/analytics-report.html">Analytics Report</a>
            </div>          
            <div class="fl-fl float-pn">
              <i class="fas fa-comments"></i>
              <a href="">Feedback</a>
            </div>
          </div>
</div>
</body>

</html>