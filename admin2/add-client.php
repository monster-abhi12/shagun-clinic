<?php
include_once "config/db.php";
if(isset($_POST['submit'])){
    
    $img=$_FILES['img']['name'];
   $img_path="images/".$img;
   move_uploaded_file($_FILES['img']['tmp_name'],$img_path);
   $sql="INSERT INTO tbl_client (img)Values ('$img_path')";
   $query=mysqli_query($con,$sql);
   if($query){
    echo "data is send";
   }else{
    echo "data is not send";

}

}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
       
        <input type="file" name="img">
        <input type="submit" name="submit">

        
    </form>

    
</body>
</html>