<?php include "header.php"?>
<?php include "conn.php"?>
<div id="layoutSidenav_content">
<div class="container-fluid">
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Add Category</li>
    </ol>
        <form method="post" enctype="multipart/form-data" action="../code/code.php">
            <div class="row">
                <div class="col-md-3">
                    <lable>Category Name</lable>
                    <input type="text" name="cat_name" class="form-control" required>
                </div>
            </div><br>
            <div class="row">
                <div class="col-md-12">
                    <input type="submit" name="btn_add_cat" value="Add Category" class="btn btn-primary"> 
                </div>
            </div><hr>
        </form>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                Category List 
            </div>
            <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </tfoot>
                            <tbody>
                            <?php
                            
                                $qry="select * from category";
                                $ans=mysqli_query($con, $qry);
                                if(mysqli_num_rows($ans)>0)
                                {
                                    while($row=$ans->fetch_array())
                                    { 
                            ?>
                                <tr>
                                    <td><?php echo strtoupper($row['cat_name']); ?></td>
                                    <td><a href="edit_project.php?id=<?php echo $row['id']?>" class="btn btn-success">Edit</a>
                                    </td>
                                <td>
                                    <a href="delete.php?id=<?php echo $row['id']?>" class="btn btn-danger" onclick="return confirm('Are You Sure ?')">Delete</a> </td>
                                </tr>
                            <?php } }
								?>
                            </tbody>
                        </table>
                        <div id="myModal" class="modal" tabindex="-1" role="dialog">
                            <div  role="document">
                                    <span class="close">&times;</span>
                                    <img class="modal-content" id="img01">
                                    <div id="caption"></div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
</div>
</div>

<script>
$('textarea').jqte();
</script>

<?php include "footer.php"?>