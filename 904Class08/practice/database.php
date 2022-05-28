<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "gpagreat";
//connect with database

$conn = mysqli_connect($servername, $username, $password, $database);


//check connection status

if (!$conn) {
    die("Failed to connect". mysqli_connect_error());
}else {
    echo "Connection Successfully";
}

echo "<br>";
$sql = "INSERT INTO `gpagreat` (`sno`, `student_name`, `bangla`, `english`, `math`, `science`, `physics`, `chemestry`, `total_mark`, `avrage_mark`, `great`) VALUES ('3', 'siam', '12', '22', '24', '13', '42', '55', '45', '34', 'D');";

if (mysqli_query($conn, $sql)) {
    echo "Successfully inserted";
}
else {
    echo "Failed to insert". mysqli_error($conn);
}
mysqli_close($conn);
?>