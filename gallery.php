<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title> gallery</title>
    
    <style>
        body{
            margin: 0%;
            padding: 0%;
            background: #ccc;
        }
        #thumbnail{
            
            width: 30%;
             margin: 10px;
            float: left;
            padding: 20px;
            box-sizing: border-box;
        }
        #thumbnail img{
           
            width: 100%;
            height:100%;
            margin: 10px;
            background: #fff;
        }
    </style>
    </head>
    <body>
        <main>
            <?php 
            include 'header_user.php';
            ?>
            <div class="col-sm-11">
            <div class="container">
    <center><h1>gallery</h1></center>
    
    <br><br>
        <?php
        $dir= glob('image_gallery/{*.jpg,*.png}',GLOB_BRACE);
        foreach ($dir as $value){
            
        
        ?>
        <div id="thumbnail">
            <img src="<?php echo $value?>" alt="<?php echo $value?>" style="width: 70%;height: 50%;">
        </div>
        <?php 
        }
        ?>
            </div>
            </div>
        </div>
        </main>
        <br>
        <?php
        include 'footer.php';
        ?>
    </body>
</html>
