<?php

require "../controller/dbConfigue.php";
// this is for data update
      
$designations_id = $_GET['id'];

$designationDeletedQry = "UPDATE designations SET active_status= 0 WHERE id = '{$designations_id}' ";

$designationInsert = mysqli_query($conn, $designationDeletedQry)  ;

if ($designationInsert) {
$massage = "Deleted Successfully";
$alertCls = "alert-success";

} else {
$massage = "Deleted Failed";
$alertCls = "alert-danger";
}



//  Redirection
header ("location: ../designations/designationsLIst.php?msg={$massage}&acls={$alertCls} ");



?>