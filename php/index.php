<!DOCTYPE html>
<html>
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
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link href="../styles/dm4.css" rel="stylesheet">
    <link href="../styles/dm.css" rel="stylesheet">
    <script src="../scripts/dm.js"></script>
    <script>
  function preventBack(){window.history.forward();}
  setTimeout("preventBack()", 1);
  window.onunload=function(){null};
</script>

</head>
    <style>
    .serif {
  font-family: "Times New Roman", Times, serif;
}
    input[type=text]:focus {
      border: none;
    border-bottom: 4px solid orange; 
    background-color: #123456;
    color: white; 
    } 
    input[type=text] {
      width: 80%;
      padding: 15px 22px;
      margin: 10px 5px;
      box-sizing: border-box;
       border: none;
       background-color: #123456;
       color: white;
       } 
body {
  background-image: url("https://s27389.pcdn.co/wp-content/uploads/2018/04/AdobeStock_136701855-1024x683.jpeg");
  background-repeat: no-repeat;
  background-color: #cccccc;
  background-size: cover;
  background-position: center;
  /* background-blend-mode: overlay; */
}
</style>
<script>
function preventBack(){window.history.forward();}
  setTimeout("preventBack()", 1);
  window.onunload=function(){null};
</script>

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
                      <input class="form-control search-menu" placeholder="Search...">
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
                            <a href="./index.php">Add Place</a>
                          </li>
                          <li>
                            <a href="update.php">Modify Scene</a>
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
                            <a href="./Homepage.html">Update profile</a>
                          </li>
                          <li>
                            <a href="#">Change password</a>
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
            <div id="panorama"></div>
            <!-- sidebar-wrapper  -->
            <main class="page-content">
                <div id = "newdiv">
                    <form id = "createProject" action="process.php" method="POST" style="text-align:center;">
                        <h1 class="serif">Place Name:</h1>&ensp;<input type ="text" placeholder="Enter name of the place to be added" name = "Pname" id = "Pname"><br><br>
                        <input type ="submit" value= "Submit" style="background:orange;color:black;" class="btn btn-primary btn-lg" ></button>
                    </form>    
                </div>
            </main>
          </div>
    </body>


</html>