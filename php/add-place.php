<?php
    session_start();

    if(isset($_SESSION["flist"])){
        $gr = $_SESSION["flist"];    
    }

    ?>
   

<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive sidebar template with sliding effect and dropdown menu based on bootstrap 3">
    <title>Add Place</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pannellum@2.5.6/build/pannellum.css"/>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/pannellum@2.5.6/build/pannellum.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="../styles/dm.css" rel="stylesheet">
    <link href="../styles/dm3.css" rel="stylesheet">
   

    

    <style>

.btn {
     border: none;
     outline: none;
     padding: 10px 16px;
     margin-left:100px;
     background-color: #f1f1f1;
     cursor: pointer;
   }

   .btn2 {
     border: none;
     outline: none;
     padding: 10px 16px;
     
     background-color: #f1f1f1;
     cursor: pointer;
     
   }
   
   .active, .btn:hover {
     background-color:#10b3ff;
     color: white;
   }

   .active, .btn2:hover {
     background-color:#f70733;
     color: white;
   }
        .sel{
            background-color: #10b3ff;
        }
        .sel2{
            background-color: #f70733;
        }


        .btn3 {
  border-radius: 5px;
  padding: 8px 10px;
  font-size: 16px;
  margin-bottom:15px;
  text-align: center;
  margin-left: 100px;
  color: #fff;
  position: relative;
  display: inline-block;
  -webkit-font-smoothing: antialiased;
}

.btn3:active {
  transform: translate(0px, 5px);
  -webkit-transform: translate(0px, 5px);
  box-shadow: 0px 1px 0px 0px;
}

.green {
  background-color: #2ecc71;
  box-shadow: 0px 5px 0px 0px #15B358;
}

.green:hover {
  background-color: #48E68B;
}
   
       #panorama {
           width: 750px;
           height: 400px;
           left:400px;
           top:15px;
       }
       #infobox{
           width:400px;
           height:160px;
           left: 750px;
           top:430px;
           position: absolute;
           border-radius:2%;
           background-color: #10b3ff;
       }
       #vanish {
         
         left:190px;
         top:4px;
         border: 1px solid rgb(211, 23, 23); 
         position:absolute;
   }
       #transmk {
         position:fixed;
         margin-top: 47px;
         top:75px;
         border: 1px solid rgb(230, 21, 21); 
         left:190px;
         position:absolute;
       }
   
       #desc{
           position: fixed;
       }
       #trans{
           
           margin-top: 90px;
           position:fixed;
       }
   
       #cnf{
           width:140px;
           height:40px;
           position: relative;
           top: 10px;
       }
       #prev{
        width:100px;
        height:40px;
        margin-left:100px;
        padding: 10px 30px;
        background: #f1f1f1;
        border: 1px solid rgb(10, 48, 242);
        border-radius: 100px 0 0 100px;
       }
       #next{
        width:100px;
        height:40px;
        margin-left:10px;
        padding: 10px 30px;
        background: #f1f1f1;
        border: 1px solid rgb(10, 48, 242);
        border-radius: 0 100px 100px 0;
       }

    </style>
</head>
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
                  <a href="./update.php">Modify Place</a>
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
  <div id="panorama"></div>
  <!-- sidebar-wrapper  -->
  <main class="page-content">
  



  <input type  ="button" id="sub1" value = "sub" name = "transition" class = "btn" onclick="toggle()">
<div id = "infobox">
<input type  ="button" value = "Descriptive marker" name = "desc" id = "desc" onclick="descreate()" >
<input type  ="button" value = "Transitional marker" name = "trans" id = "trans" onclick="transplace()" >
</div>


<input type = "button" value = "Remove" id="rem"  class="btn2" onclick = "toggle2()"><br><br>
<input type ="button"  value = "Previous" id = "prev" onclick ="previous()" >
<input type ="button"  value = "Next" id = "next" onclick ="next()" ><br><br>
<input type = "button" value = "Save Changes" name ="cnf" id ="cnf" class = "btn3 green" onclick ="subconf()">
<span id="msg"></msg>
  </main>
  <!-- page-content" -->
</div>




<script>


var hit =0;//hotspot id increment after adding each hotspot

var allFiles = "<?php echo $gr; ?>";
var Imglist = allFiles.split("$").filter(function(el) {return el.length != 0});
var firstScene1 = Imglist[0].split("/");
var GetName = "<?php echo $_SESSION['message']; ?>";
var fs1 = firstScene1[firstScene1.length -1].split(".png")[0];

var kt = {

    "default": {
        "firstScene": fs1,
        "sceneFadeDuration": 1000,
        "autoLoad": true
    },
    "scenes":{

    }
    
};
var rt=[];
var ki=  pannellum.viewer('panorama',kt);
window.addEventListener('load', function(){
    if(Imglist.length>0){
      console.log(Imglist);  
for(var i=0;i<Imglist.length;i++){
    var carr = Imglist[i].split("/");
    var ins = carr[carr.length -1].split(".png")[0];
    var hbb;
    if(i==0){
        hbb=ins;
    }
    rt.push(ins);
ki.addScene(ins, {"title":Imglist[i],
    "type": "equirectangular",
    "panorama": Imglist[i],
    
    });
    
    }
    }
    ki.loadScene(hbb);
});


var mut=0;
var rm=0;
function toggle(){
    //console.log(Imglist);
    document.getElementById("rem").classList.remove("sel2");
    rm=0;
    if(mut==0){
        document.getElementById("sub1").classList.add("sel");
    
        mut=1;
    }
    else{
        document.getElementById("sub1").classList.remove("sel");
        mut=0;
    }
}

    var rk=[];
    function toggle2(){
         
    document.getElementById("sub1").classList.remove("sel");
    mut=0;
    if(rm==0){
        document.getElementById("rem").classList.add("sel2");
    rm=1;
    }
    else{
        document.getElementById("rem").classList.remove("sel2");
        rm=0;
    }
    }

ki.on('mouseup', function(event){

    if(rm==1){
            rk =ki.getConfig().hotSpots; 
            
            var nb = ki.mouseEventToCoords(event);   
            for(var i=0;i<rk.length;i+=1){
                
                if(Math.abs(nb[0]-(rk[i].pitch))<5 && Math.abs(nb[1]-(rk[i].yaw))<5){
                    
                    ki.removeHotSpot(rk[i].id, ki.getScene());
                    
                }
                
            }
            ki.loadScene(ki.getScene());
            
           }

    if(mut==1){
    var bn =ki.mouseEventToCoords(event);
    //console.log(bn); 
    pseudo(bn[0],bn[1]);
    }
    
});
var status = "";
function descreate() {
    var bol = document.getElementById('vanish');
    if(bol==null){
       status = "desc";
    var x = document.createElement('textarea');   
    x.setAttribute("rows", "5");
    x.setAttribute("cols", "25");
    x.setAttribute("id","vanish");
    document.getElementById("infobox").appendChild(x);
    }
    else{
        status = "";
        bol.remove();
    }
}   

function transplace() {
    var bol = document.getElementById('transmk');
    if(bol==null){
        status = "trans";
    //document.getElementById('vanish').remove();
    var x = document.createElement("select");
    x.setAttribute("id","transmk");
    //var hk = ft.scenes;
    
    for(var i=0;i<Imglist.length;i++){
        var carr = Imglist[i].split("/");
        var ins = carr[carr.length -1].split(".png")[0];
        var s = ins;
            //rt.push(s);
            var t = document.createElement("option");
            t.setAttribute("value",s);
            t.innerText =s;
            x.appendChild(t);
    }
    document.getElementById("infobox").appendChild(x);
    }
    else{
        status="";
        bol.remove();
    }
    
}

function pseudo(v1, v2){
    rk =ki.getConfig().hotSpots; 
    hit = rk.length;
    if(status==="desc"){   
    var fg= document.getElementById("vanish").value;
    ki.addHotSpot({"pitch":v1, "yaw":v2, "type":"info", text:fg, "id":hit}, ki.getScene());
    hit+=1;
    }
    
    if(status==="trans"){
            var e = document.getElementById("transmk");
            var strUser = e.options[e.selectedIndex].value;
           // console.log(strUser);
            ki.addHotSpot({"pitch":v1, "yaw":v2, "type":"scene", "sceneId":strUser, "id":hit}, ki.getScene());
            hit+=1;       
    }

    
    ki.loadScene(ki.getScene());
}

function subconf(){
    
    
    var sdata = ki.getConfig();
    sdata["PlaceID"] = GetName;
    /* var verb = sdata.scenes;
    console.log(verb); */
    var jsonStr = JSON.stringify(sdata);
    //console.log(jsonStr);
    var xhr = new XMLHttpRequest();
    xhr.open("POST","receive.php");
    xhr.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("msg").innerHTML =
        this.responseText;
      }
    };
    xhr.setRequestHeader("Content-Type", "application/json");
    xhr.send(jsonStr);
    window.location.replace("super-dm.php");
}

var cntr=0;
        function previous(){
            if(cntr==0){
                cntr=rt.length-1;
            }
            else{
                cntr-=1;
            }
            ki.loadScene(rt[cntr]);
        }

        function next(){
            if(cntr==rt.length-1){
                cntr=0;
            }
            else{
                cntr+=1;
            }
            ki.loadScene(rt[cntr]);
        }


</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
        <script src="scripts/dm.js"></script>








</body>
</html>