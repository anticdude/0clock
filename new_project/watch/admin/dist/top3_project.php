<?php include "header.php"; 
include "conn.php";
?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Select top 3 Project</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Select top 3 Projects to display in main website</li>
            </ol>
            
			<div class="row">
            <!-- Project 1 -->
				<div class="col-md-4">
                    <form method="post" enctype="multipart/form-data" action="../code/code.php">
                            <lable>Project 1 [Current : 
                            <?php                     
                                $qry="select * from projects where is_active='0' AND project_top_num='1'";
                                $ans=mysqli_query($con, $qry); 
                                if(mysqli_num_rows($ans)>0)
                                {   
                                    $row=$ans->fetch_array();
                                    echo strtoupper($row['name']);
                                }else{
                                    echo "Not Selected";
                                }
                            ?>]</lable>
                            <select class="form-control" name="project1">
                            <?php
                                
                                $qry="select * from projects where is_active='0' AND project_top_num!='1'";
                                $ans=mysqli_query($con, $qry);
                                if(mysqli_num_rows($ans)>0)
                                {
                                    while($row=$ans->fetch_array())
                                    { 
                            ?>
                                <option value="<?php echo $row['id']; ?>"><?php echo strtoupper($row['name']); ?></option>
                            <?php 
                                    } 
                                }
                            ?>             
                            </select><br>
                            <div class="row">
                                <div class="col-md-12"><input type="submit" name="btn_project1" value="Update Project 1" class="btn btn-primary"> </div>
                            </div>
                    </form>
				</div> 
                <!-- project 1 end -->
                <!-- project 2 start -->
                <div class="col-md-4">
                    <form method="post" enctype="multipart/form-data" action="../code/code.php">
                    <lable>Project 2 [Current : 
                    <?php                     
                    $qry="select * from projects where is_active='0' AND project_top_num='2'";
                            $ans=mysqli_query($con, $qry); 
                            if(mysqli_num_rows($ans)>0)
                            {   
                                $row=$ans->fetch_array();
                                echo strtoupper($row['name']);
                            }else{
                                echo "Not Selected";
                            }
                            ?>]</lable>
                        <select class="form-control" name="project2">
                        <?php
                            
                            $qry="select * from projects where is_active='0' AND project_top_num!='2'";
                            $ans=mysqli_query($con, $qry);
                            if(mysqli_num_rows($ans)>0)
                            {
                                while($row=$ans->fetch_array())
                                { 
                        ?>
                            <option value="<?php echo strtoupper($row['id']); ?>"><?php echo strtoupper($row['name']); ?></option>
                        <?php 
                                } 
                            }
						?>      
                        </select><br>
                        <div class="row">
				            <div class="col-md-12"><input type="submit" name="btn_project2" value="Update Project 2" class="btn btn-primary"> </div>
			            </div>
                    </form>
				</div>
                <!-- project 2 end -->
                <!-- project 3 start -->
				<div class="col-md-4">
                    <form method="post" enctype="multipart/form-data" action="../code/code.php">
                    <lable>Project 3 [Current : 
                    <?php                     
                    $qry="select * from projects where is_active='0' AND project_top_num='3' ";
                            $ans=mysqli_query($con, $qry); 
                            if(mysqli_num_rows($ans)>0)
                            {   
                                $row=$ans->fetch_array();
                                echo strtoupper($row['name']);
                            }else{
                                echo "Not Selected";
                            }
                            ?>]</lable>
                        <select class="form-control" name="project3">
                        <?php
                            
                            $qry="select * from projects where is_active='0' AND project_top_num!='3'";
                            $ans=mysqli_query($con, $qry);
                            if(mysqli_num_rows($ans)>0)
                            {
                                while($row=$ans->fetch_array())
                                { 
                        ?>
                            <option value="<?php echo strtoupper($row['id']); ?>"><?php echo strtoupper($row['name']); ?></option>
                        <?php 
                                } 
                            }
						?>      
                        </select><br>
                        <div class="row">
				            <div class="col-md-12"><input type="submit" name="btn_project3" value="Update Project 3" class="btn btn-primary"> </div>
			            </div>
                    </form>
				</div>
                <!-- project 3 end -->
			</div>
        </div>
    </main>
</div>
    <?php include "footer.php"; ?>