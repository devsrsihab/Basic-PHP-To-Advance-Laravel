<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
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
</head>
<?php
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
// $bmi = $weight/$height_to_squar."\n";
echo $height."<br>";
echo $weight."<br>";
$height2 = $height_to_meter*$height_to_meter;
echo $height2."<br>";
$bmi = $weight/$height2;
echo $bmi."<br>";


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
 






?>

<body>
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
                    <div class="row g-0">
                        <label class="h6" for="height">Type Height</label>
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
                    <div class="row g-0">
                        <label class="h6" for="weight">Type Weight</label>
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