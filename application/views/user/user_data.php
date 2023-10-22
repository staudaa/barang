<section class="content-header">
	<div class="row ml-2">
		<h3>Data User</h3>
	</div>
</section>

<div class="card">
	<div class="card-header">
		<a href="<?= site_url('user/add') ?>" class="btn btn-sm btn-primary"><i class="fas fa-user-plus"></i> Tambah</a>
	</div>
	<!-- /.card-header -->
	<div class="card-body table-responsive">
		<table id="example1" class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>No</th>
					<th>Username</th>
					<th>Name</th>
					<th>Address</th>
					<th>Level</th>
					<th>Actions</th>
				</tr>
			</thead>
			<?php $no = 1;
			foreach ($row->result() as $key => $data) { ?>
				<tr>
					<td style="width: 5%;"><?= $no++ ?></td>
					<td><?= $data->username ?></td>
					<td><?= $data->name ?></td>
					<td><?= $data->address ?></td>
					<td><?= $data->level == 1 ? "Admin" : "Kasir" ?></td>
					<td>
						<form action="<?= site_url('user/del') ?>" method="post">
							<a href="<?= site_url('user/edit/' . $data->id_user) ?>" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i> Edit</a>
							<input type="hidden" name="id_user" value="<?= $data->id_user ?>">
							<button onclick="return confirm('Apakah anda yakin ingin menghapus data?')" type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i> Hapus</button>
						</form>

					</td>
				</tr>
			<?php } ?>
		</table>
	</div>
</div>



