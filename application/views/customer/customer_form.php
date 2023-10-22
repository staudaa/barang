<!-- <section class="content-header">
	<div class="row ml-2">
		<h5>Tambah Data User</h5>
	</div>
</section> -->

<section class="content-header">
	<div class="row ml-2">
		<h3>Customer</h3>
	</div>
</section>

<div class="container-fluid">
	<div class="card">
		<div class="card-header">
			<div class="row">
				<div class="col-sm-8">
					<h4><?=ucfirst($page)?> Data customer</h4>
				</div>
				<div class="col-sm-4" align="right">
					<a href="<?= site_url('customer') ?>" class="btn btn-sm btn-secondary"><i class="fas fa-undo"></i> Back</a>
				</div>
			</div>
		</div>
		<!-- /.card-header -->
		<div class="card-body">
			<div class="row col-md-4">

				<form action="<?=site_url('customer/process')?>" method="post">
					<div class="form-group">
						<label>customer Nama *</label>
						<input type="hidden" name="id" value="<?=$row->id_customer?>">
						<input type="text" name="customer_name" value="<?=$row->nama?>" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Gender *</label>
						<select name="gender" class="form-control" required>
							<option value="">- Pilih -</option>
							<option value="L" <?=$row->gender == 'L' ? 'selected' : ''?>>Laki-laki</option>
							<option value="P" <?=$row->gender == 'P' ? 'selected' : ''?>>Perempuan</option>
						</select>
					</div>
					<div class="form-group">
						<label>No HP *</label>
						<input type="text" name="no_hp" value="<?=$row->no_hp?>" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Address *</label>
						<textarea name="address" class="form-control" required><?=$row->address?></textarea>
					</div>
					<div class="form-group">
						<button name="<?=$page?>" type="submit" class="btn btn-success btn-sm"><i class="fas fa-paper-plane"></i> Simpan</button>
						<button type="reset" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Reset</button>
					</div>
			</div>
			</form>

		</div>
	</div>
	<!-- /.card-body -->

</div>

<!-- /.card -->
</div><!-- /.container-fluid -->
