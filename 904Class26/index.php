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
            color: #b0ff13;
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
    
    //define a class 
    class computers{
        
        // define a property
        public $hardist     = 'Not Found';
        public $ssd         = 'Not Found';
        public $motherboard = 'Not Found';
    
        function specification(){
            $spn = 'HardDisk: '.$this->hardist.'<br>'.' SSD: '.$this->ssd.'<br>'.' Motherboard:  '.$this->motherboard.'<br>';
            return $spn;
        }
    }
    
    //define a object 
    $cObject = new computers();
    //define class properties value
    $cObject->hardist='500GB';
    $cObject->ssd='150GB';
    $cObject->motherboard='Gigabyte';
    // now echo the method 
    echo $cObject->specification();
    
    // break
    echo "<br>";
    
    //define 2nd object 
    $cObject2 = new computers();
    //define class properties value
    $cObject2->hardist='1500GB';
    $cObject2->ssd='1120GB';
    $cObject2->motherboard='MSI';
    echo $cObject2->specification();
    
    
    //===========Constructor Function===============
  class phns{

   // define variables
    public $memory;
    public $ram;
    public $rom;

    // define constructor function
    function __construct($m=0,$ra=0,$ro=0){
        $this->memory = $m;
        $this->ram    = $ra;
        $this->rom    = $ro;

    }
    //calculaton properties in method
    function stg(){
        $ttstorage = $this->memory + $this->ram + $this->rom;
        return $ttstorage;
    }

  }

    
  //assign variable value
  $ph = new phns(1,2,3);
  //print the object
  echo $ph->stg();
  //break
  echo "<br>";
  //assign variable value
  $ph2 = new phns(334, 43, 43);
  //print the method
  echo $ph2->stg();
  //break
  echo "<br>";
  //assign variable value
  $ph3 = new phns(322, 443, 54);
  //print the method
  echo $ph3->stg();
  //break
  echo "<br>";
  //assign variable value
  $ph4 = new phns(334, 53, 54);
  //print the method
  echo $ph4->stg();
  //break
  echo "<br>";
  //assign variable value
  $ph5 = new phns(444, 553, 66);
  //print the method
  echo $ph5->stg();





















    ?>





    </div>
</div>