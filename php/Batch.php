<?php
            session_start();
            
            $target_dir = $_SESSION["message"];
            $encoder = "";
            // setup an array to check errors at the time of file upload
            $errors = array();

            //Loop through each file
            for($i=0; $i<count($_FILES['file']['name']); $i++) 
            {
                // set the array of allowed extensions
                $allowed =  array('mp4', 'mkv', 'm4v');

                // extrach the file extension and check if it is valid
                $ext = pathinfo($_FILES['file']['name'][$i], PATHINFO_EXTENSION);
                if(!in_array($ext,$allowed)) 
                {
                    $errors[] = "Invalid field extension.";
                }
                if(empty($errors))
                {
                    // make parts of file name to append timestamp to them to avoid uploading of files with same name
                    $path_parts = pathinfo($_FILES["file"]["name"][$i]);

                    $image_path = $path_parts['filename'].'.'.$path_parts['extension'];

                    //Setup our new file path
                    $newFilePath = 'Projects/'.$target_dir.'/videos/'.$image_path;

                    copy ( $_FILES['file']['tmp_name'][$i], 
                            $newFilePath);
                    
                    //$encoder =$encoder.$newFilePath.'$';
                    //Upload the file into the temp dir
                    /* if(move_uploaded_file($_FILES["file"]["tmp_name"][$i], $newFilePath)) 
                    {
                        //Handle other code here
                        

                    } */
                }
                else
                {
                    print_r($errors);
                }
            }
            if(empty($errors))
            {
                //$_SESSION["flist"] = $encoder;
                if(isset($_SESSION["ads"])){
                    if($_SESSION["ads"]=="ads"){
                    unset($_SESSION["ads"]);
                    header("Location:hyb.php");
                    }
                    
                }
                else{
                header("Location:add-place.php");
                }
            }
        
        
     

    ?>