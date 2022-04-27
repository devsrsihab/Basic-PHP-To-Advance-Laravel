<!DOCTYPE html>
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
       f {color: red;}
       b {font-weight: 600;}

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

//===========Assignment 2 code===================
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

//===========Assignment 3 code===================
$s_name = $_POST['sname'];
    $ban    = $_POST['ban'];
    $eng    = $_POST['eng'];
    $mat    = $_POST['mat'];
    $sci    = $_POST['sci'];
    $phy    = $_POST['phy'];
    $che    = $_POST['che'];
    $total_mark = $ban + $eng + $mat + $sci + $phy + $che;
    $avgMark = $total_mark/6;
    // $all_sub_val = $ban . $eng  . $mat  . $sci . $phy  . $che;
    // $avgMark = $total_mark/6;
    // echo $avgMark . "<br>";

   function exam_result($final_val){

    $final_total_mark = array_sum($final_val);
    $avgmark = $final_total_mark/6;

   if($_POST['ban'] < 33 || $_POST['eng'] < 33 || $_POST['mat'] < 33 || $_POST['sci'] < 33 || $_POST['phy'] < 33 || $_POST['che'] < 33 )
    {
       return " <f> Your Great F </f> ";
    }

   elseif ($avgmark >= 80 && $avgmark <= 100) {
      return " Your Great A+ ";
   }
   elseif($avgmark >= 70 && $avgmark <= 79)
   {
      return " Your Great A ";
   }
   elseif($avgmark >= 60 && $avgmark <= 69)
   {
      return " Your Great A- ";
   }
   elseif($avgmark >= 50 && $avgmark <= 59)
   {
      return " Your Great B ";
   }
   elseif($avgmark >= 33 && $avgmark <= 49)
   {
      return " Your Great C ";
   }
   elseif($avgmark >= 1 && $avgmark <= 32)
   {
      return " Your Great F ";
   }
   else {
       return "Please input Currect Value";
   }


}

//===========Assignment 4 code===================
$pd = date("d"); // present day
$pm = date("m"); // present month
$py = date("Y"); // present year
//========form date compare formula================
$d = $_POST['d'];
$m = $_POST['m'];
$y = $_POST['y'];
$dob = $d.".".$m.".".$y;
//==========function start==================
function srAgeCalc($final_dob){
$bday = new DateTime($final_dob); // Your date of birth
$today = new Datetime(date('m.d.y'));
$diff = $today->diff($bday);
return sprintf('%d years, %d month, %d days', $diff->y, $diff->m, $diff->d);
};

//===========Assignment 5 code===================
//bmi formula kg/m^2 or kg/pow(m,2) 
//bmi formula as my var $weight/$height^2
// 1 inch = 0.0254 m
// 1 feet = 12 inch
$feet = $_POST['feet'];
$inch = $_POST['inch'];
$weight = $_POST['weight'];
$weight = intval($weight);
$height = $feet. ".". $inch;
$height = floatval($height);
$height_to_inch = $height*12;
$height_to_meter = $height_to_inch*0.0254;
$height_to_squar = pow($height_to_meter, 2);
$height_to_squar2 = floatval($height_to_squar);
$bmi = $weight+$height_to_squar;

//bmi function
function bmi($bmi){
 return $bmi;
}
//bmiHeight function
function bmHeight($height){
 return $height;
}
//bmiWeight function
function bmiWeight($weight){
 return $weight;
}
//sms according bmi function
function bmiSms($bmiS){
    if (bmi($bmiS)< 18) {
        return "<thinw> Your are thin </thinw>";
    }
    elseif(bmi($bmiS)> 18 && bmi($bmiS) < 25){
        return "<normalw> Your are Normal </normalw>";
    }
    elseif(bmi($bmiS)> 25 && bmi($bmiS) < 30){
        return "<overw> Your are Over Weight </overw>";
    }
    elseif(bmi($bmiS)> 31 && bmi($bmiS) < 35){
        return "<high> Your are Obesity </high>";
    }
    elseif(bmi($bmiS)> 36 && bmi($bmiS) < 40){
        return "<high> Your are Obesity (Hight Step-1)</high> ";
    }
    elseif(bmi($bmiS) >= 41){
        return "<high> Your are Obesity (Hight Step-2) </high> ";
    }
}
 
//===========Assignment 6 code===================

$ConverTo = $_POST['to'];
$amount = $_POST['amount'];
//convert function
function CurrConvert($amount,$ConverTo){

if ($_POST['to']=='USD') {
    return $amount." ".$ConverTo." To ". " = ". number_format($amount*86.82)." ". " Taka";
} 
elseif($_POST['to']=='EUR') {
    return $amount." ".$ConverTo." To ". " = ".($amount*91.81) ." ". " Taka";
}
elseif($_POST['to']=='CAD') {
    return $amount." ".$ConverTo." To ". " = ".number_format($amount*67.23 )  ." ". " Taka";
}
elseif($_POST['to']=='INR') {
    return $amount." ".$ConverTo." To ". " = ".number_format($amount*1.12  )  ." ". " Taka";
}
elseif($_POST['to']=='GBP') {
    return $amount." ".$ConverTo." To ". " = ".number_format($amount*108.34)  ." ". " Taka";
}
elseif($_POST['to']=='SGD') {
    return $amount." ".$ConverTo." To ". " = ".number_format($amount*62.48 )  ." ". " Taka";
}
elseif($_POST['to']=='KWD') {
    return $amount." ".$ConverTo." To ". " = ".number_format($amount*280.51)  ." ". " Taka";
}
else{
    return "Please Select the Right Currency ";
}
}

?>

    <!-- ==================Assignment 1 start===================== -->
    <!-- ===============1st way start===============  -->
    <div class="container py-3 mb-4">
        <h2 class="text-center mb-5">Assignment 1</h2>
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

        <!-- ===============1st way end===============  -->
        <!-- ===============2nd way start===============  -->
        <h2 class="page-header text-center text-danger">Another</h2>
        <div class="row mt-2 justify-content-center">
            <div class="col-12">
                <h4 class=" text-center" for="">Choose You Age</h4>
                <h5 class="text-center text-success">...<?php echo ageDeff2($storage_age2);?>...</h5>
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
                            <input class="btn btn-primary " name="submit" type="submit" class="form-control"
                                value="submit">
                        </div>

                    </div>
                </form>
            </div>



        </div>
        <!-- ===============2nd way end===============  -->

    </div>
    <!-- ===============1st way start===============  -->
    <!-- ==================Assignment 1 end======================= -->

    <!-- ==================Assignment 2 start======================= -->
    <div class="container py-3 mb-4">
        <h2 class="text-center mb-5">Assignment 2</h2>
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

    <!-- ==================Assignment 3 start======================= -->
    <!-- // GPA function for result publishing -->
    <div class="container py-3 mb-4">
        <h2 class="text-center ">Assignment 3</h2>
        <div class="row">
            <div class="col-md-6">
                <table class=" m-auto table table-striped">
                    <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">Subject Name</th>
                            <th scope="col">Subject Mark</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Bangla</td>
                            <td><?php echo $ban; ?></td>

                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>English</td>
                            <td><?php echo $eng; ?></td>

                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Math</td>
                            <td><?php echo $mat; ?></td>

                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>Science</td>
                            <td><?php echo $sci; ?></td>

                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td>Physics</td>
                            <td><?php echo $phy; ?></td>

                        </tr>
                        <tr>
                            <th scope="row">6</th>
                            <td>Chemestry</td>
                            <td><?php echo $che; ?></td>

                        </tr>
                        <tr class="table-info">
                            <th scope="row">7</th>
                            <td><b>Student Name</b></td>
                            <td><b><?php echo $s_name;?></b></td>

                        </tr>
                        <tr class="table-warning">
                            <th scope="row">8</th>
                            <td><b>Total Mark</b></td>
                            <td><b><b><?php echo $total_mark." Out of 600"; ?></b></td>

                        </tr>
                        <tr class="table-success">
                            <th scope="row">9</th>
                            <td><b>Avrage Mark</b></td>
                            <td><b><b><?php echo floor($avgMark)."%"; ?></b></td>

                        </tr>
                        <tr class="table-info ">
                            <th scope="row">10</th>
                            <td><b>Your Great </b></td>
                            <td><b><b><?php  echo exam_result([$_POST['ban'],$_POST['eng'],$_POST['mat'],$_POST['sci'],$_POST['phy'],$_POST['che'] ]); ?></b>
                            </td>

                        </tr>
                    </tbody>
                </table>
                <div class="row mt-3">
                    <div class="col-md-10  ">
                        <!-- result section -->
                        <div class="card">
                            <div class="card-heading">
                                <h4 class="text-success"><span class="text-dark">Your
                                        Result:</span><?php echo exam_result([$_POST['ban'],$_POST['eng'],$_POST['mat'],$_POST['sci'],$_POST['phy'],$_POST['che'] ]);?>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-md-6 mt-5">

                <form action="" method="post">
                    <div class="row px-3">
                        <div class="col-md-8">
                            <!-- 1st sub -->
                            <div class="form-group pb-3">
                                <label class=" control-label h5 " for="sname">Your Full Name</label>
                                <input class="form-control " id="sname" type="text" name="sname"
                                    placeholder="Type Your Full Name" required>
                            </div>
                        </div>
                    </div>
                    <div class="row px-3">
                        <!-- col-md-4 start -->
                        <div class="col-md-4">
                            <!-- 1st sub -->
                            <div class="form-group pb-3">
                                <label class=" control-label h5 " for="sub1">Bangla</label>
                                <input class="form-control " id="sub1" type="text" name="ban"
                                    placeholder="Type Your Subject Mark" required>
                            </div>
                            <!-- 2nd sub -->
                            <div class="form-group pb-3">
                                <label class=" control-label h5 " for="sub2">English</label>
                                <input class="form-control " id="sub2" type="text" name="eng"
                                    placeholder="Type Your Subject Mark" required>
                            </div>
                            <!-- 3rd sub -->
                            <div class="form-group pb-3">
                                <label class=" control-label h5 " for="sub3">Math</label>
                                <input class="form-control " id="sub3" type="text" name="mat"
                                    placeholder="Type Your Subject Mark" required>
                            </div>
                        </div>
                        <!-- col-md-4 end -->
                        <!-- col-md-4 start -->
                        <div class="col-md-4">
                            <!-- 4th sub -->
                            <div class="form-group pb-3">
                                <label class=" control-label h5 " for="sub4">Science</label>
                                <input class="form-control " id="sub4" type="text" name="sci"
                                    placeholder="Type Your Subject Mark" required>
                            </div>
                            <!-- 5th sub -->
                            <div class="form-group pb-3">
                                <label class=" control-label h5 " for="sub5">Physics</label>
                                <input class="form-control " id="sub5" type="text" name="phy"
                                    placeholder="Type Your Subject Mark" required>
                            </div>
                            <!-- 6th sub -->
                            <div class="form-group pb-3">
                                <label class=" control-label h5 " for="sub6">Chemistry</label>
                                <input class="form-control " id="sub6" type="text" name="che"
                                    placeholder="Type Your Subject Mark" required>
                            </div>
                        </div>
                        <!-- col-md-4 end -->

                    </div>
                    <div class="row">
                        <div class="col-md-3 px-4">
                            <!-- button -->
                            <div class="form-group mt-3 ">
                                <input class="btn btn-primary mb-5 " id="sub7" type="submit" value="Submit"
                                    name="H_math">
                            </div>

                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
    <!-- ==================Assignment 3 end======================= -->

    <!-- ==================Assignment 4 start======================= -->
    <div class="container py-3 mb-4">
        <h2 class="text-center ">Assignment-4</h2>
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
    <!-- ==================Assignment 5 start ======================= -->
    <div class="container py-3 mb-4">
        <h2 class="text-center ">Assignment-5</h2>
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
                                <td><?php echo bmiWeight($height)." ft"; ?></td>
                                <td><?php echo bmiWeight($weight)." kg"; ?></td>
                                <td><?php echo ceil(bmi($bmi)); ?></td>
                            </tr>
                            <tr class="bmi-sms-row">
                                <td class="w-100 ">
                                    <tn><?php echo bmiSms(bmi($bmi));?></tn>
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
                        <label class="h6 px-2" for="height">Type Height</label>
                        <div class="col-md-3 px-1">
                            <div class="form-group">
                                <input type="text" id="height" name="feet" class="form-control" placeholder="Type Feet"
                                    required>
                            </div>
                        </div>
                        <div class="col-md-3 px-1">
                            <div class="form-group">
                                <input type="text" name="inch" class="form-control" placeholder="Type inch" required>
                            </div>
                        </div>
                    </div>
                    <div class="row g-0 align-items-center">
                        <label class="h6 px-2" for="weight">Type Weight</label>
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
    <!-- ==================Assignment 5 end ======================= -->
    <!-- ==================Assignment 6 start ======================= -->
    <div class="container py-3 mb-4">
        <div class="text-center mt-5 section=heading">
            <h2>Assignment 6</h2>
        </div>
        <div class="row align-items-center justify-content-center pt-3">
            <!-- result col -->
            <div class="col-md-4 ">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col ">Result</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <h6><?php  echo $ConverTo." To Taka = ";  ?></h6>
                                <h5 class="text-success"><?php  echo CurrConvert($amount,$ConverTo); ?></h5>
                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>
            <div class="col-md-6">
                <form action="" method="post">
                    <div class="form-row">
                        <div class="col-4">
                            <label class="h6 form-label" for="amount">Amount</label>
                            <input id="amount" name="amount" type="text" class="form-control" placeholder="Enter Amount"
                                required>
                        </div>
                        <div class="col-4">
                            <label class="h6 form-label" for="to">To</label>
                            <select class="form-control" name="to" id="to" required>
                                <option value="USD" selected>Select</option>
                                <option value="USD" >USD- US Dollar</option>
                                <option value="EUR">EUR- Euro</option>
                                <option value="CAD">CAD- Canadian Dollar</option>
                                <option value="INR">INR- Indian Rupee</option>
                                <option value="GBP">GBP- British Pound</option>
                                <option value="SGD">SGD- Singapore Dollar</option>
                                <option value="KWD">KWD- Kuwaiti Dinar</option>

                            </select>
                        </div>

                        <div class="col-4">
                            <label class="h6 form-label" for="from">BDT- Taka</label>
                            <input disabled id="from" name="from" src="img/bdt.svg" type="image"
                                class="form-control w-25 px-0 text-left justify-content-start" placeholder="From"
                                required>
                        </div>

                        <div class="col-2 mt-3">
                            <input name="submit" class="btn btn-primary" type="submit" value="Convert">
                        </div>

                    </div>
                </form>
            </div>
        </div>

    </div>

    <!-- ==================Assignment 6 end ======================= -->
</body>

</html>