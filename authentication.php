<?php

include 'dbconnection.php';

$startcon = OpenCon();

$username = $_POST['username'];
$password = $_POST['password'];

//check entered password with the hashed one in db
$option = [
    'cost' => 12,
];

$hashcheck = password_hash($password, PASSWORD_BCRYPT, $option);

$sqlauthenticate = "SELECT * FROM LOGIN WHERE username = '$username' and password = '$hashcheck'";

//result of the search
$result = mysqli_query($startcon, $sqlauthenticate);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);

if ($count == 1) {
    echo '<script type="text/JavaScript"> 
     alert("Successful");
     </script>';
} else {
    echo '<script type="text/JavaScript"> 
     alert("Login failed");
     </script>';
    exit();
}
?>