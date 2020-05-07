<?php

require '../vendor/autoload.php';
session_start(); 
$id= $_GET['username'];
$client = new MongoDB\Client('mongodb+srv://smartindia:smartindia@cluster0-zlffx.gcp.mongodb.net/test?retryWrites=true&w=majority');

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
    <title>Super Admin</title>
    
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
        <script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,200' rel='stylesheet' type='text/css'> 
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link href="../styles/dm4.css" rel="stylesheet">
    <link href="../styles/dm.css" rel="stylesheet">
    <script src="../scripts/dm.js"></script>
    <link href="../styles/dm3.css" rel="stylesheet">

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
    <i class="fa fa-bars"></i>
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
          </span><br>
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
                  <a href="update.php">Modify Scene</a>
                </li>
                <li>
                <a href ="DeleteDir.php">Delete Place</a>
                </li>
                <li>
                <a  style="color:white light ; margin-left:115px ; margin-top:15px" class="modal-trigger"  data-modal="modal-name3" href="">Back-up</a>
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
                  <a href="change-pass.php">Change password</a>
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
                    <input type="file" class="form-control" id="profilePhoto" name="profile" accept=".png, .jpg , jpeg" disabled>
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

<div class="float-sm">
            <div class="fl-fl float-fb">
              <i class="fas fa-user"></i>
              <a href="">View Profile</a>
            </div>
            <div class="fl-fl float-tw">
              <i class="fas fa-database"></i>
              <a  class="modal-trigger"  data-modal="modal-name" href="">Analytics Back-up</a>
            </div>
            <div class="fl-fl float-gp">
              <i class="fas fa-file-alt"></i>
              <a  class="modal-trigger"  data-modal="modal-name2" href="">Analytics Report</a>
            </div>          
            <div class="fl-fl float-pn">
              <i class="fas fa-comments"></i>
              <a  href="">Feedback</a>
            </div>
          </div>

          <div class="modal" id="modal-name">
            <div class="modal-sandbox"></div>
            <div class="modal-box">
              <div class="modal-header">
                <div class="close-modal">&#10006;</div> 
                <h3>Analytics Backup</h3>
              </div>
              <div class="modal-body">
                <label for="import"><strong>Import a previous version:</strong></label><br>
                <input style="background-color:#0d9691" class="btn btn-cyan" type="file" id="import" accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" >
              <br>

                <div class="text-right">
                  <label for="export"><strong>Export the current versions:</strong></label><br>
                  <button type="button"  style="background-color:#0d9691 ; margin-right:90px" class="btn btn-primary"  id="export" >Export csv</button>
                </div>
                <br>
                
                <button class="close-modal">Close!</button><br><br>
                <p style="color:crimson"><strong>NOTE:</strong> Only files of .csv type are expected to be chosen and exported</p>
              </div>
            </div>
          </div>


          <div class="modal" id="modal-name2">
            <div class="modal-sandbox"></div>
            <div class="modal-box">
              <div class="modal-header">
                <div class="close-modal">&#10006;</div> 
                <h3>Analytics Report</h3>
              </div>
              <div class="modal-body">
                <label for="from"><strong>From Date: &nbsp;</label><input type="date" id="from"> &nbsp;&nbsp;&nbsp;&nbsp;
                <label for="to">To Date: </strong> &nbsp;</label><input type="date" id="to">
                <br><br><br>

                <div  class="form-group col-md-12">
                <button class="w3-button w3-red" style="margin:0 0 0 80px">Export pdf</button>&nbsp;&nbsp;
                <a href="#" class="buttonDownload">Print pdf</a>
                </div>
                <br>
                
                <button class="close-modal">Close!</button><br><br>
                <p style="color:crimson"><strong>NOTE: </strong>Reports can only be exported and printed in pdf forms</p>
              </div>
            </div>
          </div>

          <div class="modal" id="modal-name3">
            <div class="modal-sandbox"></div>
            <div class="modal-box">
              <div class="modal-header">
                <div class="close-modal">&#10006;</div> 
                <h3>Scenes' Backup</h3>
              </div>
              <div class="modal-body">
                <label for="import"><strong>Import a previous version:</strong></label><br>
                <input style="background-color:#0d9691" class="btn btn-cyan" type="file" id="import" accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" >
              <br>

                <div class="text-right">
                  <label for="export"><strong>Export the current scene:</strong></label><br>
                  <button type="button"  style="background-color:#0d9691 ; margin-right:90px" class="btn btn-primary"  id="export" >Export csv</button>
                </div>
                <br>
                
                <button class="close-modal">Close!</button><br><br>
                <p style="color:crimson"><strong>NOTE:</strong> Only files of .csv type are expected to be chosen and exported</p>
              </div>
            </div>
          </div>

          
            <script>

              $(".modal-trigger").click(function(e){
                e.preventDefault();
                dataModal = $(this).attr("data-modal");
                $("#" + dataModal).css({"display":"block"});
              });

              $(".close-modal, .modal-sandbox").click(function(){
                $(".modal").css({"display":"none"});
                return false;
              });


            </script>
          
</div>

</body>

</html>