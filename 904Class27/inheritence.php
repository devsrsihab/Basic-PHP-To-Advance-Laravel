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
    
        // deifne a class
        CLASS sobji{

            // assign variable 
            public $alu;
            public $potol;
            public $begun;
            
            // define a costractor
            function __construct($alur_value,$potoler_value,$beguner_value){

                $this->alu   = $alur_value;
                $this->potol = $potoler_value;
                $this->begun = $beguner_value;
            }
            
            // define a method 
            function sobjir_method(){
                $all_sobjir_value= $this->alu+$this->potol+$this->begun;
                return $all_sobjir_value;
            }

        }

        // define class
        class mash extends sobji {

            function masher_method(){

                $all_mash_or_sobji = $this->alu+$this->potol*$this->begun;
                return $all_mash_or_sobji;
            }
        }


        // define a object
        $sobjir_object = new sobji(34, 53, 143);
        echo $sobjir_object->sobjir_method();
        echo "<br>";
        // define second object
        $masher_object = new mash(43, 54, 243);
        echo $masher_object->masher_method();




    ?>





    </div>
</div>