<body class="main-layout">
  <!-- loader  -->
  <div class="loader_bg">
    <div class="loader"><img src="<?=base_url('assets/user')?>/images/loading.gif" alt="#" /></div>
  </div>
  <!-- end loader -->
  <!-- header -->
  <header>
    <!-- header inner -->
    <div class="header-top">
      <div class="header">
        <div class="container-fluid">
          <div class="row">
            <div class="col-xl-2 col-lg-4 col-md-4 col-sm-3 col logo_section">
              <div class="full">
                <div class="center-desk">
                  <div class="logo">
                    <a href="index.html"><img src="<?=base_url('assets/user')?>/images/logo.png" alt="#" /></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-10 col-lg-8 col-md-8 col-sm-9">
         
               <div class="menu-area">
                <div class="limit-box">
                  <nav class="main-menu ">
                    <ul class="menu-area-main">
                      <li class="active"> <a href="index.html">Home</a> </li>
                      <li> <a href="#about">About</a> </li>
                      <li> <a href="#vegetable">Vegetable</a> </li>
                      <li> <a href="#testimonial">Testomonial</a> </li>
                      <li> <a href="#contact">Contact Us</a> </li>
                      <li> <a href="<?=base_url('/')?>Admin_controller/admin_index">Log-in</a> </li>
                     
                     <li> <a href="#"><img src="<?=base_url('assets/user')?>/icon/icon_b.png" alt="#" /></a></li>
                     </ul>
                   </nav>
                 </div>
               </div> 
              </div>
           </div>
         </div>
       </div>
     </div>
     <!-- end header inner -->

     <!-- end header -->
     <section class="slider_section">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">

            <div class="container-fluid padding_dd">
              <div class="carousel-caption">
                <div class="row">
                <?php $count=1; if(!empty($slider_data))  { foreach ($slider_data as $user){?>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="text-bg">
                     <span><?php echo $user['name']?></span>
                      <h1><?php echo $user['title']?></h1>
                      <p><?php echo $user['dec']?></p>
                      <form class="Vegetable">
                <input class="Vegetable_fom" placeholder="Vegetable" type="text" name=" Vegetable">
                <button class="Search_btn">Search</button>
              </form>
                      <a href="#">Contact Us</a> <a href="#">Vegetable</a>
                    </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="images_box">
                      <figure><img src="<?=base_url().'application/upload/slider_image/'.$user['image']?>"></figure>
                    </div>
                  </div>
                </div>
                <?php }} ?>
              </div>
            </div>
            
          </div>
          <!-- <div class="carousel-item">

            <div class="container-fluid padding_dd">
              <div class="carousel-caption">

                <div class="row">
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="text-bg">
                      <span>Welcome To Shree</span>
                      <h1>Vegetables Shop</h1>
                      <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal </p>
                      <form class="Vegetable">
                <input class="Vegetable_fom" placeholder="Vegetable" type="text" name=" Vegetable">
                <button class="Search_btn">Search</button>
              </form>
                      <a href="#">Contact Us</a> <a href="#">Vegetable</a>
                    </div>
                  </div>

                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="images_box">
                      <figure><img src="<?=base_url('assets/user')?>/images/img2.png"></figure>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div> -->


          <!-- <div class="carousel-item">

            <div class="container-fluid padding_dd">
              <div class="carousel-caption ">
                <div class="row">
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="text-bg">
                      <span>Welcome To Shree</span>
                      <h1>Vegetables Shop</h1>
                      <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal </p>
                       <form class="Vegetable">
                <input class="Vegetable_fom" placeholder="Vegetable" type="text" name=" Vegetable">
                <button class="Search_btn">Search</button>
              </form>
                      <a href="#">Contact Us</a> <a href="#">Vegetable</a>
                    </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="images_box">
                      <figure><img src="<?=base_url('assets/user')?>/images/img2.png"></figure>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div> -->
        </div>
      </div>
    </div>
   
  </div>
 <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</section>
</div>
</header>

