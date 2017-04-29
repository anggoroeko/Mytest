<html>
	<head>
		<title>
			<?php echo $title_eng;?> | E-Social
		</title>

		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Call CSS -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap_login.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/bootstrap/css/font-awesome.min.css">
		<!-- <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css"> -->

		<!-- End Call CSS -->

		<!-- Call JS -->
		<script type="text/javascript" src="<?php echo base_url();?>assets/JS/jquery-3.2.1/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/JS/jquery-3.2.1/jquery.js"></script>

		<script type="text/javascript" src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js"> </script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/JS/login_ind.js" ></script>
		<!-- End Call JS -->
	</head>
	<body>
		<div class="container">
			<div class="col-sm-6 col-sm-offset-3">
				<div class="panel panel-login">
					<div class="panel-body">

						<form id="form-login" class="form-horizontal" action="<?php echo site_url();?>#" method="POST">
							<h2> URWISE </h2>
							<div class="form-group">
								<!-- <label class="control-label col-sm-4"> Username </label> -->
						
								<div class="col-sm-12">
									<input class="form-control" type="text" name="tx_username" placeholder="Username">
								</div>
							</div>

							<div class="form-group">
								<!-- <label class="control-label col-sm-4"> Password </label> -->
								<div class="col-sm-12">
									<input class="form-control" type="Password" name="tx_password" placeholder="Password">
								</div>
							</div>

							<div class="col-sm-6 checkbox">
                    			<input id="checkbox1" type="checkbox" name="remember">
                    			<label for="checkbox1">Remember Password</label>
                  			</div>
                  			<div class="form-group"> 
                  				<div class="col-sm-4">
                  					<div class="loss_pass">
                  						<a href="#"> Lost Password? </a> 
                  					</div>
                  				</div>
                  			</div>
                  			<div class="form-group text-center">
								<input class="btn btn-info btn-log" type="submit" value="LOG IN">
							</div>

						</form>

						<form style="display: none;" id="form-regis" class="form-horizontal" action="<?php echo site_url();?>#" method="POST">
							<h2> URWISE REGISTRATION </h2>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" type="text" name="tx_username" placeholder="Username">
								</div>
							</div>

							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" type="text" name="tx_email" placeholder="Your E-Mail">
								</div>
							</div>

							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" type="Password" name="tx_password" placeholder="Password">
								</div>
							</div>

							<div class="form-group text-center">
								<input class="btn btn-info btn-log" type="submit" value="REGISTER">
							</div>
						</form>
					</div>
						
							<div class="text-center log-style">
								<a href="#" id="show-login"> 
									LOGIN
								</a>
								<label>
								|
								</label>
								<a href="#" id="show-regis"> 
										REGISTER
								</a>
							
						</div>
					</div>
				</div>
			</div>
		<footer class="text-center footer"> Urwise © 2017 </footer>
	</body>
</html>