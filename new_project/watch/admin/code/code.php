<?php 
session_start();
include "conn.php";
//login
if(isset($_POST['btnlogin']))
{
    $mail = $_POST['mail'];
    $pwd  = $_POST['pwd'];
    $qry = "select * from login where email='$mail' AND u_pwd='$pwd'";
    $ans = mysqli_query($con, $qry);
    if(mysqli_num_rows($ans) > 0)
    {
        $row=$ans->fetch_array();
        $_SESSION['mail']=$row['email'];
        $_SESSION['u_name']=$row['u_name'];
        $_SESSION['u_id']=$row['u_id'];
        $_SESSION['u_type']=$row['u_type'];
        if($_SESSION['u_type']=='admin') //admin
        {
            echo "<script>location.href='../dist/index.php';</script>";
        }
        else
        if($_SESSION['u_type']=='user') //vendor
        {
            echo "<script>location.href='../../user_side/index.php';</script>";
        }

       
    }
    else{
        echo "<script>alert('Unauthorized attamp, Please try with Right details or contact developer.')</script>";
        echo "<script>location.href='../../index.php';</script>";
    }
}else
//register 
if(isset($_POST['btn_register']))
{
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $u_pwd = mysqli_real_escape_string($con, $_POST['u_pwd']);
    $qry = "select * from login where email='$email'";
    $ans = mysqli_query($con, $qry);
    if(mysqli_num_rows($ans) > 0)
    {
        echo "<script>alert('User already registered, Please login. Thanks')</script>";
        echo "<script>location.href='../dist/login.php';</script>";
    }
    else{
        $u_name = mysqli_real_escape_string($con, $_POST['u_name']);
        $phone = mysqli_real_escape_string($con, $_POST['phone']);
        $address = mysqli_real_escape_string($con, $_POST['address']);
        
        $qry = "INSERT INTO `login`(`u_name`,`u_type`,`u_pwd`, `address`, `email`, `phone`) VALUES ('$u_name','user','$u_pwd','$address','$email','$phone')";
        $ans=mysqli_query($con, $qry);
        if($ans > 0)
        {
            echo "<script>alert('Welcome, Please login with Mail and Password')</script>";
            echo "<script>location.href='../dist/login.php';</script>";
        }else
        {
            echo "<script>alert('Issue while entering details, Please insert valid data.')</script>";
            echo "<script>location.href='../dist/register.php';</script>";
        }
    }
}
else
//add category
if(isset($_POST['btn_add_cat'])){
    $cat_name = $_POST['cat_name'];
    $qry = "insert into category(`cat_name`) VALUES ('$cat_name')";
    $ans=mysqli_query($con, $qry);
    if($ans > 0)
    { 
        echo "<script>alert('Category added')</script>";
        echo "<script>location.href='../dist/index.php';</script>";
    }else{
        echo "<script>alert('Error while adding category')</script>";
        echo "<script>location.href='../dist/index.php';</script>";
    }
}
else // add product
if(isset($_POST['btn_product']))
{
    if($_POST['btn_product'])
    {
        //vars
        $folder = "../img_uploads/";
        $image=$_FILES['image']['name'];
        $p_name = $_POST['p_name'];
        $p_desc = $_POST['p_desc'];
        $cat_id = $_POST['cat_id'];
        $price = $_POST['price'];

            //File check
            $file_name = $_FILES["image"]["name"]; //file name
            $file_type = $_FILES["image"]["type"]; // file type
            $temp_name = $_FILES["image"]["tmp_name"]; //tmp name of file
            $file_size = $_FILES["image"]["size"]; //size of file
            $error = $_FILES["image"]["error"]; //check error
            if (!$temp_name)
            {
                //echo "ERROR: Please browse for file before uploading";
                echo "<script>alert('ERROR: Please browse for file before uploading')</script>";
                echo "<script>location.href='../dist/add_product.php';</script>";
            }
            function compress_image($source_url, $destination_url, $quality)
            {
                $info = getimagesize($source_url);
                if ($info['mime'] == 'image/jpeg') $image = imagecreatefromjpeg($source_url);
                elseif ($info['mime'] == 'image/gif') $image = imagecreatefromgif($source_url);
                elseif ($info['mime'] == 'image/png') $image = imagecreatefrompng($source_url);
                imagejpeg($image, $destination_url, $quality);
                echo "<script>alert('File Uploaded')</script>";
            }
            if ($error > 0)
            {
                //echo $error;
                echo "<script>alert('".$error."')</script>";
                
            }
            else if (($file_type == "image/gif") || ($file_type == "image/jpeg") || ($file_type == "image/png") || ($file_type == "image/pjpeg"))
            {
                $qry="INSERT INTO `product`( `p_name`, `image`, `cat_id`, `price`, `p_desc`) VALUES ('$p_name','$image','$cat_id','$price','$p_desc')";
                $ans=mysqli_query($con, $qry);
                if($ans > 0 )
		        {
                    $filename = compress_image($temp_name, $folder.$file_name, 80);
                    echo "<script>location.href='../dist/add_product.php';</script>";
                }
                else
                {
                    echo "<script>alert('File Not Uploaded, try again !')</script>";
                    echo "<script>location.href='../dist/add_product.php';</script>";
                }
            }
            else
            {
                echo "<script>alert('Uploaded image should be jpg or gif or png.')</script>";
                echo "<script>location.href='../dist/add_product.php';</script>";
            }
    }
}else // Edit Project
if(isset($_POST['btn_project_edit']))
{
    if($_POST['btn_project_edit'])
    {
        $folder = "../img_uploads/";
        $image=$_FILES['image']['name'];
        $p_name = $_POST['p_name'];
        $p_desc = $_POST['p_desc'];
        $p_id=$_POST['p_id'];
        $price=$_POST['price'];

        //File check
        $file_name = $_FILES["image"]["name"]; //file name
        $file_type = $_FILES["image"]["type"]; // file type
        $temp_name = $_FILES["image"]["tmp_name"]; //tmp name of file
        $file_size = $_FILES["image"]["size"]; //size of file
        $error = $_FILES["image"]["error"]; //check error
        if (!$temp_name)
        {
            //echo "ERROR: Please browse for file before uploading";
            //echo "<script>alert('ERROR: Please browse for file before uploading')</script>";
            //echo "<script>location.href='../dist/index.php';</script>";
            $qry="UPDATE `product` SET `p_name`='$p_name',`price`='$price',`p_desc`='$p_desc' WHERE p_id='$p_id'";
            $ans=mysqli_query($con, $qry);
            if($ans > 0 )
            {
                //$filename = compress_image($temp_name, $folder.$file_name, 80);
                echo "<script>alert('Details Updated')</script>";
                echo "<script>location.href='../dist/index.php';</script>";
            }
            else
            {
                echo "<script>alert('Details not Updated')</script>";
                echo "<script>location.href='../dist/index.php';</script>";
            }
        }
        function compress_image($source_url, $destination_url, $quality)
        {
            $info = getimagesize($source_url);
            if ($info['mime'] == 'image/jpeg') $image = imagecreatefromjpeg($source_url);
            elseif ($info['mime'] == 'image/gif') $image = imagecreatefromgif($source_url);
            elseif ($info['mime'] == 'image/png') $image = imagecreatefrompng($source_url);
            imagejpeg($image, $destination_url, $quality);
            echo "<script>alert('File Uploaded')</script>";
        }
        if ($error > 0)
        {
            //echo $error;
            echo "<script>alert('".$error."')</script>";
            
        }
        else if (($file_type == "image/gif") || ($file_type == "image/jpeg") || ($file_type == "image/png") || ($file_type == "image/pjpeg"))
        {
            
            $qry="UPDATE `product` SET `p_name`='$p_name',`image`='$image',`price`='$price',`p_desc`='$p_desc' WHERE p_id='$p_id'";
            $ans=mysqli_query($con, $qry);
            if($ans > 0 )
            {
                $filename = compress_image($temp_name, $folder.$file_name, 80);
                echo "<script>location.href='../dist/add_product.php';</script>";
            }
            else
            {
                echo "<script>alert('File Not Uploaded, try again !')</script>";
                echo "<script>location.href='../dist/add_product.php';</script>";
            }
        }
        else
        {
            echo "<script>alert('Uploaded image should be jpg or gif or png.')</script>";
            echo "<script>location.href='../dist/add_product.php';</script>";
        }
    }
}
else if(isset($_POST['btn_feedback']))
{
    $visitor_name=$_POST['visitor_name'];
    $feedback=$_POST['feedback'];
    $qry = "INSERT INTO `feedback`( `visitor_name`, `feedback`) VALUES ('$visitor_name','$feedback')";
    $ans=mysqli_query($con, $qry);
    if($ans > 0)
    { 
        echo "<script>alert('Feedback added')</script>";
        echo "<script>location.href='../../index.php';</script>";
    }else{
        echo "<script>alert('Error while adding Feedback')</script>";
        echo "<script>location.href='../../index.php';</script>";
    }
}else
{
    //echo "<script>alert('Unmatched value')</script>";
    echo "<script>location.href='../dist/401.html';</script>";
}
//end login
?>