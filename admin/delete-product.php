<?php
include_once "config/db.php";
session_start();
if(!isset($_SESSION['email'])&& empty($_SESSION['email'])){
  header("location: logout.php");
  
}
$id=$_GET['id'];
$sql="DELETE FROM tbl_product  where id='$id'";
$query=mysqli_query($con,$sql);
if($query){
    header("location:manage-product.php");
}











?>