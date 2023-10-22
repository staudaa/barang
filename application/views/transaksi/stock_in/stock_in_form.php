<!-- <section class="content-header">
	<div class="row ml-2">
		<h5>Tambah Data User</h5>
	</div>
</section> -->

<section class="content-header">
	<div class="row ml-2">
		<h3>Stock in</h3>
	</div>
</section>

<div class="container-fluid">
	<div class="card">
		<div class="card-header">
			<div class="row">
				<div class="col-sm-8">
					<h4> Add Stock in</h4>
				</div>
				<div class="col-sm-4" align="right">
					<a href="<?= site_url('stock/stock_in_data') ?>" class="btn btn-sm btn-secondary"><i class="fas fa-undo"></i> Back</a>
				</div>
			</div>
		</div>
		<!-- /.card-header -->
		<div class="card-body">
			<div class="row col-md-4">

				<form action="<?= site_url('stock/process') ?>" method="post">
					<div class="form-group">
						<label>Tanggal *</label>
						<input type="date" name="tanggal" class="form-control" value="<?= date('Y-m-d') ?>" required>
					</div>
					<div class="form-group">
						<label for="barcode">Barcode *</label>
					</div>
					<div class="form-group input-group">
						<input type="hidden" name="id_item" id="id_item">
						<input type="text" name="barcode" id="barcode" class="form-control" required autofocus>
						<span class="input-group-btn">
							<button type="button" class="btn btn-info btn-flat" data-toggle="modal" data-target="#modal-item">
								<i class="fas fa-search"></i>
							</button>
						</span>
					</div>
					<div class="form-group">
						<label>Nama Item *</label>
						<input type="text" name="item_name" id="item_name" class="form-control" readonly>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-md-8">
								<label for="unit_name">Item Unit</label>
								<input type="text" name="unit_name" id="unit_name" value="-" class="form-control" readonly>
							</div>
							<div class="col-md-4">
								<label for="stock">Initial stock</label>
								<input type="text" name="stock" id="stock" value="-" class="form-control" readonly>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label>Detail *</label>
						<input type="text" name="detail" class="form-control" placeholder="Kulakan / tambahan/ etc" required>
					</div>
					<div class="form-group">
						<label>Supplier</label>
						<select name="supplier" class="form-control">
							<option value="">- Pilih -</option>
							<?php foreach($supplier as $i => $data) {
								echo '<option value="'.$data->id_supplier.'">'.$data->nama.'</option>';
							} ?>
						</select>
					</div>
					<div class="form-group">
						<label>Qty *</label>
						<input type="text" name="qty" class="form-control" required>
					</div>

					<div class="form-group">
						<button name="in_add" type="submit" class="btn btn-success btn-sm"><i class="fas fa-paper-plane"></i> Simpan</button>
						<button type="reset" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Reset</button>
					</div>
			</div>
			</form>

		</div>
	</div>
	<!-- /.card-body -->

</div>


<div class="modal fade" id="modal-item">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Select Produk Item</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body table-responsive">
				<table id="example2" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>Barcode</th>
							<th>Name</th>
							<th>Unit</th>
							<th>Harga</th>
							<th>Stock</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($item as $it => $data) { ?>
							<tr>
								<td><?= $data->barcode ?></td>
								<td><?= $data->name ?></td>
								<td><?= $data->unit_name ?></td>
								<td><?= indo_currency($data->harga) ?></td>
								<td><?= $data->stock ?></td>
								<td>
									<button class="btn btn-xs btn-info" id="select" 
									data-id="<?= $data->id_item ?>" 
									data-barcode="<?= $data->barcode ?>" 
									data-name="<?= $data->name ?>" 
									data-unit="<?= $data->unit_name ?>"
									data-stock="<?= $data->stock?>">
										<i class="fas fa-check"></i> Select
									</button>
								</td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>


<script>
	$(document).ready(function() {
		$(document).on('click', '#select', function() {
			var id_item = $(this).data('id');
			var barcode = $(this).data('barcode');
			var name = $(this).data('name');
			var unit_name = $(this).data('unit');
			var stock = $(this).data('stock');
			$('#id_item').val(id_item);
			$('#barcode').val(barcode);
			$('#item_name').val(name);
			$('#unit_name').val(unit_name);
			$('#stock').val(stock);
			$('#modal-item').modal('hide');
		})
	})
</script>
