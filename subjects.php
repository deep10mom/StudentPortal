<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            h2{
                color: red;
            }
        </style>
    </head>
    <body>
        
        
        <?php
        
        // put your code here
        include 'header.php';
        //include 'db_con';
        ?>
        <div class="col-sm-11">
        <div class="container">
            
            <center> <h2>Enter subject details</h2></center>
  <?php
  session_start();
        if(isset($_SESSION['submsg']))
        {
            echo "<h2>".$_SESSION['submsg']."</h2>";
        }
        ?>
  <form action="subject2.php">
     <div class="form-group">
      <label for="sid">subjectid</label>
      <input type="text" class="form-control" id="sid"  name="sid">
    </div> 
    <div class="form-group">
      <label for="sname">subject name</label>
      <input type="text" class="form-control" id="sname"  name="sname">
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
