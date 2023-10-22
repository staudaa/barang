<!-- <section class="content-header">
	<div class="row ml-2">
		<h5>Tambah Data User</h5>
	</div>
</section> -->

<div class="container-fluid">
	<div class="card">
		<div class="card-header">
			<div class="row">
				<div class="col-sm-8">
					<h4>Edit Data</h4>
				</div>
				<div class="col-sm-4" align="right">
					<a href="<?= site_url('user') ?>" class="btn btn-sm btn-secondary"><i class="fas fa-undo"></i> Back</a>
				</div>
			</div>
		</div>
		<!-- /.card-header -->
		<div class="card-body">
			<div class="row col-md-4">

				<form action="" method="post">
					<div class="form-group">
						<label>Nama *</label>
						<input type="hidden" name="id_user" value="<?=$row->id_user?>">
						<input type="text" name="fullname" value="<?=$this->input->post('fullname') ?? $row->name?>" class="form-control">
						<?=form_error('fullname', '<div class="text-small text-danger">', '</div>')?></span>
					</div>
					<div class="form-group">
						<label>Username *</label>
						<input type="text" name="username" value="<?=$this->input->post('username') ?? $row->username?>" class="form-control">
						<?=form_error('username', '<div class="text-small text-danger">', '</div>')?>
					</div>
					<div class="form-group]">
						<label>Password</label> <small>(Biarkan kosong jika tidak diganti)</small>
						<input type="password" name="password" value="<?=$this->input->post('password')?>" class="form-control">
						<?=form_error('password', '<div class="text-small text-danger">', '</div>')?>
					</div>
					<div class="form-group">
						<label>Password Confirmation</label>
						<input type="password" name="passconf" class="form-control" value="<?=$this->input->post('passconf')?>">
						<?=form_error('passconf', '<div class="text-small text-danger">', '</div>')?>
					</div>
					<div class="form-group">
						<label for="">Address</label>
						<textarea name="address" class="form-control"><?=$this->input->post('address') ?? $row->address?></textarea>
					</div>
					<div class="form-group">
						<label>Level *</label>
						<select name="level" class="form-control">
							<?php $level = $this->input->post('level') ? $this->input->post('level') : $row->level ?>
							<option value="1">Admin</option>
							<option value="2" <?= $level == 2 ? 'selected' : null ?>>Kasir</option>
						</select>
						 <?=form_error('level', '<div class="text-small text-danger">', '</div>')?>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-success btn-sm"><i class="fas fa-paper-plane"></i> Simpan</button>
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
