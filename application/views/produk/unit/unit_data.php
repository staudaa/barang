<section class="content-header">
		<h3>Unit Barang</h3>
</section>

<?= $this->session->flashdata('success'); ?>
<?= $this->session->flashdata('del'); ?>

<div class="card">
	<div class="card-header">
		<a href="<?= site_url('unit/add') ?>" class="btn btn-sm btn-primary"><i class="fas fa-plus"></i> Tambah</a>
	</div>
	<!-- /.card-header -->
	<div class="card-body table-responsive">
		<table id="example1" class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>No</th>
					<th>Name</th>
					<th>Actions</th>
				</tr>
			</thead>
			<?php $no = 1;
			foreach ($row->result() as $key => $data) { ?>
				<tr>
					<td style="width: 5%;"><?= $no++ ?></td>
					<td><?= $data->name ?></td>
					<td>
						<a href="<?= site_url('unit/edit/' . $data->id_unit) ?>" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i> Update</a>
						<a href="<?= site_url('unit/del/' . $data->id_unit) ?>" onclick="return confirm('Apakah anda yakin hapus data?')" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i> Hapus</a>
					</td>
				</tr>
			<?php } ?>
		</table>
	</div>
</div>
