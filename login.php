<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link rel = "stylesheet" href = "library.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <!-- <div class = "login">
        <form action="loginprocess.php" method = "POST">
            <input type="text" name = "Username"><br>
            <input type="password" name ="Pword"><br>
            <input type="submit" value = "Login">
        </div> -->
        <div class = "login jumbotron">
        <h1>Log In</h1>
        <img src="oundle.jpg" class = "image" alt="logo">
        </div>
        <div class ="container">
        <form action="loginprocess.php" method = "POST">
        
        <div class="form-group">
  <label for="usr">Username:</label>
  <input type="text" class="form-control" id="usr" name="Username">
</div>
<div class="form-group">
  <label for="pwd">Password:</label>
  <input type="password" class="form-control" id="pwd" name="Pword">
</div>
<input type="submit" class = "btn btn-dark" value = "Login">
        </form>
        </div>
    </body>
</html>

