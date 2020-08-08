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
        session_start();
        // put your code here
        include 'db_con.php';
        $sid=$_GET['sid'];
        $sname=$_GET['sname'];
        $sql="insert into subjects values('$sid','$sname')";
        $res=$con->query($sql);
        if($res)
        {
           $_SESSION['submsg']="sucessfully added";
           header('Location:show_subjects.php');
        }
 else {
     $_SESSION['submsg']="unsucessfull";
           header('Location:show_subjects.php');
 }
        ?>
    </body>
</html>
