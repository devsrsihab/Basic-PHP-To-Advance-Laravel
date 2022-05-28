<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
normalw {
    color: green;
    font-weight: 700;
    font-size: 18px;
    text-transform: capitalize;
          }
thinw {
    color: #d0b700;
    font-weight: 700;
    font-size: 18px;
    text-transform: capitalize;
}
high {
    font-size: 18px;
    color: red;
    font-weight: 700;
    text-transform: capitalize;
}
overw {
    text-transform: capitalize;
    font-size: 18px;
    font-weight: 700;
    color: #fea932;
}
    </style>
</head>

<body>

    <?php
//bmi formula kg/m^2 or kg/pow(m,2)

error_reporting(0);
if(isset($_POST['submit'])){
    $height = $_POST['height']; //height from input
    $height_in_meter = $height * 0.3048; // height in meter 
    $weight = $_POST['weight']; //tnput from input 
    $bmi = $weight / ($height_in_meter * $height_in_meter);
    $bmi = number_format($bmi,1);
  
}
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
function bmiSms($bmis){
    if ($bmis > 0 && $bmis < 18) {
        return "<thinw> Your are thin </thinw>";
    }
    elseif($bmis > 18 && $bmis < 25){
        return "<normalw> Your are Normal </normalw>";
    }
    elseif($bmis > 25 && $bmis < 30){
        return "<overw> Your are Over Weight </overw>";
    }
    elseif($bmis >  31 && $bmis < 35){
        return "<high> Your are Obesity </high>";
    }
    elseif($bmis > 36 && $bmis < 40){
        return "<high> Your are Obesity (Hight Step-1)</high> ";
    }
    elseif($bmis >= 41){
        return "<high> Your are Obesity (Hight Step-2) </high> ";
    }
}
 
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
                                <td><?php echo bmHeight($height); ?></td> 
                                <td><?php echo bmiWeight($weight); ?></td>
                                <td><?php echo bmi($bmi); ?></td>
                            </tr>
                            <tr class="bmi-sms-row">
                                <td class="w-100 ">
                                    <tn><?php echo bmiSms($bmi) ?></tn>
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
                                <input type="text" id="height" name="height" class="form-control"
                                    placeholder="Type Feet" required>
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
                                <input type="submit" value="Submit" name="submit" class="btn btn-primary">
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </form>
    </div>





</body>

</html>