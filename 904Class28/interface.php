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

        interface parent1{

            function calc($a,$b);
        }
        interface parent2{

            function sub($c,$d);
        }

        // inheritance
        class childClass implements parent1, parent2{
            public function calc($a,$b){
                echo $a+$b;
                echo "<br>";
            }
            public function sub($c,$d){
                echo $c/$d;
                echo "<br>";
            }
        }
    
        // make object properties
        $test = new childClass();
        echo $test->calc(443, 5454);
        echo $test->sub(44443, 54);



    ?>





    </div>
</div>