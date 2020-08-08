
<!DOCTYPE html>
<html lang="en">
<head>
    
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Student Portal</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Page 1-1</a></li>
          <li><a href="#">Page 1-2</a></li>
          <li><a href="#">Page 1-3</a></li>
          
        </ul>
      </li>
      <li><a href="#">Page 2</a></li>
      <li style="color:red;"><?php 
          session_start();
          if(isset($_SESSION['msg']))
          {
                     echo "<h3>".$_SESSION['msg']."</h3>";
          }
          ?></li>
    </ul>
     
    <ul class="nav navbar-nav navbar-right">
        <!-- login modal -->
        <li><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in"></span> Login</button></li>
         <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
         <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <div>
              <center><h2 style="color:green;">LOGIN</h2></center>
              <form action="login.php" style="margin-left: 10px;">
  <div class="form-group">
    <label for="username">Username:</label>
    <input type="text" class="form-control" name="username"/>
  </div>
  <div class="form-group">
    <label for="pass">password:</label>
    <input type="password" class="form-control" name="pass"/>
  </div>
  
  <button type="submit" class="btn btn-success">Submit</button>
</form>
</div>
        </div>
        
        
      </div>
    </div>
  </div>
         <!-- login modal ends -->
         
         
         
         <?php 
                   include 'signupmodal.php';
         ?>
         
         
         
        
    </ul>
  </div>
</nav>
    
    
    
    
    <center style="color:red;"><?php 
         /*session_start();
          if(isset($_SESSION['msg']))
          {
              if(!empty($_SESSION['msg']))
                     echo $_SESSION['msg'];
          }
          */?></center>
    <center><h1>Welcome!! To Student Portal!!</h1> </center>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
          <img src="image/book_php.jpg" alt="book" style="width:100%;">
        <div class="carousel-caption">
          <h3>Books are your best friends</h3>
          <p><b>Reading is always so much fun!</b></p>
        </div>
      </div>

      <div class="item">
          <img src="image/books_php1.jpg" alt="books" style="width:100%;">
        <div class="carousel-caption">
          <h3>books</h3>
          <p>Thank you!</p>
        </div>
      </div>
    
      
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  




</div>
<?php 
         include 'footer.php';
?>
</body>
</html>
