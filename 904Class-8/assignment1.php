<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <?php 
    error_reporting(0);
    $storage_age1 = $_POST['ageDeff1'];

function ageDeff1($storage_age1){
    $user_age1 = $storage_age1;
    if ($user_age1 == 13) {
         return "Hey, You are a little children";
     }
     elseif($user_age1 == 19) {
         return "Hey, You are a teenagers";
     }
     elseif($user_age1 == 35) {
         return "Hey, You are a Young Man";
     }
     elseif($user_age1 == 50) {
         return "Hey, You are a Middle Ager";
     }
     elseif($user_age1 == 80) {
         return "Hey, You are a Old Man";
     }
     elseif($user_age1 == 100) {
         return "Hey, You are a So Old ";
     }
     
};
  $storage_age2 = $_POST['ageDeff2'];
function ageDeff2($storage_age2){
    $user_age2 = $storage_age2;
    if ($user_age2 >= 5 && $user_age2 <= 13){
         return "Hey, You are a little children";
     }
     elseif($user_age2 >= 14 && $user_age2 <= 19) {
         return "Hey, You are a teenagers";
     }
     elseif($user_age2 >= 20 && $user_age2 <= 35) {
         return "Hey, You are a Young Man";
     }
     elseif($user_age2 >= 36 && $user_age2 <= 50) {
         return "Hey, You are a Middle Ager";
     }
     elseif($user_age2 >= 51 && $user_age2 <= 80) {
         return "Hey, You are a Old Man";
     }
     elseif($user_age2 >= 81 && $user_age2 <= 100) {
         return "Hey, You are a So Old ";
     }
     
}

    ?>


<!-- ===============1st way start===============  -->
    <div class="container mt-3">
        <h4 class=" text-center" for="">Choose You Age</h4>
        <h5 class="text-center text-success">...<?php echo ageDeff1($storage_age1);?>...</h5>
        <form action="" method="post">
            <div class="form-group row">
                <div class="col-sm-2">
                </div>
                <div class="col-md-8">

                    <select class="form-control" name="ageDeff1" id="">
                        <option value="0">Select You Age</option>
                        <option value="13">5-13</option>
                        <option value="19">14-19</option>
                        <option value="35">20-35</option>
                        <option value="50">36-50</option>
                        <option value="80">51-80</option>
                        <option value="100">81-100</option>
                    </select>
                </div>
                <div class="col-sm-2">

                </div>
            </div>
            <div class=" form-group  row">
                <div class="col-sm-2">

                </div>
                <div class=" d-flex col-md-8 mt-2">
                    <input class="btn btn-primary " name="submit" type="submit" class="form-control" value="submit">
                </div>
                <div class="col-sm-2">

                </div>
            </div>
        </form>
    </div>
<!-- ===============1st way end===============  -->
<!-- ===============3nd way start===============  -->
    <h2 class="page-header text-center text-danger">Another</h2>
    <div class="container mt-2">
        <h4 class=" text-center" for="">Choose You Age</h4>
        <h5 class="text-center text-success">...<?php echo ageDeff2($storage_age2);?>...</h5>
        <form action="" method="post">
            <div class="form-group row">
                <div class="col-sm-2">
                </div>
                <div class="col-md-8">
           <input type="text"  name="ageDeff2" class="form-control" placeholder="Type Your Age">
                </div>
                <div class="col-sm-2">

                </div>
            </div>
            <div class=" form-group  row">
                <div class="col-sm-2">

                </div>
                <div class=" d-flex col-md-8 mt-2">
                    <input class="btn btn-primary " name="submit" type="submit" class="form-control" value="submit">
                </div>
                <div class="col-sm-2">

                </div>
            </div>
        </form>



    </div>
<!-- ===============3nd way end===============  -->
</body>

</html>