<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <title></title>
        <style>
.vertical-menu {
    width: 150px;
}

.vertical-menu a {
    background-color: #eee;
    color: black;
    display: block;
    padding: 12px;
    text-decoration: none;
}

.vertical-menu a:hover {
    background-color: #ccc;
}

.vertical-menu a.active {
    background-color: #4CAF50;
    color: white;
}
</style>
    </head>
    <body>
        <div class="row">
        <div class="col-sm-1">
        <div class="vertical-menu">
  <a href="#" class="active">Home</a>
  <a href="gallery.php">gallery</a>
  <a href="downloads.php">downloads</a>
  <a href="stud_details.php">my details</a>
  <a href="#">Link 4</a>
  <a href="#">Link 1</a>
  <a href="#">Link 2</a>
  <a href="#">Link 3</a>
  <a href="logout.php">log out</a>
</div>
        </div>
            <div class="col-sm-11">
                <div class="container">
            <div class="jumbotron text-center">
                <?php
                session_start();
        // put your code here
        echo "<center><h1>welcome student</h1></center>";
        ?>
            </div> 
            </div>
            </div>
            <br>
           
        
                </div>
        <br>
        <?php
        include 'footer.php';
        ?>
    </body>
</html>
