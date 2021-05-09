
   <!-- clients -->
   <div id="testimonial" class="clients">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>testimonial</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clients_red">
        <div class="container">
            <div id="testimonial_slider" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ul class="carousel-indicators">
                    <li data-target="#testimonial_slider" data-slide-to="0" class=""></li>
                    <li data-target="#testimonial_slider" data-slide-to="1" class="active"></li>
                    <li data-target="#testimonial_slider" data-slide-to="2" class=""></li>
                </ul>
                <!-- The slideshow -->
                <div class="carousel-inner">
                    <!-- <div class="carousel-item">
                        <div class="testomonial_section">

                            <div class="full testimonial_cont">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 pa_right">
                                        <div class="testomonial_img">
                                            <figure><img src="<?=base_url('assets/user')?>/images/tes.jpg" alt="#"/></figure>
                                            <i><img src="<?=base_url('assets/user')?>/images/test_con.png" alt="#"/></i>
                                        </div>
                                    </div>
                                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 pa_left">
                                        <div class="cross_inner">
                                            <h3>Jomono<br><strong class="ornage_color">review</strong></h3>
                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and
                                          
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <?php $count=1; if(!empty($testimonial_data))  { foreach ($testimonial_data as $user){ ?>
                    <div class="carousel-item active">

                        <div class="testomonial_section">
                            <div class="full center">
                            </div>
                            <div class="full testimonial_cont ">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 pa_right">
                                        <div class="testomonial_img">
                                            <figure><img src="<?=base_url().'application/upload/testimonial_image/'.$user['image']?>" alt="#"/></figure>
                                            
                                        </div>
                                    </div>
                                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 pa_left">
                                        <div class="cross_inner">
                                            <h3><?php echo $user['name']?><br><strong class="ornage_color"></strong></h3>
                                            <p><?php echo $user['title']?></p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <?php }}?>
                </div>

            </div>
        </div>
    </div>
  
    <!-- end clients -->
