<?php

include 'dbconnection.php';

$startcon = OpenCon();

$username = $_POST['username'];
$password = $_POST['password'];

//check entered password with the hashed one in db
$option = [
    'cost' => 12,
];

$sqlauthenticate = "SELECT password FROM login WHERE username = '$username'";

//executing the sql command
$result = $startcon->query($sqlauthenticate);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $passcheck = $row["password"];
    }
} else {
    echo "0 results";
}

if (password_verify($password, $passcheck)) {
    echo '<script>alert("Login Successful")</script>';
} else {
    echo '<script>alert("Login Failed")</script>';
}

?>
