<section class="content-header">
	<div class="row ml-2">
		<h3>Item Barang</h3>
	</div>
</section>

<?= $this->session->flashdata('success'); ?>
<?= $this->session->flashdata('error'); ?>
<?= $this->session->flashdata('del'); ?>

<div class="card">
	<div class="card-header">
		<a href="<?= site_url('item/add') ?>" class="btn btn-sm btn-primary"><i class="fas fa-plus"></i> Tambah</a>
	</div>
	<!-- /.card-header -->
	<div class="card-body table-responsive">
		<table id="example1" class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>No</th>
					<th>Barcode</th>
					<th>Name</th>
					<th>Kategori</th>
					<th>Unit</th>
					<th>Harga</th>
					<th>Stock</th>
					<th>Image</th>
					<th>File</th>
					<th>Jenis</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				<?php $no = 1;
						foreach ($row->result() as $key => $data) { ?>
						<tr>
							<td style="width: 5%;"><?= $no++ ?></td>
							<td>
								<?= $data->barcode ?> <br>
								<a href="<?= site_url('item/barcode_qrcode/' . $data->id_item) ?>" class="btn btn-sm btn-default">Generate <i class="fas fa-barcode"></i></a>
							</td>
							<td><?= $data->name ?></td>
							<td><?= $data->kategori_name ?></td>
							<td><?= $data->unit_name ?></td>
							<td><?= indo_currency($data->harga) ?></td>
							<td><?= $data->stock ?></td>
							<td>
								<?php if ($data->image != null) { ?>
									<img src="<?= base_url('uploads/product/' . $data->image) ?>" style="width: 100px;">
									
								<?php } ?>
							</td>
							<td><a href="<?= base_url('uploads/product/' . $data->image) ?>" target="_blank"><?= $data->image?></a></td>
							<td class="d-flex justify-content-center"><a href="" class="btn btn-sm btn-warning "><i class="fas fa-file"></i></a></td>
							<td>
								<a href="<?= site_url('item/edit/' . $data->id_item) ?>" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i> Update</a>
								<a href="<?= site_url('item/del/' . $data->id_item) ?>" onclick="return confirm('Apakah anda yakin hapus data?')" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i> Hapus</a>
							</td>
						</tr>
					<?php } ?>
			</tbody>
		</table>
	</div>
</div>


