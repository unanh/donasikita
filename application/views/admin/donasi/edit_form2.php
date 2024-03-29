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
		<a href="<?php echo site_url('admin/donasi/list') ?>"><i class="fas fa-arrow-left"></i>Back</a>
	</div>
	<div class="card-body">
		<form action="<?php base_url('admin/donasi/edit') ?>" method="post" enctype="multipart/form-data">

		<input type="hidden" name="id_donasi" value="<?php echo $donasi->id_donasi ?>">

		<div class="form-group">
			<label for="id_kampanye">ID Kampanye</label>
			<input class="form-control-file <?php echo form_error('id_kampanye') ? 'is-invalid':'' ?>" type="text" name="id_kampanye" value="<?php echo $donasi->id_kampanye ?>">
			<div class="invalid-feedback">
				<?php echo form_error('id_kampanye') ?>
			</div>
		</div>
		<label><?php  ?></label>
		<div class="form-group">
			<label for="tgl">Tanggal</label>
			<input class="form-control <?php echo form_error('tgl') ? 'is_invalid':''?>" type="text" name="tgl" placeholder="" value="<?php echo $donasi->tgl ?>">
			<div class="invalid-feedback">
				<?php echo form_error('tgl') ?>
			</div>
		</div>
		<div class="form-group">
			<label for="jml_donasi">Jumlah Donasi</label>
			<input class="form-control <?php echo form_error('jml_donasi') ? 'is_invalid':''?>" type="text" name="jml_donasi" placeholder="" value="<?php echo $kampanye->jml_donasi ?>">
			<div class="invalid-feedback">
				<?php echo form_error('jml_donasi') ?>
			</div>
		</div>
		<div class="form-group">
			<label for="pembayaran">Opsi Pembayaran</label>
			<input class="form-control <?php echo form_error('pembayaran') ? 'is_invalid':''?>" type="text" name="pembayaran" placeholder="" value="<?php echo $kampanye->pembayaran ?>">
			<div class="invalid-feedback">
				<?php echo form_error('pembayaran') ?>
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