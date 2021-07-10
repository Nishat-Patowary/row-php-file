<?php
 if(isset($_FILES["image"])){
     echo "<pre>";
     print_r($_FILES["image"]);
     echo"</pre>";
     
     echo $file_name=$_FILES["image"]["name"]."<br>";
     echo $file_type=$_FILES["image"]["type"]."<br>";
     echo $file_tmp_name=$_FILES["image"]["tmp_name"]."<br>";
     echo $file_size=$_FILES["image"]["size"]."<br>";
     if(move_uploaded_file($file_tmp_name,"upload-image/" .$file_name)){
         echo "successfully uploader";
     }else{
         echo "could not upload the file";
     }


 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="" method="POST" enctype="multipart/form-data">  
    <input type="file" name="image"><br><br>
    <input type="submit">
    </form>
</body>
</html>