<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>
<!-- php -->
<?php 

$ConverTo = $_POST['to'];
$amount = $_POST['amount'];
//convert function
function CurrConvert($amount,$ConverTo){

if ($_POST['to']=='USD') {
    return $amount." ".$ConverTo." To ". " = ". number_format($amount*86.82)." ". " Taka";
} 
elseif($_POST['to']=='EUR') {
    return $amount." ".$ConverTo." To ". " = ".($amount*91.81) ." ". " Taka";
}
elseif($_POST['to']=='CAD') {
    return $amount." ".$ConverTo." To ". " = ".number_format($amount*67.23 )  ." ". " Taka";
}
elseif($_POST['to']=='INR') {
    return $amount." ".$ConverTo." To ". " = ".number_format($amount*1.12  )  ." ". " Taka";
}
elseif($_POST['to']=='GBP') {
    return $amount." ".$ConverTo." To ". " = ".number_format($amount*108.34)  ." ". " Taka";
}
elseif($_POST['to']=='SGD') {
    return $amount." ".$ConverTo." To ". " = ".number_format($amount*62.48 )  ." ". " Taka";
}
elseif($_POST['to']=='KWD') {
    return $amount." ".$ConverTo." To ". " = ".number_format($amount*280.51)  ." ". " Taka";
}
else{
    return "Please Select the Right Currency ";
}
}

?>




    <div class="container py-3 mb-4">
        <div class="text-center mt-5 section=heading">
            <h2>Assignment 6</h2>
        </div>
        <div class="row align-items-center justify-content-center pt-3">
            <!-- result col -->
            <div class="col-md-4 ">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col ">Result</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <h6><?php  echo $ConverTo." To Taka = ";  ?></h6>
                                <h4 class="text-success"><?php  echo CurrConvert($amount,$ConverTo); ?></h4>
                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>
            <div class="col-md-6">
                <form action="" method="post">
                    <div class="form-row">
                        <div class="col-4">
                            <label class="h6 form-label" for="amount">Amount</label>
                            <input id="amount" name="amount" type="text" class="form-control" placeholder="Enter Amount"
                                required>
                        </div>
                        <div class="col-4">
                            <label class="h6 form-label" for="to">To</label>
                            <select class="form-control" name="to" id="to" required>
                                <option value="USD" required>USD- US Dollar</option>
                                <option value="EUR">EUR- Euro</option>
                                <option value="CAD">CAD- Canadian Dollar</option>
                                <option value="INR">INR- Indian Rupee</option>
                                <option value="GBP">GBP- British Pound</option>
                                <option value="SGD">SGD- Singapore Dollar</option>
                                <option value="KWD">KWD- Kuwaiti Dinar</option>

                            </select>
                        </div>

                        <div class="col-4">
                            <label class="h6 form-label" for="from">BDT- Taka</label>
                            <input disabled id="from" name="from" src="img/bdt.svg" type="image"
                                class="form-control w-25 px-0 text-left justify-content-start" placeholder="From"
                                required>
                        </div>

                        <div class="col-2 mt-3">
                            <input name="submit" class="btn btn-primary" type="submit" value="Convert">
                        </div>

                    </div>
                </form>
            </div>
        </div>

    </div>


</body>

</html>