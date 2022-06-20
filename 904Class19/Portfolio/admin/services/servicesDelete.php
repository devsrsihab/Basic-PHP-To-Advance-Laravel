<?php

require "../controller/dbConfigue.php";
// this is for data update
      
$services_id = $_GET['id'];

$servicesDeletedQry = "UPDATE services SET active_status= 0 WHERE id = '{$services_id}' ";

$servicesDeleted = mysqli_query($conn, $servicesDeletedQry)  ;

if ($servicesDeleted) {
$massage = "Deleted Successfully";
$alertCls = "alert-success";

} else {
$massage = "Deleted Failed";
$alertCls = "alert-danger";
}
//  Redirection
header ("location: ../services/servicesLIst.php?msg={$massage}&acls={$alertCls} ");


?>