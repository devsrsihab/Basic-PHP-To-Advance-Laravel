<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>


<!-- php part -->
<?php

// $firstName = $lastName = $birthdayDate = $gender = $emailAddress = $phoneNumber = $subject = $confirmCheck = null;
$firstNameError = $lastNameError = $birthdayDateError = $genderError = $emailAddressError = $phoneNumberError = $subjectError = $confirmCheckError = $userNameError = null;
$flag= true;


// storage value after submit 
if (isset($_POST['submit'])) {
   $firstName = $_POST['firstName'] ;
   $lastName = $_POST['lastName'] ;
   $birthdayDate = $_POST['birthdayDate'] ;
   $gender = $_POST['gender'] ;
   $emailAddress = $_POST['emailAddress'] ;
   $phoneNumber = $_POST['phoneNumber'] ;
   $userName = $_POST['userName'] ;
   $confirmCheck = '';

   if(isset($_POST['confirmCheck'])){
    $confirmCheck = $_POST['confirmCheck'];
   }


// first name error
//=================================
if (empty($_POST['firstName'])   ) {

  $firstNameError = "First Name is required";
  $flag = false;
} elseif(preg_match_all("/^[A-Za-z\s\.]{6,32}+$/", $firstName ) == false ) {

  $firstNameError = "Invalid First Name ";
  $flag = false;
} else {

  $firstNameError = "";
}

// Birthday  name error
//===============================
if (empty($_POST['birthdayDate']) ) {

  $birthdayDateError = "Date Of Birth is required";
  $flag = false;
}
 elseif (preg_match_all("/^[0-9]{1,2}$/", $birthdayDate) == false) {

  $birthdayDateError = "Invalid Age";
  $flag = false;
 }
 elseif ( $birthdayDate < 18 ){

 $birthdayDateError = " Your Must be 18+ ";
 $flag = false;
}
else{

  $birthdayDateError = "";
 }


// Email  name error
//===============================
if (empty($emailAddress)) {

  $emailAddressError = " Email is Required";
  $flag = false;
}
elseif( filter_var($emailAddress, FILTER_VALIDATE_EMAIL) == false ){
   
    $emailAddressError = " Invalid Email Address";
    $flag = false;
}
else{
  $emailAddressError = "";
}


// Phone Number error
//===============================
if (empty($phoneNumber)) {

  $phoneNumberError = " Phone Number is Required";
  $flag = false;
}
elseif( preg_match_all('/^[0-9]{11,11}$/', $phoneNumber) == false  ) {
   
    $phoneNumberError = " Invalid Phone Number";
    $flag = false;
}
else{
  $phoneNumberError = "";
}

// confirmCheck  error
//===============================
 if(empty($_POST['confirmCheck'])){

  $confirmCheckError = " You Need to Allow Term a Conditions";
  $flag = false;

 } else {

  $confirmCheckError = "";

 }

// user name  error
//===============================
if(empty($_POST['userName'])){

  $userNameError = " User name is required";
  $flag = false;

 } elseif( preg_match_all("/^[a-zA-Z0-9]{5,12}[^\W]+$/", $userName) == false ){
  $userNameError = " Don't use any (white space and special characters) in user Name";
  $flag = false;

 }
  else {

  $userNameError = "";

 }

  // clearing old value after submit
  if($flag){
    $formSuccess = "<div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\"> Your Form is Submited! <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button> </div>";
    $_POST = '';
  }

  
}

//  old value functions are
function oldValue($fieldName){

  if (isset($_POST[$fieldName])) {
   return $_POST[$fieldName];
  }
   else {
     return '';
   }

}





// echo  "this is First error ". $firstNameError."<br>";
// echo  "this is First type of Firsname ".gettype($firstName)."<br>";
// echo "this is First Name ".$firstName;
?>





<!-- form section -->
  <section class=" gradient-custom">
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <p><?php if(isset($formSuccess)){echo $formSuccess; }  ?></p>
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 text-center" >Registration Form</h3>
            <!-- form tag -->
            <form action="" class="needs-validation" method="post" >
              <div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                  <label class="form-label" for="firstName">First Name</label>
                    <input type="text" name="firstName" value="<?php echo oldValue('firstName'); ?>"id="firstName" class="form-control form-control-lg" /> 
                    <div class="error">
                        <?php echo $firstNameError ?>
                    </div>                   
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                  <label class="form-label" for="lastName">Last Name</label>
                    <input type="text" name="lastName" value="<?php echo oldValue('lastName'); ?>" id="lastName" class="form-control form-control-lg" />
                    <div class="error">
                        <?php echo $lastNameError ?>
                    </div>  
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 d-flex align-items-center">

                  <div class="form-outline datepicker w-100">
                  <label for="birthdayDate" class="form-label">Birthday</label>
                    <input type="text" name="birthdayDate" value="<?php echo oldValue('birthdayDate'); ?>" class="form-control form-control-lg" id="birthdayDate"  />
                    <div class="error">
                        <?php echo $birthdayDateError ?>
                    </div>  
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                  <h6 class="mb-2 pb-1">Gender: </h6>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="femaleGender" value="Female" checked />
                    <label class="form-check-label" for="femaleGender">Female</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="maleGender" value="male" />
                    <label class="form-check-label" for="maleGender">Male</label>
                  </div>
  
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="otherGender" value="other" />
                    <label class="form-check-label" for="otherGender">Other</label>
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                  <label class="form-label" for="emailAddress">Email</label>
                    <input type="text" name="emailAddress" value="<?php echo oldValue('emailAddress'); ?>" id="emailAddress" class="form-control form-control-lg" />
                    <div class="error">
                        <?php echo $emailAddressError ?>
                    </div>  
                  </div>

                </div>
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                  <label class="form-label" for="phoneNumber">Phone Number</label>
                    <input type="tel" name="phoneNumber" value="<?php echo oldValue('phoneNumber'); ?>" id="phoneNumber" class="form-control form-control-lg" />
                    <div class="error">
                        <?php echo $phoneNumberError ?>
                    </div>  
                  </div>

                </div>
              </div>

              <div class="row">
              <div class="col-md-6">
                <div class="form-outline">
                <label class="form-check-label" name="userName" for="userName">
                    User Name
                </label>
                <input class="form-control" name="userName" type="text" id="userName">
                  <div class="error">
                        <?php echo $userNameError ?>
                    </div>  
                </div>
            </div>
            <div class="col-md-6">
            <label class="form-label select-label">Choose option</label>
            
                  <select class="select form-control" name="subject">
                    <option value="1" disabled>Choose option</option>
                    <option value="Subject 1">Subject 1</option>
                    <option value="Subject 2">Subject 2</option>
                    <option value="Subject 3">Subject 3</option>
                  </select>

             
            </div>

              </div>
              <div class="row my-4">
              <div class="col-md-6">
                <div class="form-check">
                <input class="form-check-input" name="confirmCheck" type="checkbox" id="confirmCheck">
                <label class="form-check-label" name="confirmCheck" for="confirmCheck">
                    Agree to terms and conditions
                </label>
                  <div class="error">
                        <?php echo $confirmCheckError ?>
                    </div>  
                </div>
            </div>

              </div>

              <div class="mt-4 pt-2">
                <input class="btn btn-primary btn-lg" name="submit" type="submit" value="Submit" />
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>>











    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>
