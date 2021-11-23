<?php
include "conn.php";
session_start();

$p_id=$_GET['p_id'];
$u_id=$_SESSION['u_id'];
$qry="INSERT INTO `order_tbl`(`p_id`, `u_id`, `qty`) VALUES ('$p_id','$u_id','1')";
$ans=mysqli_query($con, $qry);
if($ans > 0)
{ 
    $qry="DELETE FROM `cart` WHERE p_id=$p_id AND u_id=$u_id";
    $ans=mysqli_query($con, $qry);
    if($ans > 0)
    { 
        echo "<script>alert('Thanks for shopping, Your order placed')</script>";
        echo "<script>location.href='../orders.php';</script>";
    }else{
        echo "<script>alert('Error while remove from cart')</script>";
        echo "<script>location.href='../cart.php';</script>";
    }
}else{
    echo "<script>alert('Error while placing order')</script>";
    echo "<script>location.href='../product.php';</script>";
}

?>