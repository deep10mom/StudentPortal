<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>upload image</title>
        <style>
            
        </style>
    </head>
    <body>
        <?php 
        include 'header.php';
        ?>
    <center>
       
        <h1 style="color:red;">Upload the images</h1><br><br>
        <form action="admin.php" method="post" enctype="multipart/form-data" >
            <input type="file" name="fileupload">
            <br>
            <input type="submit" class="btn btn-success" name="submit" value="upload">
        </form>
        <?php
        // put iyour code here
        if(isset($_POST['submit']))
        {
            $target_dir='image_gallery/';
            $target_file= $target_dir.$_FILES["fileupload"]["name"];
            $size=$_FILES["fileupload"]["size"];
            $type=$_FILES["fileupload"]["type"];
            
            move_uploaded_file($_FILES["fileupload"]["tmp_name"], $target_file);
            echo "<br>";?>
        <h3 style="color: green;"><center>uploaded</center></h3>
            
        <?php }
       
        ?>
        <br>
        
    </center>
    </body>
</html>
