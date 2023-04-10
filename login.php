<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login</title>
</head>

<body>
  <form name="login" method="post" action="authentication.php">
    <label for="username">Username</label>
    <input type="text" id="username" name="username" />
    <br>
    <label for="password">Password</label>
    <input type="password" id="password" name="password" />
    <br>
    <button id="loginButton">Login</button>
    <br>
    <a href="register.php">Register</a>
  </form>
</body>

</html>