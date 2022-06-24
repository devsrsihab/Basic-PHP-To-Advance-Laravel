<?php 
// database connection Qury
  require 'dbConfigue.php';
// this is for banner Create 
if (isset($_POST['CreateData'])) {


    // for image 
    if(isset($_FILES['image'])){
      $uploadStatus = false;
      $mainArrImg = $_FILES['image'];
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
        move_uploaded_file($file_temp_name, '../uploads/bannerImages/' .$fileRandomName);
        $uploadStatus = true;
      } else {
        $massage = $FileExtention." is Not Allowed";
      }
      $massage = "File Not Found";
    
    }



      
    $ourStaff_id    = $_POST['banner_id'];
    $staff_name     = $_POST['staff_name'];
    $designation_id = $_POST['designation_id'];
    $staff_image    = $_POST['staff_image'];
    $twitter        = $_POST['twitter'];
    $facebook       = $_POST['facebook'];
    $linkedin       = $_POST['linkedin'];
    $instagram      = $_POST['instagram'];

 if ( empty($staff_name) || empty($designation_id) || empty($staff_image) || empty($twitter) || empty($facebook) || empty($linkedin) || empty($instagram) || $uploadStatus== false   ) {
    $massage = "All Field is Required";
    $alertCls = "alert-danger";
 } else {
   $isertQry = "INSERT INTO our_staff (staff_name,designation_id,staff_image,twitter,facebook,linkedin,instagram) VALUES ('{$staff_name}', '{$designation_id}', '{$staff_image}', '{$twitter}', '{$facebook}', '{$linkedin}' , '{$instagram}'  ) ";
   $bannerInsert = mysqli_query($conn, $isertQry)  ;

   if ($bannerInsert) {
    $massage = "Insert Successfully";
    $alertCls = "alert-success";
   } else {
    $massage = "Insert Failed";
    $alertCls = "alert-danger";
   }
   
 }
//  Redirection
header ("location: ../banner/bannerCreate.php?msg={$massage}&acls={$alertCls} ");

}


// this is for banner update
if (isset($_POST['UpdateData'])) {

      
        $ourStaff_id    = $_POST['banner_id'];
        $staff_name     = $_POST['staff_name'];
        $designation_id = $_POST['designation_id'];
        $staff_image    = $_POST['staff_image'];
        $twitter        = $_POST['twitter'];
        $facebook       = $_POST['facebook'];
        $linkedin       = $_POST['linkedin'];
        $instagram      = $_POST['instagram'];

 if ( empty($staff_name) || empty($designation_id) || empty($staff_image) || empty($twitter) || empty($facebook) || empty($linkedin) || empty($instagram)  ) {
    $massage = "All Field is Required";
    $alertCls = "alert-danger";
 } else {
    $ourStaffUpdateQry = "UPDATE our_staff SET title='{$title}',sub_title='{$SubTitle}',details='{$details}',image='{$image}',active_status='{$activeStatus}' WHERE id = '{$ourStaff_id}' ";

   $bannerInsert = mysqli_query($conn, $ourStaffUpdateQry)  ;

   if ($bannerInsert) {
    $massage = "Insert Successfully";
    $alertCls = "alert-success";
   } else {
    $massage = "Insert Failed";
    $alertCls = "alert-danger";
   }
   
 }
 
//  Redirection
header ("location: ../banner/bannerUpdate.php?msg={$massage}&acls={$alertCls}&id={$ourStaff_id } ");

}


