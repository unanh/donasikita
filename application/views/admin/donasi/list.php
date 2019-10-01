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
		<a href="<?php echo site_url('admin/donasi/add') ?>"><i class="fas fa-plus"></i>Tambah</a>
	</div>
	<div class="card-body">

		<div class="table-responsive">
		<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
			<thead>
				<tr>
					<th>Nama</th>
					<th>Kampanye</th>
					<th>Tanggal</th>
					<th>Jumlah Donasi</th>
					<th>Status</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($donasi as $donasi): ?>
				<tr>
					<td>
						<?php echo $donasi->nama ?>
					</td>
					<td>
						<?php echo $donasi->judul ?>
					</td>
					<td>
						<?php echo $donasi->tgl ?>
					</td>
					<td>
						<?php echo $donasi->jml_donasi ?>
					</td>
					<td>
						<?php echo $donasi->status ?>
					</td>
					<td width="250">
						<a href="<?php echo site_url('admin/donasi/edit/'.$donasi->id) ?>" class="btn btn-small"><i class="fas fa-edit"></i>Edit</a>
						<a onclick="deleteConfirm('<?php echo site_url('admin/donasi/delete/'.$donasi->id) ?>')" class="btn btn-small text-danger"><i class="fas fa-trash"></i>Hapus</a>
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