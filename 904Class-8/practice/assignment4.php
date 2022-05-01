<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        .card-body {
            background-color: #eee;
        }

        .bto {
            background-image: url('img/insm.svg') !important;
        }

        input.button {
            color: white;
            padding: 11px 37px;
            background: #336699;
            font-size: 1.2rem;
            text-transform: uppercase;
            line-height: 1;
            outline: none;
            border: none;
            margin-left: 14.5rem;
            margin-top: 1rem;
        }
    </style>
</head>

<body>
    <?php
error_reporting(0);
//========assignment 4 start=============
$pd = date("d"); // present day
$pm = date("m"); // present month
$py = date("Y"); // present year
//========form date compare formula================
// $d = $_POST['d'];
// $m = $_POST['m'];
// $y = $_POST['y'];
// $dob = $d.".".$m.".".$y;
//==========function start==================
function srAgeCalc($final_dob){
$bday = new DateTime($final_dob); // Your date of birth
$today = new Datetime(date('m.d.y'));
$diff = $today->diff($bday);
return sprintf('%d years, %d month, %d days', $diff->y, $diff->m, $diff->d);
};

echo srAgeCalc("2.2.1998");
//========assignment 4 end=============
?>
die(not run now);
    <!-- ==================Assignment 4 start======================= -->
    <div class="container mt-5">
        <h2 class="text-center">Class-8 Assignment-4</h2>
        <!-- result section start -->
        <div class="card">
            <div class="card-body">
                <div class="row g-0">
                    <h3 class="card-title text-success ">Result</h3>
                    <div class="h4 col-md-2 text-dark ">Your Age:</div>
                    <div class="h5 pt-1 col-md-6 text-start text-success  ">
                        <?php echo srAgeCalc($dob);?></div>
                </div>
            </div>
        </div>
        <!-- result section end -->
        <!-- form header start -->
        <div class="card">
            <img class="card-img-top" src="img/insm.svg">
        </div>
        <!-- form header end -->
        <!-- form body satrt -->
        <div class="card">
            <div class="card-body">
                <!-- form start -->
                <form action="" method="post" name="">
                    <!-- form 1st field start -->
                    <div class="form-group row ">
                        <label class="col-sm-3 text-end pt-1 control-label" for="">Your Date of Birth</label>
                        <div class="col-md-2">
                            <input name="d" type="text" class="form-control" placeholder="dd">
                        </div>
                        <div class="col-md-2">
                            <input name="m" type="text" class="form-control" placeholder="mm">
                        </div>
                        <div class="col-md-2">
                            <input name="y" type="text" class="form-control" placeholder="yy">
                        </div>
                    </div>
                    <!-- form 1st field end -->
                    <!-- form 2nd field start -->
                    <div class="form-group row mt-2">
                        <label class="col-sm-3 text-end pt-1 control-label" for="">Your Date of Birth</label>
                        <div class="col-md-2">
                            <input name="pd" type="text" readonly="readonly" class="form-control"
                                value="<?php   echo $pd  ?>">
                        </div>
                        <div class="col-md-2">
                            <input name="pm" type="text" readonly class="form-control" placeholder="<?php echo $pm ?>">
                        </div>
                        <div class="col-md-2">
                            <input name="py" type="text" readonly="readonly" class="form-control"
                                placeholder="<?php echo $py ?>">
                        </div>
                    </div>
                    <!-- form 2nd field end -->
                    <!-- form button start -->
                    <div class=" form-group  row">
                        <div class=" d-flex ">
                            <input class="button " name="submit" type="submit" class="form-control" value="submit">
                        </div>
                    </div>
                    <!-- form button end -->


                </form>
             <!-- form end -->
            </div>
        </div>
        <!-- form body end -->
    </div>
    <!-- ==================Assignment 4 end ======================= -->

</body>

</html>