<DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Assignment of Class 8</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    </head>
    <style>
        /* assignment 3 style */
        f {
            color: red;
        }

        b {
            font-weight: 600;
        }

        /* assignment 4 style */
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

        /* assignment 4 style */
        high {
            color: #ff5151;
            font-weight: 700;
        }

        overw {
            color: #ffd455;
            font-weight: 700;
        }

        thinw {
            color: #7eedff;
            font-weight: 700;
        }

        normalw {
            color: #8eff8c;
            font-weight: 700;
        }

        tr.bmi-sms-row {
            background: #3c3c3c;
        }
    </style>

    <body>

        <?php
        //===========Assignment 1 code===================
        //disabled error messages
        // error_reporting(0);

        function ageDeff1($storage_age1)
        {
            if ($storage_age1 == 13) {
                return "Hey, You are a little children";
            } elseif ($storage_age1 == 19) {
                return "Hey, You are a teenagers";
            } elseif ($storage_age1 == 35) {
                return "Hey, You are a Young Man";
            } elseif ($storage_age1 == 50) {
                return "Hey, You are a Middle Ager";
            } elseif ($storage_age1 == 80) {
                return "Hey, You are a Old Man";
            } elseif ($storage_age1 == 100) {
                return "Hey, You are a So Old ";
            }
        }






       
        function ageDeff2($storage_age2)
        {
            $user_age2 = $storage_age2;
            if ($user_age2 >= 5 && $user_age2 <= 13) {
                return "Hey, You are a little children";
            } elseif ($user_age2 >= 14 && $user_age2 <= 19) {
                return "Hey, You are a teenagers";
            } elseif ($user_age2 >= 20 && $user_age2 <= 35) {
                return "Hey, You are a Young Man";
            } elseif ($user_age2 >= 36 && $user_age2 <= 50) {
                return "Hey, You are a Middle Ager";
            } elseif ($user_age2 >= 51 && $user_age2 <= 80) {
                return "Hey, You are a Old Man";
            } elseif ($user_age2 >= 81 && $user_age2 <= 100) {
                return "Hey, You are a So Old ";
            }
        }


        ?>


        <!-- ==================Assignment 1 start===================== -->
        <!-- ===============1st way start===============  -->
        <div class="container py-3 mb-4">
            <h2 class="text-center mb-5">Assignment 1</h2>
            <h4 class=" text-center" for="">Choose You Age</h4>
            <h5 class="text-center text-success">...

                <?php
                if (isset($_POST['submit'])) {
                    $age1 = $_POST['ageDeff1'];
                    echo ageDeff1($age1);
                    
                } 
                
                ?>...</h5>
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

            <!-- ===============1st way end===============  -->
            <!-- ===============2nd way start===============  -->
            <h2 class="page-header text-center text-danger">Another</h2>
            <div class="row mt-2 justify-content-center">
                <div class="col-12">
                    <h4 class=" text-center" for="">Choose You Age</h4>
                    <h5 class="text-center text-success">...
                        <?php 
                        if (isset($_POST['submited'])) {
                            $age2 = $_POST['ageDeff2'];
                
                            echo ageDeff2($age2);
                        } 
                        ?>...</h5>
                </div>
                <div class="col-8">

                    <form action="" method="post">
                        <div class="form-group">

                            <div class="col-md-8">
                                <input type="text" name="ageDeff2" class="form-control" placeholder="Type Your Age">
                            </div>

                        </div>
                        <div class=" form-group  ">
                            <div class=" d-flex col-md-8 mt-2">
                                <input class="btn btn-primary " name="submited" type="submit" class="form-control" value="submit">
                            </div>

                        </div>
                    </form>
                </div>



            </div>
        </div>
        <!-- ===============2nd way end===============  -->

        <!-- ==================Assignment 1 end======================= -->
       