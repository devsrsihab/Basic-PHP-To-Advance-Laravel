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

        // make a traits
        trait hello{
            public function sayhello(){
                echo "Hello Everyone";
            }
        }
        // make a traits
        trait bye{
            public function saybye(){
                echo "Bye Bye Everyone";
            }
        }

        // use the traits
        class base{
            use hello, bye;
        }

        // make object
        $test=  new base();
        echo $test->sayhello();
        echo "<br>";
        echo $test->saybye();
        echo "<br>";

    

        ?>





    </div>
</div>