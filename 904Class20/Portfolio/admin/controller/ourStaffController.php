<?php 
// database connection Qury
  require 'dbConfigue.php';
// this is for staff Create 
if (isset($_POST['CreateData'])) {


    // for image 
    if(isset($_FILES['staff_image'])){    
      $uploadStatus = false;
      $mainArrImg = $_FILES['staff_image'];
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
        move_uploaded_file($file_temp_name, '../uploads/our_staff/'.$fileRandomName);
        $uploadStatus = true;
      } else {
        $massage = $FileExtention." is Not Allowed";
      }
      $massage = "File Not Found";
    
    }




    $ourStaff_id    = $_POST['staff_id'];
    $staff_name     = $_POST['staff_name'];
    $designation_id = $_POST['designation_id'];
    $staff_image    = $_POST['staff_image'];
    $twitter        = $_POST['twitter'];
    $facebook       = $_POST['facebook'];
    $linkedin       = $_POST['linkedin'];
    $instagram      = $_POST['instagram'];

 if ( empty($staff_name) || empty($designation_id) || empty($fileRandomName) || empty($twitter) || empty($facebook) || empty($linkedin) || empty($instagram) || $uploadStatus==false  ) {
    $massage = "All Field is Required";
    $alertCls = "alert-danger";
 } else {
   $isertQry = "INSERT INTO our_staff (staff_name,designation_id,staff_image,twitter,facebook,linkedin,instagram) VALUES ('{$staff_name}', '{$designation_id}', '{$staff_image}', '{$twitter}', '{$facebook}', '{$linkedin}' , '{$instagram}'  ) ";
   $staffInsert = mysqli_query($conn, $isertQry)  ;

   if ($staffInsert) {
    $massage = "Insert Successfully";
    $alertCls = "alert-success";
   } else {
    $massage = "Insert Failed";
    $alertCls = "alert-danger";
   }
   
 }
//  Redirection
header ("location: ../our_staff/ourStaffCreate.php?msg={$massage}&acls={$alertCls} ");

}


// this is for staff update
if (isset($_POST['UpdateData'])) {

      
        $ourStaff_id    = $_POST['staff_id'];
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
    $ourStaffUpdateQry = "UPDATE our_staff SET staff_name='{$staff_name}',designation_id='{$designation_id}',staff_image='{$staff_image}',twitter='{$twitter}',facebook='{$facebook}',linkedin='{$linkedin}',instagram='{$instagram}' WHERE id = '{$ourStaff_id}' ";

   $staffInsert = mysqli_query($conn, $ourStaffUpdateQry)  ;

   if ($staffInsert) {
    $massage = "Insert Successfully";
    $alertCls = "alert-success";
   } else {
    $massage = "Insert Failed";
    $alertCls = "alert-danger";
   }
   
 }
 
//  Redirection
header ("location: ../our_staff/ourStaffUpdate.php?msg={$massage}&acls={$alertCls}&id={$ourStaff_id } ");

}


