<?php

require "../controller/dbConfigue.php";
// this is for data update
      
$staff_id = $_GET['id'];

$staffDeletedQry = "UPDATE our_staff SET active_status=0 WHERE id = '{$staff_id}' ";

$bannerInsert = mysqli_query($conn, $staffDeletedQry)  ;

if ($bannerInsert) {
$massage = "Deleted Successfully";
$alertCls = "alert-success";

} else {
$massage = "Deleted Failed";
$alertCls = "alert-danger";
}



//  Redirection
header ("location: ../our_staff/ourStaffList.php?msg={$massage}&acls={$alertCls} ");



?>