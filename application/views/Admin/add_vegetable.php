<?php include('layouts/header.php'); ?>
<?php  include('layouts/sidebar.php'); ?>




<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>General Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">General Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Here you can Add vegetable Data </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <strong><?php if(isset($totalFiles)) echo "Successfully uploaded ".count($totalFiles)." files"; ?></strong>
              <form action="<?=base_url('/').'vege_controller/add_vegitable'?>" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  
                 
                  <div class="form-group">
                    <label for="exampleInputEmail1">Enter Description </label>
                    <textarea type="text" class="form-control" id="exampleInputEmail1" rows="10" cols="30" name="dec" placeholder="Enter Descripion"></textarea>
                  </div>
                  <div class="form-group">
                  <label for="exampleInputFile">File input</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <label class="btn btn-default btn-file glyphicon glyphicon-folder-open"><b> Browser..</b>
                        <input type="file" name="userfile[]" class="hidden" id="uploadImage" multiple onchange="PreviewImage();">
                      </label>
                      <!-- <input type="file" class="custom-file-input" name="photoImage" id="exampleInputFile">
                      <label class="custom-file-label" for="exampleInputFile">Choose file</label> -->
                    </div>
                    <!-- <div class="input-group-append">
                      <img id="uploadPreview" style="width: 100px; height: 100px; " />
                    </div> -->
                    <!-- <div class="input-group-append">
                      <img id="uploadPreview2" style="width: 100px; height: 100px; " />
                    </div> -->
                  </div>
                  </div>

                    <!-- <div class="form-group">
                  <label for="exampleInputFile">File input</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <label class="btn btn-default btn-file glyphicon glyphicon-folder-open"><b> Browser..</b>
                        <input type="files" name="photo" class="hidden" id="uploadImage2" onchange="PreviewImage2();">
                      </label>
                      <!-- <input type="file" class="custom-file-input" name="photoImage" id="exampleInputFile">
                      <label class="custom-file-label" for="exampleInputFile">Choose file</label> -->
                   <!-- </div>
                    <div class="input-group-append">
                      <img id="uploadPreview2" style="width: 100px; height: 100px; " />
                    </div>
                  </div>
                  </div>  -->
                    
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>        
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <script>
    function PreviewImage() {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);
        oFReader.onload = function (oFREvent) {
            document.getElementById("uploadPreview").src = oFREvent.target.result;
        };
    };
    function PreviewImage2() {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("uploadImage2").files[0]);
        oFReader.onload = function (oFREvent) {
            document.getElementById("uploadPreview2").src = oFREvent.target.result;
        };
    };
    
</script>

<?php  include('layouts/footer.php'); ?>