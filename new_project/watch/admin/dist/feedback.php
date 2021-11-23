<?php include "header.php"; 
include "conn.php";
?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <h1 class="mt-4">Home</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Feedbacks</li>
                </ol>
           
               
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                        Feedbacks
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Visitor name</th>
                                        <th>Feedback</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Visitor name</th>
                                        <th>Feedback</th>
                                        <th>Date</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                <?php 
                                        
                                        $qry="SELECT * FROM `feedback`";
                                        $ans=mysqli_query($con, $qry);
                                        $count_prod=mysqli_num_rows($ans);
                                        if(mysqli_num_rows($ans)>0)
                                        { 
                                            while($row=$ans->fetch_array())
                                            { ?>
                                    <tr>
                                        <td><?php echo $row['visitor_name']; ?></td>
                                        <td><?php echo $row['feedback']; ?></td>
                                        <td><?php echo $row['feedback_date']; ?></td>
                                        
                                    </tr>
                                    <?php
                                        } } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
              
              
               
               
            </div>
        </main>
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; justrips.com 2020</div>
                    <div>
                        <a href="#">Privacy Policy</a>
                        &middot;
                        <a href="#">Terms &amp; Conditions</a>
                    </div>
                </div>
            </div>
        </footer>
</div>
<?php include "footer.php"; ?> 