<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE-edge" />
	<meta name="viewport" content="width=device-width" />
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Admin Home</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('tool/css/bootstrap.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('tool/css/style.css'); ?>"> 
	
	<script type="text/javascript" src="<?= base_url('tool/js/bootstrap.js'); ?>"></script>
	<script type="text/javascript" src="<?= base_url('tool/js/jquery-3.2.1.min.js'); ?>"></script>
</head>
<body>
	<div class="container-fluid" style="background:blue; color: white;">
		<?php include('admin_header.php'); ?>
	</div>

	<div class="container-fluid" id="banner"><br><br><br><br><br><br><br><br><br><br>
		<div class="col-sm-6" style="background: silver; margin-left: 25%;"><br><br>
			<?= $un=$this->session->userdata('uid'); ?>
			<?= form_open('admin_login/login')?>
			<center><table class="table">
				<tr>
					<td>Enter Username</td>
					<td><?= form_input(['name'=>'un','placeholder'=>'Enter your Username', 'class'=>'form-control','value'=>set_value('un')]); ?></td>
					<td><?= form_error('un'); ?></td>
				</tr>
				<tr>
					<td>Enter Password</td>
					<td><?= form_password(['name'=>'pw','placeholder'=>'Enter your Password', 'class'=>'form-control','value'=>set_value('pw')]); ?></td>
					<td><?= form_error('pw'); ?></td>
				</tr>
				<tr>
					<td><?= form_submit(['name'=>'sub','value'=>'Login','class'=>'btn btn-primary']) ?></td>
				</tr>
			</table></center><br><br>

		</div>
	</div>

	<div class="container-fluid" style="background:blue; color: white;">
		<h2 align="center">Best Food That You Deserve</h2>
	</div>

</body>
</html>