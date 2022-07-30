<?php

require "../controller/dbConfigue.php";
// this is for data update
      
$sections_id = $_GET['id'];

$designationDeletedQry = "UPDATE sections SET active_status= 0 WHERE id = '{$sections_id}' ";

$designationInsert = mysqli_query($conn, $designationDeletedQry)  ;

if ($designationInsert) {
$massage = "Deleted Successfully";
$alertCls = "alert-success";

} else {
$massage = "Deleted Failed";
$alertCls = "alert-danger";
}



//  Redirection
header ("location: ../sections/sectionsLIst.php?msg={$massage}&acls={$alertCls} ");



?>