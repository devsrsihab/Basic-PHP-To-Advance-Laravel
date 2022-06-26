<?php

require "../controller/dbConfigue.php";
// this is for data update
      
$projects_id = $_GET['id'];

$projectsDeletedQry = "UPDATE our_projects SET active_status= 0 WHERE id = '{$projects_id}' ";

$projectsDeleted = mysqli_query($conn, $projectsDeletedQry)  ;

if ($projectsDeleted) {
$massage = "Deleted Successfully";
$alertCls = "alert-success";

} else {
$massage = "Deleted Failed";
$alertCls = "alert-danger";
}
//  Redirection
header ("location:  ../our_project/projectsLIst.php?msg={$massage}&acls={$alertCls}");


?>