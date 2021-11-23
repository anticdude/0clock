<?php include "header.php"; 
include "conn.php";
$id=$_GET['p_id'];

?>
<div id="layoutSidenav_content">
    <main>
    <?php 
                $qry2="select * from product where p_id='$id'";
                $ans2=mysqli_query($con, $qry2);
                while($row2=$ans2->fetch_array())
                {
            ?>
        <div class="container-fluid">
            <h1 class="mt-4">Edit Product</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Editing Product : <?php echo strtoupper($row2['p_name']);;?></li>
            </ol>
            
            <form method="post" enctype="multipart/form-data" action="../code/code.php">
                <input type="hidden" value="<?php echo $row2['p_id'];?>" name="p_id">
			<div class="row">
				<div class="col-md-3">
                    <lable>Project Name</lable>
					<input type="text" name="p_name" value="<?php echo $row2['p_name'];?>" class="form-control" required>
					
				</div> 
				<div class="col-md-3">
					<label>Price</label>
					<input type="number" value="<?php echo $row2['price'];?>" name="price" class="form-control">
				</div>
			</div><br>
			<div class="row">
            <div class="col-md-6">
                    
					<label>Select Image</label><br>
					<input type="file" name="image" id="file" style="color: red; height: 75%; text-transform: uppercase;" >
                    <i><label>Current Image : </label>
                    <img onclick="openimgmodel(this)" id="myImg" style="height:40px; width:40px;" alt="<?php echo $row2['image']; ?>" src="../img_uploads/<?php echo $row2['image']; ?>"></i>
				</div>
				<div class="col-md-3">
					<!-- <label>Enter Price</label>
					<input type="text" name="price" onkeypress="isInputNumber(event)" placeholder="Enter Price" class="form-control"> -->
				</div>
				<div class="col-md-3">
					<!-- <label>Enter Quantity</label>
					<input type="number" name="qty" placeholder="Enter Quantity" class="form-control"> -->
				</div>
			</div><br>
			<div class="row">
				<div class="col-md-12">
					<label>Enter Product Description</label>
					<!-- <textarea name="description" class="form-control" value="" placeholder="Enter Product Details" required></textarea> -->
                    <textarea name="p_desc"  class="form-control" ><?php echo $row2['p_desc'];?></textarea>
				</div>
			</div>
			<hr>
            <div><input type="hidden" name="id" value="<?php echo $row2['id'];?>" /></div>
			<div class="row">
				<div class="col-md-2"><input type="submit" name="btn_project_edit" value="Edit Project" class="btn btn-primary"> </div>
                <div class="col-md-2"><a href="index.php" type="submit" value="Back to Home" class="btn btn-success">Back to Home</a>
                <div class="col-md-8"></div>
			</div><hr>

		</form>
        <script>
$('textarea').jqte();
</script>
        
        </div>
        <?php } ?>
        <div id="myModal" class="modal" tabindex="-1" role="dialog">
            <div  role="document">
                <span class="close">&times;</span>
                <img class="modal-content" id="img01">
                <div id="caption"></div>
            </div>
        </div>
        </div>
    </main>
<?php include "footer.php"; ?>