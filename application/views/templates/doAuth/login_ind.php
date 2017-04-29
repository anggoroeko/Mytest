<html>
	<head>
		<title>
			<?php echo $title_ind;?> | E-Sosial
		</title>
	</head>
	<body>
		<form action="<?php echo (base_url()) ;?>doAuth/validate" method="POST">
			<div>
				<label class="lbusername"> Nama Pengguna </label>
				<div>
					<input type="text" name="tx_username" placeholder="Username">	
				</div>
				
				<label class="lbpassword"> Kata Kunci </label>
				<div>
					<input type="text" name="tx_password" placeholder="Password">	
				</div>
				<div>
					<input type="submit" value="Login User">
				</div>
				<div>
					<input type="button" name="btlang" id="idBtLang" value="English Language">
				</div>
			</div>
		</form>
	</body>
</html>