<?php
include "conn.php";
session_start();

$p_id=$_GET['p_id'];
$qry="DELETE FROM `product` WHERE p_id=$p_id";
$ans=mysqli_query($con, $qry);
if($ans > 0)
{ 
    echo "<script>location.href='add_product.php';</script>";
}else{
    echo "<script>alert('Error while delete product')</script>";
    echo "<script>location.href='add_product.php';</script>";
}

?>