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
        $tid=$_GET['tid'];
        $name=$_GET['name'];
        $address=$_GET['address'];
        $contact=$_GET['contact'];
        $email=$_GET['email'];
        $class=$_GET['class'];
        $sql="insert into teacher values('$tid','$name','$address','$email','$contact','$class')";
        $res=$con->query($sql);
        //echo $res;
        if($res)
        {
           $_SESSION['tmsg']="sucessfully added";
           header('Location:show_teachers.php');
        }
 else {
     $_SESSION['tmsg']="unsucessfull";
           header('Location:show_teachers.php');
 }
        ?>
    </body>
</html>
