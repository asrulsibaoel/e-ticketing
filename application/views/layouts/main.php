<!DOCTYPE html>
<html lang="en">
<head>
	<title>E-Ticketing - <?php echo $title;?></title>

	<meta name="description" content="overview &amp; stats" />

	<!-- bootstrap & fontawesome -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css" />
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css" />
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/footerstyle.css" />
	<!-- page specific plugin styles -->
</head>
 
<body class="no-skin">
<div id="navbar" class="navbar navbar-default">
</div>

<div class="page-content">
   
<div class="row">
	<div class="col-xs-12">
					<!-- PAGE CONTENT BEGINS -->
									<?php echo $contents;?>
					<!-- PAGE CONTENT ENDS -->
	</div><!-- /.col -->
</div><!-- /.row -->
</div><!-- /.page-content -->
</div>
</div><!-- /.main-content -->

<div class="footer">
<div class="footer-inner">
<div class="footer-content">
<span class="bigger-120">
	Copyright © MHS Gak Profesional.
</span>
</div>
</div>
</div>

<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
</a>
</div><!-- /.main-container -->
 
<!-- basic scripts -->
<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstraip.bundle.min.js"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/js/style.js"></script>
</body>
</html>