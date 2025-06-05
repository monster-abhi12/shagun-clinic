<?php
include_once "config/db.php";
$id=$_GET['id'];
$sql="DELETE FROM tbl_trending  where id='$id'";
$query=mysqli_query($con,$sql);
if($query){
    header("location:manage-trending.php");
}











?>