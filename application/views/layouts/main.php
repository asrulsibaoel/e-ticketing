<?php
$session = (empty($this->session->userdata('username'))) ? null : $this->session->userdata('username');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>E-Ticketing - <?php echo $title;?></title>

	<meta name="description" content="overview &amp; stats" />

	<!-- bootstrap & fontawesome -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/user_assets/css/bootstrap.min.css" />
	<link rel="stylesheet" href="<?php echo base_url();?>assets/user_assets/css/style.css" />
	<!-- page specific plugin styles -->
</head>
 
<body class="no-skin">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<div class="container">
		<a class="navbar-brand" href="#">
			<img src="<?php echo base_url('/assets/images/bootstrap-solid.svg'); ?>" width="30" height="30" class="d-inline-block align-top" alt="">
			E-Ticketing
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item active">
					<a class="nav-link" href="<?php echo site_url('users/index') ?>">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link mr-3" href="#">About Us</a>
				</li>
				<li class="nav-item">
					<a class="nav-link mr-3" href="#">Help Center</a>
				</li>
				<li class="nav-item">
					<a class="nav-link mr-3" href="#">Contact Us</a>
				</li>
			</ul>
			<?php
				if($session == true){ // ini ngapaaa yak?? d atas variable $session tak liat tadi d set username, kenapa cek nya boolean?
					//gpp lah sementara sing penting jalan disik. tp sbener e bukan best practice.
				?>
				<div class="dropdown">
					<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<?php echo $session; ?>
					</button>
					<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
						<a class="dropdown-item" href="<?php echo site_url('users/editProfile') ?>">Edit Profile</a>
						<a class="dropdown-item" href="<?php echo site_url('users/logout') ?>">Logout</a>
					</div>
				</div>
				<ul class="navbar-nav">
						<li class="nav-item"></li>
				</ul>
				<?php }else{ ?>
				<ul class="nav navbar-nav flex-row justify-content-between">
					<li class="dropdown order-1">
						<button type="button" id="dropdownMenu1" data-toggle="dropdown" class="btn btn-info dropdown-toggle">Login <span class="caret"></span></button>
						<ul class="dropdown-menu dropdown-menu-right mt-2">
							<li class="px-3 py-2">
								<form class="form" action="users/validasi" method="post">
										<div class="form-group">
											<input name="username" placeholder="Email Address" class="form-control form-control-sm" type="text" required="">
										</div>
										<div class="form-group">
											<input name="password" placeholder="Password" class="form-control form-control-sm" type="password" required="">
										</div>
										<div class="form-group">
											<input type="submit" class="btn btn-primary btn-block" value="Login">
										</div>
										<div class="form-group text-center">
											<small><a href="#" data-toggle="modal" data-target="#modalPassword">Forgot password?</a></small>
										</div>
								</form>
							</li>
						</ul>
					</li>
				</ul>
				<ul class="nav navbar-nav flex-row justify-content-between ml-2">
					<li class="dropdown order-1">
						<button type="button" id="dropdownMenu2" data-toggle="dropdown" class="btn btn-info dropdown-toggle">Register <span class="caret"></span></button>
						<ul class="dropdown-menu dropdown-menu-right mt-2">
							<li class="px-3 py-2">
								<form class="form" role="form">
										<div class="form-group">
											<h5>Register a New Account</h5>
										</div>
										<div class="form-group">
											<input id="nameInput" placeholder="Name" class="form-control form-control-sm" type="text" required="">
										</div>
										<div class="form-group">
											<input id="phoneInput" placeholder="Phone Number" class="form-control form-control-sm" type="text" required="">
										</div>
										<div class="form-group">
											<input id="emailInput" placeholder="Email Address" class="form-control form-control-sm" type="text" required="">
										</div>
										<div class="form-group">
											<input id="passwordInput" placeholder="Password" class="form-control form-control-sm" type="text" required="">
										</div>
										<div class="form-group">
											<button type="submit" class="btn btn-primary btn-block">Get Started</button>
										</div>
								</form>
							</li>
						</ul>
					</li>
            	</ul>
			<?php }?>	
		</div>
	</div>
</nav>
<div>
	<?php echo $contents;?>
</div>
<section id="footer" class="mt-3">
		<div class="container">
			<div class="row text-center text-xs-center text-sm-left text-md-left">
				<div class="col-xs-12 col-sm-3 col-md-3">
					<h4>E-Ticketing</h4 >
					<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam sapiente, sint saepe, nihil minima, est sit ut quam repellat excepturi aspernatur enim voluptate libero. Dolore deleniti recusandae quis id similique?</p>
				</div>
				<div class="col-xs-12 col-sm-3 col-md-3">
					<h5>Company</h5>
					<ul class="list-unstyled quick-links">
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Tentang Perusahaan</a></li>
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Pusat Bantuan</a></li>
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Hubungi Kami</a></li>
					</ul>
				</div>
				<div class="col-xs-12 col-sm-3 col-md-3">
					<h5>Product</h5>
					<ul class="list-unstyled quick-links">
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Pesawat</a></li>
					</ul>
				</div>
				<div class="col-xs-12 col-sm-3 col-md-3">
					<h5>Others</h5>
					<ul class="list-unstyled quick-links">
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Syarat & Ketentuan</a></li>
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Kebijakan & Privasi</a></li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
					<ul class="list-unstyled list-inline social text-center">
						<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-facebook"></i></a></li>
						<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-twitter"></i></a></li>
						<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-instagram"></i></a></li>
						<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-google-plus"></i></a></li>
						<li class="list-inline-item"><a href="javascript:void();" target="_blank"><i class="fa fa-envelope"></i></a></li>
					</ul>
				</div>
				</hr>
			</div>	
		</div>
</section>
 
<!-- basic scripts -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="<?php echo base_url();?>assets/user_assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/user_assets/js/style.js"></script>
</body>
</html>