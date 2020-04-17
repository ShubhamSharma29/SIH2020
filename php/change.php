<?php

require 'vendor/autoload.php';
/* session_start(); */
$id= $_GET['username'];
$client = new MongoDB\Client( 'mongodb+srv://smartindia:<password>@cluster0-zlffx.gcp.mongodb.net/test?retryWrites=true&w=majority');

$user =$client->users; 

$ec = $user->admins;

if(isset($_POST["update"])){
  $name=$_POST["name"];
  $username=$_POST["username"];
  $phone=$_POST["phone"];
  $email=$_POST["email"];
  $DOB=$_POST["dob"];
  $password=$_POST["password"];
  $ec->updateOne(['username' => $id],[ 'set' => [ 'name' => $name, "username" => $username , "phone" =>$phone, "email" => $email, "DOB" => $DOB,
  "password" => $password ]]);

}
   /*  include 'conn.php';
    if(isset($_POST['update'])){

    $id = $_GET['id'];
    $name=$_POST["name"];
    $username=$_POST["username"];
    $phone=$_POST["phone"];
    $email=$_POST["email"];
    $DOB=$_PSOT["dob"];
    $password=$_POST["password"];
    $q = " update admins set id=$id, name='$name' , username='$username', phone='$phone' , 
            email='$email' , DOB='$DOB', password='$password' where id=$id  ";

    $query = mysqli_query($db,$q);

    header('location:modify-admins.php');
    } */
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive sidebar template with sliding effect and dropdown menu based on bootstrap 3">
    <title>Sidebar template</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="styles/dm.css" rel="stylesheet">
    
 

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
              <i class="fa fa-tachometer-alt"></i>
              <span>Feedback</span>
            </a>
          </li>
          <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-chart-line"></i>
              <span>Analytics</span>
              <!-- <span class="badge badge-pill badge-danger">3</span> -->
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="../html/analytics-backup.html">Backup

                  </a>
                </li>
                <li>
                  <a href="../html/analytics-report.html">Report</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="sidebar-dropdown">
            <a href="#">
              <i class="far fa-gem"></i>
              <span>Scenes/Projects</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="../html/add_project.html">Add Project</a>
                </li>
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
              <span>Profile</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="#">Update profile</a>
                </li>
                <li>
                  <a href="#">Change password</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="sidebar-dropdown">
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
                    <label for="Name">Name:</label>
                    <input type="text" class="form-control" id="exampleInputName" name="name" aria-describedby="emailHelp" placeholder="Enter name">
                    
                  </div>
                  <div class="form-group col-sm-6"> 
                    <label for="Username">Username</label>
                    <input type="text" class="form-control" id="exampleInputRegno" name="username" placeholder="Enter username:">
                  </div>
            </div>
              

            <div class="row">
                <div class="form-group col-sm-6">
                    <label for="Phone">Phone</label>
                    <input type="number" class="form-control" name="phone" aria-describedby="phoneHelp" placeholder="Enter phone no">
                  </div>
                  <div class="form-group col-sm-6">
                      <label for="Email">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
            </div>

            <div class="row">
                <div class="form-group col-sm-6">
                    <label for="Dob">Date-of-birth</label>
                    <input type="date" class="form-control" id="exampleInputDob" name="dob" aria-describedby="dobHelp" placeholder="Enter Dob">
                  </div>

                <div class="form-group col-sm-6">
                    <label for="Photo">Upload your photo</label>
                    <input type="file" class="form-control" id="profilePhoto" name="profile" accept=".png, .jpg , jpeg">
                </div>
            </div>
            <div class="row">

                  <div class="form-group col-sm-6">
                    <label for="Password">Password</label>
                    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group col-sm-6">
                      <label for="Password">Confirm Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
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
        <!-- <div class="card rounded-0 p-0 shadow-sm">
          <div class="card-body text-center"> -->
          </div>
        </div>          
      </div>
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">          
        <!-- <div class="card rounded-0 p-0 shadow-sm">
          <div class="card-body text-center"> -->
          </div>
        </div>          
      </div>
    </div>
  </div>

</main>
<!-- page-content" -->
</div>
<!-- page-wrapper -->
<script src="scripts/dm.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"></script>
  
</body>

</html>