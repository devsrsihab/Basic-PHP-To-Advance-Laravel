<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Form</title>

    <style>
        .form-div {
            width: 500px;
            margin: 0 auto;
        }
    </style>
  </head>
  <body>
      <?php 
        /**
         * For Show validation message
         *
         * @param string $message
         * @param string $alertType
         */
        function validate($message, $alertType="danger") {
            return "<div class=\"alert alert-{$alertType} alert-dismissible fade show\" role=\"alert\">
                {$message}!
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
            </div>";
        }

        /**
         * validateEmail For check valid email or not.
         */
        function validateEmail($email) {
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                return true;
            } else {
                return false;
            }
        }

        /**
         * filterEduMail for filtering individual criteria email addresses
         */
        function filterEduMail($email, $validEmails) {
            $email_arr = explode('@', $email, 2);
            if (in_array($email_arr[1], $validEmails)) {
                return true;
            } else {
                return false;
            }
        }


        /**
         * validateUsername for valid username regular expression
         */
        function validateUsername($username) {
            
            // \w = 0-9A-Za-z_
            if (preg_match('/^\w{5,20}$/', $username)) {
                return true;
            } else {
                return false;
            }
        }


        /**
         * oldValue for keep old values of fields
         */
        function oldValue($fieldName) {

            if (isset($_POST[$fieldName])) {
                echo $_POST[$fieldName];
            } else {
                echo '';
            }
        }

        /**
         * clearFormData for clear all fields values after success
         */
        // function clearFormData() {
        //     $_POST = '';
        // }





        if (isset($_POST['submitBtn'])) {
            $username  = $_POST['username'];
            $userEmail = $_POST['userEmail'];
            $phone     = $_POST['phone'];
            $age       = $_POST['age'];
            $country   = $_POST['country'];

            $gender       = '';
            if (isset($_POST['gender'])) {
                $gender       = $_POST['gender'];
            }

            $agree_status = '';
            if (isset($_POST['agree_status'])) {
                $agree_status = $_POST['agree_status'];
            }
            



            if (empty($username) || empty($userEmail) || empty($phone) || empty($age) || empty($gender) || empty($country)) {

                $validationMsg = validate('All fields are required');

            } else if (validateEmail($userEmail) == false) {

                $validationMsg = validate('Email is not valid', 'warning');

            } else if (filterEduMail($userEmail, ['diu.edu.bd', 'brac.edu.bd', 'nsu.edu.bd']) == false) {

                $validationMsg = validate('Email is not Edu mail', 'warning');

            } else if ($age < 18 || $age > 60) {

                $validationMsg = validate('You are Not perfect for this course', 'warning');

            } else if (validateUsername($username) == false) {

                $validationMsg = validate('Username not valid', 'warning');

            } else if ($agree_status != 'yes') {
                $validationMsg = validate('Please agree terms and conditions', 'warning');
            } else {

                $validationMsg = validate('Everything okay', 'success');
                // clearFormData();
                $_POST = '';
            }
            
        }
        
        
      ?>
      <div class="container">
          <div class="wrap shadow form-div">
              <div class="card">
                    <div class="card-body">
                        <h1>Registration Form</h1>

                        <?php 
                            if (isset($validationMsg)) {
                              echo $validationMsg;
                            }
                        ?>
                    

                        <form method="POST" action="" autocomplete="on">
                            <div class="form-group">
                                <label for="fieldthree" class="form-label">Username</label>
                                <input type="text" name="username" value="<?php oldValue('username');?>" class="form-control" id="fieldthree">
                            </div>
                            <div class="form-group">
                                <label for="fieldOne" class="form-label">Email address</label>
                                <input type="text" name="userEmail" value="<?php oldValue('userEmail');?>" class="form-control" id="fieldOne">
                            </div>
                            <div class="form-group">
                                <label for="fieldFour" class="form-label">Phone</label>
                                <input type="tel" name="phone" value="<?php oldValue('phone');?>" class="form-control" id="fieldFour">
                            </div>
                            <div class="form-group">
                                <label for="fieldFive" class="form-label">Age</label>
                                <input type="text" name="age" value="<?php oldValue('age');?>" class="form-control" id="fieldFive">
                            </div>

                            <div class="form-group">
                                <label for="country" class="form-label">Country</label>
                                <select class="form-select" id="country" name="country" aria-label="Default select example">
                                    <option selected>select One</option>
                                    <option value="Bangladesh">Bangladesh</option>
                                    <option value="India">India</option>
                                    <option value="Pakisthan">Pakisthan</option>
                                </select>
                            </div>


                            <div class="form-group">
                                <label for="fieldFive" class="form-label">Gender</label><br>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="Male">
                                    <label class="form-check-label" for="inlineRadio1">Male</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="Female">
                                    <label class="form-check-label" for="inlineRadio2">Female</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio3" value="Others">
                                    <label class="form-check-label" for="inlineRadio3">Others</label>
                                </div>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="agree_status" value="yes" id="agreeCheckbox">
                                <label class="form-check-label" for="agreeCheckbox">
                                    Are you Agree?
                                </label>
                            </div>

                            <div class="form-group">
                                <input type="submit" name="submitBtn" class="btn btn-primary" value="Register">
                            </div>
                        </form>
                    </div>
              </div>
          </div>

      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>