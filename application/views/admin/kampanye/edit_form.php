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
		<a href="<?php echo site_url('admin_list') ?>"><i class="fas fa-arrow-left"></i>Back</a>
	</div>
	<div class="card-body">
		<form action="<?php base_url('admin/penggalang/edit') ?>" method="post" enctype="multipart/form-data">

		<input type="hidden" name="id_penggalang" value="<?php echo $penggalang->id_penggalang ?>">

		<div class="form-group">
			<label for="id_member">ID Member</label>
			<input class="form-control <?php echo form_error('id_member') ? 'is_invalid':''?>" type="text" name="id_member" placeholder="" value="<?php echo $penggalang->id_member ?>">
			<div class="invalid-feedback">
				<?php echo form_error('id_member') ?>
			</div>
		</div>
		<div class="form-group">
			<label for="nama">Nama</label>
			<input class="form-control <?php echo form_error('nama') ? 'is_invalid':''?>" type="text" name="nama" placeholder="Nama lengkap" value="<?php echo $penggalang->nama ?>">
			<div class="invalid-feedback">
				<?php echo form_error('nama') ?>
			</div>
		</div>
		<div class="form-group">
			<label for="username">Username</label>
			<input class="form-control <?php echo form_error('username') ? 'is_invalid':''?>" type="text" name="username" placeholder="" value="<?php echo $penggalang->username ?>">
			<div class="invalid-feedback">
				<?php echo form_error('username') ?>
			</div>
		</div>
		<div class="form-group">
			<label for="nik">NIK</label>
			<input class="form-control <?php echo form_error('nik') ? 'is_invalid':''?>" type="text" name="nik" placeholder="" value="<?php echo $penggalang->nik ?>">
			<div class="invalid-feedback">
				<?php echo form_error('nik') ?>
			</div>
		</div>
		<div class="form-group">
			<label for="no_kk">No. KK</label>
			<input class="form-control <?php echo form_error('no_kk') ? 'is_invalid':''?>" type="text" name="no_kk" placeholder="" value="<?php echo $penggalang->no_kk ?>">
			<div class="invalid-feedback">
				<?php echo form_error('no_kk') ?>
			</div>
		</div>
		<div class="form-group">
			<label for="no_rek">No. Rek</label>
			<input class="form-control <?php echo form_error('no_rek') ? 'is_invalid':''?>" type="text" name="no_rek" placeholder="" value="<?php echo $penggalang->no_rek ?>">
			<div class="invalid-feedback">
				<?php echo form_error('no_rek') ?>
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