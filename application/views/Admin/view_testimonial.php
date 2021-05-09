<?php include('layouts/header.php'); ?>
<?php  include('layouts/sidebar.php'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with minimal features & hover style</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Control</th>
                  </tr>
                  </thead>
                    <?php $count=1; if(!empty($testi_data))  { foreach ($testi_data as $user){?>
                  <tbody>
                  <tr>
                    <td> <?php echo $count++ ?> </td>
                    <td><?php echo $user['name']?> </td>
                    <td><?php echo $user['title']?> </td>
                    <td><img src="<?=base_url().'application/upload/testimonial_image/'.$user['image']?>"  style="height:100px;width:100px" class="img-responsive"> </td>
                    <td>
                        <a href="<?=base_url('/').'Testi_controller/edittesti/'.$user['id'];?>" class="far fa-edit"></a></i>
                        <a href="<?=base_url('/').'Testi_controller/delete/'.$user['id'];?>"class="fas fa-trash-alt"></a></i>
                    </td>
                  </tr>
                  </tbody>
                  <?php }} else { ?>
                    <tr>
                        <td colspan ="5"> record not found</td>
                    </tr>
                    <?php } ?>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- -->
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php include('layouts/footer.php');?>