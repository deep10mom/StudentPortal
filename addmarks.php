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
        
        ?>
    <center>
        
        <div class="container">
            <div class="col-sm-11">
                <h1>STUDENTS DETAILS</h1><br>
                
                <?php 
                        session_start();
                if(isset($_SESSION['sucess']))
                {
                    echo "<h2>".$_SESSION['sucess']."</h2>";
                }
                ?>
                <br>
               <?php 
               //session_start();
               include 'db_con.php';
               $class=$_SESSION['class'];
               $sec=$_SESSION['sec'];
               $sql="select * from userinfo  where class='$class' and sec='$sec' ";
               $result=$con->query($sql);
               //echo $result;
               ?>
                
               <?php if($result->num_rows > 0)
               {?>
                   <table class="table table-hover table-responsive">
                    
                    <thead>
                        <tr>
                            <th>STUD_ID</th>
                            <th>NAME</th>
                            <th>CLASS</th>
                            <th>SEC</th>
                            <th>EMAIL</th>
                            <th>AGE</th>
                            <th>CONTACT</th>
                            <th>ADDRESS</th>
                            <th>FATHERS NAME</th>
                            <th>MOTHERS NAME</th>
                            
                          
                        </tr>
                    </thead>
                  <?php  while($row=$result->fetch_assoc())
                   { ?>
                
                
                    <tbody>
                        <tr>
                            <td><a href='update_marks2.php?userid=<?php echo $row['userid']?>'><?php echo $row['userid']?></a></td>
                            <td><?php echo $row['name']?></td>
                            <td><?php echo $row['class'];?></td>
                            <td><?php echo $row['sec'];?></td>
                            <td><?php echo $row['email'];?></td>
                            <td><?php echo $row['age'];?></td>
                            <td><?php echo $row['contact'];?></td>
                            <td><?php echo $row['address'];?></td>
                            <td><?php echo $row['fathers'];?></td>
                            <td><?php echo $row['mother'];?></td>
                           
                        </tr>
                    </tbody>
                     
                
                
                   <?php }?>
                    </table> 
                <?php
                   
               }
 else {
                   echo "<h3>No records found</h3>";
 }?>
        
               
            </div>
        </div>
    </center>
    </div>
    <?php  
include 'footer.php';
    ?>
    </body>
</html>
