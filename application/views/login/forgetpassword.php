<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	<title>Mashi Fashion</title>
	<link href="<?php echo base_url();?>assets/css/styles.css" rel="stylesheet" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
</head>
<body class="bg-primary">
<div id="layoutAuthentication">
	<div id="layoutAuthentication_content">
		<main>
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-4">
						<div class="card shadow-lg border-0 rounded-lg mt-5">
							<div class="card-header"><h3 class="text-center font-weight-light m-4">Forget password</h3></div>
							<div class="card-body">
								<form id="login" action="<?php echo base_url('login/Login/login_user');?>" method="post">
									<div class="form-group"><label class="small mb-1" for="inputEmailAddress">Email</label><input class="form-control" id="user_email" name="user_email" type="email" placeholder="Enter email address" /></div>
									<div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0"><button class="btn btn-block btn-primary" type="submit" >Send Email</button></div>
								</form>
							</div>
							<div class="card-footer text-center m-2">
								<small>Copyright © Mashi Fashion 2020</small>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>
	</div>
	<div id="layoutAuthentication_footer">
		<footer class="py-4 bg-light mt-auto">
			<div class="container-fluid">
				<div class="d-flex align-items-center justify-content-between small">
				</div>
			</div>
		</footer>
	</div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="<?php echo base_url();?>assets/js/scripts.js"></script>
</body>
</html>
