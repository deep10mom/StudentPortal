<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <meta charset="UTF-8">
        <title>upload document</title>
    </head>
    <body>
        
    
        <?php 
include 'header.php';
include 'db_con.php';
if(isset($_POST['submit']))
{
$name=$_POST['filename'];
$path=$_FILES['myfile']['name'];
$path_tmp=$_FILES['myfile']['tmp_name'];
$path_fol="documents/$path";
move_uploaded_file($path_tmp, $path_fol);
$sql="insert into document values('$name','$path.basename')";
if($con->query($sql)==TRUE)
{?>
        <h3 style="color: green;">uploaded</h3>
<?php }
 else {
    echo 'error while uploading';
}
}
?>
        <h1>
            <center>  Upload files :</center>
        </h1>
        <br>
        <div class="col-sm-11">
        <div class="container">
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <h4 style="color: purple;">Enter the name of document: </h4><input type="text" name="filename" >  
            
            <br>
            <br>
            <br>
            <input type="file" name="myfile" >
            <br>
            <br>
            <br>
            <input type="submit" class="btn btn-success" name="submit" value="upload">
                
                
        </form>
        </div>
        </div>
    </div>
       
    <br>
        
    
    </body>
</html>
