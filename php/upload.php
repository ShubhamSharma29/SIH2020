<?php
 error_reporting(E_ERROR | E_PARSE); 
session_start();
if(isset($_SESSION['message'])){
$query = $_SESSION['message'];
}
$bbb = $_GET["q"];
if($bbb=="ads"){
  $_SESSION["ads"]="ads";
}

?>

<html>
<head>    
<link rel="stylesheet" href="styles/bootstrap.min.css">
<meta charset="utf-8">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link href="../styles/dm4.css" rel="stylesheet">
    <link href="../styles/dm.css" rel="stylesheet">
    <link href="../styles/dm3.css" rel="stylesheet">
    <script src="../scripts/dm.js"></script>

</head>
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
        <div class="user-info"><a href="../php/super-dm.php">
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
                  <a href="Homepage.html">Add Scene</a>
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
                  <a href="#">Update profile</a>
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
                Mr. Ruturaj Sahu<br>
                9876327832</span>
          </li>
      </div>
      <!-- sidebar-menu  -->
    </div>
  </nav>
  <!-- sidebar-wrapper  -->
  <main class="page-content">
   
<div class="container" style="margin-top: 200px;" >
	<div class="offset-md-4 col-md-4" style="position:fixed;left:20px;">
		<form method="POST" enctype="multipart/form-data" action="redirect.php" id = "capt">
			<div class="form-group">
				<label>Select video</label>
				<input type="file" id="file" name="file[]" accept="video/*" class="form-control" multiple="multiple" required>
			</div>
      <input type="button" class="btn btn-primary" value="Generate" onclick="deploy2();"><br><br>
      <input type="button" class="btn btn-primary" value="clip" onclick="deploy();"><br><br>
			<input type="submit" class="btn btn-success" value="Submit">
    </form>
    
    
	</div>
</div>
<div id ="aspx">
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



<script>
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
		
		//console.log(qy);
    request.open("POST", "Batch.php?");
    request.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
    //nothing
    }
  };
		
		request.send(fd); 
	}


  function capture(){
    for(var i=0;i<fid;i++){

    var canvas = document.getElementById('canvas');
    var video = document.getElementById('video'+i);
    //console.log(video.videoWidth + " " + video.videoHeight);
    canvas.width = video.videoWidth;
    canvas.height = video.videoHeight;
    canvas.getContext('2d').clearRect(0,0, canvas.width, canvas.height);
    canvas.getContext('2d').drawImage(video, 0,0, video.videoWidth, video.videoHeight);
    var dataURL = canvas.toDataURL();
    var fileName = fileList[i].name;
    var head = fileName.split(".");


    $.ajax({
  type: "POST",
  url: "save.php",
  data: { 
     imgBase64: dataURL,
     fname:head[0]
  }
}).done(function(o) {
  console.log('saved'); 

});


    }
    
}
  var fid=0;
	var fc = document.getElementById("capt");
	fc.addEventListener('submit', function(event){
    //event.preventDefault();
		capture();
    
  });


    function deploy(){
   	fileList.forEach(function(file){

			//sendFile(file);
			//upldFile(file);

            
       var dc = document.getElementById("canvas");
      if(dc!=null){
        dc.remove();
      }
      var qy = "<?php echo $query; ?>";
      var canv = document.createElement("canvas");
			var vid =document.createElement("video");
      vid.setAttribute("id", "video"+fid);
      vid.setAttribute("src", "https://sih.mailid.tk/Projects/"+qy+"/videos/"+file.name);
      vid.setAttribute("type", "video/mp4");
      vid.setAttribute("controls", "true");
      vid.setAttribute("style", "height:340px; width: 250px;");
      if(fid==0){
      vid.style.marginTop="-340px";
      vid.style.marginLeft="750px";
      
      }
      else{
        vid.style.marginTop=-fid*20 + "px";
      vid.style.marginLeft="750px";
      }
      document.getElementById("aspx").appendChild(vid);
      var video = document.getElementById('video'+fid);
  
      canv.setAttribute("style", "border:1px solid #000000;display:none;height:640;width:1280;margin-left:50px; margin-top:-400px;");
      canv.setAttribute("id", "canvas");
      document.body.appendChild(canv);
      fid+=1;
      
      
		});
		 

    }


    function deploy2(){

      fileList.forEach(function(file){

      sendFile(file);
      });
    
    }
	


	</script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
        


</body>

</html>