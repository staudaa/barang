<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
	<!-- Google Font: Source Sans Pro -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?= base_url('assets/template') ?>/plugins/fontawesome-free/css/all.min.css">

	<!--CSS-->
	<link rel="stylesheet" href="<?=base_url('assets')?>/ass/css/styling.css">

	<title>sToree Login</title>
</head>
</head>

<body class="hold-transition login-page">
	<div class="content">
		<div class="login border border-success">
			<div class="login-box">
				<div class="login-body">
					<div class="row d-flex align-items-center">
						<div class="col-sm-6 ">
							<div class="login-logo mb-4">
								<h1><span>s</span>Toree</h1>
							</div>
							<form action="<?= site_url('auth/process') ?>" method="post">
								<input type="text" class="form-control mb-3" placeholder="username" name="username">
								<input type="password" class="form-control mb-3" placeholder="password" name="password">
								<button type="submit" name="login" class="btn btn-block">Login</button>
							</form>
						</div>
						<div class="col-sm-6">
							<img src="<?= base_url('assets') ?>/ass/image/shopping.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bs5-lightbox@1.8.2/dist/index.bundle.min.js"></script>
</body>

</html>
