<?php

require "../controller/dbConfigue.php";
// this is for data update
      
$clients_id = $_GET['id'];

$clientsDeletedQry = "UPDATE our_clients SET active_status=0 WHERE id = '{$clients_id}' ";

$bannerInsert = mysqli_query($conn, $clientsDeletedQry)  ;

if ($bannerInsert) {
$massage = "Deleted Successfully";
$alertCls = "alert-success";

} else {
$massage = "Deleted Failed";
$alertCls = "alert-danger";
}



//  Redirection
header ("location: ../our_clients/ourClientsLIst.php?msg={$massage}&acls={$alertCls} ");



?>