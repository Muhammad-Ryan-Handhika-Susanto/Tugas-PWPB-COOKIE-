<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container">
    <form action="cookie.php" method="post">
      <h1>Login</h1>
      <div class="form-group">
        <label for="username">Username :</label>
        <input type="text" name="username" id="username">
      </div>
      <div class="form-group">
        <label for="password">Password :</label>
        <input type="password" name="password" id="password">
      </div>
      <div class="form-group">
        <input type="checkbox" name="remember" value="1"> Remember Me
      </div>
      <input type="submit" name="submit" value="Login">
    </form>
  </div>
</body>
</html>