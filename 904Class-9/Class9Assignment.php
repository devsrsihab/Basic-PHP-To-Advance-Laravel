<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class 9 Assignment</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!------ Include the above in your HEAD tag ---------->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

<?php 
   //========free student ===========
 if (isset($_POST['fsSubmit'] )) {
    $fsFirstName   = $_POST['fsFirstName'];
    $fsLasttName   = $_POST['fsLastName'];
    $fsPass        = $_POST['fsPass'];
    $fsConfirmPass = $_POST['fsConfirmPass'];
    $fsgender      = $_POST['fsgender'];
    $fsEmail       = $_POST['fsEmail'];
    $fsPhone       = $_POST['fsPhone'];

    echo "<b>Your Name:</b> ".$fsFirstName." ".$fsLasttName ."<br>";    
    echo "<b>Your Password:</b> ".$fsPass."<br>";    
    echo "<b>Your Confirm Password:</b> ".$fsConfirmPass."<br>";    
    echo "<b>Your Gender:</b> ".$fsgender."<br>";    
    echo "<b>Your Email:</b> ".$fsEmail."<br>";    
    echo "<b>Your Phone:</b> ".$fsPhone."<br>";  
}  

//========paid student ===========
if (isset($_POST['PsSubmit'])) {
    $PsFirstName   = $_POST['PsFirstName'];
    $PsLasttName   = $_POST['PsLastName'];
    $PsPass        = $_POST['PsPass'];
    $PsConfirmPass = $_POST['PsConfirmPass'];
    $Psgender      = $_POST['Psgender'];
    $PsEmail       = $_POST['PsEmail'];
    $PsPhone       = $_POST['PsPhone'];
    $PsBatch       = $_POST['PsBatch'];
    echo "<b>Your Name:</b> ".$PsFirstName." ".$PsLasttName ."<br>";    
    echo "<b>Your Password:</b> ".$PsPass."<br>";    
    echo "<b>Your Confirm Password:</b> ".$PsConfirmPass."<br>";    
    echo "<b>Your Gender:</b> ".$Psgender."<br>";    
    echo "<b>Your Email:</b> ".$PsEmail."<br>";    
    echo "<b>Your Phone:</b> ".$PsPhone."<br>";    
    echo "<b>Your Batch:</b> ".$PsBatch."<br>";    
}

?>

    <!------ Include the above in your HEAD tag ---------->

    <div class="container register">
      <div class="row">
        <div class="col-md-3 register-left">
          <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt="" />
          <h3>Free Domain</h3>
          <p>Sorobindu- Learn With Fun</p>
          <input type="submit" name="" value="Login" />
          <br />
        </div>
        <div class="col-md-9 register-right">
          <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link " id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Free Student</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Paid Student</a>
            </li>
          </ul>
          <div class="row w-100">
            <div class="col">
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                  <h3 class="register-heading">Apply as a Free Student</h3>
                  <div class="row register-form">
                    <div class="col-md-6">
                      <form action="insert.php" method="post">
                        <div class="form-group">
                          <input type="text" class="form-control" placeholder="First Name *" value="" name="fsFirstName" required />
                        </div>
                        <div class="form-group">
                          <input type="text" class="form-control" placeholder="Last Name *" value="" name="fsLastName" required />
                        </div>
                        <div class="form-group">
                          <input type="password" class="form-control" placeholder="Password *" value="" name="fsPass" required />
                        </div>
                        <div class="form-group">
                          <input type="password" class="form-control" placeholder="Confirm Password *" value="" name="fsConfirmPass" required />
                        </div>
                        <div class="form-group">
                          <div class="maxl">
                            <label class="radio inline">
                              <input type="radio" name="fsgender" value="male" checked required>
                              <span> Male </span>
                            </label>
                            <label class="radio inline">
                              <input type="radio" name="fsgender" value="female" required>
                              <span>Female </span>
                            </label>
                          </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <input type="email" class="form-control" placeholder="Your Email *" value="" name="fsEmail" required />
                      </div>
                      <div class="form-group">
                        <input type="text" minlength="10" maxlength="11" class="form-control" placeholder="Your Phone *" value="" name="fsPhone" required />
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="You have no Batch" value="" readonly />
                      </div>
                      <input type="submit" name="fsSubmit" class="btnRegister" value="Register" />
                      </form>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                  <h3 class="register-heading">Apply as a requiredPaid Student</h3>
                  <div class="row register-form">
                    <div class="col-md-6">
                      <form action="insert.php" method="post">
                        <div class="form-group">
                          <input type="text" class="form-control" placeholder="First Name *" value="" name="PsFirstName" required />
                        </div>
                        <div class="form-group">
                          <input type="text" class="form-control" placeholder="Last Name *" value="" name="PsLastName" required />
                        </div>
                        <div class="form-group">
                          <input type="email" class="form-control" placeholder="Email *" value="" name="PsEmail" required />
                        </div>
                        <div class="form-group">
                          <input type="text" maxlength="10" minlength="10" class="form-control" placeholder="Phone *" value="" name="PsPhone" required />
                        </div>
                        <div class="form-group">
                          <div class="maxl">
                            <label class="radio inline">
                              <input type="radio" name="Psgender" value="male" checked>
                              <span> Male </span>
                            </label>
                            <label class="radio inline">
                              <input type="radio" name="Psgender" value="female">
                              <span>Female </span>
                            </label>
                          </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password *" value="" name="PsPass" required />
                      </div>
                      <div class="form-group">
                        <input type="password" class="form-control" placeholder="Confirm Password *" value="" name="PsConfirmPass" required />
                      </div>
                      <div class="form-group">
                        <select class="form-control" name="PsBatch" required>
                          <option class="hidden" selected disabled>Please your Batch No.</option>
                          <option> Batch 1</option>
                          <option> Batch 2</option>
                          <option> Batch 3</option>
                          <option> Batch 4</option>
                          <option> Batch 5</option>
                          <option> Batch 6</option>
                          <option> Batch 7</option>
                          <option> Batch 8</option>
                          <option> Batch 9</option>
                          <option> Batch 10</option>
                          <option> Batch 11</option>
                          <option> Batch 12</option>
                          <option> Batch 13</option>
                          <option> Batch 14</option>
                          <option> Batch 15</option>
                          <option> Batch 16</option>
                          <option> Batch 17</option>
                          <option> Batch 18</option>
                          <option> Batch 19</option>
                          <option> Batch 20</option>
                          <option> Batch 21</option>
                          <option> Batch 22</option>
                          <option> Batch 22</option>
                          <option> Batch 23</option>
                          <option> Batch 24</option>
                          <option> Batch 25</option>
                          <option> Batch 26</option>
                          <option> Batch 27</option>
                          <option> Batch 28</option>
                          <option> Batch 29</option>
                          <option> Batch 30</option>
                          <option> Batch 31</option>
                          <option> Batch 32</option>
                          <option> Batch 33</option>
                          <option> Batch 34</option>
                          <option> Batch 35</option>
                          <option> Batch 36</option>
                          <option> Batch 37</option>
                          <option> Batch 38</option>
                          <option> Batch 39</option>
                          <option> Batch 40</option>
                        </select>
                      </div>
                      <input type="submit" name="PsSubmit" class="btnRegister" value="Register" />
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>





    <!-- Latest compiled and minified JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
    </script>
</body>

</html>