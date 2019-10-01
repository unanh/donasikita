<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>
<body id="page-top">
<?php $this->load->view("admin/_partials/navbar.php") ?>
<div id="wrapper">
      <?php $this->load->view("admin/_partials/sidebar.php") ?>
    <div id="content-wrapper">

      <div class="container-fluid">
          <?php //$this->load->view("admin/_partials/breadbrumb.php") ?>

<?php if ($this->session->flashdata('success')): ?>
<div class="alert alert-success" role="alert">
<?php echo $this->session->flashdata('success'); ?>
</div>
<?php endif; ?>

<div class="card mb-3">
	<div class="card-header">
		<a href="<?php echo site_url('admin_post') ?>"><i class="fas fa-arrow-left"></i>Back</a>
	</div>
	<div class="card-body">
		<form action="<?php base_url('admin_post/add') ?>" method="post" enctype="multipart/form-data">
		<div class="form-group">
			<label for="judul">Judul</label>
			<input class="form-control <?php echo form_error('judul') ? 'is_invalid':''?>" type="text" name="judul" placeholder="Judul artikel">
			<div class="invalid-feedback">
				<?php echo form_error('judul') ?>
			</div>
		</div>
		<div class="form-group">
			<label for="gambar">Gambar</label>
			<input class="form-control-file <?php echo form_error('gambar') ? 'is-invalid':'' ?>" type="file" name="gambar">
			<div class="invalid-feedback">
				<?php echo form_error('gambar') ?>
			</div>
		</div>
		<div class="form-group">
			<label for="isi">Isi</label>
			<textarea class="form-control <?php echo form_error('isi') ? 'is_invalid':''?>" name="isi" placeholder=""></textarea>
			<div class="invalid-feedback">
				<?php echo form_error('isi') ?>
			</div>
		</div>	
		<input class="btn btn-success" type="submit" name="simpan" value="Simpan">	
		</form>
	</div>
	<div class="card-footer small text-muted">
		*required fields
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

</body>
</html>