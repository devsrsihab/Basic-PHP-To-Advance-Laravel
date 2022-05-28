<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class 10 Practice</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

    <link rel="stylesheet" href="css/style.css">


</head>

<body>

    <!-- php -->
    <?php

    
    $emailBlankError = $EduMailError = $nameBlankError = $passwdError  = $AgeBlankError = $UsernBlankError = $ageRestriction = $userNameError = $reTypePassError = null; // first all error valur assignent null
    $email = $age = $name = $userName = $passwd = $repass = null; // first all input var  valur assignent null
    $flag= true;  // by default flag is true
             /**
         * oldValue for keep old values of fields
         */
        function oldValue($fileName){
            if(isset($_POST[$fileName])){
                echo $_POST[$fileName];
            }
            else{
                echo '';
            }

        }
        if (isset($_POST['submit'])) {

        $email = $_POST['email'];
        // email empty validation
            if (empty($_POST["email"])) {
                $emailBlankError = "Email is required";
                $flag = false;
                }
            else{
                $email = input_test($_POST['email']);
                }

         // name empty validation
            if (empty($_POST["name"])) {
                $nameBlankError = "Name is required";
                $flag = false;
                }
            else{
                 $name = input_test($_POST['name']);
                  }

            // passwd empty validation
            if (empty($_POST["passwd"])) {
                $passwdError = "Name is required";
                $flag = false;
                }elseif(strlen($_POST["passwd"]) < 8  ){
                $passwdError = "Password At lest less 8 Characters";
                $flag = false;
                }
                else{
                $passwd = input_test($_POST['passwd']);
                }
            // re-type empty error
            if (empty($_POST['retypepassword'])) {
                $reTypePassError = "Passwords is Required";
                $flag = false;
            } else {
                 $repass = input_test($_POST['retypepassword']);                
            }
            
            // Username empty validation
            if (empty($_POST["Username"])) {
                $UsernBlankError = "Username is required";
                $flag = false;
                }
            else{
                $userName = input_test($_POST['Username']);
                }

            // Age empty validation
            if (empty($_POST["age"])) {
                $AgeBlankError = "Age is required";
                $flag = false;
                }
            else{
                $age = input_test($_POST['age']);
                }

         
            /**
             * username validation function
             * [a-zA-Z0-9 ]{5,15}
             */
            function userNameValidate($inputUser){
                if (preg_match("/^ \b [A-ZA-y ]{5,25}[-,a-z. ']\b$/i", $inputUser )) {
                   return true;
                }
                else{
                    return false;
                }
            }


            /**
             * function for educatiom mail or not
             * first let's divti the mail in two part
             * one part is before  @
             * Second part is after @
             * Then let's check the second part
             */
 
            function eduMailChekcer($userEmail, $validEmails){
                
                $emailsArr = explode('@', $userEmail, 2);

                if (in_array($emailsArr[1], $validEmails)) {
                   return true;
                }else{
                    return false;
                }
            }
                
           

            // valid email check
            if ( filter_var($email, FILTER_VALIDATE_EMAIL) == false ) {
            $formSmS = "<div class=\"alert alert-danger\" role=\"alert\"> Your <b>Email</b> is Not Correct </div>";
            $flag=false;

            }
            elseif (userNameValidate($userName)== false) {
                $userNameError = "username is not valid";
            }
            elseif(eduMailChekcer($email,['gmail.com'])== false){ //edumail econdition
            
                $EduMailError = " Email is not Eligble. You must need Edu Mail";
                $flag = false;
            }
            elseif ($age < 18 || $age > 60 ) {
                $ageRestriction = "Your age is Restrict Because Your age is ".$age;
                $flag = false;
            } 
            elseif($passwd  !== $repass ){
                $reTypePassError = "Passwords Don't Match";
                $flag = false;
            }  
           else{
               $formSmS = "<div class=\"alert alert-success\" role=\"alert\"> Your  Form Submited </div>"; 
               $_POST = '';
            }


        }

    //    all value trim, stripslashes and htmlspecialchars for hack
       function input_test($data){
        $data= trim($data);
        $data= stripslashes($data);
        $data= htmlspecialchars($data);
        return $data;
    }


        // ================== Database connection =====================
        // if ($flag) {
        //     $email  = $_POST['email'];
        //     $name   = $_POST['name'];
        //     $passwd = $_POST['passwd'];
        //         // Database connection
        //         $conn = new mysqli('localhost','root','','class10');
        //         if($conn->connect_error){
        //             echo "$conn->connect_error";
        //             die("Connection Failed : ". $conn->connect_error);
        //         } else {
        //             $stmt = $conn->prepare("INSERT INTO test3(email,fname,pass) values(?,?,?)");
        //             $stmt->bind_param("sss", $email,$name,$passwd );
        //             $execval = $stmt->execute();
            
        //             $stmt->close();
        //             $conn->close();
        //         }
        //  }






?>





    <div class="container">
        <div class="row">
            <div class="col">
                <!------ Include the above in your HEAD tag ---------->
                <form method="post" action="">
                    <?php
                    if (isset($formSmS)) {
                        echo $formSmS;
                    }
                    ?>
                    <label>
                        <p class="label-txt">Username</p>
                        <input type="text" value="<?php oldValue('Username') ?>" class="input" name="Username">
                        <div class="line-box">
                            <div class="line"></div>
                        </div>
                        <div class="error"><?php echo $UsernBlankError; echo $userNameError;   ?></div>
                    </label>
                    <label>
                        <p class="label-txt">ENTER YOUR EMAIL</p>
                        <input type="text" value="<?php oldValue('email') ?>" class="input" name="email">
                        <div class="line-box">
                            <div class="line"></div>
                        </div>
                        <div class="error"><?php echo $emailBlankError; echo $EduMailError  ?></div>
                    </label>
                    <label>
                        <p class="label-txt">ENTER YOUR NAME</p>
                        <input type="text" value="<?php oldValue('name') ?>" class="input" name="name">
                        <span></span>
                        <div class="line-box">
                            <div class="line"></div>
                        </div>
                        <div class="error"><?php echo $nameBlankError  ?></div>
                    </label>
                    <label>
                        <p class="label-txt">AGE</p>
                        <input type="text" value="<?php oldValue('age') ?>" class="input" name="age">
                        <span></span>
                        <div class="line-box">
                            <div class="line"></div>
                        </div>
                        <div class="error"><?php echo $AgeBlankError; echo $ageRestriction  ?></div>
                    </label>
                    <label>
                        <div class="row">
                            <div class="col-md-10">
                                <p class="label-txt">PASSWORD</p>
                                <input type="password" id="id_password" value="<?php oldValue('passwd') ?>"
                                    class="id_password input" name="passwd">

                                <div class="line-box">
                                    <div class="line"></div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex justify-content-center align-items-center">
                                <i class="far fa-eye" id="eye"
                                    style="margin-left: -30px; cursor: pointer;"></i>
                            </div>
                        </div>
                        <div class="error"><?php echo $passwdError  ?></div>
                    </label>
                    <label>
                        <div class="row">
                            <div class="col-md-10">
                                <p class="label-txt">Re-Type PASSWORD</p>
                                <input  type="password" id="id_password2" value="<?php oldValue('retypepassword') ?>"
                                    class="id_password input" name="retypepassword">

                                <div class="line-box">
                                    <div class="line"></div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex justify-content-center align-items-center">
                                <i class="far fa-eye" id="eye2" style="margin-left: -30px; cursor: pointer;"></i>
                            </div>
                        </div>


                        <div class="error"><?php echo $reTypePassError  ?></div>
                    </label>


                    <!-- button -->
                    <button type="submit" name="submit" class="btn btn-primary">submit</button>
                </form>
            </div>
        </div>
    </div>



    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/js/bootstrap.min.js"
        integrity="sha512-UR25UO94eTnCVwjbXozyeVd6ZqpaAE9naiEUBK/A+QDbfSTQFhPGj5lOR6d8tsgbBk84Ggb5A3EkjsOgPRPcKA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="js/app.js"></script>
    <script>
        // second eye
        $(document).ready(function(){
        const password = $('#id_password') ;
        const password2 = $('#id_password2') ;
        $('#eye').click(function(){
            if(password.prop('type') == 'password'){
                $(this).addClass('fa-eye-slash');
                password.attr('type','text')
            }
            else {
                $(this).removeClass('fa-eye-slash');
                password.attr('type','password');
            }
        })
        $('#eye2').click(function(){
            if(password2.prop('type') == 'password'){
                $(this).addClass('fa-eye-slash');
                password2.attr('type','text')
            }
            else {
                $(this).removeClass('fa-eye-slash');
                password2.attr('type','password');
            }
        })
    })
    </script>
</body>

</html>