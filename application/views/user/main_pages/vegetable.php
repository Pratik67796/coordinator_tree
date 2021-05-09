<!-- vegetable -->
<div id="vegetable" class="vegetable">
  <div class="container">
    <div class="row">
    <?php $count=1; if(!empty($vegetable_data))  { foreach ($vegetable_data as $user){ ?>
      <div class="col-md-12">
        <div  class="titlepage">
          <h2> Fresh <strong class="llow">vegetable</strong> </h2>
        </div>
      </div>
    </div>
  
    <div class="row">
      <?php
          $myImage = explode(",",$user['image']);
      ?>
      <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 ">
        <div class="vegetable_shop">
          <h3>Best Vegetables Shop</h3>
          <p><?php echo  $user['dec']?></p>
        </div>
      </div>
       <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 ">
        <div class="vegetable_img">
         <figure><img src="<?=base_url().'application/upload/vegetable_image/'.$myImage[0]?>" alt="#"/></figure>
         <span>01</span>
        </div>
      </div>
       <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 ">
        <div class="vegetable_img margin_top">
         <figure><img src="<?=base_url().'application/upload/vegetable_image/'.$myImage[1]?>" alt="#"/></figure>
         <span>02</span>
        </div>
      </div>
      <?php }} ?>
    </div>
   
  </div>
</div>
<!-- end vegetable -->

