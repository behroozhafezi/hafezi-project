<?php
$servername = "localhost";
$username = "hafezi"; 
$password = "hH@123456"; 
$dbname = "hafezidb";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("اتصال ناموفق: " . $conn->connect_error);
}


$user = $_POST['username'];
$pass = $_POST['password'];


$sql = "INSERT INTO users (username, password) VALUES ('$user', '$pass')";
if ($conn->query($sql) === TRUE) {
    echo "کاربر جدید با موفقیت ثبت شد";
} else {
    echo "خطا: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
