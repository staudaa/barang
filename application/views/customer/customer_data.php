<section class="content-header">
	<div class="row ml-2">
		<h3>Data customer</h3>
	</div>
</section>

<div class="card">
	<div class="card-header">
		<a href="<?= site_url('customer/add') ?>" class="btn btn-sm btn-primary"><i class="fas fa-plus"></i> Tambah</a>
	</div>
	<!-- /.card-header -->
	<div class="card-body table-responsive">
		<table id="example1" class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>No</th>
					<th>Name</th>
					<th>Gender</th>
					<th>No HP</th>
					<th>Address</th>
					<th>Actions</th>
				</tr>
			</thead>
			<?php $no = 1;
			foreach ($row->result() as $key => $data) { ?>
				<tr>
					<td  style="width: 5%;"><?= $no++ ?></td>
					<td><?= $data->nama ?></td>
					<td><?= $data->gender ?></td>
					<td><?= $data->no_hp ?></td>
					<td><?= $data->address ?></td>
					<td>
						<a href="<?= site_url('customer/edit/' . $data->id_customer) ?>" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i> Update</a>
						<a href="<?= site_url('customer/del/' . $data->id_customer) ?>" onclick="return confirm('Apakah anda yakin hapus data?')" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i> Hapus</a>
					</td>
				</tr>
			<?php } ?>
		</table>
	</div>
</div>
