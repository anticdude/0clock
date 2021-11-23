<?php include "header.php"; ?>
<?php include "conn.php"; ?>

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>My Cart</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Cart</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container">

        <div class="row">
        <?php
                                           $u_id=$_SESSION['u_id'];
                                           $qry="SELECT * FROM `cart` INNER JOIN product ON cart.`p_id`=product.`p_id` where cart.u_id=$u_id"; 
                                               
                                           $ans=mysqli_query($con, $qry);
                                                   if(mysqli_num_rows($ans)>0)
                                                   {
                                                         while($row1=$ans->fetch_array())
                                                         { 
                                         ?>
          <div class="col-lg-6" data-aos="fade-up">
            <div class="testimonial-item">
              <img src="../admin/img_uploads/<?php echo $row1['image']?>" class="testimonial-img" alt="">
              <h3><?php echo $row1['p_name']?></h3>
              <h3 style="color:green">Price : <?php echo $row1['price']?></h3>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                <?php echo $row1['p_desc']?>
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p><hr>
              <a href="code/delete_from_cart.php?delete=<?php echo $row1['p_id']?>" class="btn btn-danger">Delete</a>
              <a href="code/purchase.php?p_id=<?php echo $row1['p_id']?>" class="btn btn-success">Buy Now</a>
            </div>
          </div>
          <?php } }else{?> 
            
                 <h1 class="align-center">Your cart is empty</h1>
            <?php }?>                                                     

        </div>

      </div>
    </section><!-- End Testimonials Section -->

  </main><!-- End #main -->
<?php include "footer.php"; ?>