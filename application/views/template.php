<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>au | sToree</title>

	<!-- Google Font: Source Sans Pro -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/template/plugins/fontawesome-free/css/all.min.css">
	<!-- DataTables -->
	<link rel="stylesheet" href="<?= base_url('assets/template') ?>/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/template') ?>/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/template') ?>/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/template/dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
	<!-- Site wrapper -->
	<div class="wrapper">
		<!-- Navbar -->
		<nav class="main-header navbar navbar-expand navbar-white navbar-light">
			<!-- Left navbar links -->
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
				</li>
				<li class="nav-item d-none d-sm-inline-block">
					<a href="<?= site_url('dashboard') ?>" class="nav-link">Home</a>
				</li>
			</ul>

		</nav>
		<!-- /.navbar -->

		<!-- Main Sidebar Container -->
		<aside class="main-sidebar sidebar-light-green elevation-4">

			<!-- Sidebar -->
			<div class="sidebar">
				<!-- Sidebar user (optional) -->
				<div class="user-panel mt-3 pb-3 mb-3 d-flex">
					<div class="image">
						<img src="<?= base_url('assets/template') ?>/dist/img/user2-160x160.jpg" class="img-circle">
					</div>
					<div class="info">
						<a href="#" class="d-block"><?= ucfirst($this->fungsi->user_login()->username) ?></a>
					</div>
				</div>

				<!-- Sidebar Menu -->
				<nav class="mt-2">

					<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
						<li class="nav-item">
							<a href="<?= site_url('dashboard') ?>" class="nav-link <?php if ($this->uri->segment(1) == 'dashboard') echo 'active' ?>">
								<i class="nav-icon fas fa-tachometer-alt"></i>
								<span> Dashboard</span>
							</a>
						</li>
						<li class="nav-header">MASTER DATA</li>
						<!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
						<li class="nav-item">
							<a href="<?= site_url('supplier') ?>" class="nav-link <?php if ($this->uri->segment(1) == 'supplier') echo 'active' ?>">
								<i class="nav-icon fas fa-truck"></i>
								<span>Supplier</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?= site_url('customer') ?>" class="nav-link <?php if ($this->uri->segment(1) == 'customer') echo 'active' ?>">
								<i class="nav-icon fas fa-users"></i>
								<span>Pembeli</span>
							</a>
						</li>

						<li class="nav-item has-treeview <?php if ($this->uri->segment(1) == 'kategori' || $this->uri->segment(1) == 'unit' || $this->uri->segment(1) == 'item') echo 'active' ?>">
							<a href="#" class="nav-link">
								<i class="nav-icon fas fa-archive"></i><span>Produk</span>
								<i class="right fas fa-angle-left"></i>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="<?= site_url('kategori') ?>" class="nav-link <?php if ($this->uri->segment(1) == 'kategori') echo 'active' ?>">
										<i class="far fa-circle nav-icon"></i>
										Kategori
									</a>
								</li>
								<li class="nav-item">
									<a href="<?= site_url('unit') ?>" class="nav-link <?php if ($this->uri->segment(1) == 'unit') echo 'active' ?>">
										<i class="far fa-circle nav-icon"></i>
										Unit
									</a>
								</li>
								<li class="nav-item">
									<a href="<?= site_url('item') ?>" class="nav-link <?php if ($this->uri->segment(1) == 'item') echo 'active' ?>">
										<i class="far fa-circle nav-icon"></i>
										Item
									</a>
								</li>
							</ul>
						</li>

						<li class="nav-item has-treeview">
							<a href="#" class="nav-link <?php if ($this->uri->segment(1) == 'transaksi') echo 'active' ?>">
								<i class="nav-icon fas fa-shopping-cart"></i><span>Transaksi</span>
								<i class="right fas fa-angle-left"></i>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="../layout/top-nav.html" class="nav-link <?php if ($this->uri->segment(1) == 'sales') echo 'active' ?>">
										<i class="far fa-circle nav-icon"></i>
										Sales
									</a>
								</li>
								<li class="nav-item">
									<a href="<?= site_url('stock/stock_in_data')?>" class="nav-link <?php if ($this->uri->segment(1) == 'stockin') echo 'active' ?>">
										<i class="far fa-circle nav-icon"></i>
										Stock in
									</a>
								</li>
								<li class="nav-item">
									<a href="../layout/boxed.html" class="nav-link <?php if ($this->uri->segment(1) == 'stockout') echo 'active' ?>">
										<i class="far fa-circle nav-icon"></i>
										Stock out
									</a>
								</li>
							</ul>
						</li>

						<li class="nav-item has-treeview">
							<a href="#" class="nav-link <?php if ($this->uri->segment(1) == 'report') echo 'active' ?>">
								<i class=" nav-icon  fas fa-folder-open"></i><span>Report</span>
								<i class="right fas fa-angle-left"></i>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="../layout/top-nav.html" class="nav-link <?php if ($this->uri->segment(1) == 'sales') echo 'active' ?>">
										<i class="far fa-circle nav-icon"></i>
										Sales
									</a>
								</li>
								<li class="nav-item">
									<a href="../layout/top-nav-sidebar.html" class="nav-link <?php if ($this->uri->segment(1) == 'stocks') echo 'active' ?>">
										<i class="far fa-circle nav-icon"></i>
										Stocks
									</a>
								</li>
							</ul>
						</li>

						<!-- session->userdata('level') = tidak menggunakan session karena menu user masih tampil jika diganti -->
						<?php if ($this->fungsi->user_login()->level == 1) { ?>
							<li class="nav-header">SYSTEM</li>
							<li class="nav-item">
								<a href="<?= site_url('user') ?>" class="nav-link <?php if ($this->uri->segment(1) == 'user') echo 'active' ?>">
									<i class="nav-icon fas fa-user"></i>
									User
								</a>
							</li>
						<?php } ?>

						<li class="nav-item">
							<a href="<?= site_url('auth/logout') ?>" class="nav-link" onclick="return confirm('Apakah anda yakin ingin logout?')">
								<i class="nav-icon fas fa-undo"></i>
								Logout
							</a>
						</li>
					</ul>
				</nav>
				<!-- /.sidebar-menu -->
			</div>
			<!-- /.sidebar -->
		</aside>

		<!-- jQuery -->
		<script src="<?= base_url() ?>assets/template/plugins/jquery/jquery.min.js"></script>

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<?= $contents ?>
		</div>
		<!-- /.content-wrapper -->

		<!-- Control Sidebar -->
		<aside class="control-sidebar control-sidebar-dark">
			<!-- Control sidebar content goes here -->
		</aside>
		<!-- /.control-sidebar -->
	</div>
	<!-- ./wrapper -->

	<!-- Bootstrap 4 -->
	<script src="<?= base_url() ?>assets/template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- DataTables  & Plugins -->
	<script src="<?= base_url() ?>assets/template/plugins/datatables/jquery.dataTables.min.js"></script>
	<script src="<?= base_url() ?>assets/template/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
	<script src="<?= base_url() ?>assets/template/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
	<script src="<?= base_url() ?>assets/template/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
	<script src="<?= base_url() ?>assets/template/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
	<script src="<?= base_url() ?>assets/template/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
	<script src="<?= base_url() ?>assets/template/plugins/jszip/jszip.min.js"></script>
	<script src="<?= base_url() ?>assets/template/plugins/pdfmake/pdfmake.min.js"></script>
	<script src="<?= base_url() ?>assets/template/plugins/pdfmake/vfs_fonts.js"></script>
	<script src="<?= base_url() ?>assets/template/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
	<script src="<?= base_url() ?>assets/template/plugins/datatables-buttons/js/buttons.print.min.js"></script>
	<script src="<?= base_url() ?>assets/template/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
	<!-- AdminLTE App -->
	<script src="<?= base_url() ?>assets/template/dist/js/adminlte.min.js"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="<?= base_url() ?>assets/template/dist/js/demo.js"></script>
	<script src="<?= base_url() ?>assets/template/dist/js/demo.js"></script>
	<!-- Page specific script -->
	<script>
		$(function() {
			$("#example1").DataTable({
				"responsive": true,
				"lengthChange": true,
				"autoWidth": false,
				"buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
			}).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
			$('#example2').DataTable({
				"paging": true,
				"lengthChange": true,
				"searching": true,
				"ordering": true,
				"info": true,
				"autoWidth": false,
				"responsive": true,
			});
		});
	</script>
</body>

</html>
