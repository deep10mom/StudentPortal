<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include 'db_con.php';

if(isset($_GET['path']))
{
$path=$_GET['path'];
$sql="select * from document where path='$path'";
$res=$con->query($sql);
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment;filename="'.basename($path).'"');
header('Content-Length:'.filesize( $path));
readfile($path);
echo $path;
}
//$sql="select * from document where path=$"
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
       <?php  include 'header_user.php';?>
    <center>
        <div class="col-sm-11">
            <h1>Downloads</h1><bt><br>
        <div class="container">
            
       <table class="table table-hover">
           <thead>
               <tr>
            <th>NAME</th>
            <th>DOWNLOADS</th>
            </tr>
       </thead>
            <?php
            include 'db_con.php';
            $sql="select * from document";
            $result=$con->query($sql);
            if($result->num_rows > 0)
            {
                while($row=$result->fetch_assoc())
                {
                    $name=$row['name'];
                    $path=$row['path'];
                    echo "<tbody>";
                    echo "<tr>";
                    echo "<td>$name</td>";
                    echo "<td><a href='downloads.php?path=$path'>download</a></td>";
                    echo "</tr>";
                    echo  "</tbody>";
                }
            }
            ?>
       </table>
        <?php
        // put your code here
        ?>
        </div>
        </div>
        
    </center>
    <br>
        <?php
        include 'footer.php';
        ?>
    </body>
</html>
