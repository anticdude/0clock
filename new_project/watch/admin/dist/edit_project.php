<?php include "header.php"; 
include "conn.php";
$id=$_GET['id'];

?>
<div id="layoutSidenav_content">
    <main>
    <?php 
                $qry2="select * from projects where id='$id'";
                $ans2=mysqli_query($con, $qry2);
                while($row2=$ans2->fetch_array())
                {
            ?>
        <div class="container-fluid">
            <h1 class="mt-4">Edit Project</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Editing Project : <?php echo strtoupper($row2['name']);;?></li>
            </ol>
            
            <form method="post" enctype="multipart/form-data" action="../code/code.php">
			<div class="row">
				<div class="col-md-3">
                    <lable>Project Name</lable>
					<input type="text" name="name" value="<?php echo $row2['name'];?>" class="form-control" required>
					
				</div> 
				<div class="col-md-3">
                    <lable>Start Date</lable>
					<input type="date" name="start_date" value="<?php echo $row2['start_date'];?>" class="form-control" required>
				</div>
				<div class="col-md-3">
                    <lable>Status : [ Current - <?php $status= strtoupper($row2['status']); 
                                            if($status=='0'){
                                                echo strtoupper('Running');
                                            }elseif($status=='1'){
                                                echo strtoupper('Upcoming');
                                            }elseif($status=='2'){
                                                echo strtoupper('Finished');
                                            }else{
                                                echo "error";
                                            }?> ]</lable>
                    <select class="form-control" name="status">
                         <option value="<?php $status= strtoupper($row2['status']); ?>"> Current -> <?php $status= strtoupper($row2['status']); 
                                            if($status=='0'){
                                                echo strtoupper('Running');
                                            }elseif($status=='1'){
                                                echo strtoupper('Upcoming');
                                            }elseif($status=='2'){
                                                echo strtoupper('Finished');
                                            }else{
                                                echo "error";
                                            }?></option>
                         <option value="0">Running</option>
                         <option value="1">Upcoming</option>
                         <option value="2">Finished</option>
					</select>
				</div>
				<div class="col-md-3">
					<!-- <label>Description</label>
					<input type="text" name="company_name" class="form-control"> -->
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
                    <textarea name="description"  class="form-control" ><?php echo $row2['description'];?></textarea>
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