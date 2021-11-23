<?php include "conn.php"; ?>
<?php include "header.php"; ?>


<main id="main">

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2>Product Details</h2>
      <ol>
        <li><a href="index.html">Home</a></li>
        <li><a href="product.php">Product</a></li>
        <li>Product Details</li>
      </ol>
    </div>

  </div>
</section><!-- End Breadcrumbs -->
<?php
$id=$_GET['id'];
$qry="SELECT * FROM `product` INNER JOIN category ON product.`cat_id`=category.`cat_id` where p_id='$id'";
$ans=mysqli_query($con,$qry);
while($row=$ans->fetch_array())
{
?>
<!-- ======= Portfolio Details Section ======= -->
<section id="portfolio-details" class="portfolio-details">
  <div class="container" data-aos="fade-up">

    <div class="row gy-4">

      <div class="col-lg-8">
        <div class="portfolio-details-slider swiper">
          <div class="swiper-wr0apper align-items-center">

            <div class="swiper-slide">
              <img src="../admin/img_uploads/<?php echo $row['image']?>" alt="<?php echo $row['image']?>" style="height:400px; width:auto;">
            </div>

          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="portfolio-info">
          <h3>Project information</h3>
          <ul>
            <li><strong>Category</strong>: <?php echo $row['cat_name']?></li>
            <li><strong>Name</strong>: <?php echo $row['p_name']?></li>
            <li><strong>Publish date</strong>: <?php echo $row['publish_date']?></li>
            <li><h3 style="color:green"><strong>Price</strong>: <?php echo $row['price']?> INR</h3></li>
          </ul>
          <p><a href="code/add_to_cart.php?card_id=<?php echo $row['p_id'] ?>" class="btn btn-danger">Add to Cart</a></p>
        </div>
        <div class="portfolio-description">
          <h2>Description</h2>
          <p>
          <?php echo $row['p_desc']?>
          </p>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Portfolio Details Section -->
<?php } ?>
</main><!-- End #main -->
<?php include "footer.php"; ?>