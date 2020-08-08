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
         
        if(isset($_GET['submit']))
        {
            session_start();
            include 'db_con.php';
            $tid=$_GET['tid'];
            $sid=$_GET['sid'];
            $class=$_GET['class'];
            $sql="insert into teach values ('$tid','$sid','$class')";
            $res=$con->query($sql);
            if($res)
            {
              $_SESSION['addmsg'] ="alloted";
               header('Location:show_allotment.php');
            }
 else {
     $_SESSION['addmsg']="already alloted";
      header('Location:show_allotment.php');
 }

        }
        ?>
        <?php
        // put your code here
        include 'header.php';
       include 'db_con.php';
        $sql="select tid from teacher ";
        $sal="select subid from subjects ";
        $res=$con->query($sql);
        $ras=$con->query($sal);
        ?>
        
        
    <center><h2>select tid </h2></center>
        <div class="col-sm-11">
        <div class="container">
            <form action="alot_sub.php">
        <select class="form-control" name="tid">
        <?php if($res->num_rows > 0)
        {
            while($row=$res->fetch_assoc())
            {?>
            <option><?php echo $row['tid'];?></option>
            <?php }
        }
        ?>
        
            
        </select>
            <br>
            <center> <h2>select sid</h2></center>
            <select class="form-control" name="sid">
        <?php if($ras->num_rows > 0)
        {
            while($row=$ras->fetch_assoc())
            {?>
            <option><?php echo $row['subid'];?></option>
            <?php }
        }
        ?>
        
            
        </select>
            <br><br>
            <div class="form-group">
                <label for="class"><center>Enter class</center></label>
            <input class="form-control" id="class" name="class">
        </div>
            <input type="submit" class="btn btn-success" name="submit">
            </form>   
        </div>
        </div>
    </div>
    <br>
        <?php
        include 'footer.php';
        ?>
    </body>
</html>
