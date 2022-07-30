<?php

require "../controller/dbConfigue.php";
// this is for data update
      
$categories_id = $_GET['id'];

$categorieDeletedQry = "UPDATE categories SET active_status= 0 WHERE id = '{$categories_id}' ";

$categorieInsert = mysqli_query($conn, $categorieDeletedQry)  ;

if ($categorieInsert) {
$massage = "Deleted Successfully";
$alertCls = "alert-success";

} else {
$massage = "Deleted Failed";
$alertCls = "alert-danger";
}



//  Redirection
header ("location: ../categories/categoriesList.php?msg={$massage}&acls={$alertCls} ");



?>