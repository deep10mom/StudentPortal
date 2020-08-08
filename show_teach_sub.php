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
        $tid=$_GET['tid'];
        include 'header_user.php';
        include 'db_con.php';
        $sql="select name from teacher where tid='$tid'";
        $res=$con->query($sql);
        if($res->num_rows > 0)
        {
            while($row=$res->fetch_assoc()){
                echo "<center><h2>".$row['name']."</h2></center>";
            }
        }?>
        <div class="col-sm-11">
        <div class="container">
            
        <table class="table table-hover text-center">
            <thead>
                <tr>
                    <th>Subjects</th>
                    
                </tr>
            </thead>
            <?php 
             $tid=$_GET['tid'];
           // $sal="select sname from subjects where subid in (select subid ,class from teach where tid='$tid')";
            $sal="select sname from subjects where subid in (select subid from teach where tid='$tid') ";
            $ras=$con->query($sal);
            if($ras->num_rows > 0)
            {
                while($row=$ras->fetch_assoc()){?>
            <tbody>
                <tr>
                    <th> <?php echo $row['sname'];?></th>
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
