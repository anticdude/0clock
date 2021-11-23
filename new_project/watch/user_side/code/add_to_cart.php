<?php
include "conn.php";
session_start();

$p_id=$_GET['card_id'];
$u_id=$_SESSION['u_id'];
$qry="INSERT INTO `cart`(`p_id`, `u_id`) VALUES ('$p_id','$u_id')";
$ans=mysqli_query($con, $qry);
if($ans > 0)
{ 
    echo "<script>alert('Added to Cart')</script>";
    echo "<script>location.href='../cart.php';</script>";
}else{
    echo "<script>alert('Error while add into cart')</script>";
    echo "<script>location.href='../product.php';</script>";
}

?>