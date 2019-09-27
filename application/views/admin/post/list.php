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
		<a href="<?php echo site_url('admin_post/add') ?>"><i class="fas fa-plus"></i>Tambah</a>
	</div>
	<div class="card-body">

		<div class="table-responsive">
		<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
			<thead>
				<tr>
					<th>Judul</th>
					<th>Gambar</th>
					<th>Isi</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($info as $info): ?>
				<tr>
					<td>
						<?php echo $info->judul ?>
					</td>
					<td>
						<img src="<?php echo base_url('assets/img/'.$info->gambar) ?>" width="64" alt="null">
					</td>
					<td class="small">
						<?php echo substr($info->isi, 0, 120) ?>...
					</td>
					<td width="250">
						<a href="<?php echo site_url('admin_post/edit/'.$info->id_info) ?>" class="btn btn-small"><i class="fas fa-edit"></i>Edit</a>
						<a onclick="deleteConfirm('<?php echo site_url('admin_post/delete/'.$info->id_info) ?>')" class="btn btn-small text-danger"><i class="fas fa-trash"></i>Hapus</a>
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