<?php 

// database connection Qury
require 'dbConfigue.php';

        // this is for services Create 
        if (isset($_POST['CreateData'])) {

            $serviceName    = $_POST['serviceName'];
            $serviceDetails = $_POST['serviceDetails'];
            $iconName       = $_POST['iconName'];
            $designStatus   = $_POST['designStatus'];


        if ( empty($serviceName ||  $serviceDetails || $iconName || $designStatus)   ) {
        $massage = "All Field is Required";
        $alertCls = "alert-danger";
        } else {
        $insertQry = "INSERT INTO services (service_name, service_details, icon_name ,design_status) VALUES ('{$serviceName}', '{$serviceDetails}', '{$iconName}', '{$designStatus}' ) ";
        // 
        $servicesInsert = mysqli_query($conn, $insertQry)  ;

        if ($servicesInsert) {
        $massage = "Insert Successfully";
        $alertCls = "alert-success";
        } else {
        $massage = "Insert Failed";
        $alertCls = "alert-danger";
        }

        }
        //  Redirection
        header ("location: ../services/servicesCreate.php?msg={$massage}&acls={$alertCls} ");

   }
            // this is for banner update
            if (isset($_POST['UpdateData'])) {
                
                $service_id      = $_POST['services_id'];
                $serviceName     = $_POST['serviceName'];
                $servicesDetails = $_POST['servicesDetails'];
                $iconName        = $_POST['iconName'];
                $designStatus    = $_POST['designStatus'];

            if ( empty($serviceName ||  $servicesDetails || $iconName || $designStatus)   ) {
            $massage = "All Field is Required";
            $alertCls = "alert-danger";
            } else {
            $servicesUpdateQry = "UPDATE services SET service_name='{$serviceName}',service_details='{$servicesDetails}',icon_name='{$iconName}',design_status='{$designStatus}' WHERE id = '{$service_id}' ";

            $bannerInsert = mysqli_query($conn, $servicesUpdateQry)  ;

            if ($bannerInsert) {
            $massage = "Insert Successfully";
            $alertCls = "alert-success";
            } else {
            $massage = "Insert Failed";
            $alertCls = "alert-danger";
            }

            }

            //  Redirection
            header ("location: ../services/servicesUpdate.php?msg={$massage}&acls={$alertCls}&id={$service_id } ");

            }



?>

