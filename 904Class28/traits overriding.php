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

    //   // hello tratis
    //    trait hello{
    //     public function sayhello(){
    //         echo "Hello From Hello trait\n";
    //     }  }
    //   // hi tratis
    //    trait hi{
    //     public function sayhello(){
    //         echo "Hello From Hi trait\n";
    //     }  }
    //     // class
    //     class base{
    //         public function sayhello(){
    //             echo "Hello From class\n";
    //         }
    //     }
    //     // inheritance
    //     class childClass extends base{
    //         use hello;
    //         // public function sayhello(){
    //         //     echo "Hello From ChildClass\n";
    //         // }
    //     }

    //     // object
    //     $test= new childClass();
    //     echo $test->sayhello();


        // =================Problem-2======================
        // how to print same function name trait

        // trait hello{
        //     public function sayhello(){
        //         echo "Hello From Hello Trait\n";
        //     }
        // }
        // // hir traits 
        // trait hi{
        //     public function sayhello(){
        //         echo "Hello From hi Trait\n";
        //     }
        // }
        // // class
        // class base{
        //     use hello,hi{
        //         hello::sayhello insteadof hi;
        //         hi::sayhello as newSayHello;
        //     }
        // }
        // // object
        // $test = new base();
        // $test->sayhello();
        // echo "<br>";
        // $test->newSayHello();


        // ===============Problem-3================
        // Print private method

        // hello trait
        trait hello{
            private function sayhello(){
                echo "Hello From Hello Trait\n";
            }
        }
        // class
        class base {
            use hello{
                hello::sayhello as public newHello;
                hello::sayhello insteadof hi;
                hello::sayhello insteadof hi;
                hi::sayhello as newsayhello;
            }
        }
        // object
        $test = new base();
        $test->newHello();

     
    

        ?>





    </div>
</div>