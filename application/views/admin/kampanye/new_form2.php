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
		<a href="<?php echo site_url('admin/kampanye') ?>"><i class="fas fa-arrow-left"></i>Back</a>
	</div>
	<div class="card-body">
		<form action="<?php //base_url('admin/admin/add') ?>" method="post" enctype="multipart/form-data">
		<div class="form-group">
			<label for="id_penggalang">ID Penggalang</label>
			<input class="form-control <?php echo form_error('id_penggalang') ? 'is_invalid':''?>" type="text" name="id_penggalang" placeholder="">
			<div class="invalid-feedback">
				<?php echo form_error('id_penggalang') ?>
			</div>
		</div>
		<div class="form-group">
			<label for="id_kategori">ID Kategori</label>
			<input class="form-control <?php echo form_error('id_kategori') ? 'is_invalid':''?>" type="text" name="id_kategori" placeholder="">
			<div class="invalid-feedback">
				<?php echo form_error('id_kategori') ?>
			</div>
		</div>
		<div class="form-group">
			<label for="judul">Judul</label>
			<input class="form-control <?php echo form_error('judul') ? 'is_invalid':''?>" type="text" name="judul" placeholder="">
			<div class="invalid-feedback">
				<?php echo form_error('judul') ?>
			</div>
		</div>
		<div class="form-group">
			<label for="deskripsi">Deskripsi</label>
			<textarea class="form-control <?php echo form_error('deskripsi') ? 'is_invalid':''?>" name="deskripsi" placeholder=""></textarea>
			<div class="invalid-feedback">
				<?php echo form_error('deskripsi') ?>
			</div>
		</div>
		<div class="form-group">
			<label for="file">File</label>
			<input class="form-control-file <?php echo form_error('file') ? 'is-invalid':'' ?>" type="file" name="file">
			<div class="invalid-feedback">
				<?php echo form_error('file') ?>
			</div>
		</div>
		<div class="form-group">
			<label for="target_nominal">Target Nominal</label>
			<input class="form-control <?php echo form_error('target_nominal') ? 'is_invalid':''?>" type="text" name="target_nominal" placeholder="">
			<div class="invalid-feedback">
				<?php echo form_error('target_nominal') ?>
			</div>
		</div>
		<div class="form-group">
			<label for="tgl_pencairan">Tgl Pencairan</label>
			<input class="form-control <?php echo form_error('target_nominal') ? 'is_invalid':''?>" type="text" name="target_nominal" placeholder="">
			<div class="invalid-feedback">
				<?php echo form_error('target_nominal') ?>
			</div>
		</div>
		<div class="form-group">
			<label for="status">Status</label>
			<input class="form-control <?php echo form_error('status') ? 'is_invalid':''?>" type="text" name="status" placeholder="">
			<div class="invalid-feedback">
				<?php echo form_error('status') ?>
			</div>
		</div>	
		<button type="submit" class="btn btn-primary" style="margin-right: 866px;"><a href="<?php echo site_url('admin/penggalang/add/') ?>" style="text-decoration: none; color: white; margin-right: auto;"><i class='fas fa-arrow-left'></i>Previous</a></button>
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