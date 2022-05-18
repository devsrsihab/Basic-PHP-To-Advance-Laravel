



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
<?php 

$regEX = "/^[a-zA-Z\s]+$/";
if (isset($_POST['submit'])) {

    if (preg_match($regEX, $_POST['text'])) {
        $output = "<span style=\"color: green;font-size: 28px\">✔</span>";
    } else {
        $output = "<span style=\"color: red\">❌</span>";
    }
   
}
?>

<form method="post" >
<input type="text" name="text" autofocuse/>
<input type="submit" name ="submit">
<?php if(isset($output)){echo $output;} ?>
</form>



</body>
</html>









