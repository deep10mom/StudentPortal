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
        $pass='';
        $username='root';
        $server='localhost';
        $db='onlinebookstore';
        $con= mysqli_connect($server, $username, $pass,$db);
        if($con)
        {
       
       
        $username=$_REQUEST['userid'];
        $name=$_REQUEST['name'];
        $email=$_REQUEST['email'];
        $age=$_REQUEST['age'];
        $address=$_REQUEST['address'];
        $password=$_REQUEST['password'];
        $contact=$_REQUEST['contact'];
        $class=$_REQUEST['Class'];
        $sec=$_REQUEST['Sec'];
        $father=$_REQUEST['father'];
        $mother=$_REQUEST['mother'];
        $Dob=$_REQUEST['D.O.B'];
        $sql="insert into userinfo values('$username','$name','$email','$age','$contact','$address','$password','$class','$sec','$father','$mother','$Dob')";
        
        echo $sql;
        $query= mysqli_query($con, $sql);
        if($query)
        {
            $_SESSION['msg']='successfully registered';
            header('Location:   index.php');
        }
 else {
             $_SESSION['msg']='registreation  failed';
            header('Location:   index.php');
 }
            
        
       
        
       }
 else 
           
 {
           echo 'not connected';
 }
 
       
       $con->close();
      
        
        
        ?>
    </body>
</html>
