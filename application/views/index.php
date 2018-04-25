<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- Theme Color -->
    <meta name="theme-color" content="#f2f3f5">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>DIT</title>
	<!-- Bootstrap -->
	<link href="<?= base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?= base_url(); ?>assets/css/style.css" rel="stylesheet">
	 <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
	<!-- Site Header start -->
	<header>
		<div class="container">
			<nav>
				<!-- brand logo Start-->
				<div class="logo">
					<a href="<?php echo base_url(); ?>">
						<img src="<?php echo base_url(); ?>assets/images/logo.png" alt="">
					</a>
				</div>
				<!-- brand logo End-->
			</nav>
		</div>
	</header>
	<!-- Site Header end -->

	<!-- Join our team section start -->
	<div class="join-our-team-section">
		<div class="container">
			<h2>Join our Team!</h2>
			<p>We’re always adding to our clever staffing roster! If you pride yourself in interacting with people and the idea of working for a superb staffing agency entices you, please answer our essential questionnaire.</p>
		</div>
	</div>
	<!-- Join our team section end -->

	<!-- Basic Information section start -->
	<div class="basic-info-section">
		<div class="container">
			<h3>Basic Information</h3>
			<?php if ($this->session->flashdata('email_success')) { ?>
			    <div class="alert alert-success"> <?= $this->session->flashdata('email_success') ?> </div>
			<?php }
			else if($this->session->flashdata('error')) { ?>
			    <div class="alert alert-error"> <?= $this->session->flashdata('error') ?> </div>			
			<?php } ?>

			<?php echo validation_errors(); ?>
			<div class="basic-info-form">
				<?= form_open('users/create',array('id' => 'submit_form')); ?>
				<form>
					<div class="row">
						<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
							<div class="form-group">
								<label>Name</label>
								<input type="text" name="name" class="form-control">
							</div>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
							<div class="form-group">
								<label>Phone</label>
								<input type="text" name="phone" class="form-control">
							</div>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
							<div class="form-group">
								<label>E-mail</label>
								<input type="text" name="email" class="form-control">
							</div>
						</div>
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="form-group">
								<div class="submit-btn">
									<div class="submit-icon"></div>
									<input type="submit" class="submit" value="Apply">
								</div>
							</div>
						</div>
					</div>
				<?= form_close() ?>
			</div>
		</div>
	</div>
	<!-- Basic Information section end -->

	<!-- Support section start -->
	<div class="support-wrap">
		<div class="container">
			<a href="mailto:support@ditcanada.com">support@ditcanada.com</a>
		</div>
	</div>
	<!-- Support section end -->

	<!-- Footer start -->
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					All rights reserved. &copy; 2018 Digital Ink Technologies Inc.
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="text-right">
						Design by <a target="_blank" href="https://www.ditcanada.com/">Digital Ink Technologies</a>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer end -->
	
	<!-- jQuery -->
	<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/jquery.validate.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/settings.js"></script>
</body>
</html>