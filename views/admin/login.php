<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SISTEM INFORMASI AKADEMIK</title>
 
  <link href="<?php echo url ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo url ?>assets/css/sb-admin.css" rel="stylesheet">
</head>

<body style="background-color: #dfe3ea">
	<div class="container">
		<div class="card card-login mx-auto mt-5 shadow">
			<div class="card-header text-white" style="background-color: #547dbb">
				Login administration
			</div>
				<div class="card-body">
					<form method="POST" action="<?php echo url ?>admin/login">
						<div class="form-group">
						  <label for="username">Username</label>
						  <input class="form-control" type="text" placeholder="Username" name="username" required>
						</div>

						<div class="form-group">
						  <label for="password">Password</label>
						  <input class="form-control" type="password" placeholder="Password" name="password" required>
						</div>

						<center>
						  <input type="submit" name="login" value="Login" class="btn btn-md text-white" style="background-color: #547dbb;">
						</center>
					</form>
				</div>
      </div>
    </div>

    <script src="<?php echo URL ?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo URL ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
