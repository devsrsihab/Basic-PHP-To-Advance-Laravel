<?php 
// database connection Qury
  require 'dbConfigue.php';


// this is for banner Create 
if (isset($_POST['CreateData'])) {

        $title        = $_POST['title'];
        $SubTitle     = $_POST['subtitle'];
        $details      = $_POST['details'];
        $image        = $_POST['image'];
        $activeStatus = $_POST['activeStatus'];

 if ( empty($title ||  $SubTitle || $details || $image)   ) {
    $massage = "All Field is Required";
    $alertCls = "alert-danger";
 } else {
   $isertQry = "INSERT INTO banner (title,sub_title,details,image,active_status) VALUES ('{$title}', '{$SubTitle}', '{$details}', '{$image}', '{$activeStatus}' ) ";
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
      
        $baner_id = $_POST['banner_id'];
        $title    = $_POST['title'];
        $SubTitle = $_POST['subtitle'];
        $details  = $_POST['details'];
        $image    = $_POST['image'];
        $activeStatus = $_POST['activeStatus'];

 if ( empty($title ||  $SubTitle || $details || $image)   ) {
    $massage = "All Field is Required";
    $alertCls = "alert-danger";
 } else {
    $banerUpdateQry = "UPDATE banner SET title='{$title}',sub_title='{$SubTitle}',details='{$details}',image='{$image}',active_status='{$activeStatus}' WHERE id = '{$baner_id}' ";

   $bannerInsert = mysqli_query($conn, $banerUpdateQry)  ;

   if ($bannerInsert) {
    $massage = "Insert Successfully";
    $alertCls = "alert-success";
   } else {
    $massage = "Insert Failed";
    $alertCls = "alert-danger";
   }
   
 }
 
//  Redirection
header ("location: ../banner/bannerUpdate.php?msg={$massage}&acls={$alertCls}&id={$baner_id } ");

}


?>