
<html>
<head>    
<link rel="stylesheet" href="styles/bootstrap.min.css">
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive sidebar template with sliding effect and dropdown menu based on bootstrap 3">
    <title>Main page</title>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="../styles/dm.css" rel="stylesheet">
    <script src="../scripts/dm.js"></script>
 

</head>

<body>
<?php
session_start();
if(isset($_SESSION['message'])){
$query = $_SESSION['message'];
}


?>

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
      <div class="row">
        <div class="form-group col-md-12">
            <div class="container" style="margin-top: 200px;">
                <div class="offset-md-4 col-md-4">
                    <form method="POST" enctype="multipart/form-data" action="Batch.php" id = "capt">
                        <div class="form-group">
                            <label>Select video</label>
                            <input type="file" id="file" name="file[]" accept="video/*" class="form-control" multiple="multiple" required>
                        </div>

                        <input type="submit" class="btn btn-primary" value="Generate">
                    </form>
                </div>
            </div>
        </div>
        <div class="form-group col-md-12">
        </div>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>



<script type = "text/javascript">
	var fileInput = document.getElementById('file');
	var fileList=[];

	fileInput.addEventListener('change', function(event){
		fileList=[];
		for(var i=0;i<fileInput.files.length;i++){
			fileList.push(fileInput.files[i]);
		}
	});

	sendFile = function(file){
		var fd = new FormData();
		var request = new XMLHttpRequest();
		fd.set('file', file);
		var qy = "<?php echo $query; ?>";
		console.log(qy);
		request.open("POST", "vd.php?q="+qy);
    request.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
    //nothing
    }
  };
		request.send(fd); 
	}

	var fc = document.getElementById("capt");
	fc.addEventListener('submit', function(event){
		//event.preventDefault();
		fileList.forEach(function(file){
			
			sendFile(file);
			//upldFile(file);
		});
		

	});


	</script>
</body>

</html>