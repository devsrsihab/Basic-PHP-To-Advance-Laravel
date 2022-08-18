<?php
include 'database.php';
// database file include
// include 'database.php';
// $obj = new database();
// $obj->update("students",["Name"=>"alu","Age"=>"34","City"=>"malu salu"],"id='3'");
// echo "Insert Result is: <br>";
// echo "<pre>";
// print_r($obj->getResult());
// echo "</pre>";
// echo "<br>";

// delete data
$obj = new database();
$obj->delete("students","Age='33'");
echo "Insert Result is: <br>";
echo "<pre>";
print_r($obj->getResult());
echo "</pre>";
echo "<br>";

?>