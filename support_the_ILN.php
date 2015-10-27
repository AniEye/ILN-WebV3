<!DOCTYPE html>

<html>
	<head>
		<title>ILN HomePage</title>
		<meta charset="utf-8">	
		<!-- Bootstrap and JQuery -->
		<link rel="stylesheet" href="css/bootstrap.min.css">			
		<script src="js/jquery-1.11.3.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		
		<link rel="stylesheet" href="css/header.css">
		<script src="js/header.js"></script>
		
		<link rel="stylesheet" href="css/footer.css">
	</head>
	<body>
		
		<?php include "global/header.php"; ?>
		
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-offset-3 col-md-6">
					<?php include "content/c_support_the_iln.php"; ?>
				</div>
				<div class="col-md-3">
					<?php include "right_column/rc_support_the_iln.php"; ?>
				</div>
			</div>
		</div>
		
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12 footer">
					<?php include "global/footer.php"; ?>
				</div>
			</div>
		</div>
		
	</body>
</html>