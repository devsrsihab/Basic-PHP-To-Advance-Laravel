<?php 
// database connection Qury
  require 'dbConfigue.php';
// this is for client Create 
if (isset($_POST['CreateData'])) {


    // for image 
    if(isset($_FILES['client_image'])){
      $uploadStatus = false;
      //storage the main super global variable in mainarrimg
      $mainArrImg = $_FILES['client_image'];
      // file name
      $file_name = $mainArrImg['name'];
      // file temp path name
      $file_temp_name = $mainArrImg['tmp_name'];
      //file file_size
      $file_size = $mainArrImg['size'];

      // extract the file extentions 
      $file_Arr = explode('.', $file_name);
      // get the file extention just 
      $file_extention = strtolower(end($file_Arr));
      // valid file extentions
      $valid_file_extention =['png', 'jpeg', 'jpg'];
      // random file name generated here
      $random_file_name = time().'.'.$file_extention;

      // condition for valid extetion and upload files
      if (in_array($file_extention, $valid_file_extention)) {
          move_uploaded_file($file_temp_name, '../uploads/clients/' .$random_file_name);
          $uploadStatus = true;
      } else {
         $massage = $file_extention.' is Not Supported';
      }
      $massage = "File Not Found";    
    
    }

        $clients_name   = $_POST['clients_name'];
        $designation_id = $_POST['designation_id'];
        $client_image   = $_POST['client_image'];
        $client_review  = $_POST['client_review'];

 if ( empty($clients_name) ||  empty($designation_id)  || empty($client_review) ||   $uploadStatus== false   ) {
    $massage = "All Field is Required";
    $alertCls = "alert-danger";
 } else {
   $isertQry = "INSERT INTO our_clients (clients_name,designation_id,client_image,client_review) VALUES ('{$clients_name}', '{$designation_id}', '{$random_file_name}', '{$client_review}' ) ";
   $clientInsert = mysqli_query($conn, $isertQry)  ;

   if ($clientInsert) {
    $massage = "Insert Successfully";
    $alertCls = "alert-success";
   } else {
    $massage = "Insert Failed";
    $alertCls = "alert-danger";
   }
   
 }
//  Redirection
header ("location: ../our_clients/ourClientsCreate.php?msg={$massage}&acls={$alertCls} ");

}


// this is for client update
if (isset($_POST['UpdateData'])) {
  


      
        $client_id      = $_POST['client_id'];
        $clients_name   = $_POST['clients_name'];
        $designation_id = $_POST['designation_id'];
        $client_image   = $_POST['client_image'];
        $client_review  = $_POST['client_review'];

 if ( empty($clients_name) || empty($designation_id) || empty($client_review)   ) {
    $massage = "All Field is Required";
    $alertCls = "alert-danger";
 } else {
    $banerUpdateQry = "UPDATE our_clients SET clients_name='{$clients_name}',designation_id='{$designation_id}',client_image='{$client_image}',client_review='{$client_review}' WHERE id = '{$client_id}' ";

   $clientInsert = mysqli_query($conn, $banerUpdateQry)  ;

   if ($clientInsert) {
    $massage = "Insert Successfully";
    $alertCls = "alert-success";
   } else {
    $massage = "Insert Failed";
    $alertCls = "alert-danger";
   }
   
 }

//  Redirection
header ("location: ../our_clients/ourClientsUpdate.php?msg={$massage}&acls={$alertCls}&id={$client_id } ");

}


