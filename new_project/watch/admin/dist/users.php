<?php include "header.php"?>
<?php include "conn.php"?>
<div id="layoutSidenav_content">
<div class="container-fluid">
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Manage User</li>
    </ol>
       
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                User List 
            </div>
            <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                </tr>
                            </tfoot>
                            <tbody>
                            <?php
                            
                                $qry="select * from login";
                                $ans=mysqli_query($con, $qry);
                                if(mysqli_num_rows($ans)>0)
                                {
                                    while($row=$ans->fetch_array())
                                    { 
                            ?>
                                <tr>
                                    <td><?php echo strtoupper($row['u_name']); ?></td>
                                    <td><?php echo strtoupper($row['phone']); ?></td>
                                    <td><?php echo strtoupper($row['email']); ?></td>
                                    <td><?php echo strtoupper($row['address']); ?></td>
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