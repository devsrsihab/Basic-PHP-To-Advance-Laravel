<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class 10 Practice</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">


</head>

<body>

    <!-- php -->
    <?php
    
    $emailError = $EduMailError = $nameError = $passwdError = null; // first all error valur assignent null
    $email = $name = $passwd = null; // first all input var  valur assignent null
    $flag= true;  // by default flag is true

 if (isset($_POST['submit'])) {

   $email = $_POST['email'];
   // input email condition
    if (empty($_POST["email"])) {
        $emailError = "Email is required";
        $flag = false;
        }
    else{
         $email = input_test($_POST['email']);
        }

   // input name condition
    if (empty($_POST["name"])) {
        $nameError = "Name is required";
        $flag = false;
        }

    // input pass condition
    else{
         $name = input_test($_POST['name']);
        }
    if (empty($_POST["passwd"])) {
        $passwdError = "Name is required";
        $flag = false;
        }
    else{
         $passwd = input_test($_POST['passwd']);
        }

    /**
     * function for educatiom mail or not
     * first let's divti the mail in two part
     * one part is before  @
     * Second part is after @
     * Then let's check the second part
     */
    function EduMailChecker ($userEmail){
        $AcessEmails = ['bcss.edu.bd', 'nsu.edu.bd', 'diriict@iict.buet.ac.bd'];
        $email_arr = explode('@', $userEmail, 2);

         if (in_array($email_arr[1], $AcessEmails)) {
           return true;
         } else {
           return false;
         }
    }

    // valid email check
    if ( filter_var($email, FILTER_VALIDATE_EMAIL) == false ) {
       $formSmS = "<div class=\"alert alert-danger\" role=\"alert\"> Your <b>Email</b> is Not Correct </div>";
       $flag=false;

    }
    elseif(EduMailChecker($email)== false){
       
        $EduMailError = " Email is not Eligble. You must need Edu Mail";
        $flag=false;
    }   
    else{
        $formSmS = "<div class=\"alert alert-success\" role=\"alert\"> Your  Form Submited </div>";        
    }  


}

// all value trim, stripslashes and htmlspecialchars for hack
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
                        <p class="label-txt">ENTER YOUR EMAIL</p>
                        <input type="text" class="input" name="email">
                        <div class="line-box">
                            <div class="line"></div>
                        </div>
                        <div class="error"><?php echo  $emailError; echo $EduMailError; ?></div>
                    </label>
                    <label>
                        <p class="label-txt">ENTER YOUR NAME</p>
                        <input type="text" class="input" name="name">
                        <span></span>
                        <div class="line-box">
                            <div class="line"></div>
                        </div>
                        <div class="error"><?php echo  $nameError; ?></div>
                    </label>
                    <label>
                        <p class="label-txt">ENTER YOUR PASSWORD</p>
                        <input type="password" class="input" name="passwd">
                        <div class="line-box">
                            <div class="line"></div>
                        </div>
                        <div class="error"><?php echo  $passwdError; ?></div>
                    </label>
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
</body>

</html>