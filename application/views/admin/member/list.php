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

<!-- datatables -->
<div class="card mb-3">
	<div class="card-header">
		<a href="<?php echo site_url('admin/member/add') ?>"><i class="fas fa-plus"></i>Tambah</a>
	</div>
	<div class="card-body">

		<div class="table-responsive">
		<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
			<thead>
				<tr>
					<th>Nama</th>
					<th>Username</th>
					<th>Foto</th>
					<th>Alamat</th>
					<th>Bio</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($admin as $admin): ?>
				<tr>
					<td>
						<?php echo $admin->nama ?>
					</td>
					<td>
						<?php echo $admin->username ?>
					</td>
					<td>
						<img src="<?php echo base_url('assets/img/'.$admin->foto) ?>" width="64">
					</td>
					<td>
						<?php echo $admin->alamat ?>
					</td>
					<td class="small">
						<?php echo substr($admin->bio, 0, 120) ?>...
					</td>
					<td>
						<?php echo $admin->level ?>
					</td>
					<td width="250">
						<a href="<?php echo site_url('admin_edit/'.$admin->id) ?>" class="btn btn-small"><i class="fas fa-edit"></i>Edit</a>
						<a onclick="deleteConfirm('<?php echo site_url('admin_delete/'.$admin->id) ?>')" class="btn btn-small text-danger"><i class="fas fa-trash"></i>Hapus</a>
					</td>
				</tr>
			<?php endforeach; ?>
			</tbody>
		</table>
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

</body>
</html>