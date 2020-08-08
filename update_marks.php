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
        include 'db_con.php';
        
        $sql="select distinct(class) from userinfo ";
                $result=$con->query($sql);?>
         <div class="col-sm-11">
             <div class="container">
                 <div class="col-sm-10">
                    
        <form action="update_marks.php">
            <h2>Select class</h2>
            <select class="form-control" name="course">
                <?php while($row=$result->fetch_assoc())
                {?>
                   
  <option><?php echo $row['class'];?></option>
  

               <?php } ?>
        </select>
           <?php $sql1="select distinct(sec) from userinfo ";
                $result=$con->query($sql1);?>
            <br>
            <h2>Select section</h2>
            <select class="form-control" name="course1">
                <?php while($row=$result->fetch_assoc())
                {?>
                   
  <option><?php echo $row['sec'];?></option>
  

               <?php } ?>
        </select>
            <br>
            <input type="submit" class="btn btn-success" name ="submit" value="submit">
        </form>
        <?php if(isset($_GET['submit']))
        {
     session_start();
            $_SESSION['class']=$_GET['course'];
            $_SESSION['sec']=$_GET['course1'];
            header('Location:addmarks.php');
        }
?>
    </div>
             </div>
     
</div>
        <br>
        
    </body>
</html>
