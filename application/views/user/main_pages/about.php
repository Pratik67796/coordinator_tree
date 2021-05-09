<!-- about  -->
<div id="about" class="about">
  <div class="container-fluid">
    <div class="row">
    <?php $count=1; if(!empty($about_data))  { foreach ($about_data as $user){?>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
        <div class="about-box">
          <h2>About us</h2>
          <p><?php echo $user['dec']?></p>
          <a href="Javascript:void(0)">Read more</a>
        </div>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 padding_rl">
        <div class="about-box_img">
          <figure><img src="<?=base_url().'application/upload/about_image/'.$user['image']?>" alt="#" /></figure>
        </div>
      </div>
    </div>
    <?php }} ?>
  </div>
</div>
<!-- end abouts -->

