<!DOCTYPE html>
<html>
<head>
  <?php $this->load->view("admin/_partials/head.php") ?>
  <!-- admin profile css -->
  <link href="<?php echo base_url('assets/bootstrap/css/admin-profile.css') ?>" rel="stylesheet">
</head>
<body id="page-top">
<?php $this->load->view("admin/_partials/navbar.php") ?>
<div id="wrapper">
      <?php $this->load->view("admin/_partials/sidebar.php") ?>
    <div id="content-wrapper">

      <div class="container-fluid">
          <?php //$this->load->view("admin/_partials/breadbrumb.php") ?>

          <!-- datatables -->
<div class="card mb-3">
  <div class="card-header">
     Account Setting 
  </div>
  <div class="card-body">

    <div class="row">
      <div class="col-sm-5 ">
           <img src="<?php echo base_url('assets/img/'.$this->session->foto) ?>" class="rounded-circle" alt="Admin" width="150" height="130" class="img-circle img-responsive" style="margin-left: 120px;">
            <div class="text-center">
        <h6>Upload a different photo...</h6>
        <input type="file" class="text-center center-block file-upload">
      </div>
      </div>

      <div class="col-sm-5">
                   
                  <div class="row">
                    <div class="col-md-12">
                        <form>
                              
                              <div class="form-group row">
                                <label for="name" class="col-4 col-form-label">Nama</label> 
                                <div class="col-8">
                                  <input id="name" name="name" placeholder="Nama Lengkap" class="form-control here" type="text">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="lastname" class="col-4 col-form-label">Alamat</label> 
                                <div class="col-8">
                                  <input id="lastname" name="lastname" placeholder="Alamat" class="form-control here" type="text">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="text" class="col-4 col-form-label">Username</label> 
                                <div class="col-8">
                                  <input id="text" name="text" placeholder="username@mail.com" class="form-control here" required="required" type="text">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="username" class="col-4 col-form-label">Password</label> 
                                <div class="col-8">
                                  <input id="username" name="username" placeholder="*******" class="form-control here" required="required" type="text">
                                </div>
                              </div>
                               <div class="form-group row">
                                <label for="publicinfo" class="col-4 col-form-label">Bio</label> 
                                <div class="col-8">
                                  <textarea id="publicinfo" name="publicinfo" cols="40" rows="4" class="form-control"></textarea>
                                </div>
                              </div>
                              
                              <div class="form-group row">
                                <div class="offset-4 col-8">
                                  <button name="submit" type="submit" class="btn btn-primary">Update My Profile</button>
                                </div>
                              </div>
                            </form>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
                    
          

</div>
<!-- /.container-fluid -->

<!-- Sticky Footer -->
 <?php $this->load->view("admin/_partials/footer.php") ?>

</div>
<!-- /.content-wrapper -->

</div>
<!-- /#wrapper -->

<?php $this->load->view("admin/_partials/scrolltop.php") ?>
  <?php $this->load->view("admin/_partials/modal.php") ?>
  <?php $this->load->view("admin/_partials/js.php") ?>

<script src="<?php echo base_url('js/delete-confirm.js') ?>"></script>
<!-- admin profile js-->
<script src="<?php echo base_url('js/admin-profile.js') ?>"></script>

</body>
</html>