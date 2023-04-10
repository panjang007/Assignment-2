<?php

include 'dbconnection.php';

$startcon = OpenCon();

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$username = $_POST['username'];
$password = $_POST['password'];

//password hashing function
$option = [
    'cost' => 12,
];

$hashedpass = password_hash($password, PASSWORD_BCRYPT, $option);

$sqlinsert = "INSERT INTO LOGIN VALUES ('$fname', '$lname', '$email', '$phone', '$address', '$username', '$hashedpass')";

//processing the data from the form into the db
$result = mysqli_query($startcon, $sqlinsert);

?>