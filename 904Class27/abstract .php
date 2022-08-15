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
            color: #009765;
        }
        .code_container{
            padding: 10%;
            display: flex;
            text-align: center;
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

    abstract class parentClass{
        public $name;

        abstract protected function calc($a,$b);
    }

     class childClass extends parentClass{
        public function calc($c,$d){
            return $c*$d;
        }
     }
   
     $test = new childClass();
     echo $test->calc(43, 534);
    ?>





    </div>
</div>