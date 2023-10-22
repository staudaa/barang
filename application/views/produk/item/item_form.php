<!-- <section class="content-header">
	<div class="row ml-2">
		<h5>Tambah Data User</h5>
	</div>
</section> -->

<section class="content-header">
	<div class="row ml-2">
		<h3>Item Barang</h3>
	</div>
</section>

<div class="container-fluid">
	<div class="card">
		<div class="card-header">
			<div class="row">
				<div class="col-sm-8">
					<h4><?= ucfirst($page) ?> Data item</h4>
				</div>
				<div class="col-sm-4" align="right">
					<a href="<?= site_url('item') ?>" class="btn btn-sm btn-secondary"><i class="fas fa-undo"></i> Back</a>
				</div>
			</div>
		</div>
		<!-- /.card-header -->
		<div class="card-body">
			<div class="row col-md-4">

				<?php echo form_open_multipart('item/process') ?>
				<div class="form-group">
					<label>Barcode *</label>
					<input type="hidden" name="id" value="<?= $row->id_item ?>">
					<input type="text" name="barcode" value="<?= $row->barcode ?>" class="form-control" required>
				</div>
				<div class="form-group">
					<label>Nama Produk *</label>
					<input type="text" name="product_name" value="<?= $row->name ?>" class="form-control" required>
				</div>
				<div class="form-group">
					<label>Kategori *</label>
					<?php echo form_dropdown(
						'kategori',
						$kategori,
						$selectedkategori,
						['class' => 'form-control', 'required' => 'required']
					); ?>
				</div>
				<div class="form-group">
					<label>Unit *</label>
					<!-- <select name="unit" class="form-control">
							<option value="">- Pilih -</option> -->
					<?php echo form_dropdown(
						'unit',
						$unit,
						$selectedunit,
						['class' => 'form-control', 'required' => 'required']
					); ?>
					<!-- </select> -->

				</div>
				<div class="form-group">
					<label>Harga *</label>
					<input type="number" name="harga" value="<?= $row->harga ?>" class="form-control" required>
				</div>
				<div class="form-group">
					<label>Gambar</label>
					<?php if ($page == 'edit') {
						if ($row->image != null) { ?>
							<div style="margin-bottom: 7px;">
							<img src="<?= base_url('uploads/product/' . $row->image) ?>" style="width: 100%;">
							</div>
					<?php }
					} ?>
					<input type="file" name="image" class="form-control">
					<small>(Biarkan kosong jika tidak <?= $page == 'edit' ? 'diganti' : 'ada' ?>)</small>
				</div>
				<div class="form-group">
					<button name="<?= $page ?>" type="submit" class="btn btn-success btn-sm"><i class="fas fa-paper-plane"></i> Simpan</button>
					<button type="reset" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Reset</button>
				</div>
				<?php echo form_close() ?>
			</div>
		</div>
	</div>
	<!-- /.card-body -->

</div>

<!-- /.card -->
</div><!-- /.container-fluid -->
