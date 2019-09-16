<!DOCTYPE html>
<html lang="en">
<head>
	<title></title>
</head>
<body>

<?php if ($this->session->flashdata('success')): ?>
<div class="alert alert-success" role="alert">
<?php echo $this->session->flashdata('success'); ?>
</div>
<?php endif; ?>

<div class="card mb-3">
	<div class="card-header">
		<a href="<?php echo site_url('admin/admin/') ?>"><i class="fas fa-arrow-left"></i>Back</a>
	</div>
	<div class="card-body">
		<form action="<?php base_url('admin/admin/add') ?>" method="post" enctype="multipart/form-data">
		<div class="form-group">
			<label for="nama">Nama</label>
			<input class="form-control <?php echo form_error('nama') ? 'is_invalid':''?>" type="text" name="nama" placeholder="Nama lengkap">
			<div class="invalid-feedback">
				<?php echo form_error('nama') ?>
			</div>
		</div>
		<div class="form-group">
			<label for="username">Username</label>
			<input class="form-control <?php echo form_error('username') ? 'is_invalid':''?>" type="text" name="username" placeholder="">
			<div class="invalid-feedback">
				<?php echo form_error('username') ?>
			</div>
		</div>
		<div class="form-group">
			<label for="password">Password</label>
			<input class="form-control <?php echo form_error('password') ? 'is_invalid':''?>" type="text" name="password" placeholder="">
			<div class="invalid-feedback">
				<?php echo form_error('password') ?>
			</div>
		</div>
		<div class="form-group">
			<label for="foto">Foto</label>
			<input class="form-control-file <?php echo form_error('foto') ? 'is-invalid':'' ?>" type="file" name="foto">
			<div class="invalid-feedback">
				<?php echo form_error('foto') ?>
			</div>
		</div>
		<div class="form-group">
			<label for="alamat">Alamat</label>
			<input class="form-control <?php echo form_error('alamat') ? 'is_invalid':''?>" type="text" name="alamat" placeholder="">
			<div class="invalid-feedback">
				<?php echo form_error('alamat') ?>
			</div>
		</div>
		<div class="form-group">
			<label for="bio">Bio</label>
			<textarea class="form-control <?php echo form_error('bio') ? 'is_invalid':''?>" name="bio" placeholder=""></textarea>
			<div class="invalid-feedback">
				<?php echo form_error('bio') ?>
			</div>
		</div>	
		<input class="btn btn-success" type="submit" name="simpan" value="Simpan">	
		</form>
	</div>
	<div class="card-footer small text-muted">
		*required fields
	</div>
</div>

</body>
</html>