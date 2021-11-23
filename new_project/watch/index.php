<?php include 'header.php';?>
<?php include 'conn.php';?>
  <main id="main">
  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/slide/1.jpg);">
          <div class="carousel-container">
            <div class="carousel-content animate__animated animate__fadeInUp">
              <h2>Welcome to <span>Company</span></h2>
              <p>Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
              <!-- <div class="text-center"><a href="" class="btn-get-started">Read More</a></div> -->
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/2.jpg);">
          <div class="carousel-container">
            <div class="carousel-content animate__animated animate__fadeInUp">
              <h2>Lorem Ipsum Dolor</h2>
              <p>Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
              <!-- <div class="text-center"><a href="" class="btn-get-started">Read More</a></div> -->
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/3.jpg);">
          <div class="carousel-container">
            <div class="carousel-content animate__animated animate__fadeInUp">
              <h2>Sequi ea ut et est quaerat</h2>
              <p>Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
              <!-- <div class="text-center"><a href="" class="btn-get-started">Read More</a></div> -->
            </div>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

    </div>
  </section><!-- End Hero -->
<!-- ======= About Us Section ======= -->
<section id="about-us" class="about-us">
  <div class="container" data-aos="fade-up">

    <div class="row content">
      <div class="col-lg-6" data-aos="fade-right">
        <h2>Eum ipsam laborum deleniti velitena</h2>
        <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assum perenda sruen jonee trave</h3>
      </div>
      <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">
        <p>
          Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
          velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
          culpa qui officia deserunt mollit anim id est laborum
        </p>
        <ul>
          <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequa</li>
          <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>
          <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in</li>
        </ul>
        <p class="fst-italic">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
          magna aliqua.
        </p>
      </div>
    </div>

  </div>
</section><!-- End About Us Section -->

<!-- ======= Category Section ======= -->
<section id="services" class="services section-bg">
  <div class="container" data-aos="fade-up">
    <h1 style="color:green">Our Category</h1>
    <div class="row">
    <?php
                                           
                                           $qry="SELECT * FROM `category`"; 
                                               
                                           $ans=mysqli_query($con, $qry);
                                                   if(mysqli_num_rows($ans)>0)
                                                   {
                                                         while($row=$ans->fetch_array())
                                                         { 
                                         ?>
      <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
        <div class="icon-box iconbox-blue">
          <div class="icon">
            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
              <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174"></path>
            </svg>
            <i class="bx bxs-watch"></i>
          </div>
          <h4><a href=""><?php echo $row['cat_name'] ?></a></h4>
          <p>We are serving with more category as well, check our products below</p>
        </div>
      </div>
      <?php } } ?>
    </div>

  </div>
</section><!-- End Services Section -->

<!-- ======= product Section ======= -->
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

<!-- ======= Our Clients Section ======= -->
<section id="clients" class="clients">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Clients</h2>
    </div>

    <div class="row no-gutters clients-wrap clearfix" data-aos="fade-up">

      <div class="col-lg-3 col-md-4 col-6">
        <div class="client-logo">
          <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
        </div>
      </div>

      <div class="col-lg-3 col-md-4 col-6">
        <div class="client-logo">
          <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
        </div>
      </div>

      <div class="col-lg-3 col-md-4 col-6">
        <div class="client-logo">
          <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
        </div>
      </div>

      <div class="col-lg-3 col-md-4 col-6">
        <div class="client-logo">
          <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
        </div>
      </div>

      <div class="col-lg-3 col-md-4 col-6">
        <div class="client-logo">
          <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
        </div>
      </div>

      <div class="col-lg-3 col-md-4 col-6">
        <div class="client-logo">
          <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
        </div>
      </div>

      <div class="col-lg-3 col-md-4 col-6">
        <div class="client-logo">
          <img src="assets/img/clients/client-7.png" class="img-fluid" alt="">
        </div>
      </div>

      <div class="col-lg-3 col-md-4 col-6">
        <div class="client-logo">
          <img src="assets/img/clients/client-8.png" class="img-fluid" alt="">
        </div>
      </div>

    </div>

  </div>
</section><!-- End Our Clients Section -->

</main><!-- End #main -->
<?php include 'footer.php';?>