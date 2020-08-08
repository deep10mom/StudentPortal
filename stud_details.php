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
        <title>details</title>
    </head>
    <body>
        <?php 
        include 'header_user.php';
        ?>
        <div class="col-sm-11">
            <div class="container">
        <?php
        // put your code here
        session_start();
        include 'db_con.php';
        if(empty($_SESSION['student']))
        {
            header('Location:index.php'); 
        }
 else {
     
 
        $userid=$_SESSION['student'];
        //echo $userid;
        $sql="select * from userinfo where  userid='$userid'";
        $res=$con->query($sql);
        if($res->num_rows > 0){
            while($row=$res->fetch_assoc()){
                ?>
        <table class=" table table-hover">
            <thead>
                <tr>
                    <th>NAME:</th>
                    <th><?php echo $row['name']; ?></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><strong>CLASS:</strong></td>
                    <td><?php echo $row['class']; ?></td>
                </tr>
                <tr>
                    <td><strong>SEC:</strong></td>
                    <td><?php echo $row['sec']; ?></td>
                </tr>
                <tr>
                    <td><strong>ADDRESS:</strong></td>
                    <td><?php echo $row['address']; ?></td>
                </tr>
                <tr>
                    <td><strong>CONTACT:</strong></td>
                    <td><?php echo $row['contact']; ?></td>
                </tr>
                <tr>
                    <td><strong>EMAIL:</strong></td>
                    <td><?php echo $row['email']; ?></td>
                </tr>
                <tr>
                    <td><strong>FATHERS' NAME:</strong></td>
                    <td><?php echo $row['fathers']; ?></td>
                </tr>
                <tr>
                    <td><strong>MOTHERS' NAME:</strong></td>
                    <td><?php echo $row['mother']; ?></td>
                </tr>
                <tr>
                    <td><strong>AGE:</strong></td>
                    <td><?php echo $row['age']; ?></td>
                </tr>
                <tr>
                    <td><strong>DATE OF BIRTH:</strong></td>
                    <td><?php echo $row['date']; ?></td>
                </tr>
                </tbody>
        </table>
            
            
        
        
        
        
        
           <?php }
        }
 }?>
            </div>
        </div>
    </div>
    <br>
        <?php
        include 'footer.php';
        ?>
    </body>
</html>
