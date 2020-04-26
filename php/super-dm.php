
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
    <script>
  function preventBack(){window.history.forward();}
  setTimeout("preventBack()", 1);
  window.onunload=function(){null};
</script>

</head>

<style>
  h1 { font-family: "Copperplate Gothic Light"; font-size: 60px; font-style: normal; font-variant: normal; font-weight: 700; line-height: 26.4px; }
/* body {
  background-image: url("https://s27389.pcdn.co/wp-content/uploads/2018/04/AdobeStock_136701855-1024x683.jpeg");
  background-repeat: no-repeat;
  background-color: #cccccc;
  background-size: cover;
  background-position: center;
} */


@import url(//fonts.googleapis.com/css?family=Oswald:400);
* {
  margin: 0;
  padding: 0;
}

.chart {
  position: absolute;
  width:400px;
  height: 400px;
  top: 52%;
  left: 80%;
  margin: -225px 0 0 -225px;
}
.pieTip {
  position: absolute;
  float: left;
  min-width: 30px;
  max-width: 300px;
  padding: 5px 18px 6px;
  border-radius: 2px;
  background: rgba(255,255,255,.97);
  color: #444;
  font-size: 19px;
  text-shadow: 0 1px 0 #fff;
  text-transform: uppercase;
  text-align: center;
  line-height: 1.3;
  letter-spacing: .06em;
  box-shadow: 0 0 3px rgba(0,0,0,0.2), 0 1px 2px rgba(0,0,0,0.5);
  -webkit-transform: all .3s;
     -moz-transform: all .3s;
      -ms-transform: all .3s;
       -o-transform: all .3s;
          transform: all .3s;
  pointer-events: none;
}
.pieTip:after {
      position: absolute;
      left: 50%;
      bottom: -6px;
      content: "";
      height: 0;
      margin: 0 0 0 -6px;
      border-right: 5px solid transparent;
      border-left: 5px solid transparent;
      border-top: 6px solid rgba(255,255,255,.95);
      line-height: 0;
}
.chart path { cursor: pointer; }

.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 100%;
  height:70%;
  margin-top:-5px;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
  padding: 2px 16px;
}


</style>
<body  style="background-color:#cfd1d3" class="page-wrapper chiller-theme toggled">
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
        <div class="user-info"><a href="../php/super-dm.php">
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
  <main style="background-color:#6C6AE4" class="page-content">
      <div class="container-fluid">
        <h1>6  Bits</h1>
        <pre><h6>A VR Experience</h6></pre>       
            <div class="row">
            </div>
      </div>          
    </main>

      <div class="card">
        <div class="container">
          <div id="chartContainer" style="height: 400px; width:400px; justify-content:center; margin:0 auto; position:relative ; 
              margin-left:200px ">
            </div>


            <div id="pieChart" class="chart" >
              <span style="font-size:15px ; background-color:cornsilk"><strong>Analytics of selected places
                <br> in Andaman & Nicobar</strong></span>
            </div>   
        </div>
      </div>
   
      
          
 
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