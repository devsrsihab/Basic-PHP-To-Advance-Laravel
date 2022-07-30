<?php 
// database connection Qury
  require 'dbConfigue.php';
// this is for categorie Create 
if (isset($_POST['CreateData'])) {



        $category_name  = $_POST['category_name'];

 if ( empty($category_name)   ) {
    $massage = "All Field is Required";
    $alertCls = "alert-danger";
 } else {
   $isertQry = "INSERT INTO categories (category_name) VALUES ('{$category_name}' ) ";
   $categorieInsert = mysqli_query($conn, $isertQry)  ;

   if ($categorieInsert) {
    $massage = "Insert Successfully";
    $alertCls = "alert-success";
   } else {
    $massage = "Insert Failed";
    $alertCls = "alert-danger";
   }
   
 }
//  Redirection
header ("location: ../categories/categoriesCreate.php?msg={$massage}&acls={$alertCls} ");

}


// this is for categorie update
if (isset($_POST['UpdateData'])) {
      
        $categorie_id  = $_POST['categories_id'];
        $category_name = $_POST['category_name'];


 if ( empty($category_name)   ) {
    $massage = "All Field is Required";
    $alertCls = "alert-danger";
 } else {
    $banerUpdateQry = "UPDATE categories SET category_name='{$category_name}' WHERE id = '{$categorie_id}' ";

   $categorieInsert = mysqli_query($conn, $banerUpdateQry)  ;

   if ($categorieInsert) {
    $massage = "Insert Successfully";
    $alertCls = "alert-success";
   } else {
    $massage = "Insert Failed";
    $alertCls = "alert-danger";
   }
   
 }
 
//  Redirection
header ("location: ../categories/categoriesUpdate.php?msg={$massage}&acls={$alertCls}&id={$categorie_id } ");

}


