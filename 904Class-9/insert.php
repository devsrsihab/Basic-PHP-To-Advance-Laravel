<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insert </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
        <!-- Free Student -->
    <div class="conatiner">
        <div class="row d-flex justify-content-center my-5">
            <div class="col-12">
                <div class="insert text-cente w-50 m-auto"> 
                            <?php   
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
                 
                            
                            ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Paid Student -->
    <div class="conatiner">
        <div class="row d-flex justify-content-center my-5">
            <div class="col-12">
                <div class="insert text-cente w-50 m-auto"> 
                            <?php 
                            if ( isset($_POST['PsSubmit']) ) {
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
                </div>
            </div>
        </div>
    </div>
</body>
</html>