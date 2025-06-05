<?php
include_once "config/db.php";
$id=$_GET['id'];
if(isset($_POST['submit'])){
    $name=$_POST["name"];
    $img=$_FILES['img']['name'];
   $img_path="images/".$img;
   move_uploaded_file($_FILES['img']['tmp_name'],$img_path);
   $sql="UPDATE tbl_product set name='$name', img='$img_path'where id='$id'";
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
    <?php $sql2="SELECT *FROM tbl_product where id ='$id'";

$query2=mysqli_query($con,$sql2);   
while($row=mysqli_fetch_assoc($query2)){




?>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="">name</label>
        <input type="text" name="name" value="<?php echo $row['name'] ?>">

        <input type="file" name="img">
        <input type="submit" name="submit">

        
    </form>
<?php

}
?>

    
</body>
</html>