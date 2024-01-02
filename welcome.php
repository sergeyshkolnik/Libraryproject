<!DOCTYPE html>
<html>
    <head>
        <title>Oundle School Library</title>
        <link rel = "stylesheet" href = "library.css">
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <div class = "welcome">
        <div class = "jumbotron">
        <h1>Welcome to the OS Library</h1>
        </div>
        
        <div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="library1.jpg" alt="Los Angeles" width="600" height="250">
    </div>
    <div class="carousel-item">
      <img src="library2.jpg" alt="Chicago" width="600" height="250">
    </div>
    <div class="carousel-item">
      <img src="library3.jpg" alt="New York" width="600" height="250">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
      


           
        <p>This is a library database for students and members of staff</p>
        <a href="login.php" class = "btn btn-dark" role = "button"> Login</a>
        </div>
    </body>
</html>