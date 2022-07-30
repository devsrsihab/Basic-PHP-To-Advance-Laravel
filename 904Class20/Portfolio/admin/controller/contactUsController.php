<?php 
// database connection Qury
  require 'dbConfigue.php';
// this is for contactUs Create 
if (isset($_POST['CreateData'])) {


    // for image 
    if(isset($_FILES['icon_name'])){
      $uploadStatus = false;
      $mainArrImg = $_FILES['icon_name'];
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
        move_uploaded_file($file_temp_name, '../uploads/contact_us/' .$fileRandomName);
        $uploadStatus = true;
      } else {
        $massage = $FileExtention." is Not Allowed";
      }
      $massage = "File Not Found";
    
    }
        $contact_topic   = $_POST['contact_topic'];
        $contact_details = $_POST['contact_details'];
        $icon_name       = $_POST['icon_name'];


 if ( empty($contact_topic) ||  empty($contact_details) ||  $uploadStatus== false   ) {
    $massage = "All Field is Required";
    $alertCls = "alert-danger";
 } else {
   $isertQry = "INSERT INTO contact_us (contact_topic,contact_details,icon_name) VALUES ('{$contact_topic}', '{$contact_details}', '{$fileRandomName}' ) ";
   $contactUsInsert = mysqli_query($conn, $isertQry)  ;

   if ($contactUsInsert) {
    $massage = "Insert Successfully";
    $alertCls = "alert-success";
   } else {
    $massage = "Insert Failed";
    $alertCls = "alert-danger";
   }
   
 }

//  Redirection
header ("location: ../contact_us/contactUsCreate.php?msg={$massage}&acls={$alertCls} ");

}


// this is for contactUs update
if (isset($_POST['UpdateData'])) {
      // for image 
      if(isset($_FILES['icon_name'])){
        $uploadStatus = false;
        $mainArrImg = $_FILES['icon_name'];
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
          move_uploaded_file($file_temp_name, '../uploads/contact_us/' .$fileRandomName);
          $uploadStatus = true;
        } else {
          $massage = $FileExtention." is Not Allowed";
        }
        $massage = "File Not Found";
      
      }
      
        $contactUs_id    = $_POST['contactUs_id'];
        $contact_topic   = $_POST['contact_topic'];
        $contact_details = $_POST['contact_details'];
        $icon_name       = $_POST['icon_name'];

 if ( empty($contact_topic ||  $contact_details || $uploadStatus== false )   ) {
    $massage = "All Field is Required";
    $alertCls = "alert-danger";
 } else {
    $contactUsUpdateQry = "UPDATE contact_us SET contact_topic='{$contact_topic}',contact_details='{$contact_details}',icon_name='{$fileRandomName}' WHERE id = '{$contactUs_id}' ";

   $contactUsInsert = mysqli_query($conn, $contactUsUpdateQry)  ;

   if ($contactUsInsert) {
    $massage = "Insert Successfully";
    $alertCls = "alert-success";
   } else {
    $massage = "Insert Failed";
    $alertCls = "alert-danger";
   }
   
 }
 
//  Redirection
header ("location: ../contact_us/contactUsUpdate.php?msg={$massage}&acls={$alertCls}&id={$contactUs_id } ");

}


