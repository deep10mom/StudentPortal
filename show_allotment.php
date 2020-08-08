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
        <?php
        if(isset($_GET['tid'])&& isset($_GET['sid']))
        {
           include 'db_con.php';
           $tid=$_GET['tid'];
           $sid=$_GET['sid'];
           $sql="delete from teach where tid='$tid' and subid='$sid'";
           $res=$con->query($sql);
           
        }
        ?>
        <?php
        // put your code here
        include 'header.php';
        include 'db_con.php';
        $sql="select teacher.tid,teacher.name,subjects.subid,subjects.sname,teach.class from teacher ,subjects , teach  where teacher.tid=teach.tid and subjects.subid=teach.subid";
        //$sql="select teach.tid from teach  ";
        $reasult=$con->query($sql);?>
        <div class="col-sm-11">
        <div class="container">
            <center><h2 style="color: green;">teacher and subjects</h2>
                <h3><?php
                    session_start();
                    if(isset($_SESSION['addmsg']))
                    {
                        echo $_SESSION['addmsg'];
                    }
                ?></h3>
            
            </center>
        <table class="table table-hover text-uppercase">
            <thead>
                <tr>
                    <th style="color: red;">TEACHER_ID</th>
                    <th style="color: red;">TEACHER NAME</th>
                    <th style="color: red;">SUB_ID</th>
                    <th style="color: red;">SUBJECT</th>
                    <th style="color: red;">CLASS</th>
                    <th style="color: red;">ACTION</th>
                </tr>
            </thead>
            
       <?php if($reasult->num_rows > 0){
            while($row=$reasult->fetch_assoc()){?>
            <tbody>
                <tr>
                    <th><?php  echo $row['tid'];?></th>
                    <th><?php  echo $row['name'];?></th>
                    <th><?php  echo $row['subid'];?></th>
                    <th> <?php echo $row['sname'];?></th>
                    <th><?php echo $row['class'];?></th>
                    <th><a href="show_allotment.php?tid=<?php  echo $row['tid'];?>&sid=<?php  echo $row['subid'];?>">delete</a></th>
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
