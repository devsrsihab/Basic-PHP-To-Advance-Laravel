<?php 

// database connection Qury
require 'dbConfigue.php';

        // this is for projectss Create 
        if (isset($_POST['CreateData'])) {

             // for image 
            if(isset($_FILES['project_thumb'])){
                $uploadStatus = false;
                $mainArrImg = $_FILES['project_thumb'];
                $file_name = $mainArrImg['name'];
                $file_temp_name = $mainArrImg['tmp_name'];
                $file_size = $mainArrImg['size'];
                
                // extract file extentions 
                $FileExArr= explode('.',$file_name);
                // get the file extentions 
                $FileExtention = strtolower(end($FileExArr));
                // This is allowed file extention
                $FileValidExt = ['jpg', 'jpeg', 'png'];
                // random name generated
                $fileRandomName = time().'.'.$FileExtention;
                // condtional massage file extention
                if (in_array($FileExtention, $FileValidExt) ) {
                move_uploaded_file($file_temp_name, '../uploads/projectThums/' .$fileRandomName);
                $uploadStatus = true;
                } else {
                $massage = $FileExtention." is Not Allowed";
                }
                $massage = "File Not Found";
            
            }
  




            $projectsName        = $_POST['project_name'];
            $projectsCategorieID = $_POST['category_id'];
            $projectsLink        = $_POST['project_link'];
            $projectsThumb       = $_POST['project_thumb'];


            if ( empty($projectsName ||  $projectsCategorieID || $projectsLink || $projectsThumb)   ) {
            $massage = "All Field is Required";
            $alertCls = "alert-danger";
            }
            else {
                $insertQry = "INSERT INTO our_projects (project_name, category_id, project_link ,project_thumb) VALUES ('{$projectsName}', '{$projectsCategorieID}', '{$projectsLink}', '{$fileRandomName}' ) ";
                // 
                $projectssInsert = mysqli_query($conn, $insertQry)  ;

                if ($projectssInsert) {
                $massage = "Insert Successfully";
                $alertCls = "alert-success";
                } else {
                $massage = "Insert Failed";
                $alertCls = "alert-danger";
                }

            }
            //  Redirection
            header ("location: ../our_project/projectsCreate.php?msg={$massage}&acls={$alertCls} ");

   }
            // this is for banner update
            if (isset($_POST['UpdateData'])) {

            // for image 
            if(isset($_FILES['project_thumb'])){
                $uploadStatus = false;
                $mainArrImg = $_FILES['project_thumb'];
                $file_name = $mainArrImg['name'];
                $file_temp_name = $mainArrImg['tmp_name'];
                $file_size = $mainArrImg['size'];
                
                // extract file extentions 
                $FileExArr= explode('.',$file_name);
                // get the file extentions 
                $FileExtention = strtolower(end($FileExArr));
                // This is allowed file extention
                $FileValidExt = ['jpg', 'jpeg', 'png'];
                // random name generated
                $fileRandomName = time().'.'.$FileExtention;
                // condtional massage file extention
                if (in_array($FileExtention, $FileValidExt) ) {
                move_uploaded_file($file_temp_name, '../uploads/projectThums/' .$fileRandomName);
                $uploadStatus = true;
                } else {
                $massage = $FileExtention." is Not Allowed";
                }
                $massage = "File Not Found";
            
            }

                
                $projects_id   = $_POST['projects_id'];
                $project_name  = $_POST['project_name'];
                $category_id   = $_POST['category_id'];
                $project_link  = $_POST['project_link'];
                $project_thumb = $_POST['project_thumb'];

            if ( empty($project_name ||  $category_id || $project_link || $project_thumb)   ) {
            $massage = "All Field is Required";
            $alertCls = "alert-danger";
            } else {
            $projectssUpdateQry = "UPDATE our_projects SET project_name='{$project_name}',category_id='{$category_id}',project_link='{$project_link}',project_thumb='{$fileRandomName}' WHERE id = '{$projects_id}' ";

            $projectsInsert = mysqli_query($conn, $projectssUpdateQry)  ;

            if ($projectsInsert) {
            $massage = "Insert Successfully";
            $alertCls = "alert-success";
            } else {
            $massage = "Insert Failed";
            $alertCls = "alert-danger";
            }

            }

            //  Redirection
            header ("location: ../our_project/projectsUpdate.php?msg={$massage}&acls={$alertCls}&id={$projects_id} ");

            }



?>

