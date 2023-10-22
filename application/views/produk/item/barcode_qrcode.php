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
					<h4>Barcode Generator <i class="fas fa-barcode"></i></h4>
				</div>
				<div class="col-sm-4" align="right">
					<a href="<?= site_url('item') ?>" class="btn btn-sm btn-secondary"><i class="fas fa-undo"></i> Back</a>
				</div>
			</div>
		</div>
		<!-- /.card-header -->
		<div class="card-body">
			<?php
			$generator = new Picqer\Barcode\BarcodeGeneratorPNG();
			echo '<img src="data:image/png;base64,' . base64_encode($generator->getBarcode($row->barcode, $generator::TYPE_CODE_128)) . '">';
			?>
			<br>
			<?= $row->barcode ?>
			<br>
			<a href="<?= site_url('item/barcode_print/' . $row->id_item) ?>" class="btn btn-sm btn-default mt-3"><i class="fas fa-print"></i> Print</a>
		</div>
	</div>

	<div class="card">
		<div class="card-header">
			<div class="row">
				<div class="col-sm-8">
					<h4>QR-Code Generator <i class="fas fa-qrcode"></i></h4>
				</div>
			</div>
		</div>
		<!-- /.card-header -->
		<div class="card-body">
		
		</div>
	</div>

</div>

<!-- /.card -->
</div><!-- /.container-fluid -->
