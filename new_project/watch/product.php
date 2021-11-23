<?php include "header.php"; ?>
<?php include "conn.php"; ?>
<br><br>
<section id="services" class="services section-bg">
  <div class="container" data-aos="fade-up">
    <h1 style="color:green">Our Products</h1>
    <div class="row">
    <?php
                                           
                                           $qry="SELECT * FROM `product` INNER JOIN category ON product.`cat_id`=category.`cat_id`"; 
                                               
                                           $ans=mysqli_query($con, $qry);
                                                   if(mysqli_num_rows($ans)>0)
                                                   {
                                                         while($row1=$ans->fetch_array())
                                                         { 
                                         ?>
      <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
        <div class="icon-box iconbox-blue">
          <div class="i0con">
            <img class="align-items-center" src="admin/img_uploads/<?php echo $row1['image']; ?>" alt="echo $row1['image'];" style="height:200px; width:300px;">  
            <i class="bx bxl-drib0bble"></i>
          </div>
          <h4><a href=""><?php echo $row1['p_name'] ?></a></h4>
          <p>Price : <?php echo $row1['price'] ?> INR  </p>
          <p><?php echo $row1['p_desc'] ?></p>
        </div>
      </div>
      <?php } } ?>
    </div>

  </div>
</section><!-- End Services Section -->
<?php include "footer.php"; ?>