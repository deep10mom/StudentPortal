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
        // put your code here
        session_start();
        include 'db_con.php';
      
          $maths=$_GET['maths'];
          //echo $maths;
        //echo 'hi';
        if(isset($_GET['submit']))
        //if($_SERVER["REQUEST_METHOD"] == "POST")
        {
            echo 'hi<br>';
            $uerid1=$_GET['userid1'];
            $eng=$_GET['english'];
            $hindi=$_GET['hindi'];
            $maths=$_GET['maths'];
            $comp=$_GET['comp'];
            $sci=$_GET['science'];
            $geo=$_GET['geo'];
            $his=$_GET['his'];
            $attend=$_GET['attend'];
            $sql="insert into marks values ('$uerid1','$maths','$sci','$geo','$hindi','$his','$eng','$comp','$attend') ";
            $res=$con->query($sql);
           // echo $res;
            if($res)
            {
                $_SESSION['sucess']='marks added sucessfully';
                header('Location: addmarks.php');
               
            }
 else {
     $_SESSION['sucess']="marks added unsucessfull";
                header('Location: addmarks.php');
 }
 
 }
        
        ?>
    </body>
</html>
