<?php

require "../controller/dbConfigue.php";
// this is for data update
      
$baner_id = $_GET['id'];

$banerDeletedQry = "UPDATE banner SET active_status='{$activeStatus}' WHERE id = '{$baner_id}' ";

$bannerInsert = mysqli_query($conn, $banerDeletedQry)  ;

if ($bannerInsert) {
$massage = "Deleted Successfully";
$alertCls = "alert-success";

} else {
$massage = "Deleted Failed";
$alertCls = "alert-danger";
}



//  Redirection
header ("location: ../banner/bannerList.php?msg={$massage}&acls={$alertCls} ");



?>