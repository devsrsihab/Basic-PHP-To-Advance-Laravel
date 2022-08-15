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
    class base{
        protected $name;

        public function __construct($n){
            $this->name=$n;
        }

        private function show(){
            return "Your Name : ".$this->name."<br>";
        }
    }

    // derived class methods
    class child_base extends base{
        public function get(){
            return "Your Child Name : ".$this->name."<br>";
        }

    }
    
    // make a object
    $base_obj= new child_base("sohanur rohman child");

    echo $base_obj->get();

    ?>





    </div>
</div>