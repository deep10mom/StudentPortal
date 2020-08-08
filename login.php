<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        session_start();
        $pass='';
        $username='root';
        $server='localhost';
        $db='onlinebookstore';
        $con= new mysqli($server, $username, $pass,$db);
        if($con)
        {
       
       
        $userid=$_REQUEST['username'];
        
        $password=$_REQUEST['pass'];
        
        $sql="select * from userinfo where userid='$userid' and password='$password'";
        $result = $con->query($sql);
        //echo $sql;
        //$result= mysqli_query($con, $sql);
        if ($result->num_rows > 0) {
            while($row=$result->fetch_assoc())
            {
             if($row['userid']=='admin' && $row['password']=='admin')  
             {
             header('Location: admin_home.php');
             }
             else
             {
                 $_SESSION['student']=$userid;
            header('Location: user.php');
            }
        }
        }
 else {
     
     $_SESSION['msg']='please signup first';
     header('Location: index.php');
 }
        
        }
        
    ?>
    </body>
</html>
