
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
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link href="../styles/dm4.css" rel="stylesheet">
    <link href="../styles/dm.css" rel="stylesheet">
    <link href="../styles/dm3.css" rel="stylesheet">
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