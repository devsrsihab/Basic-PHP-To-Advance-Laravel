<?php 
// database connection Qury
  require 'dbConfigue.php';
// this is for section Create 
if (isset($_POST['CreateData'])) {



    $title     = $_POST['title'];
    $sub_title = $_POST['sub_title'];
    $details   = $_POST['details'];
    $page_no   = $_POST['page_no'];

 if ( empty($title) || empty($sub_title) || empty($details) || empty($page_no)   ) {
    $massage = "All Field is Required";
    $alertCls = "alert-danger";
 } else {
   $isertQry = "INSERT INTO sections (title, sub_title, details,page_no) VALUES ('{$title}','{$sub_title}','{$details}','{$page_no}' ) ";
   $sectionInsert = mysqli_query($conn, $isertQry)  ;

   if ($sectionInsert) {
    $massage = "Insert Successfully";
    $alertCls = "alert-success";
   } else {
    $massage = "Insert Failed";
    $alertCls = "alert-danger";
   }
   
 }
//  Redirection
header ("location: ../sections/sectionsCreate.php?msg={$massage}&acls={$alertCls}");

}


// this is for section update
if (isset($_POST['UpdateData'])) {
      
        $section_id = $_POST['section_id'];
        $title      = $_POST['title'];
        $sub_title  = $_POST['sub_title'];
        $details    = $_POST['details'];
        $page_no    = $_POST['page_no'];

 if ( empty( $title ) ||empty( $sub_title ) || empty( $details ) || empty( $page_no )   ) {
    $massage = "All Field is Required";
    $alertCls = "alert-danger";
 } else {
    $bsectionUpdateQry = "UPDATE sections SET title='{$title}',sub_title='{$sub_title}',details='{$details}',page_no='{$page_no}'  WHERE id ='{$section_id}' ";

   $sectionInsert = mysqli_query($conn, $bsectionUpdateQry)  ;

   if ($sectionInsert) {
    $massage = "Insert Successfully";
    $alertCls = "alert-success";
   } else {
    $massage = "Insert Failed";
    $alertCls = "alert-danger";
   }
   
 }

//  Redirection
header ("location: ../sections/sectionsUpdate.php?msg={$massage}&acls={$alertCls}&id={$section_id}");

}


