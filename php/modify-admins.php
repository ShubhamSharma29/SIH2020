
<!------ Include the above in your HEAD tag ---------->

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
    <link href="../styles/dm2.css" rel="stylesheet">
    <link href="../styles/dm.css" rel="stylesheet">
    <link href="../styles/dm3.css" rel="stylesheet">
    <script src="../scripts/dm.js"></script>
    <script src="../scripts/dm2.js"></script>
 

</head>
<style> 
 h1 { color:black ; font-family: "Copperplate Gothic Light"; font-size: 60px; font-style: normal; font-variant: normal; font-weight: bold; line-height: 26.4px; }
body {
  background-image: url("https://s27389.pcdn.co/wp-content/uploads/2018/04/AdobeStock_136701855-1024x683.jpeg");
  background-repeat: no-repeat;
  background-color: #cccccc;
  background-size: cover;
  background-position: center;
  background-blend-mode: overlay;
}

.cd-popup-trigger {
  display: block;
  width: 90px;
  height:   40px;
  line-height: 40px;
  margin: 1em auto;
  /* text-align: center; */
  color: #FFF;
  font-size: 14px;
  font-size: 0.875rem;
  font-weight: 400;
  border-radius: 1em;
  background: #c82333;
  box-shadow: 0 3px 0 rgba(0, 0, 0, 0.07);
}
@media only screen and (min-width: 1150px) {
  .cd-popup-trigger {
    margin: 0em auto;
  }
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
          <span class="user-name" style="color:blue">6 Bits
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
            <a href="#">
              <i class="fa fa-tachometer-alt"></i>
              <span>Feedback</span>
            </a>
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
    <h1>6  Bits</h1>
      <hr>
      <div class="row">
        <div class="form-group col-md-12">
            <div class="container">
                <div class="col-lg-12">
                    <br><br>
                    <h1 class="text-warning text-center" > All Admin Data </h1>
                    <br>
                    <table  id="tabledata" class=" table table-striped table-hover table-bordered">
                    
                        <tr class="bg-dark text-white text-center">
                        
                        <th> Id </th>
                        <th> name </th>
                        <th> Username </th>
                        <th> emailId </th>
                        <th> DOB </th>
                        <th> Password </th>
                        <th> Delete </th>
                        <th> Update </th>

                        </tr >

                        <?php

                            require '../vendor/autoload.php';
                            

                            $client = new MongoDB\Client('mongodb+srv://smartindia:smartindia@cluster0-zlffx.gcp.mongodb.net/test?retryWrites=true&w=majority');

                            $user =$client->users; 

                            $ec = $user->admins;
                            $dr = $ec->find([]);
                           foreach($dr as $res){
                        ?>
                        <tr class="text-center">
                        <td style="color:black ; font-weight:bold"> <strong><?php echo $res['_id'];  ?> </strong></td>
                        <td  style="color:black ; font-weight:bold"> <strong><?php echo $res['name'];  ?></strong> </td>
                        <td  style="color:black ; font-weight:bold"> <strong><?php echo $res['username'];  ?> </strong></td>
                        <td  style="color:black ; font-weight:bold"> <strong><?php echo $res['email'];  ?> </strong></td>
                        <td  style="color:black ; font-weight:bold"> <strong><?php echo $res['DOB'];  ?> </strong></td>
                        <td  style="color:black ; font-weight:bold"> <strong><?php echo $res['password'];  ?> </strong></td>
                        <td><a href="#" class="cd-popup-trigger"> Delete </a> </td>
                        <td> <button class="btn-primary btn" style="font-weight:400"> <a href="change.php?username=<?php echo $res['username']; ?>" class="text-white"> Update </a> </button> </td>
                      </tr>
                    
                        <?php 
                        }
                        ?>
                    </table>  
                </div>
            </div>
            <script type="text/javascript">
                $(document).ready(function(){
                $('#tabledata').DataTable();
                }) 
            </script>
        </div>

        <div class="cd-popup" role="alert">
          <div class="cd-popup-container">
              <p>Are you sure you want to delete this data?</p>
              <ul class="cd-buttons">
                <li><a href="delete.php?username=<?php echo $res['username']; ?>">Yes</a></li>
                <li><a href="modify-admins.php">No</a></li>
              </ul>
              <a href="#0" class="cd-popup-close img-replace">Close</a>
          </div> <!-- cd-popup-container -->
        </div> <!-- cd-popup -->
        
       
<!-- 
        <script>
            pop= document.getElementsByClassName("cd-popup");
            pop.style.display="none";
        </script>

        <script>
          function test() 
          {
            var popup = document.getElementsByClassName("cd-popup");
              for(var i=0; i<popup.length; i++) 
              {
                popup[i].classList.toggle('show');
              }
          }
        </script> -->


          <script>jQuery(document).ready(function($){
            //open popup
            $('.cd-popup-trigger').on('click', function(event){
              event.preventDefault();
              $('.cd-popup').addClass('is-visible');
            });
            
            //close popup
            $('.cd-popup').on('click', function(event){
              if( $(event.target).is('.cd-popup-close') || $(event.target).is('.cd-popup') ) {
                event.preventDefault();
                $(this).removeClass('is-visible');
              }
            });
            //close popup when clicking the esc keyboard button
            $(document).keyup(function(event){
                if(event.which=='27'){
                  $('.cd-popup').removeClass('is-visible');
                }
              });
          });

        </script>
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
  <!-- page-content" -->
</div>
<!-- page-wrapper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    
</body>

</html>