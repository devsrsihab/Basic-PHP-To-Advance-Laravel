<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    
<?php
//bmi formula kg/m^2 or kg/pow(m,2)

$height = $_POST['height']; //height from input
$height_in_meter = $height*0.3048; // height in meter 
$weight = $_POST['weight']; //tnput from input 
$bmi = $weight+($height_in_meter*$height_in_meter);
$bmi = number_format($bmi,1);
echo $bmi;



?>

<div class="container ">
        <h2 claass="text-center">Assignment 5</h2>
        <form action="" method="post">
            <div class="row justify-content-center mt-5">

                <div class="col-md-5">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Height</th>
                                <th scope="col">Weight</th>
                                <th scope="col">BMI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php  ?></td>
                                <td><?php  ?></td>
                                <td><?php  ?></td>
                            </tr>
                            <tr class="bmi-sms-row">
                                <td class="w-100 ">
                                    <tn><?php ?></tn>
                                </td>
                                <td class="w-100 ">
                                    <tn></tn>
                                </td>
                                <td class="w-100 ">
                                    <tn></tn>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-6">
                    <div class="row g-0 align-items-center">
                        <label class="h6 mb-3" for="height">Type Height</label>
                        <div class="col-md-6 px-1">
                            <div class="form-group">
                                <input type="text" id="height" name="height" class="form-control" placeholder="Type Feet"
                                    required>
                            </div>
                        </div>
                  
                    </div>
                    <div class="row g-0 align-items-center">
                        <label class="h6 mb-3" for="weight">Type Weight</label>
                        <div class="col-md-6 px-1">
                            <div class="form-group">
                                <input type="text" id="weight" name="weight" class="form-control"
                                    placeholder="Type You Weight" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 px-1">
                            <div class="form-group">
                                <input type="submit" value="Submit" class="btn btn-primary">
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </form>
    </div>





</body>
</html>