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
    </head>
    <body>
        <?php
        // put your code here
        include 'header.php';
        include 'db_con.php';?>
        <div class="col-sm-11">
        <div class="container">
            
            <center><h2>Enter teacher details</h2></center>
            <?php
            session_start();
            if(isset($_SESSION['tmsg']))
            {
                echo "<h2>".$_SESSION['tmsg']."</h2>";
            }
            ?>
            <form action="teacher_details2.php">
     <div class="form-group">
      <label for="tid">teacherid</label>
      <input type="text" class="form-control" id="tid"  name="tid">
    </div> 
    <div class="form-group">
      <label for="name">teacher name</label>
      <input type="text" class="form-control" id="name"  name="name">
    </div>
      <div class="form-group">
      <label for="address">Address</label>
      <input type="text" class="form-control" id="address"  name="address">
    </div>
      <div class="form-group">
      <label for="contact">Contact</label>
      <input type="text" class="form-control" id="contact"  name="contact">
    </div>
      <div class="form-group">
      <label for="email">Email</label>
      <input type="email" class="form-control" id="email"  name="email">
    </div>
      <div class="form-group">
      <label for="class">Class teacher</label>
      <input type="text" class="form-control" id="class"  name="class">
    </div>
      
      <input type="submit" name="submit" class="btn btn-success">
  </form>
</div>
    </div>
    </div> 
        <br>
        <?php
        include 'footer.php';
        ?>
    </body>
</html>
