<!DOCTYPE html>
<html lang="en">
<head>
	<title></title>
</head>
<body id="page-top">

<!-- datatables -->
<div class="card mb-3">
	<div class="card-header">
		<a href="<?php echo site_url('admin/admin/add') ?>"><i class="fas fa-plus"></i>Tambah</a>
	</div>
	<div class="card-body">
		<div class="table table-hover" id="dataTable" width="100%" cellspacing="0">
			<thead>
				<tr>
					<th>Nama</th>
					<th>Username</th>
					<th>Foto</th>
					<th>Alamat</th>
					<th>Bio</th>
					<th>Level</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($admin as $admin) ?>
				<tr>
					<td>
						<?php echo $admin->nama ?>
					</td>
					<td>
						<?php echo $admin->username ?>
					</td>
					<td>
						<img src="<?php echo base_url('upload/admin/'.$admin->image) ?>" width="64">
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
						<a href="<?php echo site_url('admin/admin/edit'.$admin->id) ?>" class="btn btn-small"><i class="fas fa-edit"></i>Edit</a>
						<a onclick="deleteConfirm('<?php echo site_url('admin/admin/delete'.$product->id) ?>')" href="#!" class"btn btn-small text-danger"><i class="fas fa-trash"></i>Hapus</a>
					</td>
				</tr>
			<?php endforeach; ?>
			</tbody>
		</div>
	</div>
</div>

</body>
</html>