<?php 
include 'conn.php';
//project
if (isset($_GET['id']))
{
	$id=$_GET['id'];
	$qry="UPDATE `projects` SET `is_active`='1' WHERE id='$id'";
    $ans=mysqli_query($con, $qry);
    if($ans > 0 )
    {
		echo "<script>alert('Project deleted')</script>";
        echo "<script>location.href='index.php';</script>";
    }
    else
    {
        echo "<script>alert('Error while detele projects')</script>";
        echo "<script>location.href='index.php';</script>";
    }
}
else{
	echo "Error while delete";
}

 ?>

