<?php 
// database connection Qury
  require 'dbConfigue.php';
// this is for designation Create 
if (isset($_POST['CreateData'])) {



    $designation_name  = $_POST['designation_name'];

 if ( empty($designation_name)   ) {
    $massage = "All Field is Required";
    $alertCls = "alert-danger";
 } else {
   $isertQry = "INSERT INTO designations (designation_name) VALUES ('{$designation_name}' ) ";
   $designationInsert = mysqli_query($conn, $isertQry)  ;

   if ($designationInsert) {
    $massage = "Insert Successfully";
    $alertCls = "alert-success";
   } else {
    $massage = "Insert Failed";
    $alertCls = "alert-danger";
   }
   
 }
//  Redirection
header ("location: ../designations/designationsCreate.php?msg={$massage}&acls={$alertCls} ");

}


// this is for designation update
if (isset($_POST['UpdateData'])) {
      
        $designation_id   = $_POST['designation_id'];
        $designation_name = $_POST['designation_name'];

 if ( empty( $designation_name )   ) {
    $massage = "All Field is Required";
    $alertCls = "alert-danger";
 } else {
    $banerUpdateQry = "UPDATE designations SET designation_name='{$designation_name}' WHERE id ='{$designation_id}' ";

   $designationInsert = mysqli_query($conn, $banerUpdateQry)  ;

   if ($designationInsert) {
    $massage = "Insert Successfully";
    $alertCls = "alert-success";
   } else {
    $massage = "Insert Failed";
    $alertCls = "alert-danger";
   }
   
 }
 
//  Redirection
header ("location: ../designations/designationsUpdate.php?msg={$massage}&acls={$alertCls}&id={$designation_id} ");

}


