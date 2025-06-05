<?php
include_once "config/db.php";
$sql="SELECT *FROM tbl_product";
$query=mysqli_query($con,$sql);







?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1px ">

        <tr>

            <td>product image</td>
            <td>product name</td>
            <td>Update</td>
            <td>Delete</td>

        </tr>

         <?php while($row=mysqli_fetch_assoc($query)){

              ?>
        <tr>
            <td><img src="<?php echo $row['img']  ?>" alt="" width="100"></td>
            <td><?php echo $row['name']  ?></td>
            <td><a href="update-product.php?id=<?php echo $row['id'] ?>">update</a></td>
            <td><a href="delete-product.php?id=<?php echo $row['id'] ?>">delete</a></td>



         


        </tr>
        <?php
         }
         ?>
    </table>

    
</body>
</html>