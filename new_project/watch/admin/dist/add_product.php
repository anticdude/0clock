<?php include "header.php"; ?>
<?php include "conn.php";?>
    <div id="layoutSidenav_content">
        <div class="container-fluid">
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active"><a href="index.php">Home / </a> <a href="manage_loan.php"> Manage Product / </a>  Add New Product</li>
            </ol>
            <form method="post" enctype="multipart/form-data" action="../code/code.php">
                <small style="color:blue;">Product details : </small><hr>
                <div class="row">
                    <div class="col-md-3">
                        <lable>Select Category</lable>
                        <select name="cat_id" id="cat_id" class="form-control">
                            <?php
                                $qry="SELECT * FROM `category` ";
                                $ans=mysqli_query($con, $qry);
                                if(mysqli_num_rows($ans)>0)
                                {
                                    while($row=$ans->fetch_array())
                                    { 
                            ?>
                            <option value="<?php echo $row['cat_id']; ?>"><?php echo $row['cat_name']; ?></option>
                            <?php } }?>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <lable>Name</lable>
                        <input type="text" name="p_name" class="form-control" required>
                    </div> 
                    <div class="col-md-3">
                        <lable>Image</lable><br>
                        <input type="file" name="image" id="file" style="color: red; height: 75%; text-transform: uppercase;" required>
                    </div>                 
                    <div class="col-md-3">
                        <lable>Price</lable>
                        <input type="number" name="price" class="form-control" required>
                    </div> 
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <lable>Description</lable>
                        <input type="text" name="p_desc" class="form-control" required>
                    </div> 
                </div>
                <br>
                
                <div class="row">
                    <div class="col-md-2">
                        <input type="submit" name="btn_product" value="Add New Product" class="btn btn-primary"> 
                    </div>
                    <div class="col-md-2">
                            <a href="index.php" class="btn btn-danger"> Cancel </a> 
                    </div>
                    <div class="col-md-8">
                        
                    </div>
                </div>
            </form>
            <hr>
            <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Packages
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Category</th>
                                                <th>price</th>
                                                <th>image</th>
                                                <th>Overview</th>
                                                <th>Entry Time </th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Name</th>
                                                <th>Category</th>
                                                <th>price</th>
                                                <th>image</th>
                                                <th>Overview</th>
                                                <th>Entry Time </th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                        <?php
                                          
                                            $qry="SELECT * FROM `product` INNER JOIN category ON product.`cat_id`=category.`cat_id` ";
                                            // where is_active='0'
                                            $ans=mysqli_query($con, $qry);
                                            if(mysqli_num_rows($ans)>0)
                                            {
                                                while($row=$ans->fetch_array())
                                                { 
                                        ?>
                                            <tr>
                                                <td style="color:green;"><?php echo $row['p_name']; ?></td>
                                                <td style="color:green;"><?php echo $row['cat_name']; ?></td>
                                                <td><?php echo $row['price']; ?></td>
                                               
                                                <td><img src="../img_uploads/<?php echo $row['image']; ?>" style="height:100px; width:auto;"> </td>
                                                
                                                <td><?php echo $row['p_desc']; ?></td>
                                    
                                                
                                                <td><?php echo $row['publish_date']; ?></td>
                                                
                                                <td>
                                                    <a class="btn  btn-success" href="update_product.php?p_id=<?php echo $row['p_id'] ?>"><i class="fas fa-edit"></i></a>
                                                </td>
                                                <td>
                                                    <a class="btn  btn-danger" href="delete_product.php?p_id=<?php echo $row['p_id'] ?>"><i class="fas fa-trash"></i></a>
                                                </td>
                                                
                                            </tr>
                                            <?php } }
								            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
        </div>
    </div>
<?php include "footer.php"?>