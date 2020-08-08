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
        include 'header.php';
        $userid=$_GET['userid'];
        ?>
        <div class="col-sm-11">
        <div class="container">
  <h2>Enter marks</h2>
  <form action="update_marks3.php">
     <div class="form-group">
      <label for="userid1">userid</label>
      <input type="text" class="form-control" id="userid1"  name="userid1" readonly="" value="<?php  echo $userid;?>">
    </div> 
    <div class="form-group">
      <label for="english">English</label>
      <input type="text" class="form-control" id="english"  name="english">
    </div>
      <div class="form-group">
      <label for="maths">Maths</label>
      <input type="text" class="form-control" id="maths"  name="maths">
    </div>
      <div class="form-group">
      <label for="hindi">Hindi</label>
      <input type="text" class="form-control" id="hindi"  name="hindi">
    </div>
      <div class="form-group">
      <label for="science">Science</label>
      <input type="text" class="form-control" id="science"  name="science">
    </div>
      <div class="form-group">
      <label for="geo">Geography</label>
      <input type="text" class="form-control" id="geo"  name="geo">
    </div>
      <div class="form-group">
      <label for="his">History</label>
      <input type="text" class="form-control" id="his"  name="his">
    </div>
      <div class="form-group">
      <label for="comp">Computer</label>
      <input type="text" class="form-control" id="comp"  name="comp">
    </div>
    <div class="form-group">
      <label for="attend">Attendence</label>
      <input type="text" class="form-control" id="attend"  name="attend">
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
