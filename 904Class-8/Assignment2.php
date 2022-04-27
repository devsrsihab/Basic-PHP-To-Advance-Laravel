<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <style>

    </style>

</head>

<body>
    <?php 
        //disabled error messages
        error_reporting(0);
        $height = $_POST['height'];
        $lenth  = $_POST['lenth'];
        $value  = $_POST['value'];
        $width  = $_POST['width'];
        $base   = $_POST['base'];
        //convert string to integer
        $height = intval($height);
        $lenth = intval($lenth);
        $value = intval($value);
        $width = intval($width);
        $base = intval($base);
     
        
        function area_rectangle($width,$lenth){

        //   Rectangle formula, A=wl 
          $are_rectangle = $width*$lenth;
          return $are_rectangle;
        }

        function area_triangle($base,$height){

        // Triangle formula, A= (base*height)/2
        $area_triangle = ($base*$height)/2;
        return $area_triangle;
    
        }

        function area_square($value){

            // Square formula, A=a2
            $area_square = $value * $value;
            return $area_square;

    
        }


    //    




    ?>

    <!-- ==================Assignment 2 start======================= -->
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-4">
                <div class="row align-items-center">
                    <div class="col-md-8 px-0">
                        <h5>Squre Calculator</h5>

                    </div>
                    <div class="col-md-4 px-0">
                        <!-- result section -->
                        <h4> <?php echo area_square($value); ?> </h4>

                    </div>
                </div>
                <div class="row ">
                    <!-- user input section -->
                    <div class="col px-0">
                        <form action="" method="post">
                            <div class="form-row">
                                <div class="col" id="value">
                                    <label class=" form-label h6" for="value">Value</label>
                                    <input type="text" id="value" name="value" class="form-control mt-2"
                                        placeholder="Value" required>
                                </div>
                            </div>
                            <div class="row px-3 py-3">
                                <input class="btn btn-primary" type="submit" value="Submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row align-items-center">
                    <div class="col-md-8 px-0">
                        <h5>Rectangle Calculator</h5>

                    </div>
                    <div class="col-md-4 px-0">
                        <!-- result section -->
                        <h4> <?php echo area_rectangle($width,$lenth); ?> </h4>

                    </div>
                </div>
                <div class="row ">
                    <!-- user input section -->
                    <div class="col px-0">
                        <form action="" method="post">
                            <div class="form-row">
                                <div class="col" id="width">
                                    <label class=" form-label h6" for="width">Width</label>
                                    <input type="text" id="width" name="width" class="form-control mt-2"
                                        placeholder="width" required>
                                </div>
                                <div class="col" id="lenth">
                                    <label class=" form-label h6" for="lenth">Lenth</label>
                                    <input type="text" id="lenth" name="lenth" class="form-control mt-2"
                                        placeholder="lenth" required>
                                </div>
                            </div>
                            <div class="row px-3 py-3">
                                <input class="btn btn-primary" type="submit" value="Submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row align-items-center">
                    <div class="col-md-8 px-0">
                        <h5>Triangle Calculator</h5>

                    </div>
                    <div class="col-md-4 px-0">
                        <!-- result section -->
                        <h4> <?php echo area_triangle($base,$height); ?> </h4>

                    </div>
                </div>
                <div class="row ">
                    <!-- user input section -->
                    <div class="col px-0">
                        <form action="" method="post">
                            <div class="form-row">
                                <div class="col" id="height">
                                    <label class=" form-label h6" for="height">Height</label>
                                    <input type="text" id="height" name="height" class="form-control mt-2"
                                        placeholder="height" required>
                                </div>
                                <div class="col" id="base">
                                    <label class=" form-label h6" for="value">Base</label>
                                    <input type="text" id="base" name="base" class="form-control mt-2"
                                        placeholder="base" required>
                                </div>
                            </div>
                            <div class="row px-3 py-3">
                                <input class="btn btn-primary" type="submit" value="Submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <!-- ==================Assignment 2 end======================= -->







</body>

</html>