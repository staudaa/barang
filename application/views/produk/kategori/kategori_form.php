<!-- <section class="content-header">
	<div class="row ml-2">
		<h5>Tambah Data User</h5>
	</div>
</section> -->

<section class="content-header">
	<div class="row ml-2">
		<h3>kategori</h3>
	</div>
</section>

<div class="container-fluid">
	<div class="card">
		<div class="card-header">
			<div class="row">
				<div class="col-sm-8">
					<h4><?=ucfirst($page)?> Data kategori</h4>
				</div>
				<div class="col-sm-4" align="right">
					<a href="<?= site_url('kategori') ?>" class="btn btn-sm btn-secondary"><i class="fas fa-undo"></i> Back</a>
				</div>
			</div>
		</div>
		<!-- /.card-header -->
		<div class="card-body">
			<div class="row col-md-4">

				<form action="<?=site_url('kategori/process')?>" method="post">
					<div class="form-group">
						<label>Kategori Nama *</label>
						<input type="hidden" name="id" value="<?=$row->id_kategori?>">
						<input type="text" name="kategori_name" value="<?=$row->name?>" class="form-control" required>
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
