<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class-7 Assignment </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">



</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box
    }

    body {
        background-color: #fff
    }
    hr.mb-3 {
    height: 2px;
    background: #21bf73;
    margin: auto;
}
h2.mt-2.text-center {
    color: #21bf73;
}
    .neumorphism {
        border-radius: 28px;
        background: linear-gradient(225deg, #e6e6e6, #ffffff);
        box-shadow: -5px 5px 10px #d4d4d4,
            5px -5px 10px #ffffff;
    }

    .container {

        border-radius: 10px;
        padding: 20px;
        font-family: 'Montserrat', sans-serif;

    }

    .container>p {
        font-size: 32px
    }


    .options {
        position: relative;
        padding-left: 40px
    }


    #options label {
        display: block;
        margin-bottom: 15px;
        font-size: 14px;
        cursor: pointer;
    }

    .options input {
        opacity: 0
    }

    .checkmark {
        position: absolute;
        top: -1px;
        left: 0;
        height: 25px;
        width: 25px;
        background-color: #343a40;
        border: 1px solid #ddd;
        border-radius: 50%;
        background: linear-gradient(225deg, #e6e6e6, #ffffff);
        box-shadow: -5px 5px 10px #d4d4d4,
            5px -5px 10px #ffffff;

    }

    .options input:checked~.checkmark:after {
        display: block
    }

    .options .checkmark:after {
        content: "";
        width: 18px;
        height: 18px;
        display: block;
        background: white;
        position: absolute;
        top: 50%;
        left: 50%;
        border-radius: 50%;
        transform: translate(-50%, -50%) scale(0);
        transition: 300ms ease-in-out 0s
    }

    .options input[type="radio"]:checked~.checkmark {
        background: #21bf73;
        transition: 300ms ease-in-out 0s
    }

    .options input[type="radio"]:checked~.checkmark:after {
        transform: translate(-50%, -50%) scale(1)
    }

    .btn-primary {
        background-color: #555;
        color: #ddd;
        border: 1px solid #ddd
    }

    .btn-primary:hover {
        background-color: #21bf73;
        border: 1px solid #21bf73
    }

    .btn-success {
        padding: 5px 25px;
        background-color: #21bf73
    }


    @media(max-width:576px) {
        .question {
            width: 100%;
            word-spacing: 2px
        }
    }

    /* 2nd assignment css */
 .my_team {
    background-color: #f1f1f1;
 }
.ourTeam-hedding p{
    color: #979797;
}
.ourTeam-hedding strong{
    color: black;
}
.ourTeam-hedding{
    margin-bottom: 20px;
}
.ourTeam-hedding h1{

    font-weight: bold;
    color: #145889;
}
.ourTeam-box{
    border-radius: 2px;
    border-top: 6px solid #5DDDD3;
    margin: 0px;
    background-color: #FFFFFF;
    margin-bottom: 30px;
}
.section1{
    padding: 30px 0px 30px 0px;
}
.section1 img{
    border-radius: 50%;
    height: 130px;
    width: 130px;
    object-fit:cover;
}
.section2 p{
    font-weight: bold;
    color: #5DDDD3;
    letter-spacing: 1px;
}
.section2 span{
    color: #979597;
}
.section3{
    background-color: #5DDDD3;
}
.section3 i{
    color: #ffffff !important;
    padding: 15px;
    font-size: 15px;
}
.section-info{
    border-top: 6px solid #90DFAA;
}
.section-info p{
    color: #90DFAA;
}
.section-info .section3{
    background-color: #90DFAA;
}
.section-danger{
    border-top: 6px solid #FD8469;
}
.section-danger p{
    color: #FD8469;
}
.section-danger .section3{
    background-color: #FD8469;
}
.social {
    color: #fff
}
</style>

<body>

    <?php 

$questions = [
        // Q) 1
             ["quesiton_title" => "For preserving key sequences in array_chunk() you have to use..", "quesitons" => ['First parameter will be false', 'Second parameter will be true', 'Fourth parameter will be true', 'Third parameter will be true'] ],
        // Q) 2
             ["quesiton_title" => "Array_splice function is same as array_slice but it starts taking arguments from ", "quesitons" => ['First argument', 'Second argument', 'Third argument', 'Fourth argument'] ],
        // Q) 3
             ["quesiton_title" => "How many types of loops are there in php language?", "quesitons" => ['2', '3', '4', '5'] ],
        // Q) 4
             ["quesiton_title" => "Main parameters are used in a for loop is ? ", "quesitons" => ['(increment/decrement, initialization, statement)', '(initialization, statement, increment/decrement)', '(statement, initialization, increment/decrement)', '(statement, increment/decrement)'] ],
        // Q) 5
             ["quesiton_title" => "implode() function used for…", "quesitons" => ['String to array', 'Array to string', 'Make randomize array', 'None of these'] ],
        // Q) 6
             ["quesiton_title" => "Which loop evaluates the condition expression as Boolean, if it is true, it executes the statements and when it is false it will terminate? ", "quesitons" => ['For loop', 'While loop', 'do-while loop', 'All of the above'] ],
        // Q) 7
             ["quesiton_title" => "Popping is an act of …", "quesitons" => ['Adding values', 'Taking off values from stack', 'Transferring values from stack', 'None of them'] ],
        // Q) 8
             ["quesiton_title" => "Array_merge ( ) function merges…", "quesitons" => ['Two arrays', 'Three arrays', 'More than Three arrays', 'Merges array with a string'] ],
        // Q) 9
             ["quesiton_title" => "Which function displays structured information about variables including its type and value? ", "quesitons" => ['asort()', 'ksort()', 'sort()', 'var_dump()'] ],
        // Q) 10
             ["quesiton_title" => "Which in-built function will add a value to the end of an array? ", "quesitons" => ['array_unshift()', 'into_array()', 'inend_array()', 'array_push()'] ],

      
];
//shuffle this $questions
$shuffle_mcq = shuffle($questions);


?>


    <h2 class="mt-2 text-center"> Class-7 Assignment-1</h2>
    <hr class="mb-3">
    <div class="container  my-1">

        <!-- start row -->
        <div class="row">

            <?php 


   foreach ($questions as $key => $question) {
       

?>

            <div class="col-12 mb-3 neumorphism  text-dark">
                <form action="form_data.php" method="get">
                    <div class="question  pt-2 pb-2">
                        <!-- question -->
                        <div name="question" id="question" class="py-2 h5">
                            <b>Q.<?php echo ++$key. ") " . $question['quesiton_title'] ?></b></div>
                        <div class=" pl-md-3 pt-sm-0 pt-3" id="options">
                            <!-- option 1 -->
                            <label class="options"><?php echo $question['quesitons'][0] ?> <input type="radio"
                                    name="ans">
                                <span class="checkmark"></span> </label>
                            <!-- option 2 -->
                            <label class="options"><?php echo $question['quesitons'][1] ?> <input type="radio"
                                    name="ans">
                                <span class="checkmark"></span> </label>
                            <!-- option 3 -->
                            <label class="options"><?php echo $question['quesitons'][2]  ?> <input type="radio"
                                    name="ans">
                                <span class="checkmark"></span> </label>
                            <!-- option 4 -->
                            <label class="options"><?php echo $question['quesitons'][3] ?> <input type="radio"
                                    name="ans"> <span class="checkmark"></span>
                            </label>

                        </div>
                    </div>
                </form>


            </div>


            <?php     }?>

        </div>
        <!-- row end -->
        <form action="form_data.php" method="post">
            <div class="d-flex align-items-center pt-3">
                <div id="prev"> <button class="btn btn-primary">Previous</button> </div>
                <div class="ml-auto mr-sm-5"> <button type="submit" class="btn btn-success">Submit</button> </div>
            </div>

        </form>

    </div>


<!------------------------------- 2nd assignment  ---------------------------->

<!-- array start -->
<?php

$team_members = [

           [ "member_photo" => "img/a_2_img3.jpg","member_name" => "Abdul Razzaque", "member_descrip" => "Her nick name is polash and He live in Mymensingh", "member_social_link" => ["facebook" => "https://www.facebook.com/22polash","twitter" => "https://twitter.com/razzaque_polash","linkedin" => "https://www.linkedin.com/developer-polash",   ] ],

           [ "member_photo" => "img/a_2_img.jpg","member_name" => "Sohanur Rohman", "member_descrip" => "Her nick name is Sohan  and He live in Natore", "member_social_link" => ["facebook" => "https://www.facebook.com/devsrsihab","twitter" => "https://www.facebook.com/devsrsihab","linkedin" => "https://www.facebook.com/devsrsihab",   ] ],

           [ "member_photo" => "img/a_2_img2.jpg","member_name" => "Jahid Hasan", "member_descrip" => "Her nick name is Jahid  and He live in Rajshahi", "member_social_link" => ["facebook" => "https://www.facebook.com/freelancermdjahidhasan","twitter" => "https://twitter.com/mdjahidhasan31","linkedin" => "https://www.facebook.com/devsrsihab",   ] ],
]


?>
<!-- array end -->
<h2 class="mt-2 text-center"> Class-7 Assignment-2</h2>
    <hr class="mb-3">
 <div class="container-fuild my_team">
 <div class="container ">
  <div class="row">
    <div class="col-md-12 pt-5 pb-2 ourTeam-hedding text-center">
      <h1>Our Team</h1>
    </div>
  </div>
  <div class="row">
  <?php 
  foreach ($team_members as $key => $team_member) {
  ?>
    <div class="col-md-4 col-sm-4 col-xs-12">
      <div class="row section-success ourTeam-box text-center">
        <div class="col-md-12 section1">
          <img src="<?php echo $team_member['member_photo']  ?>">
        </div>
        <div class="col-md-12 section2 pb-3">
          <p> <?php echo $team_member['member_name']  ?></p>
          <span><?php echo $team_member['member_descrip']  ?></span>
        </div>
        <div class="col-md-12 section3">
          <a class="social" href="<?php echo $team_member['member_social_link']['facebook'] ?>" target="_blank"><i class="fa fa-facebook"  aria-hidden="true">></i> </a>
          <a class="social" href="<?php echo $team_member['member_social_link']['twitter'] ?>" target="_blank" ><i class="fa fa-twitter" aria-hidden="true"></i></a>
          <a class="social" href="<?php echo $team_member['member_social_link']['linkedin'] ?>" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
        </div>
      </div>
    </div>

<?php }?>
</div>
</div>
</div>
</body>
</html>