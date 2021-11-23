<?php include "header.php"; 
include "conn.php";
?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">View query by customer</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">View query by customer asked from contact us form</li>
            </ol>
            
        </div>

            
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table mr-1"></i>
                    Project List 
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Mobile</th>
                                    <th>Message</th>
                                    <th>Entry time</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Mobile</th>
                                    <th>Message</th>
                                    <th>Entry time</th>
                                </tr>
                            </tfoot>
                            <tbody>
                            <?php
                            
                                $qry="select * from contact";
                                $ans=mysqli_query($con, $qry);
                                if(mysqli_num_rows($ans)>0)
                                {
                                    while($row=$ans->fetch_array())
                                    { 
                            ?>
                                <tr>
                                    <td><?php echo strtoupper($row['name']); ?></td>
                                    <td><?php echo strtoupper($row['emailid']); ?></td>
                                    <td><?php echo strtoupper($row['mob_number']); ?></td>
                                    <td><?php echo strtoupper($row['msg']); ?></td>
                                    <td><?php echo $row['time_date_stamp']; ?></td>
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
    </main>
<?php include "footer.php"; ?>