<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        f {
            color: red;
        }

        b {
            font-weight: 600;

        }
    </style>
</head>

<body>

    <?php 

error_reporting(0);
$s_name = $_POST['sname'];
$ban = $_POST['ban'];
$eng = $_POST['eng'];
$mat = $_POST['mat'];
$sci = $_POST['sci'];
$phy = $_POST['phy'];
$che = $_POST['che'];
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

?>





    <!-- // GPA function for result publishing -->
    <h2 class="text-center ">Assignment 3</h2>
    <div class="container">

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
                                <h4 class="text-success"><span class="text-dark">Your Result:</span><?php echo exam_result([$_POST['ban'],$_POST['eng'],$_POST['mat'],$_POST['sci'],$_POST['phy'],$_POST['che'] ]);
 ?></h4>
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
    </div>

</body>

</html>