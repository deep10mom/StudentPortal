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
    </head>
    <body>
        <h3><?php
         /*include 'db_con.php';
                    if(isset($_GET['sid']))
                    {
                        $value=$_GET['sid'];
                                
                        $sql="delete from subjects where subid='$value'";
                        $res=$con->query($sql);
                    }*/
                ?></h3>
        <?php
        // put your code here
        include 'header_user.php';
        include 'db_con.php';
        //$sql="select teacher.tid,teacher.name,subjects.subid,subjects.sname,teach.class from teacher ,subjects , teach  where teacher.tid=teach.tid and subjects.subid=teach.subid";
        $sql="select * from teacher  ";
        $reasult=$con->query($sql);?>
        <div class="col-sm-11">
        <div class="container">
            <center><h2 style="color: green;">teacher details</h2>
                <h3><?php 
                    session_start();
                if(isset($_SESSION['tmsg']))
                {
                    echo $_SESSION['tmsg'];
                }
                ?></h3> 
            
            </center>
        <table class="table table-hover text-uppercase">
            <thead>
                <tr>
                    <th style="color: red;">TEACHER_ID</th>
                    <th style="color: red;">TEACHER NAME</th>
                    <th style="color: red;">ADDRESS</th>
                    <th style="color: red;">CONTACT</th>
                    <th style="color: red;">EMAIL</th>
                    <th style="color: red;">CLASS</th>
                    
                    
                </tr>
            </thead>
            
       <?php if($reasult->num_rows > 0){
            while($row=$reasult->fetch_assoc()){?>
            <tbody>
                <tr>
                    <th><a href="show_teach_sub.php?tid=<?php  echo $row['tid'];?>"><?php  echo $row['tid'];?></a></th>
                    <th><?php  echo $row['name'];?></th>
                    <th><?php  echo $row['address'];?></th>
                    <th><?php  echo $row['contact'];?></th>
                    <th><?php  echo $row['email'];?></th>
                    <th><?php  echo $row['class'];?></th>
               
            </tr>
            </tbody>
            <?php }
        }
        ?>
        </table>
        </div>
        </div>
    </div>
    <br>
        <?php
        include 'footer.php';
        ?>
    </body>
</html>
