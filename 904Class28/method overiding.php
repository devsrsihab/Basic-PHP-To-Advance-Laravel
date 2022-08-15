<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP=Object Orientation Programming</title>
    <style type="text/css">
        body {
            background-color: #0d1117;
            color: #f74e44;
        }
        .code_container{
            padding: 10%;
            display: flex;

            justify-content: center;
            align-items: center;
        }
    </style>
</head>

<body>

</body>

</html>
<div class="code_container">

    <div class="code_area">
        <?php 

        class base {

            public $name= "your name is here";
            
            public function base_f($a,$b){

                return $a+$b;
            }
        }

        // inheritance
        class childClass extends base{

            public $name= "Here is your name";
            public function base_f($c,$d){

                return $c/$d;
            }
        }

        $test = new childClass();
        echo $test->base_f(34,5);



    ?>





    </div>
</div>