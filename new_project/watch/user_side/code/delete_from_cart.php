<?php
include "conn.php";
session_start();

$p_id=$_GET['delete'];
$u_id=$_SESSION['u_id'];
$qry="DELETE FROM `cart` WHERE p_id=$p_id AND u_id=$u_id";
$ans=mysqli_query($con, $qry);
if($ans > 0)
{ 
    echo "<script>location.href='../cart.php';</script>";
}else{
    echo "<script>alert('Error while remove from cart')</script>";
    echo "<script>location.href='../cart.php';</script>";
}

?>