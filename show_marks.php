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
        include 'header_user.php';
        include 'db_con.php';
        if(empty($_SESSION['student']))
        {
        //$name=$_SESSION['student'];
        //if(empty($name))
        {
           header('Location:index.php'); 
        }
        }
 else {
     
        $name=$_SESSION['student'];
        $sql="select * from marks where userid='$name'";
        $res=$con->query($sql);?>
        <div class="col-sm-11">
    <center>
        <h1 style="color: red;">MARKS OBTAINED</h1><br>
        <div class="container">
        <table class="table table-hover">
            <thead>
                <tr>
                    
                     <th>MATHS</th>
                     <th>SCIENCE</th>
                     <th>GEOGRAPHY</th>
                     <th>HINDI</th>
                     <th>HISTORY</th>
                     <th>ENGLISH</th>
                     <th>COMPUTER</th>
                     <th>ATTENDENCE</th>
                </tr>
            </thead>
        <?php if($res->num_rows > 0)
        {
            while($row=$res->fetch_assoc())
            {?>
            <tbody>
                <tr>
                    <td><?php echo $row['maths'];?></td>
                    <td><?php echo $row['science'];?></td>
                    <td><?php echo $row['geography'];?></td>
                    <td><?php echo $row['hindi'];?></td>
                    <td><?php echo $row['history'];?></td>
                    <td><?php echo $row['english'];?></td>
                    <td><?php echo $row['computer'];?></td>
                    <td><?php echo $row['attendence'];?></td>
                    
                </tr>
            </tbody>  
            <?php  }
        }
 }
        // put your code here
        ?>
        </table>
        </div>
    </center>
    </div>
    </div>
    <br>
        <?php
        include 'footer.php';
        ?>
    </body>
</html>
