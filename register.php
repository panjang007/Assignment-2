<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>

<body>
    <form name="register" method="post" action="newuser.php">
        <label for="fname">First Name: </label>
        <input type="text" id="fname" name="fname">
        <br>
        <label for="lname">Last Name: </label>
        <input type="text" id="lname" name="lname">
        <br>
        <label for="email">Email: </label>
        <input type="email" id="email" name="email">
        <br>
        <label for="phone">Phone Number: </label>
        <input type="text" id="phone" name="phone">
        <br>
        <label for="address">Address: </label>
        <input type="text" id="address" name="address">
        <br>
        <label for="username">Username: </label>
        <input type="text" id="username" name="username">
        <br>
        <label for="password">Password: </label>
        <input type="password" id="password" name="password">
        <br>
        <button id="registerButton">Register</button>
    </form>
</body>

</html>