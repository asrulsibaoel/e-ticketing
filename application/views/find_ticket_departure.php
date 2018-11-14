<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="<?php echo BASE_URL('assets/css/bootstrap.min.css');?>" rel="stylesheet ">
    <link href="<?php echo BASE_URL('assets/css/style.css');?>" rel="stylesheet ">
    <link href="<?php echo BASE_URL('assets/css/footerstyle.css');?>" rel="stylesheet ">
    <title>E-Ticketing Website</title>
</head>
<body>
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
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
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
				<ul class="nav navbar-nav flex-row justify-content-between">
					<li class="dropdown order-1">
						<button type="button" id="dropdownMenu1" data-toggle="dropdown" class="btn btn-info dropdown-toggle">Login <span class="caret"></span></button>
						<ul class="dropdown-menu dropdown-menu-right mt-2">
							<li class="px-3 py-2">
								<form class="form" role="form">
										<div class="form-group">
											<input id="emailInput" placeholder="Email Address" class="form-control form-control-sm" type="text" required="">
										</div>
										<div class="form-group">
											<input id="passwordInput" placeholder="Password" class="form-control form-control-sm" type="text" required="">
										</div>
										<div class="form-group">
											<button type="submit" class="btn btn-primary btn-block">Login</button>
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
            </div>
        </div>
    </nav>
    <div class="container mt-4">
        <div class="row">
            <div class="col-sm-12">
                <h3>Malang (Abdul Rahman Saleh)<a href="#">=</a>Bali (Ngurah Rai)</h3>
                <p>Jumat, 09 November 2018 - Senin, 12 November 2018 | Dewasa | Economy </p>
            </div>
            <div class="col-md-12 border mt-2">
                <div class="col-sm-12">
                    <img src="<?php echo base_url('/assets/images/logo_maskapai/garuda.png'); ?>" alt="img-logo" class="img-fluid mt-3 mb-3 float-sm-left" width="36px" height="20px"><p class="mt-3 ml-3 float-sm-left">Garuda Indonesia</p> 
                </div>
                <br>
                <div class=" col-12 mt-4">
                    <div class="col-sm-3 float-right mt-1">
                        <button class="btn btn-info justify-content-center float-right">Pilih Pergi</button>
                    </div>
                    <div class="col-sm-3 float-right mt-2">
                        <p>Rp.850.000,00/Org</p>&nbsp;
                    </div>
                    <div class="col-sm-3 float-right mt-2">
                        <p>1 jam 5 mnt</p>
                    </div>
                    <div class="col-sm-3 float-left">
                        <p>14.15 (Malang) 16.20 (Bali)</p>
                    </div>
                </div>
            </div>
            <div class="col-md-12 border mt-2">
                <div class="col-sm-12">
                    <img src="<?php echo base_url('/assets/images/logo_maskapai/garuda.png'); ?>" alt="img-logo" class="img-fluid mt-3 mb-3 float-sm-left" width="36px" height="20px"><p class="mt-3 ml-3 float-sm-left">Garuda Indonesia</p> 
                </div>
                <br>
                <div class=" col-12 mt-4">
                    <div class="col-sm-3 float-right mt-1">
                        <button class="btn btn-info justify-content-center float-right">Pilih Pergi</button>
                    </div>
                    <div class="col-sm-3 float-right mt-2">
                        <p>Rp.850.000,00/Org</p>&nbsp;
                    </div>
                    <div class="col-sm-3 float-right mt-2">
                        <p>1 jam 5 mnt</p>
                    </div>
                    <div class="col-sm-3 float-left">
                        <p>14.15 (Malang) 16.20 (Bali)</p>
                    </div>
                </div>
            </div>
            <div class="col-md-12 border mt-2">
                <div class="col-sm-12">
                    <img src="<?php echo base_url('/assets/images/logo_maskapai/garuda.png'); ?>" alt="img-logo" class="img-fluid mt-3 mb-3 float-sm-left" width="36px" height="20px"><p class="mt-3 ml-3 float-sm-left">Garuda Indonesia</p> 
                </div>
                <br>
                <div class=" col-12 mt-4">
                    <div class="col-sm-3 float-right mt-1">
                        <button class="btn btn-info justify-content-center float-right">Pilih Pergi</button>
                    </div>
                    <div class="col-sm-3 float-right mt-2">
                        <p>Rp.850.000,00/Org</p>&nbsp;
                    </div>
                    <div class="col-sm-3 float-right mt-2">
                        <p>1 jam 5 mnt</p>
                    </div>
                    <div class="col-sm-3 float-left">
                        <p>14.15 (Malang) 16.20 (Bali)</p>
                    </div>
                </div>
            </div>
            <div class="col-md-12 border mt-2">
                <div class="col-sm-12">
                    <img src="<?php echo base_url('/assets/images/logo_maskapai/garuda.png'); ?>" alt="img-logo" class="img-fluid mt-3 mb-3 float-sm-left" width="36px" height="20px"><p class="mt-3 ml-3 float-sm-left">Garuda Indonesia</p> 
                </div>
                <br>
                <div class=" col-12 mt-4">
                    <div class="col-sm-3 float-right mt-1">
                        <button class="btn btn-info justify-content-center float-right">Pilih Pergi</button>
                    </div>
                    <div class="col-sm-3 float-right mt-2">
                        <p>Rp.850.000,00/Org</p>&nbsp;
                    </div>
                    <div class="col-sm-3 float-right mt-2">
                        <p>1 jam 5 mnt</p>
                    </div>
                    <div class="col-sm-3 float-left">
                        <p>14.15 (Malang) 16.20 (Bali)</p>
                    </div>
                </div>
            </div>
            <div class="col-md-12 border mt-2">
                <div class="col-sm-12">
                    <img src="<?php echo base_url('/assets/images/logo_maskapai/garuda.png'); ?>" alt="img-logo" class="img-fluid mt-3 mb-3 float-sm-left" width="36px" height="20px"><p class="mt-3 ml-3 float-sm-left">Garuda Indonesia</p> 
                </div>
                <br>
                <div class=" col-12 mt-4">
                    <div class="col-sm-3 float-right mt-1">
                        <button class="btn btn-info justify-content-center float-right">Pilih Pergi</button>
                    </div>
                    <div class="col-sm-3 float-right mt-2">
                        <p>Rp.850.000,00/Org</p>&nbsp;
                    </div>
                    <div class="col-sm-3 float-right mt-2">
                        <p>1 jam 5 mnt</p>
                    </div>
                    <div class="col-sm-3 float-left">
                        <p>14.15 (Malang) 16.20 (Bali)</p>
                    </div>
                </div>
            </div>
        </div>
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
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="<?php echo base_url('/assets/js/bootstrap.min.js');?>"></script>
</body>
</html>